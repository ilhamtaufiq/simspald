<div class="form-group has-feedback row <?php echo e($errors->has('permissions') ? ' has-error ' : ''); ?>">
    <label for="permissions" class="col-12 control-label">
        <?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-permissions.label")); ?>

    </label>
    <div class="col-12">
        <select name="permissions[]" id="permissions" multiple>
            <option value=""><?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-permissions.placeholder")); ?></option>
            <?php $__currentLoopData = $allPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if(in_array($permission->id, $rolePermissionsIds)): ?> selected <?php endif; ?> value="<?php echo e($permission); ?>">
                    <?php echo e($permission->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php if($errors->has('permissions')): ?>
        <div class="col-12">
            <span class="help-block">
                <strong><?php echo e($errors->first('permissions')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/forms/partials/role-permissions-select.blade.php ENDPATH**/ ?>