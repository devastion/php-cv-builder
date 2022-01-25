</main>
<footer class="text-center my-3">
    <h2 class="h2">Created by Dimitar Banev</h2>
    <div>
        <?php
        if (isset($_SESSION["sessionid"])) {
            echo 'Welcome '.$_SESSION["sessionuser"];
            echo '<a href="./index.php" class="link-primary mx-3">Home</a>
        <a href="./includes/logout.php" class="link-primary mx-3">Logout</a>
        <a href="./history.php" class="link-primary mx-3">History</a>
        <a href="https://www.github.com/devastion" target="_blank" class="link-dark mx-3">Github</a>';
        } else {
            echo '<a href="./index.php" class="link-primary mx-3">Home</a>
        <a href="./login.php" class="link-primary mx-3">Login / Register</a>
        <a href="https://www.github.com/devastion" target="_blank" class="link-dark mx-3">Github</a>';
        }
        ?>
    </div>
</footer>
</div>
<script src="./template/index.51cd1bbc.js"></script>
</body>
</html>
