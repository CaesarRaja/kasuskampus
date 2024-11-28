<html>

<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIDN</th>
            <th>NAMA DOSEN</th>
            <th>ALAMAT</th>
        </tr>
        <?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM dosen");
while($d = mysqli_fetch_array($data)){
?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo $d['nidn']; ?>
            </td>
            <td>
                <?php echo $d['nama_dosen']; ?>
            </td>
            <td>
                <?php echo $d['alamat']; ?>
            </td>
        </tr>
        <?php
}
?>
    </table>
</body>

</html>