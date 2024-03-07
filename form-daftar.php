<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB 2024 - Formulir Pendaftaran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            margin: 0;
            font-size: 1.8rem;
            color: #333;
        }

        fieldset {
            border: 2px solid #3498db;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        textarea,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="proses-daftar.php" method="POST">
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <fieldset>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />

            <label for="nisn">NISN:</label>
            <textarea name="nisn" placeholder="NISN"></textarea>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" placeholder="Alamat"></textarea>

            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah"/>

            <input type="submit" value="Daftar" name="daftar" />
        </fieldset>
    </form>
</body>
</html>
