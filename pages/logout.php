<?php
session_start();
session_destroy();
header('Location: authorisation.php');
exit();
