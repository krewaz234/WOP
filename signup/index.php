<?php require 'createprof.php';?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/template/head.html' ?>
    <title>Создание профиля</title>
  </head>
  <body>
    <style media="screen">
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
  </style>
  <?php require $_SERVER['DOCUMENT_ROOT']."/template/navbar.php" ?>
    <div class="container context text-light">
      <div class="row">
        <div class="col regwind">
          <h2 align=center>Создание профиля</h2>
          <h4 align=center>Маленькое начало большого пути</h4><br><br>
          <?php echo $issue_el; ?>
          <form action='index.php' method='POST'>
            <input class="authinput" type="text" name="usname" value="<?php echo @$_POST['usname']; ?>" placeholder="Логин" id="log"><span class="qm"><img src="/imgs/question.png" onmouseover="document.getElementById('q1').style.opacity='100';" onkeyup="delspaces();" onmouseout="document.getElementById('q1').style.opacity='0';"></span><span class="smtext" style="opacity: 0" id="q1"> Логин необходим для авторизации. Также он будет виден другим пользователям.</span><BR><BR>
            <select name="role">
              <option value="norole">Выберите роль</option>
              <option value="student" <?php if (isset($_POST['role']) and $_POST['role'] == "student") echo 'selected'; ?>>Ученик</option>
              <option value="teacher" <?php if (isset($_POST['role']) and $_POST['role'] == "teacher") echo 'selected'; ?>>Преподаватель</option>
            </select><br><br>
            <input class="authinput" type="text" name="email" value="<?php echo @$_POST['email']; ?>" placeholder="E-mail" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"><span class="qm"><img src="/imgs/question.png" onmouseover="document.getElementById('q2').style.opacity='100';" onmouseout="document.getElementById('q2').style.opacity='0';"></span><span class="smtext" style="opacity: 0" id="q2"> Ваш E-mail нужен для восстановления аккаунта, при утере его логина или пароля.</span><BR><BR>
            <input class="authinput" type="password" name="pass" placeholder="Пароль"><BR><br>
            <input class="authinput" type="password" name="r_pass" placeholder="Повторите пароль"><BR><br>
            <button class="authbutton" type="submit" name="sub">Создать профиль</button>
          </form>
      </div>
    </div>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/template/jQueryScripts.html' ?>
  </body>
</html>