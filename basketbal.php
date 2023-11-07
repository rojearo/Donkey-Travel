<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheet.css">
      <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
      <title>Basketbal</title>
  </head>
  <body>
  <div><a href="startScherm.php">homepage</a>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">crud </h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><a href="create/create-basketbal.php" class="btn btn-primary">Voeg nieuwe</a>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Locatie</th>
                <th>Datum</th>
                <th>tijd</th>
                <th>Klacht</th>
                <th>Oplossing</th>
                <th>Actie</th>
              </tr>
            </thead>
            <tbody>
              <?php
 
                include 'model/model-basketbal.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['speltype']; ?></td>
                <td><?php echo $row['locatie']; ?></td>
                <td><?php echo $row['datum']; ?></td>
                <td><?php echo $row['tijd']; ?></td>
                <td><?php echo $row['maxpersoon']; ?></td>
                <td><?php echo $row['opmerking']; ?></td>
                <td>
                  <a href="read/read-basketbal.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                  <a href="delete/delete-basketbal.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                  <a href="update/update-basketbal.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                </td>
              </tr>
 
              <?php
                }
              }else{
                echo "Nog geen data";
            }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>