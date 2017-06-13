<?php
// Iniciem la sessió
session_start();
// Destruim la sessió
session_destroy(); 
// Redirigim cap a login.php
header('Location: login.php');
