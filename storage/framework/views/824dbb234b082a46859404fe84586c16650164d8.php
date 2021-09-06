<?php
    if(!$level){
        $level = 0;
    }
?>

<div class="form-group has-feedback row <?php echo e($errors->has('level') ? ' has-error ' : ''); ?>">
    <label for="level" class="col-12 control-label">
        <?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-level.label")); ?>

    </label>
    <div class="col-12">
        <input type="number" id="level" name="level" min="0" step="1" onkeypress="return event.charCode >= 48" class="form-control" value="<?php echo e($level); ?>" placeholder="<?php echo e(trans('laravelroles::laravelroles.forms.roles-form.role-level.placeholder')); ?>">
    </div>
    <?php if($errors->has('level')): ?>
        <div class="col-12">
            <span class="help-block">
                <strong><?php echo e($errors->first('level')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/forms/partials/role-level-input.blade.php ENDPATH**/ ?>