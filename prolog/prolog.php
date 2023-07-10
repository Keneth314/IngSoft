<?php
// error_reporting(0);


if(isset($_POST["btnConfirmar"]) == true ){
    // echo "ENTRO!!"; 
    // die();
    // Debugging POST
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>"; 


    // ------------------------ Obtengo datos ------------------------
    session_start();

    // Sintomas primarios
    $s1 = $_SESSION["preguntas"][0]["p1"];
    $s2 = $_SESSION["preguntas"][0]["p2"];
    $s3 = $_SESSION["preguntas"][0]["p3"];
    $s4 = $_SESSION["preguntas"][0]["p4"];
    $s5 = $_SESSION["preguntas"][0]["p5"];
    $s6 = $_SESSION["preguntas"][0]["p6"];
    $s7 = $_SESSION["preguntas"][0]["p7"];
    $s8 = $_SESSION["preguntas"][1]["p8"];
    $s9 = $_SESSION["preguntas"][1]["p9"];
    $s10 = $_SESSION["preguntas"][1]["p10"];
    $s11 = $_SESSION["preguntas"][1]["p11"];
    $s12 = $_SESSION["preguntas"][1]["p12"];
    $s13 = $_SESSION["preguntas"][1]["p13"];
    $s14 = $_SESSION["preguntas"][1]["p14"];
    $s15 = $_SESSION["preguntas"][1]["p15"];
    $s16 = $_SESSION["preguntas"][1]["p16"];
    $s17 = $_SESSION["preguntas"][1]["p17"];
    $s18 = $_SESSION["preguntas"][2]["p18"];
    $s19 = $_SESSION["preguntas"][2]["p19"];
    $s20 = $_SESSION["preguntas"][2]["p20"];
    $s21 = $_SESSION["preguntas"][2]["p21"];

    // Sintomas secundarios
    $s22 = $_SESSION["preguntas"][2]["p22"];
    $s23 = $_SESSION["preguntas"][2]["p23"];
    $s24 = $_SESSION["preguntas"][2]["p24"];
    $s25 = $_SESSION["preguntas"][2]["p25"];
    $s26 = $_SESSION["preguntas"][2]["p26"];
    $s27 = $_SESSION["preguntas"][2]["p27"];
    $s28 = $_SESSION["preguntas"][2]["p28"];
    $s29 = $_SESSION["preguntas"][2]["p29"];
    $s30 = $_SESSION["preguntas"][2]["p30"];
    $s31 = $_SESSION["preguntas"][2]["p31"];
    $s32 = $_SESSION["preguntas"][3]["p32"];
    $s33 = $_SESSION["preguntas"][3]["p33"];
    $s34 = $_SESSION["preguntas"][3]["p34"];
    $s35 = $_SESSION["preguntas"][3]["p35"];

    session_write_close();

    // ------------------------ Código Prolog ------------------------
    // Creo la fuente de información
    $defaultMain = "sintoma(s1):- $s1." . PHP_EOL
    . "sintoma(s2):- $s2." . PHP_EOL
    . "sintoma(s3):- $s3." . PHP_EOL
    . "sintoma(s4):- $s4." . PHP_EOL
    . "sintoma(s5):- $s5.". PHP_EOL
    . "sintoma(s6):- $s6.". PHP_EOL
    . "sintoma(s7):- $s7.". PHP_EOL
    . "sintoma(s8):- $s8.". PHP_EOL
    . "sintoma(s9):- $s9.". PHP_EOL
    . "sintoma(s10):- $s10.". PHP_EOL
    . "sintoma(s11):- $s11.". PHP_EOL
    . "sintoma(s12):- $s12.". PHP_EOL
    . "sintoma(s13):- $s13.". PHP_EOL
    . "sintoma(s14):- $s14.". PHP_EOL
    . "sintoma(s15):- $s15.". PHP_EOL
    . "sintoma(s16):- $s16.". PHP_EOL
    . "sintoma(s17):- $s17.". PHP_EOL
    . "sintoma(s18):- $s18.". PHP_EOL
    . "sintoma(s19):- $s19.". PHP_EOL
    . "sintoma(s20):- $s20.". PHP_EOL
    . "sintoma(s21):- $s21.". PHP_EOL
    . "sintoma(s22):- $s22.". PHP_EOL
    . "sintoma(s23):- $s23.". PHP_EOL
    . "sintoma(s24):- $s24.". PHP_EOL
    . "sintoma(s25):- $s25.". PHP_EOL
    . "sintoma(s26):- $s26.". PHP_EOL
    . "sintoma(s27):- $s27.". PHP_EOL
    . "sintoma(s28):- $s28.". PHP_EOL
    . "sintoma(s29):- $s29.". PHP_EOL
    . "sintoma(s30):- $s30.". PHP_EOL
    . "sintoma(s31):- $s31.". PHP_EOL
    . "sintoma(s32):- $s32.". PHP_EOL
    . "sintoma(s33):- $s33.". PHP_EOL
    . "sintoma(s34):- $s34.". PHP_EOL
    . "sintoma(s35):- $s35.". PHP_EOL
    . 'random:- sintoma(s1);sintoma(s2).' . PHP_EOL
    . 'diagnostico1:-sintoma(s1),sintoma(s2),sintoma(s3),sintoma(s4),sintoma(s5),sintoma(s6).' . PHP_EOL
    . 'diagnostico2:-sintoma(s7).' . PHP_EOL
    . 'diagnostico3:-sintoma(s8),sintoma(s9).' . PHP_EOL
    . 'diagnostico4:-sintoma(s10),sintoma(s11),sintoma(s12),sintoma(s13),sintoma(s14),sintoma(s15).' . PHP_EOL
    . 'diagnostico5:-sintoma(s16),sintoma(s17).' . PHP_EOL
    . 'diagnostico6:-sintoma(s18),sintoma(s19),sintoma(s20).' . PHP_EOL
    . 'diagnostico7:-sintoma(s21).' . PHP_EOL
    . 'diagnostico8:-sintoma(s22).' . PHP_EOL
    . 'diagnostico9:-sintoma(s23).' . PHP_EOL
    . 'diagnostico10:-sintoma(s24),sintoma(s25),sintoma(s26),sintoma(s27),sintoma(s28),sintoma(s29),sintoma(s30).' . PHP_EOL
    . 'diagnostico11:-sintoma(s31).' . PHP_EOL
    . 'diagnostico12:-sintoma(s32),sintoma(s33),sintoma(s34).' . PHP_EOL
    . 'diagnostico13:-sintoma(s35).' . PHP_EOL
    . 'diagnostico_final:- diagnostico1,diagnostico2.' . PHP_EOL
    . 'main:- write("hola este es el archivo prolog").' . PHP_EOL;

    // Si no existe el archivo lo crea, si existe lo actualiza
    file_put_contents('index.pl', $defaultMain);

    // Nitrógeno
    $query1 = "diagnostico1."; // Deficiencia de Nitrógeno  
    $query2 = "diagnostico2."; // Exceso de Nitrógeno muy severo
    // Fósforo  
    $query3 = "diagnostico3."; // Deficiencia de fósforo LEVE
    $query4 = "diagnostico4."; // Deficiencia de fósforo SEVERO
    $query5 = "diagnostico5."; // Deficiencia de fósforo MUY SEVERO
    // $queryfinal = "diagnostico_final.";

    // Potasio
    $query6 = "diagnostico6."; // Deficiencia de potasio SUAVE
    $query7 = "diagnostico7."; // Deficiencia de potasio LEVE
    $query8 = "diagnostico8."; // Deficiencia de potasio SEVERO
    $query9 = "diagnostico9."; // Deficiencia de potasio MUY SEVERO
    $query10 = "diagnostico10."; // Deficiencia de potasio LETAL
    $query11 = "diagnostico11."; // EXCESO de potasio

    // Magnesio
    $query12 = "diagnostico12."; // Deficiencia de Magnesio SEVERA
    $query13 = "diagnostico13."; // Deficiencia de Magnesio MUY SEVERA
    

    // Ejecutamos consulta
        // exec: Ejecuta un programa externo
        // $comando: Es el primer argumento
        // $output (array): Recibirá el resultado del comando 
        // $returnValue: Retorna el estado del comando (la cantidad de resultados)
    $lastLine1 = exec('swipl -s index.pl -g "' . $query1 . '" -t halt.', $output1, $returnValue1);
    $lastLine2 = exec('swipl -s index.pl -g "' . $query2 . '" -t halt.', $output2, $returnValue2);
    $lastLine3 = exec('swipl -s index.pl -g "' . $query3 . '" -t halt.', $output3, $returnValue3);
    $lastLine4 = exec('swipl -s index.pl -g "' . $query4 . '" -t halt.', $output4, $returnValue4);
    $lastLine5 = exec('swipl -s index.pl -g "' . $query5 . '" -t halt.', $output5, $returnValue5);
    $lastLine6 = exec('swipl -s index.pl -g "' . $query6 . '" -t halt.', $output6, $returnValue6);
    $lastLine7 = exec('swipl -s index.pl -g "' . $query7 . '" -t halt.', $output7, $returnValue7);
    $lastLine8 = exec('swipl -s index.pl -g "' . $query8 . '" -t halt.', $output8, $returnValue8);
    $lastLine9 = exec('swipl -s index.pl -g "' . $query9 . '" -t halt.', $output9, $returnValue9);
    $lastLine10 = exec('swipl -s index.pl -g "' . $query10 . '" -t halt.', $output10, $returnValue10);
    $lastLine11 = exec('swipl -s index.pl -g "' . $query11 . '" -t halt.', $output11, $returnValue11);
    $lastLine12 = exec('swipl -s index.pl -g "' . $query12 . '" -t halt.', $output12, $returnValue12);
    $lastLine13 = exec('swipl -s index.pl -g "' . $query13 . '" -t halt.', $output13, $returnValue13);


    if($returnValue1 == 0){
        $mensaje1 = "Positivo";
    }
    if($returnValue1 == 1){
        $mensaje1 = "Negativo";
    }

    if($returnValue2 == 0){
        $mensaje2 = "Positivo";
    }
    if($returnValue2 == 1){
        $mensaje2 = "Negativo";
    }
    
    if($returnValue3 == 0){
        $mensaje3 = "Positivo";
    }
    if($returnValue3 == 1){
        $mensaje3 = "Negativo";
    }

    if($returnValue4 == 0){
        $mensaje4 = "Positivo";
    }
    if($returnValue4 == 1){
        $mensaje4 = "Negativo";
    }

    if($returnValue5 == 0){
        $mensaje5 = "Positivo";
    }
    if($returnValue5 == 1){
        $mensaje5 = "Negativo";
    }
    
    if($returnValue6 == 0){
        $mensaje6 = "Positivo";
    }
    if($returnValue6 == 1){
        $mensaje6 = "Negativo";
    }
    
    if($returnValue7 == 0){
        $mensaje7 = "Positivo";
    }
    if($returnValue7 == 1){
        $mensaje7 = "Negativo";
    }
    
    if($returnValue8 == 0){
        $mensaje8 = "Positivo";
    }
    if($returnValue8 == 1){
        $mensaje8 = "Negativo";
    }
    
    if($returnValue9 == 0){
        $mensaje9 = "Positivo";
    }
    if($returnValue9 == 1){
        $mensaje9 = "Negativo";
    }
    
    if($returnValue10 == 0){
        $mensaje10 = "Positivo";
    }
    if($returnValue10 == 1){
        $mensaje10 = "Negativo";
    }
    
    if($returnValue11 == 0){
        $mensaje11 = "Positivo";
    }
    if($returnValue11 == 1){
        $mensaje11 = "Negativo";
    }
    
    if($returnValue12 == 0){
        $mensaje12 = "Positivo";
    }
    if($returnValue12 == 1){
        $mensaje12 = "Negativo";
    }
    
    if($returnValue13 == 0){
        $mensaje13 = "Positivo";
    }
    if($returnValue13 == 1){
        $mensaje13 = "Negativo";
    }
    
    // Debugging resultados
    // echo "<pre>";
    // var_dump($mensaje1, $mensaje2, $mensaje3, $mensaje4, $mensaje5, $mensaje6, $mensaje7, $mensaje8, $mensaje9, $mensaje10, $mensaje11, $mensaje12, $mensaje13);
    // echo "</pre>"; 

    // include_once("../Vista/resultados.php");
    // $objresultado = new resultados;
    // $objresultado->resultadosShow($mensaje1, $mensaje2, $mensaje3, $mensaje4, $mensaje5, $mensaje6, $mensaje7, $mensaje8, $mensaje9, $mensaje10, $mensaje11, $mensaje12, $mensaje13);

} 
// else{
//     include_once("../Vista/mensajeSistema.php");
//     $objmensaje = new mensajeSistema;
//     $objmensaje->mensajeSistemaShow("Error, acceso no permitido", "../index.php");
// }


?>