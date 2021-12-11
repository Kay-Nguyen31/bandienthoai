<?php
require_once "./define.php";
require_once "./connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="./css/timkiem1.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/sanpham.css">
    <link rel="stylesheet" href="./css/chitietsp1.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Home</title>
</head>

<body style="background:whitesmoke">
   
    <?php
    if (isset($_GET['folder'])) {
        $path = $_GET["folder"];

        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            require_once path . "/$path/$page.php";
        }
    } else {
        require_once path . "/block/timkiem.php";
        require_once path . "/block/menu.php";

        if (isset($_GET["page"])) {
            $path = $_GET["page"];
            require_once path . "/block/$path.php";
        } else {
            require_once path . "/block/sanpham.php";
        }
        require path."/block/footer.php";
    }
?>
    

    

</body>

</html>