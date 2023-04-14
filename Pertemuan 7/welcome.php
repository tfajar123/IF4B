<?php
session_start();

if(isset($_SESSION['nama'])){
    $nama = $_SESSION['nama'];
    $sex = $_SESSION['sex'];
    $tempat = $_SESSION['tempat'];
    $tanggal = $_SESSION['tanggal'];
    $agama = $_SESSION['agama'];
    $alamat = $_SESSION['alamat'];
}
else{
    $nama = [];
    $sex = [];
    $tempat = [];
    $tanggal = [];
    $agama = [];
    $alamat = [];
}

if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $sex = $_POST['sex'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
}

$_SESSION['nama'] = $nama;
$_SESSION['sex'] = $sex;
$_SESSION['tempat'] = $tempat;
$_SESSION['tanggal'] = $tanggal;
$_SESSION['agama'] = $tanggal;
$_SESSION['alamat'] = $alamat;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
        table{
            margin-top: 150px;
            border: 1px solid;
            background-color: #eee;
        }
        td{
            border: 0px;
            padding: 10px;
        }
        th{
            border-bottom: 1px solid;
            background-color: #ddd;
        }
    </style>
</head>
<body>
        <table align="center">
            <tr>
                <th colspan="2"><h2 align="center">MY BIODATA</h2></th>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td><?php echo $sex ?></td>
            </tr>
            <tr>
                <td>Tempat, Tangal Lahir : </td>
                <td><?php echo $tempat . ", " . $tanggal ?></td>
            </tr>
            <tr>
            <td>Agama :</td>
                <td><?php echo $agama ?></td>
            </tr>
            <tr>
                <td>Alamat Lengkap :</td>
                <td><?php echo $alamat ?></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><button onclick="goBack()">Kembali</button>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                </td>
            </tr>
        </table>
</body>
</html>