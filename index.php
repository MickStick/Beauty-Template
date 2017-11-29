<?php

    $PageView = "No Page Yet";
    $title;
    require("Config/Router.php");
    
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("View/partials/head.php"); ?>
<body class="love_couple">
    <?php include("View/partials/header.php");?>
    <main class="white-text">
        <?php include($PageView);?>
    </main>
    <br><br><br>
    <footer>
    
    </footer>
</body>
</html>