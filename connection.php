<?php

    $link = mysqli_connect("localhost", "root", "root", "secret-diary", 8889);
        if (mysqli_connect_error()) {
            die ("Database Connection Error");
        }

?>
