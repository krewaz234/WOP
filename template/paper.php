<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php require $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
  </head>
  <body>
    <div class="navbar header">
      <?php require $_SERVER['DOCUMENT_ROOT']."/template/header-content.php" ?>
    </div>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/template/singin.php' ?>
    <div class="container-fluid context">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-md-9 col-12 main">
          <?php include $_GET['filename'] ?>
        </div>
        <div class="col-md-2 col-12 sidebar">
          <?php require $_SERVER['DOCUMENT_ROOT']."/template/nav.php" ?>
        </div>
      </div>
    </div>
    <div class="col-12 footer">

    </div>
  </body>
</html>
