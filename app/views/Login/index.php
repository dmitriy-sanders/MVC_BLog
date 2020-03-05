<div class="container col-md-12">
    <h2>Авторизация</h2>
    <hr>
    <div class="alert-danger"><?= @$errors ?></div>
    <form method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Логин" value="<?= @$_POST['login'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="remember">
                <label class="custom-control-label" for="customSwitch1">Запомнить меня!</label>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" id="do_login" name="do_login" value="Войти!">
    </form>
</div>