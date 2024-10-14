<hgroup>

    <?php require_once 'head.php'; ?>

    <body>
        <fieldset>
            <legend>Cálculos de un Triángulo (Equilatero)</legend>
            <form action="" method="post">
                Tamaño de los Lados: <input type="text" placeholder="Escribe la base"name="lado1"><br>
                No funciona xd: <input type="text" placeholder="Escribe "name="nose"><br>
                Tampoco funca 😴: <input type="text" placeholder="Escribe "name="nose"><br>
                <br><input type="submit" value="Dibujar y Calcular" name="calcular">
            </form>

            <?php
                if(isset($_POST['calcular'])){
                    $lados = $_POST['lado1'];
                    require_once 'function_math.php';
                    //echo perimetro_Triangulo($lado1, $lado2, $lado3) . "<br>";
                    //echo area_Triangulo($lado1, $lado3) . "<br>";
                    echo "<div id='triangle'>" . nl2br(dibujar_triangulo($lados, $lados, "")) . "</div>";
                }
            ?>
        </fieldset>
    </body>

                     

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const colors = ['black', 'darkgray', 'gray', 'lightgray', 'white', 'lightpink', 'pink', 'magenta', 'violet', 
                'indigo', 'purple', 'darkblue', 'blue', 'lightblue', 'cyan', 'teal', 'darkgreen', 'green', 'lightgreen', 
                'lightyellow', 'yellow', 'gold', 'goldenrod', 'tan', 'peru', 'chocolate', 'saddlebrown', 'brown', 'darkred', 
                'red', 'orangered', 'darkorange', 'orange'];
                let currentColorIndex = 0;
                const textElement = document.getElementById('triangle');
                setInterval(() => {
                    textElement.style.color = colors[currentColorIndex];
                    currentColorIndex = (currentColorIndex + 1) % colors.length;
                }, 190);
            });
        </script>                
</hgroup>
