<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location:data-casis.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_casis WHERE id = $id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Fromulur Edit siswa</title>
</head>

<body>
    <header>
        <h3>Formulis Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" methode="POST">
        <fieldset>
            <input type="hidden" name = "id" value="<?php echo $siswa['id']?>"/>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="nisn">NISN: </label>
            <textarea name="nisn" ><?php echo $siswa['nisn']?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": ""?>>Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": ""?>>Perempuan</label>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal']?>"/>
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan">
        </p>

        </fieldset>

    </form>
</body>

</html>