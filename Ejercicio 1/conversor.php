<? 
if (!$_POST){ 
?> 

<link rel="stylesheet" href="style.css">
<body>
    <form action="" method="post">
        <b><i><u>Mi conversor</u></i></b>
        <img src="img/calculator.png" alt="" id="calculatorpng">
        <br>
        <div id = "num_a_convertir">
            <input type="number" name="numero" id="input_number" value="1" step="0.01" min="0" placeholder="Ingrese la cantidad">
        </div>
        <div id = "texto">
            <img src="img/usd.png" alt="" id="img_usd_conversor">Dolares Americanos
        </div>
        <img src="img/flechas.png" alt="">
        <div id = "option">
            <button name="libra"><img src="img/libra.png" alt=""></button>
            <button name="euro"><img src="img/euro.png" alt=""></button>
            <button name="yen"><img src="img/yen.png" alt=""></button>
        </div>
    </form>
</body>



<?php
    }
    else{
        echo '<link rel="stylesheet" href="style.css">';
        
        echo '
        <form action="" method="post">
            <b><i><u>Mi conversor</u></i></b>
            <img src="img/calculator.png" alt="" id="calculatorpng">
            <br>
            <div id = "num_a_convertir">
                <input type="number" name="numero" id="input_number" value="1" step="0.01" min="0" placeholder="Ingrese la cantidad">
            </div>
            <div id = "texto">
                <img src="img/usd.png" alt="" id="img_usd_conversor">Dolares Americanos
            </div>
                <img src="img/flechas.png" alt="">
            <div id = "option">
                <button name="libra"><img src="img/libra.png" alt=""></button>
                <button name="euro"><img src="img/euro.png" alt=""></button>
                <button name="yen"><img src="img/yen.png" alt=""></button>
            </div>
        </form>
        ';

        $valor1 = $_POST['numero'];

        $moneda = '';

        $conversion = 0;

        if (isset($_POST['libra'])) {
            $moneda = 'libra';
            $conversion = round($valor1 * 0.74, 2);
            echo number_format($valor1, 2, '.', ',' ) . ' Dolar(es) Americano(s) <br> = <br> ' . number_format($conversion, 2, '.', ',' )  . '  Libra(s) Esterlina(s)';
        } 
        elseif(isset($_POST['euro'])) {
            $moneda = 'euro';
            $conversion = round($valor1 * 0.88, 2);
            echo number_format($valor1, 2, '.', ',' )  . ' Dolar(es) Americano(s) <br> = <br> ' . number_format($conversion, 2, '.', ',' )  . '  Euro(s)';
        }
        elseif(isset($_POST['yen'])) {
            $moneda = 'yen';
            $conversion = round($valor1 * 115, 2);
            echo number_format($valor1, 2, '.', ',' ) . ' Dolar(es) Americano(s) <br> = <br> ' . number_format($conversion, 2, '.', ',' )  . '  Yen(es)';
        }
        

    }
?>