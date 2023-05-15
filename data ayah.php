<!DOCTYPE html>
<html>
<head>
    <title>Form Data Ayah</title>
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
    <h2>Form Data Ayah</h2>
    <form action="data ibu.php" method="POST">
        <label for="nama_ayah">Nama Ayah Kandung:</label>
        <input type="text" id="nama_ayah" name="nama_ayah" required><br>
        
        <label for="tahun_lahir">Tahun Lahir:</label>
        <input type="text" id="tahun_lahir" name="tahun_lahir" required><br>
        
        <label for="pendidikan">Pendidikan Terakhir:</label>
        <input type="text" id="pendidikan" name="pendidikan" required><br>
        
        <label for="pekerjaan">Pekerjaan:</label>
        <select id="pekerjaan" name="pekerjaan">
            <option value="PNS">PNS</option>
            <option value="TNI/Polri">TNI/Polri</option>
            <option value="Swasta">Swasta</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Pensiunan">Pensiunan</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        
        <label for="penghasilan">Penghasilan per Bulan:</label>
        <select id="penghasilan" name="penghasilan">
            <option value="< 1 juta">< 1 juta</option>
            <option value="1 - 3 juta">1 - 3 juta</option>
            <option value="3 - 5 juta">3 - 5 juta</option>
            <option value="> 5 juta">> 5 juta</option>
        </select><br>
        
        <label for="kebutuhan_khusus">Kebutuhan Khusus:</label>
        <select id="kebutuhan_khusus" name="kebutuhan_khusus">
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
        
        <input type="submit" value="NEXT">
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
    $namaAyah = $_POST['nama_ayah'] ?? '';
    $tahunLahir = $_POST['tahun_lahir_ayah'] ?? '';
    $pendidikan = $_POST['pendidikan_ayah'] ?? '';
    $pekerjaan = $_POST['pekerjaan_ayah'] ?? '';
    $penghasilan = $_POST['penghasilan_ayah'] ?? '';
    $kebutuhanKhusus = $_POST['kebutuhan_khusus_ayah'] ?? '';

    // Menyimpan data ke database
    $sql = "INSERT INTO data_lengkap (nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah) 
            VALUES ('$namaAyah', '$tahunLahir', '$pendidikan', '$pekerjaan', '$penghasilan', '$kebutuhanKhusus')";

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

