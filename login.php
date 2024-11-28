<?php
if(isset($_POST['login'])){
    include('koneksi.php');
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE username='$username' and password='$password'");
    $row = mysqli_fetch_assoc($sql);
    if($row['username'] == $username && $row['password'] == $password ){
        echo "<meta http-equiv='refresh' content='0; url=admin/'>";
        $_SESSION["user"] = $row["username"];
        $_SESSION["pass"] = $row["password"];
    } else {
        echo "<center>
            <div class='alert alert-warning alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <b>Login Gagal!</b>
            </div>
        </center>";
    }
}
?>
<html>
<head>
    <title>Daftar Dosen | Login</title>
</head>
<body>
    <p align="center"></p>
    <form id="login" action="" class="well" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
        </div>
        <button type="submit" name="login" class="btn btn-default btn-block">Login</button>
    </form>
    <center>Copyright &copy; <?php echo date('Y'); ?> All Rights Reserved.</center>
</body>
</html>
