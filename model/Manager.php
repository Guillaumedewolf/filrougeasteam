<?php
namespace Becode\Blog\Model;

class Manager{
    protected function dbConnect(){
        $db = new \PDO('mysql:host=ec2-79-125-12-27.eu-west-1.compute.amazonaws.com;dbname=dft6kco7jan4ck;charset=utf8', 'uisvlzlfdfoohj', '85c4888f62f272a9d172d4fb89c3b30d7f82fc5a425058eabe41c908363fa60f');
        
        return $db;
    }
}
