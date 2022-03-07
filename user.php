<?php

 
class user{
    private $db;

    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();  
    }

    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM `data` as d inner join `job` as j on d.avail = j.job_id");
        $show->execute();
        $data = $show->fetch();
        return $data;
    }
    public function tampil_1()
    {
        $show = $this->db->prepare("SELECT * FROM `job`");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
    
    public function ubah($name, $role, $avail, $age, $loc, $years, $email){
        $update = $this->db->prepare('UPDATE `data` set
        `name`=?,`role`=?, avail=?,`age`=?, `loc`=?, `years`=?, `email`=? where id=1');
        $update->bindParam(1, $name);
        $update->bindParam(2, $role);
        $update->bindParam(3, $avail);
        $update->bindParam(4, $age);
        $update->bindParam(5, $loc);
        $update->bindParam(6, $years);
        $update->bindParam(7, $email);
        $update->execute();
        return $update;
    }

    
}
