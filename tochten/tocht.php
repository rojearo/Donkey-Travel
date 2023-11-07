<?php

class Tocht {
    private $idTochten;
    private $route;
    private $conn; // De databaseverbinding

    public function __construct($route, $conn) {
        $this->idTochten = null;
        $this->route = $route;
        $this->conn = $conn;
    }

    // Setter voor idTochten
    public function setIdTochten($id) {
        $this->idTochten = $id;
    }

    // Getter voor idTochten
    public function getIdTochten() {
        return $this->idTochten;
    }

    // Setter voor route
    public function setRoute($route) {
        $this->route = $route;
    }

    // Getter voor route
    public function getRoute() {
        return $this->route;
    }

    public function create() {
        $query = "INSERT INTO tochten (route) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->route);

        if ($stmt->execute()) {
            $this->idTochten = $this->conn->insert_id;
            return true;
        } else {
            return false;
        }
    }

    public function read($id) {
        $query = "SELECT * FROM tochten WHERE idTochten = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->idTochten = $row['idTochten'];
                $this->route = $row['Route'];
                return true;
            }
        }
        return false;
    }

    public function update() {
        if ($this->idTochten !== null) {
            $query = "UPDATE tochten SET route = ? WHERE idTochten = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("si", $this->route, $this->idTochten);

            return $stmt->execute();
        }
        return false;
    }

    public function delete() {
        if ($this->idTochten !== null) {
            $query = "DELETE FROM tochten WHERE idTochten = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $this->idTochten);

            return $stmt->execute();
        }
        return false;
    }
}


