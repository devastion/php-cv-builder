<?php
$title = "PHP CV Builder - Login or Register";
include "includes/header.php" ?>
<form method="post" class="mx-auto" id="loginform">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <!-- Inline css, because the bundler fucked up something -->
    <div style="display: flex; justify-content: space-between; margin-top: 10px">
        <button type="submit" class="btn btn-danger" formaction="includes/register-inc.php">REGISTER</button>
        <button type="submit" class="btn btn-primary" formaction="includes/login-inc.php">LOGIN</button>
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<div class="mt-5 d-flex justify-content-center">';
    if (empty($_GET['err'])) {
        echo '';
    } elseif ($_GET['err'] == 'empty') {
        echo "Username or Password is empty!";
    } elseif ($_GET['err'] == 'invalid') {
        echo "Invalid Username!";
    } elseif ($_GET['err'] == 'taken') {
        echo "Username is taken!";
    } elseif ($_GET['err'] == 'notfound') {
        echo "User is not found!";
    }
}
?>
</main>
</body>
</html>

