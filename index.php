    
<head>
        <meta charset="UTF-8">
        <title>PRACE SESIT</title>
    </head>
    
    <?php
    echo "<h1> základy php </h1>";
    // Zkouška commentu
    echo "Echo zkouška";
    echo "<br>";
    //Počítání
    $x = 5;
    $y = 10;
    echo $x + $y;
    echo "<br>";
    
    //PHP String 
    echo "<h1> string </h1>";
    $a = "AHOJ";
    $b = "ČAU";
    echo "$b člověče";
    echo "$a"; 
    echo "<br>";
    
    
   //PHP Integer
    echo "<h1> intidzr </h1>";
    $c = 5999;
    var_dump($c);
    echo "<br>";
    
    //float
    echo "<h1> ffloaaaaat</h1>";
    $d = 10.555;
    var_dump($d);
    echo "<br>";
    
    //boolean
    echo "<h1>booleaaaaan</h1>";
    $t = true;
    $o = false; 
    echo "$t = TRUE";
    echo "<br>";
    echo "$o = FALSE";
    echo "<br>"; 
   
    
    //array 
    echo "<h1> arraaaaaaaaay</h1>";
    $cars = array("volvo","bmw","skodovka");
    var_dump($cars);
    echo "<br>";
    
    //funkce za úkol - sprostá slova
    echo "<h1> funkce za úkol - sprostá slova </h1>";
    echo "<br>";
    echo "Ahoj, mám problém se svým pc. Ta KUNDA vůbec nefunguje a já ZMRD tomu vůbec nerozumím.";
    
    function Vulgarnislova($string,$banned_words) {
        foreach($banned_words as $banned_word) { 
        if(stristr($string, $banned_word)) { 
            return false;
        } 
        }
        return true;
    }
    $string = "Ahoj, mám problém se svým pc. Ta KUNDA vůbec nefunguje a já ZMRD tomu vůbec nerozumím.";
    $banned_words = array("KUNDA","KOKOT","ZMRD");
    if (!Vulgarnislova($string, $banned_words)) { 
        echo "Text obsahuje sprostá slova";
    }else{
            echo "Text je v pořádku";     
        }
        
    ?>

