<?php
include('../koneksi.php');

class class_matkul{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;

        }

        function getAll(){
            $data=$this->con->query("select * from tbl_matkul");
            return $data;
        }
}

$matkul=new class_matkul;
$data=$matkul->getAll();

while($rec=$data->fetch_array()){
    echo $rec['kd_matkul']."<br>";
}

?>