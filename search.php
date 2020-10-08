<?php
session_start();
$search = filter_input(INPUT_POST, 'search');

if($search) {
    $file = "./questions.json";
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    $results = json_decode($content);
    foreach($results as $key => $result) {
        if($search == $key) {
            $_SESSION['answer'] = $result;
        } 
    }
} else {
    echo "nao";
}

header("location: index.php");
