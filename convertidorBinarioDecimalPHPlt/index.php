<?php
// Función para convertir un número binario a decimal o viceversa
//parametro1: numero a convertir 
//parametro2: tipo de operacion a hacer
//si operacion==1 hago binario a decimal
//si operacion==0 hago decimal a binario
function binDecBIN($numero,$operacion) {
    
    if($operacion){
        $decimal = 0;
        
        for ($i = strlen($numero) - 1; $i >= 0; $i--) {
            if ($numero[$i] == '1') {
                $decimal += pow(2, strlen($numero) - $i - 1);
            }
        }
        return $decimal;
    
    }else{
        $binario = '';
        
        while ($numero > 0) {
            $resto = $numero % 2;         //calculo el resto en base 2 del numero 
            $binario = $resto . $binario; //concateno al inicio de la cadena el resto
            $numero = (int)($numero / 2); //obtengo el siguiente cociente entero para la próxima iteración
        }
        return $binario;    
    }
}

$ans=''; //inicializo resultado

//request de datos
$num = isset($_POST['num']) ? $_POST['num'] : 0;
$choice = isset($_POST['tipo']) ? $_POST['tipo'] : '';

//invoco función
$ans=binDecBIN($num,$choice);

include_once "vista.php";
?>