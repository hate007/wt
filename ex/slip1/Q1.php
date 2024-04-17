<?php
    Session_start();
    if(isset($_SESSION["pcount"])) {
        $_SESSION["pcount"] += 1;
    } else {
        $_SESSION["pcount"] = 1;
    }
    Echo"You have visited this page  ".$_SESSION['pcount']." Times(s)";
?>