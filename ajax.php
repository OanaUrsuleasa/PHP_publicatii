<?php
use function CommonMark\Parse;
session_start();
$host = 'localhost';
$user = 'root';
$password ='';
$dbname = 'publicatie';

    $con = mysqli_connect($host, $user, $password, $dbname);
if(!$con){
    die("Conectare esuata: ". mysqli_connect_error());
}

define('PATH', realpath(dirname(__DIR__)));
$http = 'http';
define('ROOT_LINK', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['CONTEXT_PREFIX'] . '/publicatie/');

require_once PATH . '/publicatie/functii_publicatie.php';

$actiune = mysqli_real_escape_string($con, $_POST['actiune']);
$tip_asociat = '';
if($actiune = 'form_publicatie'){
    $titlu = mysqli_real_escape_string($con, $_POST['titlu']);
    $sumar = mysqli_real_escape_string($con, $_POST['sumar']);
    $tip_asociat = mysqli_real_escape_string($con, $_POST['tip_asociat']);
        $revista = mysqli_real_escape_string($con, $_POST['revista']);
        $paginceput = mysqli_real_escape_string($con, $_POST['pag_inceput']);
        $pagfinal = mysqli_real_escape_string($con, $_POST['pag_final']);

    $client = mysqli_real_escape_string($con, $_POST['client']);
    $proiect = mysqli_real_escape_string($con, $_POST['proiect']);

    $subiect = mysqli_real_escape_string($con, $_POST['subiect']);
    $nr_pag = mysqli_real_escape_string($con, $_POST['nr_pag']);

    $autor = mysqli_real_escape_string($con, $_POST['autor']);
    $document = mysqli_real_escape_string($con, $_POST['document']);

    $tip = 0;
    $id_asociat = 0;
    if($tip_asociat=="Articol"){
        $tip .= 1;
        $id_asociat .= Publicat::insert_articol($con, $revista, $paginceput, $pagfinal, $tip);
    }else if($tip_asociat=="Client report"){
        $tip .= 2;
        $id_asociat .= Publicat::insert_client($con, $tip, $client, $proiect);
    }else if($tip_asociat=="Monograf"){
        $tip .= 3;
        $id_asociat .= Publicat::insert_monograf($con, $tip, $subiect, $nr_pag);
    }

    $id_autor = Publicat::insert_autor($con, $autor);
    Publicat::insert_publicatie($con, $titlu, $sumar, $document, $tip, $id_autor, $id_asociat);
    require_once PATH.'/publicatie/publicatie_finala.php';
}
?>