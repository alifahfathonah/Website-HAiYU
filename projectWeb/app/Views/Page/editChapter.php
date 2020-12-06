<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap for grid -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/editChapter.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Open+Sans&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/js/homepage_script.js"></script>
    <title>Edit Chapter - HAiYU</title>
</head>

<body>
    <div id="Sidebar" class="sidebar">
        <div class="top-nav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
            <span class="haiyu-sidebar">HAiYU</span>
            <div class="search-container">
                <form name="Searchbar">
                    <input type="text" value="Search.." name="search" class="search">
                </form>
            </div>
        </div>
        <span><img src="/images/avatar.png" alt="" id="avatar"></span>
        <div class="user-info">
            <p id="welcome">Welcome! <br> <?= session('username') ?></p>
        </div>
        <div class="navUser">
            <div class="home">
                <img src="/images/homepage.png" alt="">
                <a href="/">Home</a>
            </div>
            <div class="subject">
                <img src="/images/language.png" alt="">
                <a href="/user/subject">Subject</a>
            </div>
            <div class="profile">
                <img src="/images/user.png" alt="">
                <a href="#">Profile</a>
            </div>
            <div class="aboutUser">
                <img src="/images/about.png" alt="" style="width: 32px;height: 32px">
                <a href="/about">About</a>
            </div>
        </div>
        <div class="bottom-nav">
            <!-- <a href="#">Settings</a> -->
            <a href="/user/logout">Log out</a>
        </div>
    </div>
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="/images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>

    <div class="content">
        <h2>Edit Chapter</h2>
        <form action="/subject/editChapter" method="POST">
            <input type="hidden" name="id_mapel" id="id_mapel" value="<?= $id_mapel ?>"><br>
            <input type="hidden" name="chapter" id="chapter" value="<?= $chapter ?>"><br>
            <div class="form-control">
                <label for="judul">Title : </label>
                <input type="text" name="judul" id="judul" maxlength="22" value="<?= $judul ?>"><br>
            </div>
            <div class="form-control">
                <label for="konten">Content : </label>
                <br>
                <textarea name="konten" id="konten" cols="30" rows="10"><?= $konten ?></textarea>
            </div>
            <button class="submit" id="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>