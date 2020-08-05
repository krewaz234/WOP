<?php require 'createprof.php';?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/template/head.html' ?>
    <title>Создание профиля</title>

    <!-- <style media="screen">
        .authorised
    {
    text-align: center;
    font-size: 0.7em;
    letter-spacing: 0;
    color: white;
    font-weight: 400;
    text-decoration: none;
    transition: 0.5s;
  }
  .authorised:hover
  {
    text-decoration: none;
    color: #999;
  }
  h2
  {
    margin-top: 1vh;
  }
  .authinput
  {
    background: rgb(60,60,60);
    border: none;
    color: white;
    font-size: 1em;
    height: 2em;
    font-weight: 600;
    padding: 5px;
    margin-left: 5vw;
    border-radius: 10px;
    margin-right: 10px;
  }
  .authbutton
  {
    background: rgb(60,60,60);
    color: white;
    font-size: 1em;
    font-weight: 600;
    border: none;
    border-radius: 10px;
    margin-left: 7vw;
    padding: 0.3em;
  }
  .qm
  {
    cursor: pointer;
    margin-left: 7px;
  }
  .smtext
  {
    transition: 0.5s;
    font-size: 0.7em;
  }
  textarea:focus, input:focus{
outline: none;
}
  </style> -->
  </head>
  <body>
  <?php require $_SERVER['DOCUMENT_ROOT']."/template/navbar.php" ?>
    <div class="container context bg-dark text-light mt-2">
      <div class="row">
        <div class="col-12 p-3">
          
          <div class="h2" align="center">Создание профиля</div>
          <div class="h5" align="center">Маленькое начало большого пути</div>

          <?php echo $issue_el; ?>
          <form action='index.php' method='POST'>

            <div class="form-group">
              <label for="log">Логин</label>
              <input class="form-control" type="text" name="usname" value="<?php echo @$_POST['usname']; ?>"
              placeholder="Логин" id="log" aria-describedby="loginHelp">
              <small id="loginHelp" class="form-text text-muted">Логин необходим для авторизации. Также он будет виден другим пользователям.</small>
            </div>

            <div class="form-group">
              <label for="role">Роль</label>
              <select class="form-control" name="role" id="role">
                <option value="norole">Выберите роль</option>
                <option value="student" <?php if (isset($_POST['role']) and $_POST['role'] == "student") echo 'selected'; ?>>Ученик</option>
                <option value="teacher" <?php if (isset($_POST['role']) and $_POST['role'] == "teacher") echo 'selected'; ?>>Преподаватель</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="email" value="<?php echo @$_POST['email']; ?>"
                placeholder="E-mail" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"
                aria-describedby="emailHelp">
              <small id="loginHelp" class="form-text text-muted">Ваш E-mail нужен для восстановления аккаунта, при утере его логина или пароля.</small>
            </div>

            <div class="form-group form-row">
              <div class="col-md-6 col-12">
                <label for="password">Пароль</label>
                <input class="form-control" id="password" type="password" name="pass" placeholder="Пароль">
              </div>
              <div class="col-md-6 col-12">
                <label for="password-repeat">Повтор пароля</label>
                <input class="form-control" id="password-repeat" type="password" name="r_pass" placeholder="Повторите пароль">
              </div>
            </div>
            
            <button class="btn btn-success" type="submit" name="sub">Создать профиль</button>

          </form>
      </div>
    </div>
  </body>
</html>
