<?php
if(isset($_GET['calculoEmision'])){

    $resultadolp = 0; 
    $resultadolpliq = 0; 
    $resultadogasnatural = 0;
    $resultadokw = 0;
    
    $consumolp = $_POST['lp'];
    $consumolpliq = $_POST['lpliq'];
    $consumogasnatural = $_POST['gn'];
    $consumokw = $_POST['kw'];
    
    $factorgaslpkg = 3.01;
    $factorgaslpliq = 1.60;
    $factorgasnatural = 1.86;
    $factorkwatts = 0.41;
    $factormagna = 2.334;
    $factorpremium = 2.329;
    $factordiesel = 2.579;
    $factorturbosina = 2.505;
    
    $resultadolp = $consumolp * $factorgaslpkg; 
    $resultadolpliq = $consumolpliq * $factorgaslpliq; 
    $resultadogasnatural = $consumogasnatural * $factorgasnatural;
    $resultadokw = $consumokw * $factorkwatts;
    $total = $resultadolp + $resultadolpliq + $resultadogasnatural + $resultadokw;
    $result1 ='';
    $result2 ='';
    $result3 ='';
    if($resultadolp!=0){
        $result1 = "<p>Tu consumo de gas LP produce = $resultadolp kg de CO<sub>2</sub></p>";
    }
    if($resultadolpliq!=0){
        $result1 = "<p>Tu consumo de gas LP estacionario produce = $resultadolpliq kg de CO<sub>2</sub></p>";
    }
    if($resultadogasnatural!=0){
        $result1 = "<p>Tu consumo de gas natural produce = $resultadogasnatural kg de CO<sub>2</sub></p>"; 
    }
    
    $result2 = $resultadokw; 
    $result3 = $total;


    $resultado = array(
        'result1'    =>  $result1,
        'result2'    =>  $resultadokw,
        'result3'    =>  $total
    );  
    echo json_encode($resultado);
}


if(isset($_GET['calculoAuto'])){

    $resultadolp = 0; 
    $resultadolpliq = 0; 
    $resultadogasnatural = 0;
    $resultadokw = 0;
    $resultadocombustible = 0;
    $combustible = 0;
    
    $rendimiento = $_POST['rendimiento'];
    $combustible = $_POST['combustible'];
    $recorrido = $_POST['recorrido'];
    $consumogasnatural = $_POST['gn'];
    $consumokw = $_POST['kw'];
    
    $factorgaslpkg = 3.01;
    $factorgaslpliq = 1.60;
    $factorgasnatural = 1.86;
    $factorkwatts = 0.41;
    $factormagna = 2.334;
    $factorpremium = 2.329;
    $factordiesel = 2.579;
    $factorturbosina = 2.505;
    
    if($combustible=='premium'){
        $factorgasolina = $factorpremium;
    }
    if($combustible=='magna'){
        $factorgasolina = $factormagna;
    }
    if($combustible=='diesel'){
        $factorgasolina = $factordiesel;
    }
    if($combustible=='electric'){
        $consumokw = (50 * $recorrido) / 350;
    }
    
    $resultadocombustible =  ($factorgasolina / $rendimiento) * $recorrido; 
    if($rendimiento==0){
        $resultadocombustible=0;
    }
    $resultadokw = $consumokw * $factorkwatts;
    
    $total = $resultadolp + $resultadolpliq + $resultadogasnatural + $resultadokw + $resultadocombustible;
    $result1 ='';
    if($resultadolp!=0){
        $result1 ="<p>Tu consumo de gas LP produce = $resultadolp kg de CO<sub>2</sub></p>";
    }
    if($resultadolpliq!=0){
        $result1 ="<p>Tu consumo de gas LP estacionario produce = $resultadolpliq kg de CO<<sub>2</sub></p>";
    }
    if($resultadokw!=0){
        $result1 ="<p>Tu consumo de kWh para cargar tu batería produce = $resultadokw kg de CO<sub>2</sub></p>"; 
    }
    
    
    $resultado = array(
        'estatus'    =>  1,
        'result1'    =>  $result1,
        'result2'    =>  $recorrido,
        'result3'    =>  $total
    );  
    echo json_encode($resultado);
}


