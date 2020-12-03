<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Mid Test</title>

    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/midTest.css">
    <script src="../js/midTest_score.js" defer></script>

</head>

<body>
    <a id="backButton" href="/<?= $mapel ?>">&#8678</a>
    <h1 id="title"> <?= $title ?> - Mid Test</h1>

    <?php
    if (session()->get('level') == 1) {
        echo "
    <div id='results'>
    Your Score : $score out of 5
    </div>";
    }
    ?>

    <h2>Correct Answers</h2>
    <br>
    <div id="quiz"></div>


</body>

</html>