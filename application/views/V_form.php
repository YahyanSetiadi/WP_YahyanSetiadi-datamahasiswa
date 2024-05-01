<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Mahasiswa</title>
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
    }

    label {
        display: block;
        margin-bottom: 3px;
        font-weight: bold;
        color: #f9f9f9; /* Warna teks label */
    }

    input[type="text"],
    input[type="date"],
    textarea,
    select {
        width: calc(100% - 16px);
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
        margin-top: 3px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    .btn {
        background-color: #7971ea;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        margin-top: 10px;
    }

    .btn:hover {
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
    <center><h1 style="color: #f9f9f9;">Form Input Mahasiswa</h1></center>
    <form action="<?php echo base_url('welcome/proses') ?>" method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                <label for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <select id="agama" name="agama" required>
                <option value="" disabled selected>-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="form-group">
            <label for="prodi">Prodi:</label>
            <select id="prodi" name="prodi" required>
                <option value="" disabled selected>-- Pilih Prodi --</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            </select>
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>

</body>
</html>
