<?php
    class Publicat{

    public static function insert_autor($con, $autor){
        $insert = 'INSERT INTO `autor`(`id`, `nume`)
                    VALUES ("","' . $autor . '")';
        $insert_a = mysqli_query($con, $insert) or die('Nu se poate insera autorul!');

        $id = 'SELECT id FROM `autor` order by id desc limit 1;';
        $id_r= mysqli_query($con, $id) or die('Nu se poate gasi id_autor!');
        $id_autor = mysqli_fetch_assoc($id_r);
        return $id_autor['id'];
    }

     public static function insert_publicatie($con, $titlu, $sumar, $document, $tip_asociat, $autor, $id_asociat)
    {
        $query = 'INSERT INTO `publicatie`(`id`, `titlu`, `sumar`, `fisier`, `tip_asociat`, `autor`, id_asociat)
                    VALUES ("","' . $titlu . '","' . $sumar . '","' . $document . '","' . $tip_asociat . '", "' . $autor . '","'.$id_asociat.'")';
        $insert_p = mysqli_query($con, $query) or die($query . 'Nu se poate insera publicatia!');
        return $insert_p;
    }

     public static function insert_articol($con, $revista,$pag_inceput, $pag_final, $id_tip ){
         $insert= 'INSERT INTO `article`(`id`, `revista`, `pag_inceput`, `pag_final`, `id_tip`)
                    VALUES ("","'.$revista.'","'.$pag_inceput.'","'.$pag_final.'","'.$id_tip.'")';
        $insert_ar = mysqli_query($con, $insert) or die('Nu se poate introduce articolul!');

        $id = 'SELECT id FROM `article` order by id desc limit 1;';
        $id_a = mysqli_query($con, $id) or die('Nu se poate gasi id_articol!');
        $id_articol = mysqli_fetch_assoc($id_a);
        return $id_articol['id'];
     }

     public static function insert_client($con, $tip, $client, $proiect ){
         $insert= 'INSERT INTO `client_report`(`id`, `id_tip`, `nume_client`, `nume_proiect`)
                    VALUES ("","'.$tip.'","'.$client.'","'.$proiect.'")';
        $insert_c = mysqli_query($con, $insert) or die('Nu se poate introduce articolul!');

        $id = 'SELECT id FROM `client_report` order by id desc limit 1;';
        $id_c = mysqli_query($con, $id) or die('Nu se poate gasi id_client!');
        $id_client = mysqli_fetch_assoc($id_c);
        return $id_client['id'];
    }

    public static function insert_monograf($con, $tip, $subiect, $nr_pag ){
         $insert= 'INSERT INTO `monograf`(`id`, `id_tip`, `subiect_tratat`, `nr_pagini`)
                    VALUES ("","'.$tip.'","'.$subiect.'","'.$nr_pag.'")';
        $insert_m = mysqli_query($con, $insert) or die('Nu se poate introduce articolul!');

        $id = 'SELECT id FROM `monograf` order by id desc limit 1;';
        $id_m = mysqli_query($con, $id) or die('Nu se poate gasi id_monograf!');
        $id_monograf = mysqli_fetch_assoc($id_m);
        return $id_monograf['id'];
    }
}
?>