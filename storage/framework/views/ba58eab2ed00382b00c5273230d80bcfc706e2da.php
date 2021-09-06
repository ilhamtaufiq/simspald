<?php echo e(csrf_field()); ?>

<div class="row">
    <div class="col-md-8">
        <?php echo $__env->make('laravelroles::laravelroles.forms.partials.role-name-input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('laravelroles::laravelroles.forms.partials.role-slug-input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('laravelroles::laravelroles.forms.partials.role-desc-input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-12 col-md-4">
        <?php echo $__env->make('laravelroles::laravelroles.forms.partials.role-level-input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('laravelroles::laravelroles.forms.partials.role-permissions-select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/forms/role-form.blade.php ENDPATH**/ ?>