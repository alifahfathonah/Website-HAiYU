<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/homepage_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/homepage_script.js"></script>
    <title>HAiYU</title>
</head>

<body>
    <div id="Sidebar" class="sidebar">
        <div class="top-nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
            <span class="haiyu-sidebar">HAiYU</span>
            <div class="search-container">
                <form name="Searchbar">
                    <input type="text" placeholder="Search.." name="search" class="search">
                </form>
            </div>
        </div>
        <span><img src="../images/avatar.png" alt="" id="avatar"></span>
        <div class="user-info">
            <p id="welcome">Welcome! <br> <?= session('username') ?></p>
        </div>
        <div class="navUser">
            <div class="home">
                <img src="../images/homepage.png" alt="">
                <a href="/">Home</a>
            </div>
            <div class="subject">
                <img src="../images/language.png" alt="">
                <a href="/user/subject">Subject</a>
            </div>
            <div class="profile">
                <img src="../images/user.png" alt="">
                <a href="#">Profile</a>
            </div>
            <div class="aboutUser">
                <img src="../images/about.png" alt="" style="width: 32px;height: 32px">
                <a href="about">About</a>
            </div>
        </div>
        <div class="bottom-nav">
            <!-- <a href="#">Settings</a> -->
            <a href="/user/logout">Log out</a>
        </div>
    </div>
    <div id="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="../images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
        <img src="../images/bg4.svg" alt="background" class="bg" style="top: 20%; left: 49%">
        <div class="landing-text">
            <h2>Hello <?= session('username') ?>!</h2>
            <h1>Learn your Hardskill <br> for The Great Future</h1>
        </div>
        <div class="btn-container">
            <button class="find-it-btn"><a href="/user/subject">Find it</a></button>
            <span class="tab">
                <!-- <button class="sign-up-btn"><a href="#">Start now!</a></button> -->
            </span>
        </div>
    </div>
    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>