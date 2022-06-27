<?php $__env->startSection('content'); ?>
    <div>
        <div class="border-4 rounded-md w-72 mt-6 mr-4 ml-2">
                <h3 class="text-center font-bold text-3xl"><?php echo e($data->title); ?></h3>
                <div>
                    <p class="ml-2 text-xl" name="category_id"><?php echo e($data->category->name); ?></p>
                </div>
                <div class="border-b-4">
                    <p class="ml-2 text-xl" name="text"><?php echo e($data->text); ?></p>
                </div>
                <div>
                    <div>
                        <form action="<?php echo e(route('updateblog-form',$data->id)); ?>" method="get">
                            <?php echo csrf_field(); ?>
                            <button class="bg-green-600 text-white ml-2 mt-6 w-40 rounded-md text-xl h-7">Редактировать</button>
                        </form>
                    </div>
                    <div>
                        <form action="<?php echo e(route('deleteblog-form',['articles'=>$data->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('DELETE')); ?>

                            <button class="bg-green-600 text-white ml-2 my-8 w-32 rounded-md text-xl h-7" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel-blog\resources\views/viewblog.blade.php ENDPATH**/ ?>