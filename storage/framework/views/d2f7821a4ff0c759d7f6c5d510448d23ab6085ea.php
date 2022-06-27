<?php $__env->startSection('title-block'); ?>Написать блог<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('submitblog-form')); ?>" method="post">
        <?php echo csrf_field(); ?>

            <div>
                <div>
                    <h3 class="text-center font-bold text-4xl">Ваш блог</h3>
                    <div class="border-4 rounded-md mt-6 mr-4 ml-2">
                        <div>
                            <label for="title-input" class="ml-2 text-xl">Заголовок</label></br>
                            <input class="text-xl ml-2 border-4 rounded-md w-64" id="title-input" type="text" name="title">
                        </div>
                        <div>
                            <label for="category-input" class="ml-2 text-xl">Категория</label></br>
                            <select class="ml-2 text-xl ml-2 border-4 rounded-md" id="category-input" name="category_id">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div>
                            <label for="text-input" class="ml-2 text-xl">Текст</label></br>
                            <textarea class="text-xl ml-2 border-4 rounded-md w-64" id="text-input" name="text"></textarea>
                        </div>
                        <div>
                            <button class="bg-green-600 text-white ml-2 my-8 w-40 rounded-md text-xl h-7" type="submit">Опубликовать</button>
                        </div>
                        <div class="text-xl font-bold">
                            <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel-blog\resources\views/writeblog.blade.php ENDPATH**/ ?>