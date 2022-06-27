<?php $__env->startSection('content'); ?>
<div>
    <div>
        <div>
            <div class="border-4 rounded-md w-64 mt-6 mr-4 ml-2">
                <div class="text-2xl font-bold ml-2"><?php echo e(__('Reset Password')); ?></div>

                <div>
                    <?php if(session('status')): ?>
                        <div role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div>
                            <label for="email" class="text-xl ml-2"><?php echo e(__('Email Address')); ?></label>

                            <div>
                                <input id="email" type="email" class="text-xl ml-2 border-4 rounded-md" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span role="alert" class="ml-2">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="bg-green-600 text-white ml-2 my-8 w-24 rounded-md text-xl h-7">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel-blog\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>