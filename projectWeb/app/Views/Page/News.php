<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/news.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
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
                <a href="/user/edit/<?= session('username') ?>">Profile</a>
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
        <br>
        <br>
        <br>
        <h1>Your Notifications</h1>
        <div class="notification">
            <h3><?= $title1;?></h3>
            <p><?= $content1;?></p>    
        </div><br>
        <div class="notification">
            <h3><?= $title2;?></h3>
            <p><?= $content2;?></p>    
        </div><br>
        <div class="notification">
            <h3><?= $title3;?></h3>
            <p><?= $content3;?></p>    
        </div><br>
        <div class="notification">
            <h3><?= $title4;?></h3>
            <p><?= $content4;?></p>    
        </div><br>
        <div class="notification">
            <h3><?= $title5;?></h3>
            <p><?= $content5;?></p>    
        </div>
    </div>
</body>