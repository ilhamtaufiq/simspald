<script type="text/javascript">
    var noConflictMode = jQuery.noConflict(true);
    (function ($) {
        $(document).ready(function () {
            $("#permissions").selectize({
                placeholder: ' <?php echo e(trans("laravelroles::laravelroles.forms.roles-form.role-permissions.placeholder")); ?> ',
                allowClear: true,
                create: false,
                highlight: true,
                diacritics: true
            });
        });
    }(noConflictMode));
</script>
<?php /**PATH /Users/ilhamtaufiq/www/abs/vendor/jeremykenedy/laravel-roles/src/resources/views//laravelroles/scripts/selectize.blade.php ENDPATH**/ ?>