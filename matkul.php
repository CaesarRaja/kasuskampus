<html>

<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Mata Kuliah</th>
            <th>NAMA DOSEN</th>
            <th>TANGGAL/WAKTU</th>
        </tr>
        <?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM matkul");
while($d = mysqli_fetch_array($data)){
?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo $d['nama']; ?>
            </td>
            <td>
                <?php echo $d['dosen']; ?>
            </td>
            <td>
                <?php echo $d['tanggal']; ?>
            </td>
        </tr>
        <?php
}
?>
    </table>
</body>

</html>