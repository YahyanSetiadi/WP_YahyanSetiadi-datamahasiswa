<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>output Mahasiswa</title>
<style>
    body {
        font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        background-color: #f4f4f4;
    }

    .container {
        max-width: 500px;
        margin: 20px auto;
        background: #666666;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        position: relative;
    }

    .form-group {
        margin-bottom: 10px;
        margin-left: 25px;
    }

    label {
        display: block;
        margin-bottom: 3px;
        font-weight: bold;
        color: #f9f9f9; 
    }



    a {
        background-color: #7971ea;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        margin: 25px;
        margin-left: 150px;
        text-decoration: none;
        
    }

    .a:hover {
        background-color: #6258d6;
    }

    /* Custom styling for radio buttons */
    .radio-group {
        display: flex;
        align-items: center;
    }

    .radio-group input[type="radio"] {
        display: none;
    }

    .radio-group label {
        cursor: pointer;
        padding: 10px 20px;
        border: 2px solid #7971ea;
        border-radius: 4px;
        margin-right: 10px;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        color: #f9f9f9; /* Warna teks label */
    }

    .radio-group input[type="radio"]:checked + label {
        background-color: #7971ea;
        color: white;
        border-color: #7971ea;
    }

    /* Tombol silang */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        color: #f9f9f9;
        cursor: pointer;
        background: transparent;
        border: none;
        outline: none;
    }

    .close-btn:hover {
        color: #ccc;
    }
</style>
</head>
<body>

<div class="container">
    <button class="close-btn" onclick="window.location.href='<?php echo base_url().'welcome' ?>'">&times;</button>
    <center><h1 style="color: #f9f9f9;">Data Mahasiswa</h1></center>
        
        <div class="form-group">
            <label for="nama">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?= $nama; ?></label>
            
        </div>
        <div class="form-group">
            <label for="nim">NIM  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp; <?= $nim; ?></label>
            
        </div>
        <div class="form-group">
            <label for="kelas">Kelas  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp; <?= $kelas; ?></label>
            
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir    : &nbsp;<?= $tgl_lahir; ?></label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?= $alamat; ?></label>

        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin    : &nbsp;<?= $jenis_kelamin; ?></label>

        </div>
        <div class="form-group">
            <label for="agama">Agama  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp; <?= $agama; ?></label>

        </div>
        <div class="form-group">
            <label for="prodi">Prodi &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp;<?= $prodi; ?></label>
        </div>
        <div class="form-group">
            <label for="prodi">Biaya Kuliah &nbsp;&nbsp; : &nbsp;<?= $biaya_kuliah; ?></label>
        </div>
        <br>
        <a href="<?php echo base_url().'welcome/form' ?>" class="btn btn-primary btn-pill">Kembali ke From Input </a>
</div>

</body>
</html>
