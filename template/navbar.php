<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">ProfiHard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/home">Домашняя</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/algo">Алгоритмы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/freetime">Досуг</a>
      </li>
      <?php if (!$_COOKIE['name']): ?>
      <li class="nav-item d-block d-md-none border-top border-secondary">
        <button class="btn nav-link" type="button" data-toggle="modal" data-target="#exampleModalCenter">Авторизация</button>
      </li>
      <?php endif; ?>
    </ul>

    <?php if (!$_COOKIE['name']): ?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary d-none d-md-block" data-toggle="modal" data-target="#exampleModalCenter">
      Авторизация
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-light bg-dark">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Авторизация</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action = "/setconfig.php" method = "POST">
              <div class="form-group">
                <label for="formGroupExampleInput">Логин или email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Логин или email" name="usname"
                value="<?php if (isset($_COOKIE['lastenteredlogin'])) echo $_COOKIE['lastenteredlogin']; ?>">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Пароль</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Пароль" name="pass">
              </div>
              <div style="width: 100%" align=center>
                <button class="btn btn-success" type="submit" name="sub" >Войти</button>
              </div>
            </form>
            <br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" name="button"><a class="text-light" href="/signup">Регистрация</a> </button>
          </div>

        </div>
      </div>
    </div>
  <?php else: ?>
  <span class="d-block d-md-none border-top border-secondary"></span>
  <span class="navbar-text" align=center>
    Авторизован как <a href="#">
    <?php echo $_COOKIE['name']; ?>
    </a>
  </span>
    <?php endif; ?>
  </div>
</nav>

  <!--
<!--

-->
