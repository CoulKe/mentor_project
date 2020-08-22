<form action="" method="POST" id="register_form">
<h1>Register Form</h1>
    <label for="First name">First name: </label> <br>
    <input type="text" name="first_name" id="fName" value=<?= $_POST['first_name'] ?? '' ?>>
    <span class="error" id="fNameError"> <?php echo $nameErr; ?></span>
    <br>
    <label for="email">Email: </label> <br>
    <input type="text" name="email" id="email" value=<?= $_POST['email'] ?? '' ?>>
    <span class="error" id="emailError"> <?php echo $emailErr; ?></span>
    <br>
    <label for="username">Username</label> <br>
    <input type="text" name="username" id="username" value=<?= $_POST['username'] ?? '' ?>>
    <span class="error" id="usernameError"> <?php echo $usernameErr; ?></span>
    <br>
    <label for="password">Password: </label> <br>
    <input type="password" id="password" name="password">
    <span class="error" id="passwordError"> <?php echo $passwordErr; ?></span>
    <br>
    <label for="Confirm password">Confirm password: </label> <br>
    <input type="password" id="passwordConfirm" name="password_confirm">
    <span class="error" id="confirmError"> <?php echo $confirmErr; ?></span>
    <br>
    <input type="submit" name="register" id="register" value="Register"> <br>
</form>
<script src='../assets/js/registerValidation.js'></script>
