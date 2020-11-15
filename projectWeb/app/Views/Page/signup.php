<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAiYU - SIGN UP</title>
    <link rel="stylesheet" href="../css/signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <script src="../js/signin.js" defer></script>
</head>

<body>
    <div class="grid-container">

        <div class="item1">
            <h1 style="margin-bottom: 0%;padding-bottom: 0;">HAiYU</h1>
            <h2 id="subjudul">Hard Skill for You</h2>
        </div>

        <div class="item2">
            <img src="../images/people.png" alt="people">

            <h2>Sign in</h2>

            <form action="/user/login" method="POST">
                <?= session()->get('pesan'); ?>
                <input class="login" type="text" id="username" name="email" placeholder="Username/Email" required>
                <br>
                <input class="login" type="password" id="password" name="password" placeholder="Password" required>
                <br>
                <a href="" id="forgetPW">Forget password</a>
                <br>
                <label for="rm">Remember me</label>
                <input type="checkbox" id="rm">

                <br>
                <br>

                <button type="submit">Login</button>
                <br>
                <button href="/signup" id="myBtn">Doesn't have an account?</button>
            </form>
        </div>


    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="display: block;">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times</span>
                <h1>Sign Up</h1>
            </div>

            <div class="modal-form">
                <div class="error"><b><?= $validate->listErrors(); ?></b></div>
                <form action="<?= base_url('user/regis') ?>" method="POST">
                    <br>
                    <input type="text" id="username" name="username" placeholder="Create your username" required>
                    <br>
                    <input type="email" id="emailregis" name="email" placeholder="Enter your valid email" required>
                    <br>
                    <input type="password" id="password" name="password" placeholder="Make the password" required>
                    <br>
                    <!-- <input type="password" id="passwordConf" name="passwordConf" placeholder="Password confirmation" required>
                    <br> -->
                    <!-- <button type="submit">AS TEACHER</button>
                    <span style="display: inline-block; width: 20px;"></span> -->
                    <button type="submit">AS STUDENT</button>
                    <br>
                    <a href="/signin" id="signin">Already have an account</a>
                    <br>
                    <br>

                </form>
            </div>
        </div>

    </div>

    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>