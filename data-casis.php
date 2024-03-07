<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PPDB 2024</title>
    <link rel="stylesheet" href="datacasis.css">
</head>
<body>
    <header>
        <h3>Siswa sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>
    
    <table border="3" >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Sekolah asal</th>
            <th>Tindakan</th>

        </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM data_casis";
    $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['nisn']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href= 'hapus.php?id=".$siswa['id']."'>Hapus</a>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query)?></p>
    
    </body>
</html>