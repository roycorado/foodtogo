<?php

//Destroy all sessions
session_start();
session_destroy();

// Route user to landing page
header('location: ../../index.php');
?>
