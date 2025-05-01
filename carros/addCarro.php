<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Carro</title>
    <link rel="stylesheet" href="carro.css">
</head>
<body>
   
    <div class="fundo">
        <form action="addCarro.act.php" method="post">
            <p>
                <select name="montadora" id="">
                    <option value="ch">Chevrolet</option>
                    <option value="ft">Fiat</option> 
                    <option value="vw">Volkswagen</option>
                    <option value="hd">Honda</option>
                    <option value="fr">Ferrari</option>
                    <option value="lb">Lamborghini</option>
                </select>
            </p>
            <p>
                Modelo: <input type="text" name="modelo" id="">
            </p>
            <p>
                Cor: <input type="text" name="cor" id="">
            </p>
            <p>
                Ano: <input type="text" name="ano" id="">
            </p>
            <p>
                Valor: <input type="text" name="valor" id="">
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
        session_start();

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

    ?>
</body>
</html>