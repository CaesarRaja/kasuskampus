<html>
<title>Percobaan</title>

<body bgcolor="Black">
    <?php
    $slink=$_REQUEST['slink'];
?>
    <center>
        <table border="1" width="90%" height="90%" bgcolor="cyan" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2" height="20%">
                    <font color="red" size="6"><b>
                            <center>Materi Manajemen Websietku
                        </b>
    </center>
    </font>
    </td>
    <td width="15%" align="center">
        <font color="blue" size="5">Universitas UIN Bukittinggi</font>
    </td>
    </tr>
    <tr>
        <td colspan="3" height="5%" bgcolor="yellow">
            <?php include "tulisan.php"; ?>
        </td>
    </tr>
    <tr>
        <td width="15%" valign="top">
            <?php include "menu.php"; ?> <br>
            <?php include "login.php"; ?>
        </td>
        <td valign="top" align="left">
            <?php
            if(isset($slink)) {
                include "$slink";
            } else {
                include "profil.php";
            }
        ?>
        </td>
        <td valign="top"><a href="http://www.google.co.id">Google</a></td>
    </tr>
    <tr>
        <td colspan="3" height="5%" bgcolor="blue">Oleh : Alfin Ardiansyah</td>
    </tr>
    </table>
    </center>
</body>

</html>