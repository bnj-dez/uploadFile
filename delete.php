<?php
$filename = 'uploads/' . $_GET['id'];

unlink($filename);

header('location:index.php');