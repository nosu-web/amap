<div class="container my-5">
  <form class="form-auth mx-auto" action="login.php" method="post">
    <?= $formError ?>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Пароль</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <button type="submit" name="loginSubmit" class="btn btn-primary">Вход</button>
  </form>
</div>