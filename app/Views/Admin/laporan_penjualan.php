<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div style="border-bottom:1px solid black;padding-bottom: 1rem;margin: 1rem 0;" class="text-center">
        <h1>Laporan Penjualan Tiket </h1> 
    </div>
    
    <div class="row">
        <table class="table table-bordered table-striped" style="width: 100%;">
            <thead>
                <tr>
                <th style="width: 6%;">No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Prodi</th>
        
            <th>Judul</th>
            <th>Harga</th>
            <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($tampildata as $row) :
                ?>
                    <tr>
                    <td><?= $nomor++; ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['prodi'] ?></td>
          
                <td><?= $row['judul'] ?></td>
                <td><?= $row['hrg'] ?></td>
                <td><?= date('d F Y',strtotime ( $row['tgl'])); ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>