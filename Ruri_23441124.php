<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* font-family pada CSS adalah untuk menentukan jenis font yang akan digunakan pada teks */
            display: flex; /* display digunakan untuk mengatur bagaimana elemen HTML ditampilkan di halaman web */
            justify-content: center; /* justify-content berfungsi untuk menyelaraskan dan mendistribusikan item flex di sepanjang sumbu utama wadah flex */
            align-items: center; /* erfungsi untuk mengatur posisi item secara vertikal atau horizontal dalam wadah flexbox atau grid */
            height: 100vh; /* kegunaan height adalah untuk menentukan tinggi suatu elemen */
            margin: 0; /* margin digunakan untuk mengontrol jarak antara elemen tersebut dan elemen di sekitarnya */
            background-color: #f4f4f4; /* background color untuk memberikan atau menentukan warna background  */
        }
        .calculator {
            padding: 20px; /*padding digunakan untuk memberikan ruang di dalam elemen, antara konten elemen dan tepi (border) elemen. Dengan kata lain, padding memberi jarak antara konten dan batas elemen. */
            background-color: #fff;
            border: 2px solid #ddd; /* border digunakan untuk memberikan garis batas di sekitar elemen. Kamu bisa mengatur ketebalan, gaya, dan warna border */
            border-radius: 8px; /* border-radius digunakan untuk memberikan sudut yang melengkung pada elemen, sehingga membuat border tidak tajam. Properti ini berguna untuk membuat elemen lebih halus atau berbentuk lingkaran */
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="number"], select, button {
            width: 100%; /* width menentukan lebar elemen. Lebar bisa ditentukan menggunakan berbagai unit (px, %, em, dll.) */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #0000FF;
            color: white;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #6495ED;
        }
        h3 {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="number" name="angka1" required placeholder="Angka pertama">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" required placeholder="Angka kedua">
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) { /* proses perhitungan menggunakan sistem eval Fungsi eval() dalam PHP digunakan untuk mengevaluasi string sebagai kode PHP */
        $hasil = eval('return '.$_POST['angka1'] . $_POST['operator'] . $_POST['angka2'] . ';');
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</div>

</body>
</html>
