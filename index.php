<?php

require_once 'model/model.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

    $resut = insert($_POST['name'], $_POST['description'], $_POST['created_at']);

    var_dump($resut);
}

require_once 'view/indexTemplate.php';