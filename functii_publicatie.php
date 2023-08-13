<?php
    class Publicat{
        public static function insert_publicatie($con, $titlu, $sumar, $document, $tip_asociat, $autor){
        $query = 'INSERT INTO `publicatie`(`id`, `titlu`, `sumar`, `fisier`, `tip_asociat`, `autor`)
                    VALUES ("","' . $titlu . '","' . $sumar . '","' . $document . '","' . $tip_asociat . '", "' . $autor . '")';
        $insert_p = mysqli_query($con, $query) or die($query.'Nu se poate insera publicatia!');
        return $insert_p;
    }
    public static function insert_autor($con, $autor){
        $insert = 'INSERT INTO `autor`(`id`, `nume`)
                    VALUES ("","' . $autor . '")';
        $insert_a = mysqli_query($con, $insert) or die('Nu se poate insera autorul!');
        return $insert_a;
    }
    }
?>