<div class="form-group has-feedback row <?php echo e($errors->has('name') ? ' has-error ' : ''); ?>">
    <label for="name" class="col-12 control-label">
        <?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-name.label")); ?>

    </label>
    <div class="col-12">
        <input type="text" id="name" name="name" class="form-control" value="<?php echo e($name); ?>" placeholder="<?php echo e(trans('laravelroles::laravelroles.forms.roles-form.role-name.placeholder')); ?>">
    </div>
    <?php if($errors->has('name')): ?>
        <div class="col-12">
            <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/forms/partials/role-name-input.blade.php ENDPATH**/ ?>