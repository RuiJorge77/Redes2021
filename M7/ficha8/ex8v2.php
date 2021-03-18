<?php
    for ($i=1; $i<=20; $i++) {
        $nota = rand(1,20);
        echo 'a nota do aluno <span style="color:#0000cc">'. $i.'</span> e <span style="color:0000cc">'. $nota . '</span> <br>';
    if($nota<8){
        echo (' reprovou <br>');
    }
     else($nota>8 && $nota<9.4);  {
         echo (' o aluno foi admitido a exame');
    } 
    
    if($nota>9.5 && $nota<20); {
        echo ('o aluno aprovou');
    }
    }
?>