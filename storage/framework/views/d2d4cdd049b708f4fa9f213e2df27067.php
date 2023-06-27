<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Web-Servidor</title>
        <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>
        <header>
            <h1>Projeto Desenvolvimento Web-Servidor</h1>
            <div id="btlogout" style=" top: 85px; left: 1155px; position: absolute; font-size: 14px;">
                    <p style="position: relative; top: -30px; left: -30px;">Olá</p>
                    <a id="divsair" style="position: relative; left: -35px; top: 20px;" href="./models/logout.php"><button id="botaosair">Sair</button></a>
            </div>
            <div id="menu">
                    <form action="./index.php" method="get">
                        <input type="hidden" name="acao" value="cadastrotrabalho" style="position: absolute;">
                        <a href="<?php echo e(route('cadastrarT')); ?>"><button type="submit" style="margin-left: -1px;">Cadastro trabalhos</button></a>
                    </form>
                    <form style="position: relative; top: -35px; left: 125px;" action="./index.php"  method="get">
                        <a href="<?php echo e(route('exibir')); ?>"><button style="margin-left: -5px;">Trabalhos disponíveis</button></a>
                    </form>
            </div>
        </header>
    </body>
</html><?php /**PATH C:\xampp\htdocs\ONly_Works\resources\views/header.blade.php ENDPATH**/ ?>