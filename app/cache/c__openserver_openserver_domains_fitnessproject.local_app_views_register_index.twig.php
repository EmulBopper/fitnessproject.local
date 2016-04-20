<h1>Страница регистрации</h1>

<div>
    <form action="RegisterController.php" method="post">
        <div>
            <input type="text" name="login" id="login" value="Логин" />
            <label for="login">Как вас называть?</label>

        </div>
        <div>
            <input type="text" name="email" id="email" value="Email" />
            <label for="email">Ваш email.</label>
        </div>
        <div>
            <input type="password" name="password" id="password" value="Пароль" />
            <label for="password">Введите пароль</label>
        </div>
        <div>
            <input type="password" name="cpassword" id="password" value="Пароль" />
            <label for="cpassword">Повторите пароль</label>
        </div>
        <div>
            <input class="submit" type="submit" name="submit_register" id="submit_register" value="Отправить данные">
        </div>
    </form>
</div>

<div><?= $login; ?></div>