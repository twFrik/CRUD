<?php

require_once 'model/model.php';

$id = $_GET['id'];
$row = deleteById($id);

header('location:index.php');