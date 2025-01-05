<?php

#memulakan fungsi session
session_start();

#memanggil fail header dan staff_guard
include('header.php');
include('staff_guard.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <title>Muat Naik Data Staff</title>
</head>
<body>
<div class="content-container">
<!--Tajuk laman -->
<h3>Muat Naik Data Staff (*.txt)</h3>

<!-- Borang utk memuat naik fail -->
<form action='proses_upload_staff.php' method='POST' enctype='multipart/form-data'>
    <div class="input-file-container">
        <input type='file' name='data_staff' id='data_staff' class='input-file'>
        <label for='data_staff' class='label-file'>Sila pilih fail txt yang ingin dimuat naik</label>
    </div>
    <input type='submit' name='btn_upload'>
</form>
</div>
<?php include('footer.php');?>
</body>
</html>
