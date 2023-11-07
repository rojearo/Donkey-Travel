<?php
include '../klachten/classKlachten.php';
$klachten = new Klachten();
$id = $_REQUEST['id'];
$delete = $klachten->delete($id);

if ($delete) {
    echo "<script>alert('delete successfully');</script>";
    echo "<script>window.location.href = '../klachten.php';</script>";
}
