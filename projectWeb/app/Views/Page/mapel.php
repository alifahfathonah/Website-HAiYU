<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - HAiYU</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!--Bootstrap css URL-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mapel.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <script src="../js/mapel.js"></script>
        
</head>

<body>
    <main>
        <br>
        <br>
        <h1 id="title"><?= $title; ?></h1>
        <button id="unenroll" name="unenroll" onclick="open_modal()">unenroll</button>
        <form action="subject/unenroll" method="post">
        </form>
        <div class="Isi">
            <div class="row" id="row1">
                <div class="col-6 col-md-4 column">
                    <div id="chapter1">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter1'">
                        <h3 id="titleSub">Chapter 1</h3>
                        <h3 id="titleSub2"><?= $chapter1; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="chapter2">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter2'">
                        <h3 id="titleSub">Chapter 2</h3>
                        <h3 id="titleSub2"><?= $chapter2; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="chapter3">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter3'">
                        <h3 id="titleSub">Chapter 3</h3>
                        <h3 id="titleSub2"><?= $chapter3; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 column">
                    <div id="chapter4">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter4'">
                        <h3 id="titleSub">Chapter 4</h3>
                        <h3 id="titleSub2"><?= $chapter4; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="chapter5">
                        <img src="../images/edu/048-book-1.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/chapter5'">
                        <h3 id="titleSub">Chapter 5</h3>
                        <h3 id="titleSub2"><?= $chapter5; ?></h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div id="midtest">
                        <img src="../images/edu/027-loupe.png" alt="image" id="icon" onclick="location.href = '/<?= $mapel; ?>/midtest'">
                        <h3 id="titleSub">Mid Test</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h1>Are you sure want to unenroll
                    <br>
                     <?= $title ?> ? </h1>
            </div>

            <div>
                <form action="/subject/unenroll" method="POST">
                    <input type="hidden" name="id_mapel" value="<?= $id ?>">
                    <input type="hidden" id="page" name="page" value="/<?= $mapel ?>">
                    <input type="hidden" id="subject" name="subject" value="/<?= $subject ?>">

                    <button type="submit" name="submit" value="yes">YES</button>
                    <button type="submit" name="submit" value="no">NO</button>
                    <br>
                </form>
            </div>
        </div>

    </div>

    <h6>© HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>