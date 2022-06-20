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
    <style>
        font,tr,td {
            font-color: #ff1493;
        }
    </style>
</head>
<body>
    <h1 style>KLINIK MAULANA HASAN</h1>
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>id_berobat</td>
                <td>id_pasien</td>  
                <td>id_dokter</td>
                <td>Tanggal_berobat</td>
                <td>Keluhan_pasien</td>
                <td>Hasil_Diagnosa</td>
                <td>Penatalaksaan</td>   
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM berobat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['Tanggal_berobat'] ?></td>
                <td><?php echo $data['Keluhan_pasien'] ?></td>
                <td><?php echo $data['Hasil_Diagnosa'] ?></td>
                <td><?php echo $data['penatalaksaan'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>