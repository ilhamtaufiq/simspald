<div class="form-group has-feedback row <?php echo e($errors->has('slug') ? ' has-error ' : ''); ?>">
    <label for="slug" class="col-12 control-label">
        <?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-slug.label")); ?>

    </label>
    <div class="col-12">
        <input type="text" id="slug" name="slug" class="form-control" value="<?php echo e($slug); ?>" onkeypress="return numbersAndLettersOnly()" placeholder="<?php echo e(trans('laravelroles::laravelroles.forms.roles-form.role-slug.placeholder')); ?>">
    </div>
    <?php if($errors->has('slug')): ?>
        <div class="col-12">
            <span class="help-block">
                <strong><?php echo e($errors->first('slug')); ?></strong>
            </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/forms/partials/role-slug-input.blade.php ENDPATH**/ ?>