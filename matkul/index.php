<?php
include('class_matkul.php');

$matkul=new class_matkul;
$data=$matkul->getAll();


?>


<html>
    <head>

    </head>
    <body>
        <h1>Data Mata Kuliah</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>
        <table>
            <tr>
                <th>No</th>
                <th>Kode Matkul</th>
                <th>Matakuliah</th>
                <th>sks</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no=0;
            while($rec=$data->fetch_array()){
                $no++;?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['kd_matkul'];?></td>
                    <td><?php echo $rec['nama'];?></td>
                    <td><?php echo $rec['sks'];?></td>
                    <td>
                    <a href="edit.php?kd_matkul=<?php echo $rec['kd_matkul'];?>">Edit</a>
                    <a href="hapus.php?kd_matkul=<?php echo $rec['kd_matkul'];?>">hapus</a>
                </td>
                    
                </tr>
<?php
            }
            ?>
        </table>
    </body>
</html>