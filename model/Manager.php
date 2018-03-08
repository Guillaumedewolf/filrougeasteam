<?php
namespace Becode\Blog\Model;

class Manager{
    protected function dbConnect(){
        $host_bdd='ec2-79-125-12-27.eu-west-1.compute.amazonaws.com';
        $name_bdd='dft6kco7jan4ck';
        $user_bdd='uisvlzlfdfoohj';
        $pass_bdd='85c4888f62f272a9d172d4fb89c3b30d7f82fc5a425058eabe41c908363fa60f';
        $db = new \PDO("pgsql:host=".$host_bdd.";dbname=".$name_bdd."", "".$user_bdd."", "".$pass_bdd."");
        
        return $db;
    }
}
