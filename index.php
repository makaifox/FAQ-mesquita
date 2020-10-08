<?php
session_start();
require 'header.php';

if(isset($_SESSION['answer'])) {
    require 'result.php';
} else {
    require 'abas.php'; 
    require 'answers.php';
}

require 'footer.php'; 
?>