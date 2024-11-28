<html>

<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>MAHASISWA</th>
            <th>ALAMAT</th>
            <th>NO Hp</th>
        </tr>
        <?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
while($d = mysqli_fetch_array($data)){
?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo $d['nim']; ?>
            </td>
            <td>
                <?php echo $d['nama']; ?>
            </td>
            <td>
                <?php echo $d['alamat']; ?>
            </td>
            <td>
                <?php echo $d['no_hp']; ?>
            </td>
        </tr>
        <?php
}
?>
    </table>
</body>

</html>