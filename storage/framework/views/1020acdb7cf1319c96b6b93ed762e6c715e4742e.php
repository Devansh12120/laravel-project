<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

body {
  /* Background pattern from Subtle Patterns */
  background: url('img/ignasi_pattern_s.png');
  font-family: "Open Sans", sans-serif;
  /*one Em roughly ten pixels (16 x 62.5% = 10)*/
  font-size: 62.5%;
  letter-spacing: 1.5px;
  margin: 0;
  text-align: center;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 0.5em;
}

ul > li {
  list-style: none;
}

.card,
.reset-btn {
  cursor: pointer;
}

.btn {
  border-radius: 1em;
  border: none;
  color: #fff;
  box-shadow: 5px 2px 20px 0 rgba(46, 61, 73, 0.5);
  padding: 0.8em;
}
/*----------------------------------  
Header
------------------------------------*/

h1 {
  font-size: 3em;
  font-weight: 400;
}

h2 {
  font-size: 2.5em;
  font-weight: 600;
}

p {
  font-size: 1.6em;
}

h3 {
  font-weight: 400;
}
/*----------------------------------  
Section - Score Panel
------------------------------------*/

.score-panel {
  font-size: 1.4em;
  padding: 1em 0 2em;
}

.star-rating > li {
  display: inline-block;
  padding: 0.5em;
}

.moves-counter {
  padding: 0.5em;
}

.reset-btn {
  background: #000;
}

.timer-container {
  background: #fff;
  border-radius: 0.5em;
  color: #000;
  margin: 0.5em;
  padding: 0.5em;
}

.timer {
  font-size: 1em;
}
/*----------------------------------  
Section - Modal
------------------------------------*/

/* Modal (background) */
.modal {
  /*Hidden by default */
  display: none;
  position: fixed;
  z-index: 99;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  /* Fallback color */
  background-color: rgb(46, 61, 73);
  /* With opacity */
  background-color: rgba(46, 61, 73, 0.6);
}

/* Modal Content/Box */
.modal-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #fff;
  /* 5% from the top and centered */
  margin: 5% auto;
  border: 0.8em solid #fc4;
  padding-right: 2em;
  width: 80%;
}

/* The Close Button */
.close {
  align-self: flex-end;
  color: #28e;
  font-size: 5em;
}

.close:hover,
.close:focus {
  color: #5cf;
  text-decoration: none;
  cursor: pointer;
}

/* Modal Image*/
.modal-img {
  display: inline-block;
  margin: 1em 0 1em;
  width: 20em;
}

p.stats {
  font-weight: 600;
}

p.stats:last-child {
  margin-bottom: 1em;
}

