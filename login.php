<?php
$title = 'login';
require('koneksi.php');

session_start();
if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username = '{$username}' AND password = '{$password}'";
    $query =  mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
        $username = mysqli_fetch_array($query);
        $_SESSION['id_user']    = $username['id_user'];
        $_SESSION['username']   = $username['username'];
        $_SESSION['email']      = $username['email'];
        $_SESSION['level']      = $username['level'];
        echo "<script>alert('Login Berhasil!');</script>";

        if ($username['level'] == 'admin') {
            echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
        } else {
            echo "<meta http-equiv='refresh' content='0; url=order.php'>";
        }
    } else {
        echo "<script type='text/javascript'>alert('username dan password salah!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
    }
}
?>

<?php require('views/login.view.php'); ?>