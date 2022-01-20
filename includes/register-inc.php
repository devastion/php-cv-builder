<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require "../config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?err=empty" . $username);
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../login.php?err=invalid" . $username);
    } else {
        $sql = "SELECT user FROM users WHERE user=?";
        $mysqli->init();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $rows = $stmt->num_rows();
        if ($rows > 0) {
            $stmt->close();
            header("Location: ../login.php?err=taken");
        } else {
            $sql = "INSERT INTO users (user, pass) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss", $username, $hash);
            $stmt->execute();
            $stmt->close();
            header("Location: ../login.php?success=registered");
        }
    }
    exit();
}