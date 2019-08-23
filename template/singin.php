<style media="screen">
  #authorisewindow
  {
    position: absolute;
    top: -350px;
    padding: 30px;
    right: 0px;
    height: 350px;
    width: 300px;
    background: rgb(255, 255, 255);
    z-index: 99999;
    background: #222226;
    transition: 0.5s;
  }
  .authinput
  {
    background: rgb(60,60,60);
    border: none;
    width: 250px;
    color: white;
    font-size: 0.7em;
    height: 2em;
    line-height: 6em;
    font-weight: 600;
    padding: 5px;
  }
  .authbutton
  {
    background: rgb(60,60,60);
    width: 80px;
    height: 35px;
    color: white;
    font-size: 0.7em;
    font-weight: 600;
    border: none;
  }
  .smalltext
  {
    width: 100%;
    text-align: center;
    color: white;
    font-size: 0.7em;
    line-height: 1.2em;
  }
  .smalllink
  {
    color: inherit;
    text-decoration: none;
    font-size: inherit;
    transition: 0.5s;
  }
  .smalllink:hover {
    color: #999;
    text-decoration: none;
  }
</style>

<div id="authorisewindow">
<div style="text-align: center">Авторизация</div>
<br>
  <?php require "login.php" ?>
  <form action = "index.php" method = "POST">
    <input type="text" class="authinput" placeholder="Логин или email" name="usname" <?php echo @$_POST['usname']; ?>>
    <br><br>
    <input type="password" class="authinput" placeholder="Пароль" name="pass">
    <br><br>
    <div style="width: 100%" align=center>
      <button class="authbutton" type="submit" name="sub" >Войти</button>
    </div>
  </form>
  <br>
  <div class="smalltext">Первый&nbspраз&nbspздесь?<br><br><a href="/register" class="smalllink">Создайте&nbspпрофиль</a> прямо&nbspсейчас!</div>
</div>
<script>authorise_roll();</script>
