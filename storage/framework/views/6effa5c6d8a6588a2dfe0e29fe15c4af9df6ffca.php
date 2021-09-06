<?php if(session('message')): ?>
    <div class="alert alert-<?php echo e(Session::get('status')); ?> status-box alert-dismissable fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">
            &times;
            <span class="sr-only">
                <?php echo trans('laravelroles::laravelroles.flash-messages.close'); ?>

            </span>
        </a>
        <?php echo session('message'); ?>

    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissable fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">
            &times;
            <span class="sr-only">
                <?php echo trans('laravelroles::laravelroles.flash-messages.close'); ?>

            </span>
        </a>
        <h4>
            <i class="icon fa fas fa-check fa-fw" aria-hidden="true"></i>
            <?php echo trans('laravelroles::laravelroles.flash-messages.success'); ?>

        </h4>
        <?php echo session('success'); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('status')): ?>
    <?php if(session()->get('status') == 'wrong'): ?>
        <div class="alert alert-danger status-box alert-dismissable fade show" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">
                &times;
                <span class="sr-only">
                    <?php echo trans('laravelroles::laravelroles.flash-messages.close'); ?>

                </span>
            </a>
            <?php echo session('message'); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissable fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">
            &times;
            <span class="sr-only">
                <?php echo trans('laravelroles::laravelroles.flash-messages.close'); ?>

            </span>
        </a>
        <h4>
            <i class="icon fa fas fa-warning fa-fw" aria-hidden="true"></i>
            <?php echo trans('laravelroles::laravelroles.flash-messages.error'); ?>

        </h4>
        <?php echo session('error'); ?>

    </div>
<?php endif; ?>

<?php if(session('errors') && count($errors) > 0): ?>
    <div class="alert alert-danger alert-dismissable fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">
            &times;
            <span class="sr-only">
                <?php echo trans('laravelroles::laravelroles.flash-messages.close'); ?>

            </span>
        </a>
        <h4>
            <i class="icon fa fas fa-warning fa-fw" aria-hidden="true"></i>
            <strong>
                <?php echo trans('laravelroles::laravelroles.flash-messages.whoops'); ?>

            </strong>
            <?php echo trans('laravelroles::laravelroles.flash-messages.someProblems'); ?>

        </h4>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo $error; ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/partials/form-status.blade.php ENDPATH**/ ?>