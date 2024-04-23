<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock-Paper-Scissors Result</title>
</head>
<body>
    <h1>Rock-Paper-Scissors Result</h1>
    <p>You chose: {{ $userChoice }}</p>
    <p>Computer chose: {{ $computerChoice }}</p>
    <p>Result: {{ ucfirst($result) }}</p>

    <a href="{{ route('home') }}">Play Again</a>
</body>
</html>
