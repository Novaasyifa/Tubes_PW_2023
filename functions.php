<?php
define('BASE_URL', '/pw2023_223040112/Tubes/');

function connect()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubess') or
    die('KONEKSI KE DATABASE GAGAL!');

  return $conn;
}

function query($query)
{
  $conn = connect();
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };

  return $rows;
}

//tambah
function createData($data, $tableName)
{
  // Create a connection to the database
  $conn = connect();

  // Check the connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Build the query
  $columns = implode(", ", array_keys($data));
  $values = "'" . implode("', '", array_values($data)) . "'";
  $query = "INSERT INTO $tableName ($columns) VALUES ($values)";

  // Execute the query
  if (mysqli_query($conn, $query)) {
    echo "Data created successfully";
  } else {
    echo "Error creating data: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}

function uploadImage($file, $targetDirectory)
{
  // Mengambil informasi file
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];

  // Mengecek apakah terjadi error saat mengunggah file
  if ($fileError !== 0) {
    echo "Terjadi kesalahan saat mengunggah file.";
    return false;
  }

  // Memeriksa tipe file
  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  $allowedExtensions = array('jpg', 'jpeg', 'png');
  if (!in_array($fileExt, $allowedExtensions)) {
    echo "Tipe file tidak diizinkan. Harap unggah file dengan ekstensi JPG, JPEG, atau PNG.";
    return false;
  }

  // Memeriksa ukuran file (maksimal 2MB)
  $maxFileSize = 2 * 1024 * 1024; // 2 MB
  if ($fileSize > $maxFileSize) {
    echo "Ukuran file terlalu besar. Maksimal ukuran file adalah 2MB.";
    return false;
  }

  // Menghasilkan nama unik untuk file yang diunggah
  $uniqueFileName = uniqid('', true) . '.' . $fileExt;

  // Memindahkan file yang diunggah ke direktori tujuan
  $targetPath = $targetDirectory . '/' . $uniqueFileName;
  if (move_uploaded_file($fileTmpName, $targetPath)) {
    return $targetPath; // Mengembalikan path file yang diunggah
  } else {
    echo "Terjadi kesalahan saat memindahkan file.";
    return false;
  }
}

//search
function cari($keyword)
{
  $query = "SELECT * FROM produk
				WHERE
			  nama_produk LIKE '%$keyword%' OR
			  harga LIKE '%$keyword%' OR
			  kategori LIKE '%$keyword%' OR
			  stok LIKE '%$keyword%'
			";
  return query($query);
}



//ubah
function ubah($data)
{
  $conn = connect();

  $id = $data["id_produk"];
  $namaProduk = htmlspecialchars($data["nama_produk"]);
  $kategori = htmlspecialchars($data["kategori"]);
  $stok = htmlspecialchars($data["stok"]);
  $harga = htmlspecialchars($data["harga"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = uploadImage($_FILES['gambar'], 'img/uploads');
    $_POST['gambar'] = $gambar;
  }

  $query = "UPDATE produk SET
        nama_produk = '$namaProduk',
        kategori = '$kategori',
        stok = $stok,
        harga = $harga,
				gambar = '$gambar'
			  WHERE id_produk = $id
			";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//hapus
function hapus($id)
{
  $conn = connect();
  mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id");
  return mysqli_affected_rows($conn);
}


//registrasi
function registrasi($data)
{
  $conn = connect();

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
    return false;
  }


  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan userbaru ke database
  mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);
}
