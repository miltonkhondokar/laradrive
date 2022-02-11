<script>
    $(document).ready(function() {
        $('#FolderCreateForm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                folder_name: {
                    message: 'The folder is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Folder name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 50,
                            message: 'The folder must be more than 6 and less than 50 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\s]*$/,
                            message: 'The folder name can only consist of alphabetical, number and underscore'
                        }
                    }
                }
            }
        });
    });

</script>
