<?php $__env->startSection('content'); ?>
    <div>
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <table class="border-4 rounded-md w-72 mt-6 mr-4 ml-2">
        <thead>
            <tr class="border-b-4">
                <th class="grid gap-4">Номер</th>
                <th class="grid gap-4">Заголовок</th>
                <th class="grid gap-4">Категория</th>
                <th class="grid gap-4">Дата создания</th>
                <th class="grid gap-4">Дата изменения</th>
                <th> </th>
            </tr>
        </thead>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr class="border-b-4">
                <td class="grid gap-4"><?php echo e($elem->id); ?></td>
                <td class="grid gap-4"><?php echo e($elem->title); ?></td>
                <td class="grid gap-4"><?php echo e($elem->category->name); ?></td>
                <td class="grid gap-4"><?php echo e($elem->created_at); ?></td>
                <td class="grid gap-4"><?php echo e($elem->updated_at); ?></td>
                <td class="grid gap-4"><a class="bg-green-600 text-center text-white mt-6 w-32 rounded-md text-xl h-7" href="<?php echo e(route('viewblog',$elem->id)); ?>"><button class="btn-outline-info">Прочитать</button></a></td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel-blog\resources\views/viewblogs.blade.php ENDPATH**/ ?>