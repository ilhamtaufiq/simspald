<div class="form-group has-feedback row <?php echo e($errors->has('description') ? ' has-error ' : ''); ?>">
    <label for="description" class="col-12 control-label">
        <?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-desc.label")); ?>

    </label>
    <div class="col-12">
        <textarea id="description" name="description" class="form-control" placeholder="<?php echo e(trans('laravelroles::laravelroles.forms.roles-form.role-desc.placeholder')); ?>"><?php echo e($description); ?></textarea>
    </div>
    <?php if($errors->has('description')): ?>
        <div class="col-12">
            <span class="help-block">
                <strong><?php echo e($errors->first('description')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/forms/partials/role-desc-input.blade.php ENDPATH**/ ?>