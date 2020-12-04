<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/materi.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/homepage_script.js"></script>
</head>

<body>
    <div id="Sidebar" class="sidebar">
        <div class="top-nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
            <span class="haiyu-sidebar">HAiYU</span>
            <div class="search-container">
                <form name="Searchbar">
                    <input type="text" placeholder="Search.." name="search">
                </form>
            </div>
        </div>
        <div class="user-disp">
            <img src="../images/img-user.png" alt="user avatar">
            <div class="user-info">
                <p>User</p>
                <p>id : xxxxxx</p>
            </div>
        </div>
        <a href="/">Home</a>
        <a href="#">Subject</a>
        <a href="#">Profile</a>
        <a href="/about">About</a>
        <div class="bottom-nav">
            <a href="#">Settings</a>
            <a href="#">Log out</a>
        </div>
    </div>
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