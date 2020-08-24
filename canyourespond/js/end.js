const username = document.getElementById("username");
const saveScoreBtn = document.getElementById("saveScoreBtn");
const finalScore = document.getElementById("finalScore");
const mostRecentScore = localStorage.getItem('mostRecentScore');

var finalScoreInt = localStorage.getItem('mostRecentScore');

finalScore.innerText = mostRecentScore;

if (finalScoreInt >= 80) {
    // block of code to be executed if the condition is true
    document.getElementById("flag").innerHTML = "Congrats! Here's what you are looking for: flag{sm4rty}!";
  } 
  else {
    // block of code to be executed if the condition is false
    document.getElementById("flag").innerHTML = "Your score is too low.."
  }
  
username.addEventListener("keyup", () => {
    saveScoreBtn.disabled = !username.value;
});
