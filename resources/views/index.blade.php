<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rock Paper Scissors</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    h1 {
        margin-top: 50px;
    }
    .choices {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .choice {
        margin: 0 20px;
        cursor: pointer;
    }
    .result {
        margin-top: 20px;
    }
</style>
</head>
<body>

<h1>Rock Paper Scissors</h1>

<div class="choices">
    <img class="choice" src="https://cdn-icons-png.flaticon.com/512/2683/2683623.png" alt="Rock" width="100" height="100">
    <img class="choice" src="https://cdn-icons-png.flaticon.com/512/2920/2920768.png" alt="Paper" width="100" height="100">
    <img class="choice" src="https://cdn-icons-png.flaticon.com/512/4245/4245379.png" alt="Scissors" width="100" height="100">
</div>

<div class="result">
    <h2>Result:</h2>
    <p id="resultText"></p>
</div>

<script>
    const choices = document.querySelectorAll('.choice');
    const resultText = document.getElementById('resultText');

    choices.forEach(choice => {
        choice.addEventListener('click', () => {
            const userChoice = choice.alt.toLowerCase();
            const computerChoice = getComputerChoice();
            const result = determineWinner(userChoice, computerChoice);

            resultText.textContent = `You chose ${userChoice}. Computer chose ${computerChoice}. ${result}`;
        });
    });

    function getComputerChoice() {
        const random = Math.random();
        if (random < 0.34) return 'rock';
        if (random < 0.67) return 'paper';
        return 'scissors';
    }

    function determineWinner(user, computer) {
        if (user === computer) return "It's a tie!";
        if ((user === 'rock' && computer === 'scissors') ||
            (user === 'scissors' && computer === 'paper') ||
            (user === 'paper' && computer === 'rock')) {
            return 'You win!';
        }
        return 'You lose!';
    }
</script>

</body>
</html>
