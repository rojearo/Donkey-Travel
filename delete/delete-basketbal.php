<?php 
    include '../model/model-basketbal.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = '../basketbal.php';</script>";
    }
