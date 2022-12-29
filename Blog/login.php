<h2>Авторизация пользователя</h2>
<form action="check.php" method="POST">
    <input type="text" name="login" placeholder="Введите ник" class="form-control">
    <input type="password" name="password" placeholder="Пароль" class="form-control">
    <button>Войти</button>
</form>
<p class="text-danger">
    <?echo $_GET['error']?>
</p>