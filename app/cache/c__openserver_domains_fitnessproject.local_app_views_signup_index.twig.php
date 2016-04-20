<h2>Зарегистрируйтесь, используя эту форму</h2>

<?php echo $this->tag->form("signup/register"); ?>

<p>
    <label for="login">Имя</label>
    <?php echo $this->tag->textField("login") ?>
</p>

<p>
    <label for="email">E-Mail</label>
    <?php echo $this->tag->textField("email") ?>
</p>

<p>
    <label for="password">Пароль</label>
    <?php echo $this->tag->textField("password") ?>
</p>


<p>
    <?php echo $this->tag->submitButton("Регистрация") ?>
</p>

</form>