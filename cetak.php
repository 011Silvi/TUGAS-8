<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datalengkap";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan data dari tabel
$sql = "SELECT id, tanggal, jenis_pendaftaran, tanggal_masuk, nis, nomor_peserta, no_seri_shun, no_seri_ijazah, hobi, cita_cita, nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, nomor_hp, nomor_telepon, email, penerima_kip, no_kps, kewarganegaraan, nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah, nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu FROM data_lengkap";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
   while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>ID:</td><td>" . $row["id"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tanggal:</td><td>" . $row["tanggal"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Pendaftaran:</td><td>" . $row["jenis_pendaftaran"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tanggal Masuk:</td><td>" . $row["tanggal_masuk"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>NIS:</td><td>" . $row["nis"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nomor Peserta:</td><td>" . $row["nomor_peserta"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>No. Seri SHUN:</td><td>" . $row["no_seri_shun"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>No. Seri Ijazah:</td><td>" . $row["no_seri_ijazah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Hobi:</td><td>" . $row["hobi"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Cita-cita:</td><td>" . $row["cita_cita"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Lengkap:</td><td>" . $row["nama_lengkap"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin:</td><td>" . $row["jenis_kelamin"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>NISN:</td><td>" . $row["nisn"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>NIK:</td><td>" . $row["nik"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tempat Lahir:</td><td>" . $row["tempat_lahir"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tanggal Lahir:</td><td>" . $row["tanggal_lahir"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Agama:</td><td>" . $row["agama"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Berkebutuhan Khusus:</td><td>" . $row["berkebutuhan_khusus"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Alamat:</td><td>" . $row["alamat"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>RT:</td><td>" . $row["rt"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>RW:</td><td>" . $row["rw"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<tr>";
    echo "<td>Dusun:</td><td>" . $row["dusun"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kelurahan:</td><td>" . $row["kelurahan"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kecamatan:</td><td>" . $row["kecamatan"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kode Pos:</td><td>" . $row["kode_pos"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tempat Tinggal:</td><td>" . $row["tempat_tinggal"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Transportasi:</td><td>" . $row["transportasi"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nomor HP:</td><td>" . $row["nomor_hp"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nomor Telepon:</td><td>" . $row["nomor_telepon"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Email:</td><td>" . $row["email"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Penerima KIP:</td><td>" . $row["penerima_kip"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>No. KPS:</td><td>" . $row["no_kps"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kewarganegaraan:</td><td>" . $row["kewarganegaraan"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Ayah:</td><td>" . $row["nama_ayah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tahun Lahir Ayah:</td><td>" . $row["tahun_lahir_ayah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Ayah:</td><td>" . $row["pendidikan_ayah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pekerjaan Ayah:</td><td>" . $row["pekerjaan_ayah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Penghasilan Ayah:</td><td>" . $row["penghasilan_ayah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kebutuhan Khusus Ayah:</td><td>" . $row["kebutuhan_khusus_ayah"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Ibu:</td><td>" . $row["nama_ibu"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tahun Lahir Ibu:</td><td>" . $row["tahun_lahir_ibu"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Ibu:</td><td>" . $row["pendidikan_ibu"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pekerjaan Ibu:</td><td>" . $row["pekerjaan_ibu"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<tr>";
    echo "<td>Penghasilan Ibu:</td><td>" . $row["penghasilan_ibu"] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kebutuhan Khusus Ibu:</td><td>" . $row["kebutuhan_khusus_ibu"] . "</td>";
    echo "</tr>";

        // Tambahkan kode untuk menampilkan data lainnya sesuai dengan field yang ada di tabel
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan";
}

$conn->close();
?>