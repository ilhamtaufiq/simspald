<?php $__env->startSection(config('roles.titleExtended')); ?>
    <?php echo trans('laravelroles::laravelroles.titles.edit-role', ['name' => $name]); ?>

<?php $__env->stopSection(); ?>

<?php
    switch (config('roles.bootstapVersion')) {
        case '3':
            $containerClass = 'panel';
            $containerHeaderClass = 'panel-heading';
            $containerBodyClass = 'panel-body';
            break;
        case '4':
        default:
            $containerClass = 'card';
            $containerHeaderClass = 'card-header';
            $containerBodyClass = 'card-body';
            break;
    }
    $bootstrapCardClasses = (is_null(config('roles.bootstrapCardClasses')) ? '' : config('roles.bootstrapCardClasses'));
?>

<?php $__env->startSection(config('roles.bladePlacementCss')); ?>
    <?php if(config('roles.enableFontAwesomeCDN')): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(config('roles.fontAwesomeCDN')); ?>">
    <?php endif; ?>
    <?php echo $__env->make('laravelroles::laravelroles.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('laravelroles::laravelroles.partials.bs-visibility-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(config('roles.enableSelectizeJsCssCDN')): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(config('roles.SelectizeJsCssCDN')); ?>">
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('laravelroles::laravelroles.partials.flash-messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-post" id="post_card">
                    <div class="card-header">
                        <?php echo trans('laravelroles::laravelroles.titles.edit-role', ['name' => $name]); ?>

                        <div class="pull-right">
                            <a href="<?php echo e(route('laravelroles::roles.index')); ?>" class="btn btn-outline-secondary btn-sm float-right" data-toggle="tooltip" data-placement="left" title="<?php echo e(trans('laravelroles::laravelroles.tooltips.back-roles')); ?>">
                                <i class="fa fa-fw fa-reply-all" aria-hidden="true"></i>
                                <?php echo trans('laravelroles::laravelroles.buttons.back-to-roles'); ?>

                            </a>
                        </div>
                    </div>
                    <?php echo e(method_field('PUT')); ?>

                    <?php echo $__env->make('laravelroles::laravelroles.forms.edit-role-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection(config('roles.bladePlacementJs')); ?>
    <?php if(config('roles.enablejQueryCDN')): ?>
        <script type="text/javascript" src="<?php echo e(config('roles.JQueryCDN')); ?>"></script>
    <?php endif; ?>
    <?php if(config('roles.tooltipsEnabled')): ?>
        <?php echo $__env->make('laravelroles::laravelroles.scripts.tooltips', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(config('roles.enableSelectizeJsCDN')): ?>
        <script type="text/javascript" src="<?php echo e(config('roles.SelectizeJsCDN')); ?>"></script>
    <?php endif; ?>
    <?php if(config('roles.enableSelectizeJs')): ?>
        <?php echo $__env->make('laravelroles::laravelroles.scripts.selectize', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->yieldContent('inline_template_linked_css'); ?>
<?php echo $__env->yieldContent('inline_footer_scripts'); ?>

<?php echo $__env->make(config('roles.bladeExtended'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/crud/roles/edit.blade.php ENDPATH**/ ?>