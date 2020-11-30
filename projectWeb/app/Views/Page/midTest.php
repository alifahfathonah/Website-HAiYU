<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?> - Mid Test</title>

    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/midTest.css">
    <script src="../js/midTest.js" defer></script>
    
</head>
<body>
    <h1 id="title"> <?=$title?> - Mid Test</h1>

    <div id="quiz"></div>

    <form action="/User/midTest" method="POST">
    <button id="submit">Submit</button>
    <input type="hidden" value="<?=$id?>" name="id_mapel">
    <input type="hidden" value="<?=$mapel?>" name="nama_mapel">
    </form>

</body>

</html>