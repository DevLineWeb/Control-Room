<?php
include_once('./conect.php');

$natureza = $_POST['natureza'];
$local = $_POST['localidade'];
$sala = $_POST['sala'];
$modelo = $_POST['modelo'];
$patrimonio = $_POST['patrimonio'];
$numSerie = $_POST['numSerie'];
$rede = $_POST['rede'];
$monitor = $_POST['monitor'];
$gpu = $_POST['gpu'];
$ram = $_POST['ram'];
$disco = $_POST['disco'];
$cpu = $_POST['cpu'];
$cadeado = $_POST['cadeado'];
$caboAco = $_POST['caboAco'];
$desempenho = $_POST['desempenho'];
$obs = $_POST['obs'];
$data_envio = date('Y-m-d');

$insertRoom = mysqli_query($conect,"INSERT INTO rooms(
    room_natureza, 
    room_localidade, 
    room_nomenclatura, 
    room_modelo, 
    room_patrimonio, 
    room_serie, 
    room_rede, 
    room_monitor, 
    room_cpu, 
    room_ram, 
    room_gpu, 
    room_disco, 
    room_cadeado, 
    room_cabo, 
    room_desempenho,
    room_obser, 
    room_dataver) 
        VALUES(
        '$natureza',
        '$local',
        '$sala', 
        '$modelo',
        '$patrimonio',
        '$numSerie', 
        '$rede', 
        '$monitor', 
        '$cpu', 
        '$ram', 
        '$gpu', 
        '$disco', 
        '$cadeado', 
        '$caboAco', 
        '$desempenho', 
        '$obs', 
        '$data_envio')");

// $update = $conect->query($insertRoom);

if($insertRoom) {
    echo "
    <div class='request--feedback--info'>
        <legend>Aviso!</legend>
        <div>
        <h5>Sala Cadastrada com Sucesso!</h5>
        <button class='button--download request--feedback--button' onclick='closeSpan()'> OK </button>
        </div>
    </div>
    ";
}
else {
    echo "
    <div class='request--feedback--info'>
        <legend>Aviso!</legend>
        <div>
        <h5>Sala Cadastrada com Sucesso!</h5>
        <button class='button--download request--feedback--button' onclick='closeSpan()'> OK </button>
        </div>
    </div>
    ";
}

// natureza: cr_natureza,
// local: cr_localidade,
// sala: cr_nomeSala,
// modelo: cr_modelo,
// patrimonio: cr_patrimonio,
// numSerie: cr_serie,
// rede: cr_rede,
// monitor: cr_monitor,
// gpu: cr_gpu,
// disco: cr_disco,
// cpu: cr_cpu,
// ram: cr_ram,
// cadeado: cr_cadeado,
// caboAco: cr_caboaco,
// desempenho: cr_desempenho,
// dataVer: cr_dataVer,
// obs: cr_obs




?>