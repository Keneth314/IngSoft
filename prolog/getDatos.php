<?php
// error_reporting(0);

// $a1 = true;

// $res = empty($a1) ? false : true;

// echo $res;


// die();
// if(isset($_POST["btnAnalizar"]) == true ){

    // Debugging POST
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>"; 


    // ------------------------ Obtengo datos ------------------------
    // session_start();
    $s1 = empty($_POST["s1"]) ? false : true;
    $s2 = empty($_POST["s2"]) ? false : true;
    $s3 = empty($_POST["s3"]) ? false : true;
    $s4 = empty($_POST["s4"]) ? false : true;
    $s5 = empty($_POST["s5"]) ? false : true;
    $s6 = empty($_POST["s6"]) ? false : true;
    $s7 = empty($_POST["s7"]) ? false : true;
    $s8 = empty($_POST["s8"]) ? false : true;
    $s9 = empty($_POST["s9"]) ? false : true;
    $s10 = empty($_POST["s10"]) ? false : true;
    $s11 = empty($_POST["s11"]) ? false : true;
    $s12 = empty($_POST["s12"]) ? false : true;
    $s13 = empty($_POST["s13"]) ? false : true;
    $s14 = empty($_POST["s14"]) ? false : true;
    $s15 = empty($_POST["s15"]) ? false : true;
    $s16 = empty($_POST["s16"]) ? false : true;
    $s17 = empty($_POST["s17"]) ? false : true;
    $s18 = empty($_POST["s18"]) ? false : true;
    $s19 = empty($_POST["s19"]) ? false : true;
    $s20 = empty($_POST["s20"]) ? false : true;
    $s21 = empty($_POST["s21"]) ? false : true;

    $s22 = empty($_POST["s22"]) ? false : true;
    $s23 = empty($_POST["s23"]) ? false : true;
    $s24 = empty($_POST["s24"]) ? false : true;
    $s25 = empty($_POST["s25"]) ? false : true;
    $s26 = empty($_POST["s26"]) ? false : true;
    $s27 = empty($_POST["s27"]) ? false : true;
    $s28 = empty($_POST["s28"]) ? false : true;
    $s29 = empty($_POST["s29"]) ? false : true;
    $s30 = empty($_POST["s30"]) ? false : true;
    $s31 = empty($_POST["s31"]) ? false : true;
    $s32 = empty($_POST["s32"]) ? false : true;
    $s33 = empty($_POST["s33"]) ? false : true;
    $s34 = empty($_POST["s34"]) ? false : true;
    $s35 = empty($_POST["s35"]) ? false : true;
    $s36 = empty($_POST["s36"]) ? false : true;
    $s37 = empty($_POST["s37"]) ? false : true;
    $s38 = empty($_POST["s38"]) ? false : true;
    $s39 = empty($_POST["s39"]) ? false : true;
    $s40 = empty($_POST["s40"]) ? false : true;
    $s41 = empty($_POST["s41"]) ? false : true;
    $s42 = empty($_POST["s42"]) ? false : true;
    $s43 = empty($_POST["s43"]) ? false : true;
    $s44 = empty($_POST["s44"]) ? false : true;
    $s45 = empty($_POST["s45"]) ? false : true;
    $s46 = empty($_POST["s46"]) ? false : true;
    $s47 = empty($_POST["s47"]) ? false : true;
    $s48 = empty($_POST["s48"]) ? false : true;
    $s49 = empty($_POST["s49"]) ? false : true;
    $s50 = empty($_POST["s50"]) ? false : true;



    // RESULTADO DEL TEXTO
    // Analisis del resultado texto
    // 1 - 10 => primario | 22 - 28 => secundario

    if($s24 || $s26 || $s27){
        $resultadoTexto = "Síntoma secundario - No es necesario acudir al médico";
    }

    if($s22 || $s23 || $s25 || $s30 || $s32 || $s33 || $s36 || $s37 || $s38 || $s39 || $s42 || $s44){
        $resultadoTexto = "Síntoma secundario de cáncer al cuello uterino - Acudir al médico";
    }

    if($s1 || $s2 || $s3 || $s4 || $s5 || $s6 || $s7 || $s8 || $s9 || $s10 || $s11 || $s12 || $s13 || $s14 || $s15 || $s16 || $s17 || $s18 || $s19 || $s20 || $s21 || $s28 || $s31 || $s34 || $s35 || $s40 || $s41 || $s43 || $s45 || $s46 || $s47 || $s48 || $s49 || $s50){
        $resultadoTexto = "Síntoma principal de cáncer al cuello uterino - Acudir al médico";
    }

    // echo "<pre>";
    // var_dump($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10, $s11, $s12, $s13, $s14, $s15, $s16, $s17, $s18, $s19, $s20, $s21, $s22, $s23, $s24, $s25, $s26, $s27, $s28, $s29, $s30, $s31, $s32, $s33, $s34, $s35, $s36, $s37, $s38, $s39, $s40, $s41, $s42, $s43, $s44, $s45, $s46, $s47, $s48, $s49, $s50);
    // echo "</pre>"; 

    // RESULTADO DE LA PROBABILIDAD

    $sintomas = array(false, $s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10, $s11, $s12, $s13, $s14, $s15, $s16, $s17, $s18, $s19, $s20, $s21, $s22, $s23, $s24, $s25, $s26, $s27, $s28, $s29, $s30, $s31, $s32, $s33, $s34, $s35, $s36, $s37, $s38, $s39, $s40, $s41, $s42, $s43, $s44, $s45, $s46, $s47, $s48, $s49, $s50);

    // $pesosSi = array(0, 0.75, 18, 18, 17, 14, 18, 18, 18, 17, 19, 18, 5, 19, 18, 5, 0.75, 10, 18, 14, 17, 18, 6, 5, 7, 7, 0.75, 0.75, 0.75);
    $pesosSi = array(0, 0.75, 18, 18, 17, 14, 18, 18, 18, 17, 19, 18, 5, 19, 18, 5, 0.75, 10, 18, 14, 17, 18, 6, 5, 7, 7, 0.75, 0.75, 0.75, 3, 5, 15, 4, 3, 15, 3, 1, 4, 2, 2, 3, 3, 3, 2, 5, 2, 9, 11, 9, 0, 0);
