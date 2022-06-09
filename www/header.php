<?php
    session_start();
    require("includes/config.inc.php");

    $servername = "localhost"; // chagne to localhost or something
    $username = "root";
    $password = "skncamp-22"; // skncamp-22 for not sk9
    $db_name = "skn";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (!isset($_SESSION['cur_q'])) // set only one
        $_SESSION['cur_q'] = 1;
?>