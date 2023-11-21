import './styles/daily.css';

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

  function updateGuessedLettersDisplay() {
      const guessedLettersDisplay = document.getElementById('guessed-letters');
      const alphabet = 'abcdefghijklmnopqrstuvwxyz';

      // Create an array of alphabet letters with guessed letters highlighted
      const alphabetWithHighlights = Array.from(alphabet).map(letter => {
          return guessedLetters.includes(letter) ? `<span class="guessed">${letter}</span>` : letter;
      });

      guessedLettersDisplay.innerHTML = `Guessed Letters: ${alphabetWithHighlights.join(', ')}`;
  }

  function submitGuess() {
      const guessInput = document.getElementById('guess-input');
      const guess = guessInput.value.toLowerCase();

      if (guess.length === 1 && guess.match(/[a-z]/i)) {
          if (!guessedLetters.includes(guess)) {
              guessedLetters.push(guess);
              displayWord();
              updateGuessedLettersDisplay();

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
  }

  // Attach event listener to the button
  document.getElementById('submit-button').addEventListener('click', submitGuess);

  // Initial display of the word and guessed letters
  displayWord();
  updateGuessedLettersDisplay();
});
