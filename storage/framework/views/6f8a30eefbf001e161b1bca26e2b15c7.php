        
    <div class="container" id="containerlistatrabalhos">
            <h2>Trabalhos</h2>
            <div id="containercards">

                <?php $__currentLoopData = $listaTrabalhos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trabalho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                <div class="novotrabalho" style="margin: 0; margin-bottom: 5px;" >
                        <p class="tituloTrabalho" id="tituloTrabalho">titulo:<?php echo e($trabalho->titulo); ?></p>
                        <p class="dataPublicacaoTrabalho" id="dataPublicacaoTrabalho">Publicado: <?php echo e($trabalho->datapublicacao); ?></p>
                        <p class="dataEntregaTrabalho" id="dataEntregaTrabalho">Data entrega: <?php echo e($trabalho->dataentrega); ?></p>
                        <div id="containerdescricao">
                            <p id="txtDescricaoCadastro" class="txtDescricao">descrição: <?php echo e($trabalho->descricao); ?></p>
                        </div>
                        <p class="requisitosTrabalho" id="requisitosTrabalho">Requisitos: <?php echo e($trabalho->requisitos); ?></p>
                        <p class="valorPagamentoTrabalho" id="valorPagamentoTrabalho">Pagamento: R$ <?php echo e($trabalho->pagamento); ?></p>
                        <p class="autorTrabalho" id="autorTrabalho">Autor: <?php echo e($trabalho->autor); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
        </div>
<?php /**PATH C:\xampp\htdocs\ONly_Works\resources\views/trabalhos.blade.php ENDPATH**/ ?>