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

console.log("This thing is working");

document.addEventListener('DOMContentLoaded', function () {
    let decimalCounter = 0;
  
    document.getElementById('incrementButton').addEventListener('click', function () {
      decimalCounter++;
      updateCounter();
    });
  
    function updateCounter() {
      const hexValue = decimalCounter.toString(16).toUpperCase();
      document.getElementById('counter').innerText = hexValue;
    }
  });
  