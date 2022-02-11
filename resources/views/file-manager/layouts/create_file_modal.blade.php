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
                <div class="padding-top"></div>
                <form class="form-horizontal" name="createFileModule" id="createFileModule" method="post" action="{{ url('/create-file') }}" autocomplete="off" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <?php
                        $parent_id = "";
                        if(isset($parent_folder['parent_id'])){
                            $parent_id = $parent_folder['parent_id'];
                        }
                    ?>


                    <input type="hidden" id="parent_folder_id" name="parent_folder_id" value="{{ $parent_id }}">

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" id="file_name" name="file_name">
                        </div>
                    </div>
                    <div class="padding-top"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn text-primary">Create</button>
                    </div>
                </form>
            </div>
    </div>
</div>
