<?php
$title = 'login';
require('functions.php');

session_start();
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $login = query($sql);
    if (count($login) > 0) {
        $_SESSION['name'] = $name;

        if ($login[0]['level'] == 'admin') {
            header('Location: admin.php');
        } else {
            header('Location: admin.php');
        }
    } else {
        header('Location: login.php');
    }
}
?>
<?php if (isset($error)) :  ?>
    <script>
        alert("Username/password salah")
    </script>
<?php endif; ?>

<?php require('views/login.view.php'); ?>