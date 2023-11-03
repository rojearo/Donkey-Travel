<?php
class Tochten
{
public $omschrijving;
public $route;
public $aantalDagen;

function __construct($omschrijving = NULL, $route = NULL, $aantalDagen = NULL)
{
$this->omschrijving = $omschrijving;
$this->route = $route;
$this->aantalDagen = $aantalDagen;
}

// Setters ----------------------------------------

public function set_Omschrijving($omschrijving)
{
$this->omschrijving = $omschrijving;
}

public function set_Route($route)
{
$this->route = $route;
}

public function set_AantalDagen($aantalDagen)
{
$this->aantalDagen = $aantalDagen;
}

// Getters ----------------------------------------

public function get_Omschrijving()
{
return $this->omschrijving;
}

public function get_Route()
{
return $this->route;
}

public function get_AantalDagen()
{
return $this->aantalDagen;
}

public function tochtAfdrukken()
{
echo "Omschrijving: " . $this->get_Omschrijving() . "<br/>";
echo "Route: " . $this->get_Route() . "<br/>";
echo "Aantal dagen: " . $this->get_AantalDagen() . "<br/>";
}

public function createTocht()
{
require "../login/connect.php";
try {
$omschrijving = $this->get_Omschrijving();
$route = $this->get_Route();
$aantalDagen = $this->get_AantalDagen();

$sql = "INSERT INTO tochten (omschrijving, route, aantalDagen)
VALUES ('$omschrijving', '$route', '$aantalDagen')";

$conn->exec($sql);
echo "<h1>Tocht is aangemaakt</h1>";
} catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
}

public function afdrukkenTocht()
{
require "../login/connect.php";
echo "Omschrijving: " . $this->get_Omschrijving() . "<br/>";
echo "Route: " . $this->get_Route() . "<br/>";
echo "Aantal dagen: " . $this->get_AantalDagen() . "<br/>";
}

function readTocht()
{
require "../login/connect.php";
$sql = $conn->prepare('SELECT * FROM tochten');
$sql->execute();

foreach ($sql as $tocht) {
echo '<tr>';
    echo '<td> <th>Omschrijving: </th>' . $tocht['omschrijving'] . '</td> <br>';
    echo '<td> <th>Route: </th>' . $tocht['route'] . '</td> <br>';
    echo '<td> <th>Aantal dagen: </th>' . $tocht['aantalDagen'] . '</td> <br>';
    echo '</tr> <br>';
}

echo '</table></div>';
}

public function updateTocht($id)
{
try {
require "../login/connect.php";
$omschrijving = $this->get_Omschrijving();
$route = $this->get_Route();
$aantalDagen = $this->get_AantalDagen();

$sql = "UPDATE tochten SET omschrijving = '$omschrijving', route = '$route', aantalDagen = '$aantalDagen'
WHERE id = '$id'";
$conn->exec($sql);

echo "Tocht succesvol aangepast!" . "<br/>" . "<br/>";
} catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
}

public function verwijderTocht($id)
{
try {
require "../login/connect.php";
$sql = "DELETE FROM tochten WHERE id = '$id'";
$conn->exec($sql);

echo "Tocht verwijderd" . "<br/>" . "<br/>";
} catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
}

public function zoekTocht($id)
{
require "../login/connect.php";

try {
$sql = $conn->prepare("
SELECT id, omschrijving, route, aantalDagen FROM tochten WHERE id = :id");
$sql->bindParam(':id', $id);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if ($tocht = $result[0]) {
$this->set_Omschrijving($tocht["omschrijving"]);
$this->set_Route($tocht["route"]);
$this->set_AantalDagen($tocht["aantalDagen"]);
} else {
throw new PDOException("Tocht niet gevonden");
}
} catch (PDOException $e) {
echo $e->getMessage();
echo '<a href="">Terug naar het hoofdmenu</a>' .
'</div>';
exit;
}
}
}
