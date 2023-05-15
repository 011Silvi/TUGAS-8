<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url(photo-1483232539664-d89822fb5d3e.jpg);
        }

        .container {
            width: 350px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .container h2 {
            text-align: center;
            color: #333;
        }

        .container form {
            margin-top: 20px;
        }

        .container form input[type="text"],
        .container form input[type="password"] {
            width: 94%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "datalengkap");

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Proses login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Query untuk memeriksa keberadaan pengguna
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        // Eksekusi query
        $result = mysqli_query($conn, $query);

        // Periksa apakah query berhasil dieksekusi dan pengguna ditemukan
        if ($result && mysqli_num_rows($result) > 0) {
            // Proses login berhasil
            echo "<p>Login berhasil. Selamat datang, " . $username . "!</p>";
        } else {
            // Proses login gagal
            echo "<p>Login gagal. Silakan cek kembali username dan password Anda.</p>";
        }
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>
    <
</body>
</html>
