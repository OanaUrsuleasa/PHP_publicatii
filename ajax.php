<?php
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
    
    require_once PATH.'/publicatie/publicatie_finala.php';
}
?>