<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap for grid -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/profileEdit.css">
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
    <div class="main">
        <div class="menu">
            <a class="openbtn" onclick="openNav()"><img src="../images/open-menu.png" alt="" style="width: 32px;height: auto"></a>
            <span class="haiyu">HAiYU</span>
        </div>
    </div>

    <div class="content">
        <h2>Edit Profile</h2>
        <form action="user/update/" method="POST">
            <div class="row1">
                <div class="col">
                    <div class="form-control1">
                        <label for="imgProfile">
                            <img src="../images/avatar.png" alt="">
                        </label>
                        <input type="file" id="imgProfile">
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="col">
                    <div class="form-control">
                        <input type="text" name="id" id="id" value="<?= $user->id; ?>" readonly><br>
                    </div>
                    <div class="form-control">
                        <input type="text" name="email" id="email" value="<?= $user->email; ?>" readonly><br>
                    </div>
                    <div class="form-control">
                        <input type="text" name="username" id="username" value="<?= $user->username; ?>"><br>
                    </div>
                    <div class="form-control">
                        <input type="text" name="nama" id="nama" value="<?= $user->nama; ?>"><br>
                    </div>
                    <div class="form-control">
                        <select id="gender">
                            <option value="" name="gender">Select Gender</option>
                            <option value="L" name="gender">Man</option>
                            <option value="P" name="gender">Woman</option>
                        </select><br>
                    </div>
                    <div class="form-control">
                        <input type="date" name="birthdate" id="birthdate" value="<?= $user->birthdate; ?>">
                    </div>
                </div>
            </div>
            <button class="submit" id="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>