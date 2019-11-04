<?php
include '../database.php';
$biodata = new Biodata();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
    foreach ($biodata->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $tgl_lahir = $data['tgl_lahir'];
        $umur = $data['umur'];
    }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" readonly>Laki-laki</td>
                    <td><input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" readonly>Perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><input type="text" name="nama" value="<?php echo $agama; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td><input type="text" name="umur" value="<?php echo $umur; ?>" readonly></td>
                </tr>
            </table>
    </fieldset>
</body>

</html>