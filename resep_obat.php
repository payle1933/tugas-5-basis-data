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
				<td>id_resep</td>
                <td>id_berobat</td>  
                <td>id_obat</td>                      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM resep_obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_resep'] ?></td>
                <td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_obat'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>