// echo $resultadoTexto; die();
    // echo count($sintomas);
    // echo count($pesosSi);
    // die();
    // $pesosNo = array(2, -2, 0, 0, 0, -3, -3, -1, -2, 0, -3, 1, -1, 0, 1, 2, -1, 0, 0, 0, 0, -1, 0, 0, 0, 2, 2, 2);


    $probSinPri = 0;
    $probSinSec = 0;

    for ($i=0; $i <= 28; $i++) { 
        if($i == 24 || $i == 26  || $i == 27){
            if($sintomas[$i] == true){ $probSinSec += $pesosSi[$i];}
            // echo $i . " - 1<br>";
            // echo ($i) . " - "  . $sintomas[$i] . "<br>";
            // echo $probSinPri . "<br>";
            // echo $probSinSec . "<br><br>";
        }
        
        if($i == 22 || $i == 23 || $i == 25 || $i == 30 || $i == 32 || $i == 33 || $i == 36 || $i == 37 || $i == 38 || $i == 39 || $i == 42 || $i == 44){
  
            if($sintomas[$i] == true){ $probSinPri += $pesosSi[$i];}
            // echo $i . "-2<br>";
            // echo ($i) . " - "  . $sintomas[$i] . "<br>";
            // echo $probSinPri . "<br>";
            // echo $probSinSec . "<br><br>";
        }

        if(($i >= 1 && $i <= 21) || $i == 28 || $i == 31 || $i == 34 || $i == 35 || $i == 40 || $i == 41 || $i == 43 || $i == 45 || $i == 46 || $i == 47 || $i == 48 || $i == 49 || $i == 50){
            if($sintomas[$i] == true){ $probSinPri += $pesosSi[$i];}
            // echo $i . "-3<br>";
            // echo ($i) . " - "  . $sintomas[$i] . "<br>";
            // echo $probSinPri . "<br>";
            // echo $probSinSec . "<br><br>";
        }
    }

    // die();
    $resultadoProb = $probSinPri + $probSinSec;

    header("Location: resultado.php?resultadoTexto=$resultadoTexto&probSinPri=$probSinPri&probSinSec=$probSinSec&resultadoProb=$resultadoProb");
    
    // $objt = new resultado;
    // $objt->resultadoShow($resultadoTexto, $probSinPri, $probSinSec, $resultadoProb);


    // session_write_close();


    

    


// }


?>

<!-- <link rel="stylesheet" href="../styles.css"> -->