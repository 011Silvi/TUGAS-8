<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi Peserta Didik</title>
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

    <h2>Form Registrasi Peserta Didik</h2>
    <form action="data diri.php" method="POST">
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>
        
        <label for="jenis_pendaftaran">Jenis Pendaftaran:</label>
        <select id="jenis_pendaftaran" name="jenis_pendaftaran">
            <option value="Baru">Baru</option>
            <option value="Pindahan">Pindahan</option>
        </select><br><br>
        
        <label for="tanggal_masuk">Tanggal Masuk Sekolah:</label>
        <input type="date" id="tanggal_masuk" name="tanggal_masuk" required><br><br>
        
        <label for="nis">NIS:</label>
        <input type="text" id="nis" name="nis" required><br><br>
        
        <label for="nomor_peserta">Nomor Peserta Ujian:</label>
        <input type="text" id="nomor_peserta" name="nomor_peserta" required><br><br>
        
        <label for="no_seri_shun">No. Seri SHUN:</label>
        <input type="text" id="no_seri_shun" name="no_seri_shun" required><br><br>
        
        <label for="no_seri_ijazah">No. Seri Ijazah:</label>
        <input type="text" id="no_seri_ijazah" name="no_seri_ijazah" required><br><br>
        
        <label for="hobi">Hobi:</label>
        <input type="text" id="hobi" name="hobi" required><br><br>
        
        <label for="cita_cita">Cita-cita:</label>
        <input type="text" id="cita_cita" name="cita_cita" required><br><br>
        
        <a href="data diri.php"><button>NEXT</button></a>
    </form>
    <?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "datalengkap");

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    // Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai-nilai dari form
    $tanggal = $_POST["tanggal"];
    $jenis_pendaftaran = $_POST["jenis_pendaftaran"];
    $tanggal_masuk = $_POST["tanggal_masuk"];
    $nis = $_POST["nis"];
    $nomor_peserta = $_POST["nomor_peserta"];
    $no_seri_shun = $_POST["no_seri_shun"];
    $no_seri_ijazah = $_POST["no_seri_ijazah"];
    $hobi = $_POST["hobi"];
    $cita_cita = $_POST["cita_cita"];

    // Menyimpan data ke tabel database
    $sql = "INSERT INTO data_lengkap (tanggal, jenis_pendaftaran, tanggal_masuk, nis, nomor_peserta, no_seri_shun, no_seri_ijazah, hobi, cita_cita)
            VALUES ('$tanggal', '$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomor_peserta', '$no_seri_shun', '$no_seri_ijazah', '$hobi', '$cita_cita')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>

</body>
</html>
