
<div class="modal fade" id="modalUser" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="alertDialogUser()" id="closes">&times;</button>
                <h4 class="modal-title" id="modalTitleText"></h4>
                </div>
                <div class="modal-body">
                <p><span id="modalContent">modalContentText</span><strong><span id="modalFullname"></strong>?</p>
                </div>
                <div class="modal-footer">
                <a id="modalLink"  href="action" class="btn btn-primary" data-dismiss="modal" onclick="$('#modalUser').modal('hide')"><i class="fa fa-lock"></i><span class="text-capitalize" id="modalButtonText"></span></a>
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="alertDialogUser()" id="cancel">Batal</button>
            </div>
            
            </div>
        </div>
    </div>
</div>
