<?php
    $pais= $_GET['c'];
    $ProvArg = array("Buenos Aires","Catamarca","Chaco","Chubut","Cordoba","Corrientes","Entre Rios","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones","Neuquen","Rio Negro","Salta","San Juan","San Luis","Santa Cruz","Santa Fe","Santiago del Estero","Tierra del Fuego","Tucuman");
    $DeptosUru = array("Artigas","Canelones","Cerro Largo","Colonia","Durazno", "Durazno","Florida","Lavalleja","Maldonado","Montevideo","Paysandu","Rio Negro","Rivera","Rocha","Salto","San Jose","Soriano", "Tacuarembo","Treinta y Tres");
    if ($pais=="Argentina") {
        echo json_encode($ProvArg);
    }elseif ($pais=="Uruguay") {
      echo json_encode($DeptosUru);
    } 
?>
