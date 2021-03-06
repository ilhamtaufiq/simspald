<div class="modal fade modal-danger" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo trans('laravelusers::modals.delete_user_title'); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php echo trans('laravelusers::modals.delete_user_message'); ?>

                </p>
            </div>
            <div class="modal-footer">
                <?php echo Form::button(trans('laravelusers::modals.delete_user_btn_cancel'), array('class' => 'btn btn-light pull-left', 'type' => 'button', 'data-dismiss' => 'modal' )); ?>

                <?php echo Form::button(trans('laravelusers::modals.delete_user_btn_confirm'), array('class' => 'btn btn-danger pull-right btn-flat', 'type' => 'button', 'id' => 'confirm' )); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/ilhamtaufiq/www/abs/resources/views/vendor/laravelusers/modals/modal-delete.blade.php ENDPATH**/ ?>