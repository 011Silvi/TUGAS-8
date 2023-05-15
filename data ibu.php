<!DOCTYPE html>
<html>
<head>
    <title>Form Data Ibu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            background-image: url(photo-1483232539664-d89822fb5d3e.jpg);

        }

        h2 {
            color: #ffff;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: inline-block;
            width: 200px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Form Data Ibu</h2>
    <form action="submit.php" method="POST">
        <label for="nama_ibu">Nama Ibu Kandung:</label>
        <input type="text" id="nama_ibu" name="nama_ibu" required><br>
        
        <label for="tahun_lahir_ibu">Tahun Lahir:</label>
        <input type="text" id="tahun_lahir_ibu" name="tahun_lahir_ibu"><br>
        
        <label for="pendidikan_ibu">Pendidikan:</label>
        <input type="text" id="pendidikan_ibu" name="pendidikan_ibu"><br>
        
        <label for="pekerjaan_ibu">Pekerjaan:</label>
        <select id="pekerjaan_ibu" name="pekerjaan_ibu">
            <option value="Tidak Bekerja">Tidak Bekerja</option>
            <option value="PNS">PNS</option>
            <option value="Swasta">Swasta</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Petani">Petani</option>
            <option value="Buruh">Buruh</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        
        <label for="penghasilan_ibu">Penghasilan:</label>
        <select id="penghasilan_ibu" name="penghasilan_ibu">
            <option value="Kurang dari Rp 1 juta">Kurang dari Rp 1 juta</option>
            <option value="Rp 1 juta - Rp 3 juta">Rp 1 juta - Rp 3 juta</option>
            <option value="Rp 3 juta - Rp 5 juta">Rp 3 juta - Rp 5 juta</option>
            <option value="Lebih dari Rp 5 juta">Lebih dari Rp 5 juta</option>
        </select><br>
        
        <label for="kebutuhan_khusus_ibu">Kebutuhan Khusus:</label>
        <select id="kebutuhan_khusus_ibu" name="kebutuhan_khusus_ibu">
            <option value="Tidak">Tidak</option>
            <option value="Netra">Netra</option>
            <option value="Rungu">Rungu</option>
            <option value="Grahita Ringan">Grahita Ringan</option>
            <option value="Grahita Sedang">Grahita Sedang</option>
            <option value="Daksa Ringan">Daksa Ringan</option>
            <option value="Daksa Sedang">Daksa Sedang</option>
            <option value="Laras">Laras</option>
            <option value="Wicara">Wicara</option>
            <option value="Tuna Ganda">Tuna Ganda</option>
            <option value="Hiperaktif">Hiperaktif</option>
            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
            <option value="Bakat Istimewa">Bakat Istimewa</option>
            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
            <option value="Narkoba">Narkoba</option>
            <option value="Indigo">Indigo</option>
            <option value="Down Syndrome">Down Syndrome</option>
            <option value="Autis">Autis</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        
        <input type="submit" value="Submit">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <?php
// Informasi koneksi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'datalengkap';

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die('Koneksi database gagal: ' . $conn->connect_error);
}

// Proses data yang dikirimkan dari formulir
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir
    $namaibu = $_POST['nama_ibu'] ?? '';
    $tahunLahir = $_POST['tahun_lahir_ibu'] ?? '';
    $pendidikan = $_POST['pendidikan_ibu'] ?? '';
    $pekerjaan = $_POST['pekerjaan_ibu'] ?? '';
    $penghasilan = $_POST['penghasilan_ibu'] ?? '';
    $kebutuhanKhusus = $_POST['kebutuhan_khusus_ibu'] ?? '';

    // Menyimpan data ke database
    $sql = "INSERT INTO data_lengkap (nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu) 
            VALUES ('$namaibu', '$tahunLahir', '$pendidikan', '$pekerjaan', '$penghasilan', '$kebutuhanKhusus')";

    if ($conn->query($sql) === true) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
</body>
</html>
