<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('Modules\Admin\Views\includes\sidebar.php') ?>
<?= $this->include('Modules\Admin\Views\partials\profile-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('profile-content-script') ?>
<script>
    $(document).ready(function (){
        $('#updatePassword').on('click', function (e){

            e.preventDefault();

            let oldPass = $('#oldPassword').val();
            let newPass = $('#newPassword').val();
            let confNewPass = $('#confNewPassword').val();

            if(oldPass === ''){
                $('#oldPassword').addClass('border-red-500');
                $('#oldPassword').focus();
                $('#oldPassError').text('Old password is required');
                return false;
            }else{
                $('#oldPassword').removeClass('border-red-500');
                $('#oldPassError').text('');
            }

            if(newPass === ''){
                $('#newPassword').addClass('border-red-500');
                $('#newPassword').focus();
                $('#newPassError').text('New password is required');
                return false;
            }else{
                $('#newPassword').removeClass('border-red-500');
                $('#newPassError').text('');
            }
            if(confNewPass === ''){
                $('#confNewPassword').addClass('border-red-500');
                $('#confNewPassword').focus();
                $('#confNewPassError').text('Confirm new password is required');
                return false;
            }else{
                $('#confNewPassword').removeClass('border-red-500');
                $('#confNewPassError').text('');
            }
            if(newPass !== confNewPass){
                $('#confNewPassword').addClass('border-red-500');
                $('#confNewPassword').focus();
                $('#confNewPassError').text('Confirm new password does not match');
                return false;
            }else{
                $('#confNewPassword').removeClass('border-red-500');
                $('#confNewPassError').text('');
            }

            $('#updatePassword').prop('disabled', true).html(' <span class="loading loading-dots loading-md"></span>');
            $.ajax({
                url: `<?= base_url('admin/users/updateUserProfile/') ?><?= session()->get('user_uuid') ?>`,
                type: 'POST',
                dataType: 'json',
                data: {
                    oldPass: oldPass,
                    newPass: newPass,
                },
                success: function (response) {
                    if(response.status === 200){
                        $('#toast-success').removeClass('hidden');
                        $('#toast-success #toast-success-content').text(response.message);
                    }
                    else if(response.status === 500){
                        $('#toast-danger').removeClass('hidden');
                        $('#toast-danger #toast-danger-content').text(response.message);
                    }
                },
                error: function (error) {
                    $('#toast-danger').removeClass('hidden');
                    $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                },

                complete: function(){
                    $('#updatePassword').prop('disabled', false).html('Update Password');
                }
            })
        })
    });
</script>
<?= $this->endSection() ?>
