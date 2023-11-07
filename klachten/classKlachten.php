<?php

namespace MyNamespace;

Class klachten{

    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "klachten";
    private $conn;

    public function __construct(){
        try {

            $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function insert(){
        if (isset($_POST['submit'])) {
            if (isset($_POST['naam']) && isset($_POST['klacht']) && isset($_POST['useroplossing']) && isset($_POST['adminoplossing'])) {
                if (!empty($_POST['naam']) && !empty($_POST['klacht']) && !empty($_POST['useroplossing']) && !empty($_POST['adminoplossing'])) {
                    $naam = $this->conn->real_escape_string($_POST['naam']);
                    $klacht = $this->conn->real_escape_string($_POST['klacht']);
                    $useroplossing = $this->conn->real_escape_string($_POST['useroplossing']);
                    $adminoplossing = $this->conn->real_escape_string($_POST['adminoplossing']);

                    $query = "INSERT INTO klachten (naam, klacht, useroplossing, adminoplossing) VALUES ('$naam', '$klacht', '$useroplossing', '$adminoplossing')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Data is toegevoegd!');</script>";
                        echo "<script>window.location.href = '../klachten.php';</script>";
                    } else {
                        echo "<script>alert('Mislukt');</script>";
                        echo "<script>window.location.href = '../klachten.php';</script>";
                    }
                } else {
                    echo "<script>alert('Leeg');</script>";
                    echo "<script>window.location.href = '../klachten.php';</script>";
                }
            }
        }
    }

    public function fetch(){
        $data = array();

        $query = "SELECT * FROM klachten";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id){

        $query = "DELETE FROM klachten where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function fetch_single($id){

        $data = null;

        $query = "SELECT * FROM klachten WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function edit($id){

        $data = null;

        $query = "SELECT * FROM klachten WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE klachten SET naam='$data[naam]', klacht='$data[klacht]', useroplossing='$data[useroplossing]', adminoplossing='$data[adminoplossing]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }
}
?>