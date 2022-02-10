<!-- Modal -->
<div class="modal fade" id="createFolderModule" tabindex="-1" role="dialog" aria-labelledby="createFolderModuleTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFolderModuleTitle">New Folder</h5>
            </div>
            <form class="form-horizontal" name="FolderCreateForm" id="FolderCreateForm" method="post" action="{{ url('/create_folder') }}" autocomplete="off">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="folder_name" name="folder_name" placeholder="Folder Name" style="border-radius: 20px !important; border: 2px solid #007BFF !important;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="btn_folder_create" class="btn text-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
