<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/materi.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/sidebar_script.js"></script>
</head>

<body>
    <?php include 'sidebar.php'?>
    <div id="main">
        <a id="backButton" href="/<?= $course ?>">&#8678</a>
        <div class="menu">
            <button class="openbtn" onclick="openNav()">☰</button>
            <span class="haiyu">HAiYU</span>
        </div>
        <br><br>
        <div class="Content">
            <h1><?= $course; ?></h1>
            <h2><?= $chapter; ?> - <span style="color:orange"><?= $materi; ?></span></h2>
            <div class="isi">
                <p><?= $isi; ?></p>
                <br>
                <div class="next">
                    <img src="../images/next.png" alt="->" onclick="location.href = '<?= $next; ?>'">
                    <a href="<?= $next; ?>">Next chapter</a><br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>