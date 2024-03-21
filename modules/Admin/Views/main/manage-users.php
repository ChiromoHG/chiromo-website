<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\manage-users-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('manage-users-content-script') ?>
<script>
    $(document).ready(function (){

        $('#openNewUserModal').on('click', function () {
            $('#newUserModal').removeClass('hidden');
        });

        $('#closeNewUserModal').on('click', function () {
            $('#newUserModal').addClass('hidden');
        });


        createUser();


        // creating users dataTable function
        function createUser() {
            $('#manage-users-dataTable').DataTable({
                
                dom: 'lfBrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                        titleAttr: 'Transactions summery excel',
                        exportOptions: {
                            columns: [1,2,3]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="uil uil-file-alt"></i> PDF',
                        titleAttr: 'Transactions summery pdf',
                        exportOptions: {
                            columns: [1,2,3]
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="uil uil-document-info"></i> Print',
                        titleAttr: 'Transactions summery print',
                        exportOptions: {
                            columns: [1,2,3]
                        }
                    },
                ],

                scrollY: "800px",
                scrollCollapse: true,
                paging: true,

                "language": {
                    "emptyTable": "No users available in the table at the moment"
                },

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },

                "responsive": true,

                columnDefs: [
                    {
                        orderable: false,
                        className: 'select-checkbox',
                        targets: 0
                    }
                ],

                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                order: [[1, 'asc']],

                ajax: {
                    url: '<?= base_url('admin/users/getUsers') ?>',
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: function (response) {
                        if (response.status === 200) {
                            return response.data;
                        } else if (response.status === 500) {
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text(response.message);
                        }
                    }
                },

                columns: [
                    {
                        data: null,
                        defaultContent: '',
                        className: 'select-checkbox',
                        orderable: false
                    },

                    {
                        data: null,
                        render: function (data, type, row) {
                            return data.fname + ' ' + data.lname;
                        }
                    },
                    {data: 'email'},
                    {
                        data: null,
                        render: function (data) {
                            return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.role_name}
                            </span>`
                        }

                    },

                    {
                        data: null,
                        render: function (data) {
                            return `<a href="<?= base_url('admin/dashboard/manage_users/edit_user/')?>${data.user_uuid}" class="btn btn-sm btn-outline-danger">
                            <i class="uil uil-edit"></i>
                                Edit
                            </a>`
                        }
                    }

                ],

            })
        }

        // creating users

        $('#new-user-btn').on('click', function () {
            const emailPattern = /^[a-zA-Z0-9._-]+@(chiromohospitalgroup\.co\.ke|gmail\.com)$/;
            let title = $('#select-tittle').val();
            let firstName = $('#fname').val();
            let lastName = $('#lname').val();
            let email = $('#email').val();
            let role = $('#select-role').val();


            if(title === ''){
                $('#select-tittle').addClass('border-red-500');
                $('#select-tittle').focus();
                $('#selectTitle').text('Title is required');
                return false;
            }else{
                $('#select-tittle').removeClass('border-red-500');
                $('#selectTitle').text('');
            }
            if (firstName === '') {
                $('#fname').addClass('border-red-500');
                $('#fname').focus();
                $('#fnameError').text('First name is required');
                return false;
            } else {
                $('#fname').removeClass('border-red-500');
                $('#fnameError').text('');
            }

            if (lastName === '') {
                $('#lname').addClass('border-red-500');
                $('#lname').focus();
                $('#lnameError').text('Last name is required');
                return false;
            } else {
                $('#lname').removeClass('border-red-500');
                $('#lnameError').text('');
            }

            if (email === '') {
                $('#email').addClass('border-red-500');
                $('#email').focus();
                $('#emailError').text('Email is required');
                return false;
            } else {
                $('#email').removeClass('border-red-500');
                $('#emailError').text('');
            }

            if (!emailPattern.test(email)) {
                $('#email').addClass('border-red-500');
                $('#email').focus();
                $('#emailError').text('Please enter a valid email address, a chirormohospitalgroup.co.ke or gmail.com email address');
                return false;
            } else {
                $('#email').removeClass('border-red-500');
                $('#emailError').text('');
            }

            if (role === '') {
                $('#select-role').addClass('border-red-500');
                $('#select-role').focus();
                $('#roleError').text('Role name is required');
                return false;
            } else {
                $('#select-role').removeClass('border-red-500');
                $('#roleError').text('');
            }

            $('#new-user-btn').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> creating user');
            $.ajax({
                url: '<?= base_url('admin/users/createUser') ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    title: title,
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    role: role
                },
                success: function (response) {
                    if (response.status === 200) {
                        $('#newUserModal').addClass('hidden');
                        $('#fname').val('');
                        $('#lname').val('');
                        $('#email').val('');
                        if ($('#manage-users-dataTable').length > 0) {
                            $('#manage-users-dataTable').DataTable().destroy();
                            createUser();
                        }
                        $('#toast-success').removeClass('hidden');
                        $('#toast-success #toast-success-content').text(response.message);
                    } else if (response.status === 500) {
                        $('#newUserModal').addClass('hidden');
                        $('#toast-danger').removeClass('hidden');
                        $('#toast-danger #toast-danger-content').text(response.message);
                    }
                },
                error: function (error) {
                    $('#newUserModal').addClass('hidden');
                    $('#toast-danger').removeClass('hidden');
                    $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                },

                complete: function () {
                    $('#new-user-btn').prop('disabled', false).html('Create Role');
                }
            })

        })

    })
</script>
<?= $this->endSection() ?>
