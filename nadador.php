<?php
    $categorias = [];
    $categorias[]='criança';
    $categorias[]='infantil';
    $categorias[]='adolescente';
    $categorias[]='adulto';
    $categorias[]='idoso';
    
    //print_r($categorias);
    $nome = 'Eduardo';
    $idade = 50;
   // var_dump($nome);
    // var_dump($idade); 
    if ($idade >= 0 && $idade <=5) {
    //echo 'criança';
       for ($i = 0 ; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'criança')
        echo "O nadador  " . $nome . " compete na categoria ". $categorias[$i];
        }
    }else if ($idade >= 6 && $idade <=12) {
        //echo 'infantil';
        for ($i = 0 ; $i <= count($categorias); $i++){
            if($categorias[i] == 'infantil') 
            echo "O nadador  " . $nome .  " compete na categoria " . $categorias[$i];
            }
    }else if ($idade >= 13 && $idade <=17) {
        //echo 'infantil';
        for ($i = 0 ; $i <= count($categorias); $i ++){
            if($categorias[$i] == 'adolescente') 
            echo "O nadador  " . $nome . " compete na categoria " . $categorias[$i];
            }   
    }else if ($idade >= 18 && $idade <=60) {
            //echo 'infantil';
        for ($i = 0 ; $i <= count($categorias); $i ++){
            if($categorias[$i] == 'adulto') 
            echo "O nadador  " . $nome . " compete na categoria " . $categorias[$i];
            }
    }