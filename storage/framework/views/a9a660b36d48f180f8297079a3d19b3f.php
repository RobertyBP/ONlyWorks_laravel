<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            <?php if(Route::has('login')): ?>
            <div class="card" style="background-color:lightblue; border-color:darkblue;">
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    <?php if(auth()->guard()->check()): ?>
                        <p style="position: relative; top: -30px; left: -30px;">Olá </p>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
              </div>
            </div>
                
            <?php endif; ?>
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <h1>Projeto Desenvolvimento Web-Servidor</h1>
                <div id="menu">
                            <input type="hidden" name="acao" value="cadastrotrabalho" style="position: absolute;">
                            <a href="<?php echo e(route('create')); ?>">Cadastrar Novo trabalho</a>
                            <a href="<?php echo e(route('exibir')); ?>">Exibir Lista de trabalhos</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ONly_Works\resources\views/welcome.blade.php ENDPATH**/ ?>