.play-again-btn {
  background: #28e;
  margin-bottom: 1em;
}
/*----------------------------------  
Deck of Cards
------------------------------------*/
/*Mobile first responsivness*/
.deck {
  background: linear-gradient(to bottom, #5cf, #28e);
  border-radius: 1.5em;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
  height: 35em;
  margin-bottom: 6em;
  padding: 0.5em;
  width: 35em;
}

.deck,
.card {
  box-shadow: 5px 2px 20px 0 rgba(46, 61, 73, 0.5);
}

.card {
  background: #fc4;
  border-radius: 0.5em;
  height: 7em;
  width: 7em;
}

/*
To disable the color highlight if and img is clicked
https://stackoverflow.com/questions/21107439/disable-or-change-firefoxs-element-image-highlight-color
*/
img {
  user-select: none;
  width: 6em;
}

.deck img {
  visibility: hidden;
}

.deck .card.flip {
  background: #fff;
  cursor: default;
  transform: rotateY(180deg);
  transition: transform 0.3s linear;
  pointer-events: none;
}

.flip img {
  background: #fff;
  visibility: visible;
}

.deck .card.match {
  background: #39d;
  visibility: visible;
  cursor: default;
  animation: pulse 1s;
}

.match img {
  background: #39d;
}

@keyframes  pulse {
  0% {
    transform: scale(1);
  }
  80% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}
@media  screen and (min-width: 550px) {

.deck  {
  height: 50em;
  padding: 2em;
  width: 50em;
}

.card {
  height: 10em;
  width: 10em;
}

.deck img {
  width: 9em;
}

.modal-content h2 {
  font-size: 4em;
}

.play-again-btn {
  font-size: 1.8em;
}
}

/*---------------------------------- 
Desktops
------------------------------------*/
@media  screen and (min-width: 800px) {

h1 {
  font-size: 6em;
}

p {
  font-size: 2.3em;
}

.deck  {
  height: 70em;
  width: 70em;
}

.card {
  height: 15em;
  width: 15em;
}

.deck img {
  width: 13em;
}

.reset-btn {
  font-size: 0.8em;
}

.footer {
  font-size: 1.2em;
}

.modal-content h2 {
  font-size: 5em;
}

/* Modal Image*/
.modal-img {
  width: 30em;
}

.play-again-btn {
  font-size: 2em;
}
}
</style>
<body>
    <div class="container">
        <header class="header">
          <h1>Memory Game</h1>
          <h2>FallOut Edition</h2>
        </header>
      
        <section class="score-panel">
          <h3>Score Panel</h3>
          <ul id="star-rating" class="star-rating">
            <li class="star"><i class="fa fa-star"></i></li>
            <li class="star"><i class="fa fa-star"></i></li>
            <li class="star"><i class="fa fa-star"></i></li>
          </ul>
          <span class="moves-counter">0</span> Moves
          <div class="timer-container">
            <span class="timer"><i class="fa fa-hourglass-start"></i> Timer: 00:00</span>
          </div>
          <div class="reset">
            <button class="btn reset-btn">Reset <i class="fa fa-repeat"></i></button>
          </div>
        </section>
      <!-- Modal section-->
      <!-- Modal section-->
      <!-- Modal -->
  <section class="win-game-modal">
    <div id="modal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Congratulations!</h2>
        <p>You have won the game and found all 8 pairs of cards.</p>
        <img class="modal-img" src="img/Vault-Boy-Thumb-Up.jpg" alt="Vault boy giving the thumbs up from the game fall out">
        <button class="btn play-again-btn">Play Again?</button>
      </div>
    </div>
  </section>
        <ul class="deck"></ul>
      </div>
</body>
<script>
    const deckCards = ["Agility.png", "Agility.png", "Boat.png", "Boat.png", "Citizenship.png", "Citizenship.png", "Hack.png", "Hack.png", "Nerd-Rage.png", "Nerd-Rage.png", "Nuka-Cola.png", "Nuka-Cola.png", "Robotics.png", "Robotics.png", "Shock.png", "Shock.png"];
    const deck = document.querySelector(".deck");
let opened = [];
let matched = [];
const modal = document.getElementById("modal");
const reset = document.querySelector(".reset-btn");
const playAgain = document.querySelector(".play-again-btn");
const movesCount = document.querySelector(".moves-counter");
let moves = 0;
const star = document.getElementById("star-rating").querySelectorAll(".star");
let starCount = 3;
const timeCounter = document.querySelector(".timer");
let time;
let minutes = 0;
let seconds = 0;
let timeStart = false;

function shuffle(array) {
  let currentIndex = array.length, temporaryValue, randomIndex;

  while (currentIndex !== 0) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
  }
  return array;
}
function startGame() {
  // Invoke shuffle function and store in variable
  const shuffledDeck = shuffle(deckCards); 
  // Iterate over deck of cards array
  for (let i = 0; i < shuffledDeck.length; i++) {
    // Create the <li> tags
    const liTag = document.createElement('LI');
    // Give <li> class of card
    liTag.classList.add('card');
    // Create the <img> tags
    const addImage = document.createElement("IMG");
    // Append <img> to <li>
    liTag.appendChild(addImage);
    // Set the img src path with the shuffled deck
    addImage.setAttribute("src", "img/" + shuffledDeck[i]);
    // Add an alt tag to the image
    addImage.setAttribute("alt", "image of vault boy from fallout");
    // Update the new <li> to the deck <ul>
    deck.appendChild(liTag);
  }
}

startGame();
function removeCard() {
  // As long as <ul> deck has a child node, remove it
  while (deck.hasChildNodes()) {
    deck.removeChild(deck.firstChild);
  }
}
function timer() {
  // Update the count every 1 second
  time = setInterval(function() {
    seconds++;
      if (seconds === 60) {
        minutes++;
        seconds = 0;
      }
    // Update the timer in HTML with the time it takes the user to play the game
    timeCounter.innerHTML = "<i class='fa fa-hourglass-start'></i>" + " Timer: " + minutes + " Mins " + seconds + " Secs" ;
  }, 1000);
}
function stopTime() {
  clearInterval(time);
}
function resetEverything() {
  // Stop time, reset the minutes and seconds update the time inner HTML
  stopTime();
  timeStart = false;
  seconds = 0;
  minutes = 0;
  timeCounter.innerHTML = "<i class='fa fa-hourglass-start'></i>" + " Timer: 00:00";
  // Reset star count and the add the class back to show stars again
  star[1].firstElementChild.classList.add("fa-star");
  star[2].firstElementChild.classList.add("fa-star");
  starCount = 3;
  // Reset moves count and reset its inner HTML
  moves = 0;
  movesCount.innerHTML = 0;
  // Clear both arrays that hold the opened and matched cards
  matched = [];
  opened = [];
  // Clear the deck
  removeCard();
  // Create a new deck
  startGame();
}
function movesCounter() {
  // Update the html for the moves counter
  movesCount.innerHTML ++;
  // Keep track of the number of moves for every pair checked
  moves ++;
}
function starRating() {
  if (moves === 14) {
    // First element child is the <i> within the <li>
    star[2].firstElementChild.classList.remove("fa-star");
    starCount--;
  }
  if (moves === 18) {
    star[1].firstElementChild.classList.remove("fa-star");
    starCount--;
  }
}

