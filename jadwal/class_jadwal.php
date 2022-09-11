<?php
include('../koneksi.php');

class class_jadwal{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;

        }

        function getAll(){
            $data=$this->con->query("Select j.id, j.ruang, j.waktu, m.nama as nama_matkul, d.nama as nama_dosen from tbl_jadwal j INNER JOIN tbl_matkul m on j.kd_matkul=m.kd_matkul INNER JOIN tbl_dosen d ON j.kd_dosen=d.kd_dosen ");
            return $data;
        }

        function getMatkul(){
            $data=$this->con->query("select * from tbl_matkul");
            return $data;
        }

        function getDosen(){
            $data=$this->con->query("select * from tbl_Dosen");
            return $data;
        }

        function add_data($kd_matkul,$kd_dosen,$ruang,$waktu){
            $this->con->query("insert into tbl_jadwal(kd_matkul,kd_dosen,ruang,waktu) values('$kd_matkul','$kd_dosen','$ruang','$waktu')");
            return true;
        }

        function delete($id){
            $this->con->query("delete from tbl_jadwal where id='$id'");
            return true;
       
        }


    

}




?>