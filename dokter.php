<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid lightsteelblue;
        }
        thead {
            background-color: #ffb6c1;
        }
    </style>
</head>
<body>
    <h1 style>KLINIK MAULANA HASAN</h1>
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>id_dokter</td>
                <td>Nama_dokter</td>                      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM dokter');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['Nama_dokter'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>