<?php
    if (!isset($_COOKIE["setting"])) {
        header("location: setting.php?todo=1");
    } else {
        $arr_set = $_COOKIE["setting"];

        $ipk_default = ($arr_set["ipk"]) ? $arr_set["ipk"] : "";
        $alamat_default = ($arr_set["alamat"]) ? $arr_set["alamat"] : "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><b>Isikan data anda disini</b></h1>
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <p>
            <label>NRP* : </label>
            <input type="text" name="txtnrp" required>
        </p>
        <p>
            <label>Nama* : </label>
            <input type="text" name="txtnama" required>
        </p>
        <p>
            <?php $wajib_diisi = ($alamat_default == "y") ? true : false; ?>
            <label>Alamat<?php if ($wajib_diisi == true) echo "*"; ?> : </label>
            <textarea name="txtalamat" <?php if ($wajib_diisi == true) echo "required"; ?>></textarea>
        </p>
        <p>
            <label>IPK* : </label>
            <input type="number" step="any" name="txtipk" min="0" max="4" value=<?php echo $ipk_default; ?> required>
        </p>
        <p>
            <input type="submit" name="btnsimpaninput" value="Simpan">
        </p>
    </form>
    <p style="font-size: medium; font-style: normal;"><a href='index.php'>Kembali ke Halaman Utama</a></p>
</body>
</html>