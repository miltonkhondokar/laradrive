<!-- Modal -->
<div class="modal fade" id="createFileModule" tabindex="-1" role="dialog" aria-labelledby="createFileModuleTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createFileModuleTitle">New File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" name="fileCreateForm" id="fileCreateForm" method="post" action="" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="file_name" name="file_name" placeholder="File Name" style="border-radius: 20px !important; border: 2px solid #007BFF !important;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn text-primary">Create</button>
                    </div>
                </form>
            </div>
    </div>
</div>
