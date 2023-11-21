import './styles/daily.css';

// console.log("This thing is working");

// assets/js/wordle.js

document.addEventListener('DOMContentLoaded', function () {
  const wordToGuess = "apple";
  let guessedLetters = [];

  function displayWord() {
      const display = wordToGuess
          .split('')
          .map(letter => guessedLetters.includes(letter) ? letter : '_')
          .join(' ');
      document.getElementById('word-display').innerText = display;
  }

  function submitGuess() {
      const guessInput = document.getElementById('guess-input');
      const guess = guessInput.value.toLowerCase();


      if (guess.length === 1 && guess.match(/[a-z]/i)) {
          if (!guessedLetters.includes(guess)) {
              guessedLetters.push(guess);
              displayWord();

              if (wordToGuess.split('').every(letter => guessedLetters.includes(letter))) {
                  document.getElementById('result').innerText = 'Congratulations! You guessed the word!';
              }
          } else {
              document.getElementById('result').innerText = 'You already guessed that letter. Try again.';
          }
      } else {
          document.getElementById('result').innerText = 'Please enter a single alphabetical letter.';
      }

      guessInput.value = '';

      document.getElementById('guessed-letters').innerText = `Guessed Letters: ${guessedLetters.join(', ')}`;
  }

  // Attach event listener to the button
  document.getElementById('submit-button').addEventListener('click', submitGuess);

  // Initial display of the word
  displayWord();
});
