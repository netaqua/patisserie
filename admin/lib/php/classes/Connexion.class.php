<?php
class Connexion{
    private static $_instance = null;//Le _ est une convention pour signaler qu'il s'agit d'un private


    public static function getInstance($dsn,$user,$password){
        //si on n'a pas encore d'objet de connexion
        if(!self::$_instance){//le self sert a appeler le fichier lui même
            try{
                self::$_instance = new PDO($dsn,$user,$password);
                //print "connecté";
            }catch(PDOException $e){
                print "erreur de connexion ".$e->getMessage();
            }
        }
        return self::$_instance;
    }


}