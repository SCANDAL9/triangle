<?php 
    
    function perimetro_Triangulo($lado1, $lado2, $lado3){
        return $lado1 + $lado2 + $lado3;
    }

    function area_Triangulo($base, $altura){
        return ($base * $altura) / 2;
    }
    function dibujar_triangulo($base, $altura, $triangulo) {
        if ($base <= 1) { //caso base
            $triangulo .= str_repeat(" ", ($altura-1)*3);
            $triangulo .= "*_____";
            $triangulo .= "\r\n";
        } else { //caso recursivo
            $triangulo = dibujar_triangulo($base-1, $altura, $triangulo);
            $triangulo .= str_repeat(" ", abs($altura - $base)*3);    
            $triangulo .= str_repeat("*_____", $base);
            $triangulo .= "\r\n";            
        }
        return $triangulo;
    }
?>