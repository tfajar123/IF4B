<!DOCTYPE html>
<head>
    <title>Biodata</title>
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
    <form action="welcome.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2"><h2 align="center">BIODATA</h2></th>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="sex">Jenis Kelamin :</label></td>
                <td><select name="sex" id="sex">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td>Tempat Lahir :</td>
                <td><input type="text" name="tempat"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="text" name="tanggal"></td>
            </tr>
            <tr>
            <td><label for="agama">Agama :</label></td>
                <td><select name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kristen">Kristen</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat Lengkap :</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="biodata" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>