<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $biodata = new Biodata();
    foreach ($biodata->edit($_GET['id']) as $data) {
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
        <legend>Edit Data Siswa</legend>
        <form action="/biodata/proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" required>Laki-laki</td>
                    <td><input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" required>Perempuan</td>
                </tr>
                <tr>
                     <th>Agama</th>
                      <td><select name="agama" value="<?php echo $agama; ?>">
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Hinddu">Hinddu</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Kong Khu Chu">Kong Khu Chu</option></td>
                      </select>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td><input type="text" name="umur" value="<?php echo $umur; ?>" readonly></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>