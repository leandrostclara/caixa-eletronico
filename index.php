<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $saque = $_GET["valor"] ?? 5;
        $sobra = 0;
        $notas100 = 0;
        $notas50 = 0;
        $notas10 = 0;
        $notas5 = 0;
    ?>

    <section>
        <h1>Caixa Eletrônico</h1>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="valor">Qual valor você deseja sacar ? (R$)*</label>
            <input type="number" name="valor" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">

        </form>
    </section>

    <section>
        <?php 
            echo "<h2>Saque de R$ " . number_format($saque,2,",",".") . " Realizado </h2>";
            
            $notas100 = intval($saque / 100);
            $sobra = $saque % 100;
            $notas50 = intval($sobra / 50);
            $sobra %= 50;
            $notas10 = intval($sobra / 10);
            $sobra %= 10;
            $notas5 = intval($sobra / 5);
        ?>

            <ul>
                <li style="display:flex; align-items:center">
                    <img src="./img/100-reais.jpg" alt="100 reais" style="width:150px; margin-bottom:10px">
                    <span style="margin-left:10px; font-size:25px">x<?=$notas100?></span>
                </li>
                <li style="display:flex; align-items:center">
                    <img src="./img/50-reais.jpg" alt="50 reais" style="width:135px; margin-bottom:10px">
                    <span style="margin-left:10px; font-size:25px">x<?=$notas50?></span>
                </li>
                <li style="display:flex; align-items:center">
                    <img src="./img/10-reais.jpg" alt="10 reais" style="width:120px; margin-bottom:10px">
                    <span style="margin-left:10px; font-size:25px">x<?=$notas10?></span>
                </li>
                <li style="display:flex; align-items:center">
                    <img src="./img/5-reais.jpg" alt="5 reais" style="width:100px; margin-bottom:10px">
                    <span style="margin-left:10px; font-size:25px">x<?=$notas5?></span>
                </li>
            </ul>

    </section>
</body>
</html>