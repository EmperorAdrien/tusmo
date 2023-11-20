/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/daily.css';

// document.addEventListener('DOMContentLoaded', function () {
//     const wordToGuess = "apple";
//     let guessedLetters = [];

//     function displayWord() {
//         const display = wordToGuess
//             .split('')
//             .map(letter => (guessedLetters.includes(letter) ? letter : '_'))
//             .join(' ');
//         document.getElementById('word-display').innerText = display;
//     }

//     function submitGuess() {
//         const guessInput = document.getElementById('guess-input');
//         const guess = guessInput.value.toLowerCase();

//         if (!guessedLetters.includes(guess)) {
//             guessedLetters.push(guess);
//             displayWord();

//             if (wordToGuess.split('').every(letter => guessedLetters.includes(letter))) {
//                 document.getElementById('result').innerText = 'Congratulations! You guessed the word!';
//             }
//         } else {
//             document.getElementById('result').innerText = 'You already guessed that letter. Try again.';
//         }

//         guessInput.value = '';
//     }

//     document.getElementById('submit-button').addEventListener('click', submitGuess);
// });
