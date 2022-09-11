<?php
include('class_jadwal.php');

$jadwal=new class_jadwal;
$dataMatkul=$jadwal->getMatkul();
$dataDosen=$jadwal->getDosen();



?>
<html>
    <head></head>
    <body>
        <h1>Tambah Jadwal</h1>
        <form action="#" method="post">
            <p><label>Pilih Matkul : </label>
        <select name="kd_matkul">
            <?php
            while($rec =$dataMatkul->fetch_array()){?>
            <option value="<?php echo $rec['kd_matkul'] ;?>"><?php echo $rec['nama'] ;?></option>
           <?php }
            ?>       
        </select></p>

        <p><label>Pilih Dosen : </label>
        <select name="kd_dosen">
            <?php
            while($rec =$dataDosen->fetch_array()){?>
            <option value="<?php echo $rec['kd_dosen'] ;?>"><?php echo $rec['nama'] ;?></option>
           <?php }
            ?>       
        </select></p>

        <p>
            <label>Ruang : </label><input type="text" name="ruang">
                    </p>
                    <p>
            <label>Waktu : </label><input type="text" name="waktu">
                    </p>

                    <p><button type="submit" name="simpan">Simpan</button></p>
        </form>
        <?php 
           if(isset($_POST['simpan'])){
     
            $jadwal->add_data($_POST['kd_matkul'],$_POST['kd_dosen'],$_POST['ruang'],$_POST['waktu']);
            header("location:index.php");
        }

        ?>

        
    </body>



</html>