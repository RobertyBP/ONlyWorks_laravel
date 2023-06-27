<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web-Servidor</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
</head>
<body>
    <div class="container">
        <h2>Cadastro de novo trabalho</h2>
        <div id="formulariosnovotrabalho">
            <form action="<?php echo e(route('cadTrab')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <p id="indiceFormularios">Formulários:</p>
                <label id="tituloFormularios">Titulo: 
                    <input type="text" name="tituloFormularios" >
                </label>
                <div id="descricaoFormularios">
                    <p>Descrição:</p>
                    <textarea name="descricaoFormularios" cols="40" rows="10" ></textarea>
                </div>
                <label id="requisitosFormularios">Requisitos:
                    <input type="text" name="requisitosFormularios" >
                </label>
                <div id="valorPagamentoFormularios">
                    <p>Pagamento: </p>
                    <input type="text" name="valorPagamentoFormularios">
                </div>
                <label id="dataEntregaFormularios">Data Entrega:
                    <input type="text" name="dataEntregaFormularios">
                </label>
                <input type="hidden" name="acao" value="cadastrar" style="position: relative;">
                
                <div id="enviarFormularios" style="position: relative; top: 50px;">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ONly_Works\resources\views/cadTrab.blade.php ENDPATH**/ ?>