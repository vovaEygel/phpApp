<?php

class connection{
    public static function connect($config){
        try{
            return new PDO('mysql:host=127.0.0.1;dbname=newtest', 'root', '');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}