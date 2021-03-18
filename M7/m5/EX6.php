<html>
    <head>
        <title>teste php</title>
    </head>
    <body>
        <?php
        $a=23;
        $b=45;
        $c=12;
        $x=30;
        $y=17;
        $preço=78;
        echo "a soma de a com b e". ($a + $b);
        echo "<br>";
        echo "a media ente a, b e c e de". (($a+$b+$c)/3);
        echo "<br>";
        echo "o quociente de x r y e". round($x/$y,0);
        echo "<br>";
        echo "o resto de x e y e". ($x % $y) / $y;
        echo "<br>";
        echo "o valor com iva e de". ($preço + ($preço * 0.23));
        ?>
     </body>
</html>