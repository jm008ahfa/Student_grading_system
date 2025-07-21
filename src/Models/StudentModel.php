<?php

namespace Alarcon\Gs\Models;

 use Alarcon\Gs\Core\Crud;
 use Alarcon\Gs\Core\Database;


class StudentModel extends Database implements Crud{
    
    public  int $id;
    public  string $name;
    public  string $course;
    public   int $year_level;
    public   string $section;

    public function __construct(){  
        parent::__construct();
        $this-> id = 0;
        $this->name = "";
        $this->course = "";
        $this->year_level =0;
        $this->section = "";
    }

    public function create(){
         
    }
    public function read(){
        try {
            $sql = "SELECT * From students";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th){
            echo $th->getmessage();
        }
    }
    public function update($id){

    }
    public function delete($id){

    }
   
}