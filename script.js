function submitAnswer() {
    let input = document.getElementById("answerInput").value;
    console.log("Input:", input);
    fetch("check_answer.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "answer=" + encodeURIComponent(input)
    }) 
    .then(response => response.json())
    .then(data => {
        const result = document.getElementById("result");
        if (data.correct) {
            result.textContent = `Correct! +${data.points} points`;
        } else {
            result.textContent = "Sorry, that is not on the board.";
        }
        document.getElementById("score").textContent = data.score;
        document.getElementById("answerInput").value = "";
    });
}