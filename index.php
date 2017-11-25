<?php

    $PageView = "No Page Yet";
    $title;
    require("Config/Router.php");
    
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("View/partials/head.php"); ?>
<body>
    <?php include("View/partials/header.php");?>
    <main>
        <?php include($PageView);?>
    </main>
</body>
</html>