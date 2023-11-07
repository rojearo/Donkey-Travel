<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>basketbal</title>
 </head>
 <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">basketbal</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php
              include '../model/model-basketbal.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['speltype']) && isset($_POST['locatie'])&& isset($_POST['datum'])&& isset($_POST['tijd']) && isset($_POST['maxpersoon']) && isset($_POST['opmerking'])) {
                  if (!empty($_POST['speltype']) && !empty($_POST['locatie']) && !empty($_POST['datum']) && !empty($_POST['tijd']) && !empty($_POST['maxpersoon']) && !empty($_POST['opmerking']) ) {
                     
                    $data['id'] = $id;
                    $data['speltype'] = $_POST['speltype'];
                    $data['locatie'] = $_POST['locatie'];
                    $data['datum'] = $_POST['datum'];
                    $data['tijd'] = $_POST['tijd'];
                    $data['maxpersoon'] = $_POST['maxpersoon'];
                    $data['opmerking'] = $_POST['opmerking'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = '../basketbal.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = '../basketbal.php';</script>";
                    }
                    
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: update/update-basketbal.php?id=$id");
                  }
                }
              }
          ?>
           <form action="" method="post">
            <div class="form-group">
              <label for="">Speltype</label>
              <input type="text" name="speltype" value="<?php echo $row['speltype']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Locatie</label>
              <input type="text" name="locatie" value="<?php echo $row['locatie']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Datum</label>
              <input type="date" name="datum" value="<?php echo $row['datum']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Tijd</label>
              <input type="time" name="tijd" value="<?php echo $row['tijd']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Max personen</label>
              <input type="number" name="maxpersoon" value="<?php echo $row['maxpersoon']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Opmerking</label>
              <textarea name="opmerking" id="" cols="" rows="3" class="form-control"><?php echo $row['opmerking']; ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>