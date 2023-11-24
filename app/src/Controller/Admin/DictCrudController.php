<?php

namespace App\Controller\Admin;

use App\Entity\Dict;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\BatchActionDto;
use Faker\Factory as FakerFactory;
use Psr\Log\LoggerInterface;

class DictCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dict::class;
    }

    public function configureActions(Actions $actions): Actions
    {

        $populate = Action::new('populateDict', 'Add 20 words', 'fa fa-check')
            ->linkToCrudAction('populateDict')
            ->addCssClass('btn btn-primary')
            ->createAsGlobalAction();
        $randomizeDate = Action::new('randomizeDate', 'Randomize date')
            ->linkToCrudAction('randomizeDate')
            ->addCssClass('btn btn-primary')
            ->setIcon('fa fa-user-check')
            ->createAsGlobalAction();

        return $actions
            // ->add(Crud::PAGE_INDEX, Action::DETAIL)
            -> add(Crud::PAGE_INDEX, $populate)
            -> add(Crud::PAGE_INDEX, $randomizeDate)
        ;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */

    public function flush(EntityManagerInterface $entityManager)
    {   
        $entityManager->createQueryBuilder()
            ->delete(Dict::class, 'd')
            ->getQuery()
            ->execute();
        $entityManager->flush();
    }

    public function randomizeDate(AdminContext $context,EntityManagerInterface $entityManager,LoggerInterface $logger)
    {
        // $classname = $batchActionDto->getEntityIds();
        // $entityManager = $this->container->get('doctrine')->getManagerForClass($classname);
        
        $dicts = $entityManager->getRepository(Dict::class)->findAll();
        $faker = FakerFactory::create();

        foreach ($dicts as $dict) {
            $logger->info($dict->getDate()->format('Y-m-d H:i:s'));
            while (true) {
                $date = $faker->dateTimeBetween('now', '+1 years');
                $temp = $entityManager->getRepository(Dict::class)->findOneBy(['date' => $date]);
                if (!$temp) {
                    
                    $dict->setDate($date);
                    $temp = null;
                    break;
                }
            }
            //$dict->setDate($this->randomDate());
            $entityManager->persist($dict);
        }
        $entityManager->flush();
        return $this->redirect($context->getReferrer());
    }
   

    public function populateDict(AdminContext $context,EntityManagerInterface $entityManager)
    {
        // $entityManager = $this->getDoctrine()->getManager();
        $dict = $context->getEntity()->getInstance();
        for ($i = 0; $i < 20; $i++) {
            // usleep(1000);
            $dictionnary = new Dict();
            $size = rand(4,10);
            $response = file_get_contents('https://random-word-api.herokuapp.com/word?length='.$size.'&number=1');

            $response = json_decode($response);           
            
           
            $word = $response[0];
            $dictionnary->setWord($word);
            //$dictionnary->setSize($size);
            $dictionnary->setDate(new \DateTime());
            $dictionnary->setActive(true);
            $entityManager->persist($dictionnary);
        }

        $entityManager->flush();
        

        

        

       

        return $this->redirect($context->getReferrer());
    }
}
