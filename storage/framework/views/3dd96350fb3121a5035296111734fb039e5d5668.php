<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
            <div class="flex justify-between mt-6 border-b-4">
                <a class="text-4xl text-gray-500 ml-2" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span></span>
                </button>

                <div id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="flex justify-end">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li>
                                    <a class="bg-green-600 text-white mr-4 w-24 rounded-md text-xl h-7" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li>
                                    <a class="bg-green-600 text-white mr-4 w-24 rounded-md text-xl h-7" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li>
                                <a class="bg-green-600 text-white mr-4 w-24 rounded-md text-xl h-7" href="<?php echo e(route('writeblog')); ?>">Написать блог</a></li>
                            <li>
                                <a class="bg-green-600 text-white mr-4 w-24 rounded-md text-xl h-7" href="<?php echo e(route('viewblogs')); ?>">Просмотреть блоги</a></li>
                            <li>
                                <a id="navbarDropdown" class="text-xl mr-4 font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div aria-labelledby="navbarDropdown">
                                    <a class="bg-green-600 text-white mr-4 w-24 rounded-md text-xl h-7" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\laravel-blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>