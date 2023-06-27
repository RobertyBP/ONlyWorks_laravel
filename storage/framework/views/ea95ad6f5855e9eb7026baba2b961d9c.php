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
            <p id="indiceFormularios">Formulários:</p>
            <form action="<?php echo e(route('cadTrab')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="tituloFormularios">Titulo:</label>
                <input type="text" name="tituloFormulario" id="tituloFormularios" required>

                <label for="descricaoFormularios">Descrição:</label>
                <textarea name="descricaoFormulario" cols="40" rows="10" id="descricaoFormularios" required></textarea>

                <label for="requisitosFormularios">Requisitos:</label>
                <input type="text" name="requisitosFormulario" id="requisitosFormularios" required>

                <label for="valorPagamentoFormularios">Pagamento:</label>
                <input type="text" name="valorPagamentoFormulario" id="valorPagamentoFormularios" required>

                <label for="dataEntregaFormularios">Data Entrega:</label>
                <input type="text" name="dataEntregaFormulario" id="dataEntregaFormularios" required>

                <input type="hidden" name="acao" value="cadastrar" style="position: relative;">
                
                <div style="position: relative; top: 50px;">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ONly_Works\resources\views/cadtrab.blade.php ENDPATH**/ ?>