<?php 
    Class Model{
 
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "crud";
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
                if (isset($_POST['speltype']) && isset($_POST['locatie']) && isset($_POST['tijd']) && isset($_POST['maxpersoon']) && isset($_POST['opmerking'])) {
                    if (!empty($_POST['speltype']) && !empty($_POST['locatie']) && !empty($_POST['tijd']) && !empty($_POST['maxpersoon'] && !empty($_POST['opmerking']) )) {
                         
                        $speltype = $_POST['speltype'];
                        $locatie = $_POST['locatie'];
                        $datum = $_POST['datum'];
                        $tijd = $_POST['tijd'];
                        $maxpersoon = $_POST['maxpersoon'];
                        $opmerking = $_POST['opmerking'];
 
                        $query = "INSERT INTO basketbal (speltype,locatie,datum,tijd,maxpersoon,opmerking) VALUES ('$speltype','$locatie','$datum','$tijd','$maxpersoon','$opmerking')";
                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('Data is toegevoegd!');</script>";
                            echo "<script>window.location.href = '../basketbal.php';</script>";
                        }else{
                            echo "<script>alert('Mislukt');</script>";
                            echo "<script>window.location.href = '../basketbal.php';</script>";
                        }
 
                    }else{
                        echo "<script>alert('Leeg');</script>";
                        echo "<script>window.location.href = '../basketbal.php';</script>";
                    }
                }
            }
        }
 
        public function fetch(){
            $data = null;
 
            $query = "SELECT * FROM basketbal";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
 
        public function delete($id){
 
            $query = "DELETE FROM basketbal where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function fetch_single($id){
 
            $data = null;
 
            $query = "SELECT * FROM basketbal WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT * FROM basketbal WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
 
            $query = "UPDATE basketbal SET speltype='$data[speltype]', locatie='$data[locatie]', datum='$data[datum]', tijd='$data[tijd]', maxpersoon='$data[maxpersoon]', opmerking='$data[opmerking]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
 ?>