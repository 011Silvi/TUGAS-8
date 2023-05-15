<!DOCTYPE html>
<html>
<head>
    <title>Form Data Pribadi</title>
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
    <h2>Form Data Diri</h2>
    <form action="data ayah.php" method="POST">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        
        <label for="nisn">NISN:</label>
        <input type="text" id="nisn" name="nisn" required><br>
        
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br>
        
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
        
        <label for="agama">Agama:</label>
        <select id="agama" name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br>
        
        <label for="berkebutuhan_khusus">Berkebutuhan Khusus:</label>
        <select id="berkebutuhan_khusus" name="berkebutuhan_khusus">
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
            <option value="Indigo
">Indigo</option>
            <option value="Down Syndrome">Down Syndrome</option>
            <option value="Autis">Autis</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br>
        
        <label for="rt">RT:</label>
        <input type="text" id="rt" name="rt" required><br>
        
        <label for="rw">RW:</label>
        <input type="text" id="rw" name="rw" required><br>
        
        <label for="dusun">Nama Dusun:</label>
        <input type="text" id="dusun" name="dusun" required><br>
        
        <label for="kelurahan">Kelurahan/Desa:</label>
        <input type="text" id="kelurahan" name="kelurahan" required><br>
        
        <label for="kecamatan">Kecamatan:</label>
        <input type="text" id="kecamatan" name="kecamatan" required><br>
        
        <label for="kode_pos">Kode Pos:</label>
        <input type="text" id="kode_pos" name="kode_pos" required><br>
        
        <label for="tempat_tinggal">Tempat Tinggal:</label>
        <select id="tempat_tinggal" name="tempat_tinggal">
            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
            <option value="Wali">Wali</option>
            <option value="Kos">Kos</option>
            <option value="Asrama">Asrama</option>
            <option value="Panti Asuhan">Panti Asuhan</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        
        <label for="transportasi">Transportasi:</label>
        <select id="transportasi" name="transportasi">
            <option value="Jalan Kaki">Jalan Kaki</option>
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Kendaraan Umum">Kendaraan Umum</option>
            <option value="Jemputan Sekolah">Jemputan Sekolah</option>
            <option value="Kereta">Kereta</option>
            <option value="Ojek">Ojek</option>
            <option value="Lainnya">Lainnya</option>
        </select><br>
        
        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" required><br>
        
        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="text" id="nomor_telepon" name="nomor_telepon" required><br>
        
        <label for="email">Email Pribadi:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label>Penerima KIP:</label>
        <input type="radio" id="penerima_kip_ya" name="penerima
_kip" value="Ya">
        <label for="penerima_kip_ya">Ya</label>
        <input type="radio" id="penerima_kip_tidak" name="penerima_kip" value="Tidak">
        <label for="penerima_kip_tidak">Tidak</label><br>
        
        <label for="no_kps">No. KPS/KKS/PKH/KIP:</label>
        <input type="text" id="no_kps" name="no_kps"><br>
        
        <label for="kewarganegaraan">Kewarganegaraan:</label>
        <select id="kewarganegaraan" name="kewarganegaraan">
            <option value="WNI">Warga Negara Indonesia (WNI)</option>
            <option value="WNA">Warga Negara Asing (WNA)</option>
        </select><br>
        
        <input type="submit" value="NEXT">
    </form>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    $nama_lengkap = $_POST["nama_lengkap"] ?? "";
    $jenis_kelamin = $_POST["jenis_kelamin"] ?? "";
    $nisn = $_POST["nisn"] ?? "";
    $nik = $_POST["nik"] ?? "";
    $tempat_lahir = $_POST["tempat_lahir"] ?? "";
    $tanggal_lahir = $_POST["tanggal_lahir"] ?? "";
    $agama = $_POST["agama"] ?? "";
    $berkebutuhan_khusus = $_POST["berkebutuhan_khusus"] ?? "";
    $alamat = $_POST["alamat"] ?? "";
    $rt = $_POST["rt"] ?? "";
    $rw = $_POST["rw"] ?? "";
    $dusun = $_POST["dusun"] ?? "";
    $kelurahan = $_POST["kelurahan"] ?? "";
    $kecamatan = $_POST["kecamatan"] ?? "";
    $kode_pos = $_POST["kode_pos"] ?? "";
    $tempat_tinggal = $_POST["tempat_tinggal"] ?? "";
    $transportasi = $_POST["transportasi"] ?? "";
    $nomor_hp = $_POST["nomor_hp"] ?? "";
    $nomor_telepon = $_POST["nomor_telepon"] ?? "";
    $email = $_POST["email"] ?? "";
    $penerima_kip = $_POST["penerima_kip"] ?? "";
    $no_kps = $_POST["no_kps"] ?? "";
    $kewarganegaraan = $_POST["kewarganegaraan"] ?? "";

    // Menyimpan data ke tabel database
    $sql = "INSERT INTO data_lengkap (nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, nomor_hp, nomor_telepon, email, penerima_kip, no_kps, kewarganegaraan)
            VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$nomor_hp', '$nomor_telepon', '$email', '$penerima_kip', '$no_kps', '$kewarganegaraan')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>

</body>
</html>
