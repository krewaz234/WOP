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
    cursor: pointer;
  }
</style>

<a href="http://worldofop.ru" class="navbar-item link">
     WOP
</a>
<?php if (!$_COOKIE['name']): ?>
<div class="navbar-item authorised" onclick="authorise_roll()">
   Вы&nbspиспользуете&nbspгостевой доступ<br>Авторизуйтесь!
</div>
<?php else: ?>
<div class="navbar-item">
  <?php echo $_COOKIE['name']; ?>
</div>
<?php endif; ?>
