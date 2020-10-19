<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/homepage_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
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
        <div class="nav1">
            <div class="home">
                <img src="../images/homepage.png" alt="">
                <a href="Homepage.html">Home</a>
            </div>
            <div class="subject">
                <img src="../images/language.png" alt="">
                <a href="#">Subject</a>
            </div>
        </div>
        <div class="nav2">
            <div class="about">
                <a href="about.html">About</a>
            </div>
            <div class="signIn">
                <a href="signin">Sign in</a>
            </div>
            <div class="signOut">
                <a href="signup.html">Sign up</a>
            </div>
        </div>
    </div>
    <div id="main">
        <div class="menu">
            <button class="openbtn" onclick="openNav()">☰</button>
            <span class="haiyu">HAiYU</span>
        </div>
        <img src="../images/background.png" alt="background" class="bg">
        <div class="landing-text">
            <h1>Learn your Hardskill for The Great Future</h1>
            <p>Come on join with us! by explore and learning your hardskill with us for prepare your future. we will accomodate your needs to get what you need.</p>
        </div>
        <div class="btn-container">
            <button class="find-it-btn"><a href="#">Find it</a></button>
            <span class="tab">
                <button class="sign-up-btn"><a href="signup">Sign up</a></button>
            </span>
        </div>
    </div>
    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>