<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
    <script src="./tailwind/config.js"></script>
    <link rel="stylesheet" href="./tailwind/style.css">
<body>
<div class="md:container md:mx-auto p-10">
  <h1 class="text-4xl font-bold">Data Mahasiswa</h1>
  <h6 class="text-xl font-normal my-5 text-gray-500">
    Universitas Maju Mundur
  </h6>
  <div class="border-t-4 border-gray-300"></div>
    <ul class="grid w-full gap-6 md:grid-cols-2 my-5">
        <li>
            <p class="text-xl font-bold">
                Nama Mahasiswa
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['name'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Jenis Kelamin
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                $gender = $_POST['gender'] ?? '';
                echo '<p class="text-xl font-normal my-1">' . $gender . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Tempat Lahir
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['tempat_lahir'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Tanggal Lahir
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                $tanggal_lahir = date_create($_POST['tanggal_lahir']);
                echo '<p class="text-xl font-normal my-1">' . date_format($tanggal_lahir, "d F Y") . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Agama
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['agama'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Telepon
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['telepon'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Email
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['email'] . '</p>';
            }
            ?>
        </li>
    </ul>

  <h1 class="text-4xl font-bold">Alamat</h1>
  <div class="border-t-4 border-gray-300 mt-5"></div>
  <ul class="grid w-full gap-6 md:grid-cols-2 my-5">
    <li>
        <p class="text-xl font-bold">
            Provinsi
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all form data
            echo '<p class="text-xl font-normal my-1">' . $_POST['provinsi'] . '</p>';
        }
        ?>
    </li>
    <li>
        <p class="text-xl font-bold">
            Kabupaten/Kota
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all form data
            echo '<p class="text-xl font-normal my-1">' . $_POST['kabupaten_kota'] . '</p>';
        }
        ?>
    </li>
    <li>
        <p class="text-xl font-bold">
            Kecamatan
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all form data
            echo '<p class="text-xl font-normal my-1">' . $_POST['kecamatan'] . '</p>';
        }
        ?>
    </li>
    <li>
        <p class="text-xl font-bold">
            Kelurahan/Desa
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all form data
            echo '<p class="text-xl font-normal my-1">' . $_POST['kelurahan_desa'] . '</p>';
        }
        ?>
    </li>
    <li>
        <p class="text-xl font-bold">
            Alamat
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all form data
            echo '<p class="text-xl font-normal my-1">' . $_POST['alamat'] . '</p>';
        }
        ?>
    </li>
    <li>
        <p class="text-xl font-bold">
            Kode Pos
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve all form data
            echo '<p class="text-xl font-normal my-1">' . $_POST['kode_pos'] . '</p>';
        }
        ?>
    </li>
  </ul>

    <h1 class="text-4xl font-bold">Data Orang Tua</h1>
    <div class="border-t-4 border-gray-300 mt-5"></div>
    <ul class="grid w-full gap-6 md:grid-cols-2 my-5">
        <li>
            <p class="text-xl font-bold">
                Nama Ayah
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['nama_ayah'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Nama Ibu
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['nama_ibu'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Pekerjaan Ayah
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['pekerjaan_ayah'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Pekerjaan Ibu
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                echo '<p class="text-xl font-normal my-1">' . $_POST['pekerjaan_ibu'] . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Pendidikan Ayah
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                $pendidikan_ayah = $_POST['pendidikan_ayah'];
                echo '<p class="text-xl font-normal my-1">' . $pendidikan_ayah . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Pendidikan Ibu
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                $pendidikan_ibu = $_POST['pendidikan_ibu'];
                echo '<p class="text-xl font-normal my-1">' . $pendidikan_ibu . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Penghasilan Ayah
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                $penghasilan_ayah = $_POST['penghasilan_ayah'];
                echo '<p class="text-xl font-normal my-1">' . $penghasilan_ayah . '</p>';
            }
            ?>
        </li>
        <li>
            <p class="text-xl font-bold">
                Penghasilan Ibu
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve all form data
                $penghasilan_ibu = $_POST['penghasilan_ibu'];
                echo '<p class="text-xl font-normal my-1">' . $penghasilan_ibu . '</p>';
            }
            ?>
        </li>
    </ul>
    <!-- button back -->
    <div class="flex justify-end">
        <a href="index.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
            Kembali
        </a>
    </div>
</div>
</body>
</html>
