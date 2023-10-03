<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('Modules\Admin\Views\includes\sidebar.php') ?>
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

        $('#openNewRoleModal').on('click', function () {
            $('#newRoleModal').removeClass('hidden');
        });

        $('#closeNewRoleModal').on('click', function () {
            $('#newRoleModal').addClass('hidden');
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
                            columns: [0, 1, 2]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="uil uil-file-alt"></i> PDF',
                        titleAttr: 'Transactions summery pdf',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="uil uil-document-info"></i> Print',
                        titleAttr: 'Transactions summery print',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                    {

                        extend: 'copy',
                        text: '<i class="uil uil-copy-landscape"></i> Copy',
                        titleAttr: 'Copy to clipboard',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                ],

                scrollY: "800px",
                scrollCollapse: true,
                paging: true,

                "language": {
                    "emptyTable": "No users available in the table at the moment"
                },

                "processing": true,

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
                            return `<a href="<?= base_url('admin/dashboard/manage_users/edit_user/')?>${data.user_uuid}" class="border border-1 border-slate-500 text-black font-normal py-1 px-2 rounded-md hover:bg-blue-600 hover:border-blue-600 transition-colors">
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
            let firstName = $('#fname').val();
            let lastName = $('#lname').val();
            let email = $('#email').val();
            let role = $('#select-role').val();

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

        //roles on_click roles button

        $('#display-roles').on('click', function () {
            if ($('#manage-roles-dataTable').length > 0) {
                $('#manage-roles-dataTable').DataTable().destroy();
                createRole();
            }
        });

        //dataTable function for creating roles

        function createRole() {

            $('#manage-roles-dataTable').DataTable({

                dom: 'lfBrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                        titleAttr: 'Transactions summery excel',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="uil uil-file-alt"></i> PDF',
                        titleAttr: 'Transactions summery pdf',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="uil uil-document-info"></i> Print',
                        titleAttr: 'Transactions summery print',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                    {

                        extend: 'copy',
                        text: '<i class="uil uil-copy-landscape"></i> Copy',
                        titleAttr: 'Copy to clipboard',
                        exportOptions: {
                            columns: [0, 1, 2]
                        }
                    },
                ],
                scrollCollapse: true,
                paging: true,

                "language": {
                    "emptyTable": "No roles available in the table at the moment"
                },

                "processing": true,


                ajax: {
                    url: '<?= base_url('admin/roles/getRoles') ?>',
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: function (response) {
                        return response;

                    }
                },
                columns: [
                    {data: 'role_name'},
                    {data: 'role_description'},
                    {
                        data: null,
                        render: function (data) {
                            return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.user_count}
                            </span>`
                        }
                    },

                    {
                        data: null,
                        render: function (data) {
                            return `<a href="<?= base_url('admin/dashboard/manage_users/edit_role/')?>${data.role_uuid}" class="border border-1 border-slate-500 text-black font-normal py-1 px-2 rounded-md hover:bg-blue-600 hover:border-blue-600 transition-colors">
                            <i class="uil uil-edit"></i>
                                Edit
                            </a>`
                        }
                    }
                ],

            })
        }

        // adding new role from the modal

        $('#createRole').on('click', function () {
            let roleName = $('#roleName').val();
            let roleDescription = $('#roleDescription').val();

            if (roleName === '') {
                $('#roleName').addClass('border-red-500');
                $('#roleName').focus();
                $('#roleError').text('Role name is required');
                return false;
            } else {
                $('#roleName').removeClass('border-red-500');
                $('#roleError').text('');
            }

            if (roleName !== 'Admin' && roleName !== 'Therapist') {
                $('#roleName').addClass('border-red-500');
                $('#roleName').focus();
                $('#roleError').text('Role name should be Admin, or Therapist');
                return false;
            } else {
                $('#roleName').removeClass('border-red-500');
                $('#roleError').text('');
            }

            $('#createRole').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> creating role');

            $.ajax({
                url: '<?= base_url('admin/roles/create') ?>',
                type: 'POST',
                data: {
                    roleName: roleName,
                    roleDescription: roleDescription
                },
                success: function (response) {
                    if (response.status === 200) {
                        if ($('#manage-roles-dataTable').length > 0) {
                            $('#manage-roles-dataTable').DataTable().destroy();
                            createRole();
                        }
                        $('#newRoleModal').addClass('hidden');
                        $('#roleName').val('');
                        $('#roleDescription').val('');
                        $('#roleError').text('');
                        $('#toast-success').removeClass('hidden');
                        $('#toast-success #toast-success-content').text(response.message);
                    } else if (response.status === 500) {
                        $('#roleName').addClass('border-red-500');
                        $('#roleName').focus();
                        $('#roleError').text(response.message);
                    }
                },

                error: function (response) {
                    $('#toast-danger').removeClass('hidden');
                    $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                },

                complete: function (response) {
                    $('#createRole').prop('disabled', false).html('Create Role');
                }
            })
        });


    })
</script>
<?= $this->endSection() ?>