function compareTwo() {
  // When there are 2 cards in the opened array
  if (opened.length === 2) {
      // Disable any further mouse clicks on other cards
      document.body.style.pointerEvents = "none";
  }
  // Compare the two images src
  if (opened.length === 2 && opened[0].src === opened[1].src) {
    // If matched call match()
    match();
    // console.log("It's a Match!");
  } else if (opened.length === 2 && opened[0].src != opened[1].src) {
    // If No match call noMatch()
    noMatch();
    // console.log("NO Match!");
  }
}

function match() {
  /* Access the two cards in opened array and add
  the class of match to the imgages parent: the <li> tag
  */
  setTimeout(function() {
    opened[0].parentElement.classList.add("match");
    opened[1].parentElement.classList.add("match");
    // Push the matched cards to the matched array
    matched.push(...opened);
    // Allow for further mouse clicks on cards
    document.body.style.pointerEvents = "auto";
    // Check to see if the game has been won with all 8 pairs
    winGame();
    // Clear the opened array
    opened = [];
  }, 600);
  // Call movesCounter to increment by one
  movesCounter();
  starRating();
}
function noMatch() {
  /* After 700 miliseconds the two cards open will have
  the class of flip removed from the images parent element <li>*/
  setTimeout(function() {
    // Remove class flip on images parent element
    opened[0].parentElement.classList.remove("flip");
    opened[1].parentElement.classList.remove("flip");
    // Allow further mouse clicks on cards
    document.body.style.pointerEvents = "auto";
    // Remove the cards from opened array
    opened = [];
  }, 700);
  // Call movesCounter to increment by one
  movesCounter();
  starRating();
}

function AddStats() {
  // Access the modal content div
  const stats = document.querySelector(".modal-content");
  // Create three different paragraphs
  for (let i = 1; i <= 3; i++) {
    // Create a new Paragraph
    const statsElement = document.createElement("p");
    // Add a class to the new Paragraph
    statsElement.classList.add("stats");
    // Add the new created <p> tag to the modal content
    stats.appendChild(statsElement);
  }
  // Select all p tags with the class of stats and update the content
  let p = stats.querySelectorAll("p.stats");
      // Set the new <p> to have the content of stats (time, moves and star rating)
    p[0].innerHTML = "Time to complete: " + minutes + " Minutes and " + seconds + " Seconds";
    p[1].innerHTML = "Moves Taken: " + moves;
    p[2].innerHTML = "Your Star Rating is: " + starCount + " out of 3";
}

function displayModal() {
// Access the modal <span> element (x) that closes the modal
const modalClose = document.getElementsByClassName("close")[0];
  // When the game is won set modal to display block to show it
  modal.style.display= "block";

  // When the user clicks on <span> (x), close the modal
  modalClose.onclick = function() {
    modal.style.display = "none";
  };
// When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
}
function winGame() {
  if (matched.length === 16) {
    stopTime();
    AddStats();
    displayModal();
  }
}

deck.addEventListener("click", function(evt) {
  if (evt.target.nodeName === "LI") {
    // To console if I was clicking the correct element 
    console.log(evt.target.nodeName + " Was clicked");
    // Start the timer after the first click of one card
  // Executes the timer() function
    if (timeStart === false) {
      timeStart = true; 
      timer();
    }
    // Call flipCard() function
    flipCard();
  }

  //Flip the card and display cards img
  function flipCard() {
    // When <li> is clicked add the class .flip to show img
    evt.target.classList.add("flip");
    // Call addToOpened() function
    addToOpened();
  }
   
  //Add the fliped cards to the empty array of opened
  function addToOpened() {
    /* If the opened array has zero or one other img push another 
    img into the array so we can compare these two to be matched
    */
    if (opened.length === 0 || opened.length === 1) {
      // Push that img to opened array
      opened.push(evt.target.firstElementChild);
    }
    // Call compareTwo() function
    compareTwo();
  }
});

reset.addEventListener('click', resetEverything);

playAgain.addEventListener('click',function() {
  modal.style.display = "none";
  resetEverything();
});
</script>
</html><?php /**PATH G:\laravelproject\resources\views/card.blade.php ENDPATH**/ ?>