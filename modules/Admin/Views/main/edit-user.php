<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\edit-user-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('edit-user-content-script') ?>
<script>
    $('#updateUser').on('click', function (e){

        e.preventDefault();

        let fname = $('#fname').val();
        let lname = $('#lname').val();
        let email = $('#email').val();


        if(fname === ''){
            $('#fname').addClass('border-red-500');
            $('#fname').focus();
            $('#fnameError').text('First name is required');
            return false;
        }else{
            $('#fname').removeClass('border-red-500');
            $('#fnameError').text('');
        }

        if(lname === ''){
            $('#lname').addClass('border-red-500');
            $('#lname').focus();
            $('#lnameError').text('Last name is required');
            return false;
        }else{
            $('#lname').removeClass('border-red-500');
            $('#lnameError').text('');
        }
        if(email === ''){
            $('#email').addClass('border-red-500');
            $('#email').focus();
            $('#emailError').text('Email is required');
            return false;
        }else{
            $('#phone').removeClass('border-red-500');
            $('#phoneError').text('');
        }

        $('#updateUser').prop('disabled', true).html(' <span class="loading loading-dots loading-md"></span>');
        let id= $('#updateUser').data('id');
        $.ajax({
            url: `<?= base_url('admin/users/updateUser/') ?>${id}`,
            type: 'POST',
            dataType: 'json',
            data: {
                fname: fname,
                lname: lname,
                email: email
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
                $('#updateUser').prop('disabled', false).html('Update user');
            }
        })
    })
</script>
<?= $this->endSection() ?>
