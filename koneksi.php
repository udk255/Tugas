<?php
class koneksi{
    public $con;

    function __construct(){
        $this->con=new mysqli("localhost","root","","pelatihan");
    }


    function validasi_login($username,$password){
        $data=$this->con->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
    }

}




?>