<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>


<?= $this->include('Modules\Admin\Views\partials\create-roles-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('roles-content-script') ?>
    <script>
        $(document).ready(function(){

            $('#openNewRoleModal').on('click', function () {
                $('#newRoleModal').removeClass('hidden');
            });

            $('#closeNewRoleModal').on('click', function () {
                $('#newRoleModal').addClass('hidden');
            });

            createRole();

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
                    ],
                    scrollCollapse: true,
                    paging: true,

                    "language": {
                        "emptyTable": "No roles available in the table at the moment"
                    },

                    "responsive": true,

                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },

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
                        url: '<?= base_url('admin/roles/getRoles') ?>',
                        type: 'GET',
                        dataType: 'json',
                        dataSrc: function (response) {
                            return response;

                        }
                    },
                    columns: [
                        {
                            data: null,
                            defaultContent: '',
                            className: 'select-checkbox',
                            orderable: false
                        },

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
                                return `<a href="<?= base_url('admin/dashboard/manage_users/edit_role/')?>${data.role_uuid}" class="btn btn-sm btn-outline-danger">
                            <i class="uil uil-edit"></i>
                                Edit
                            </a>`
                            }
                        }
                    ],

                })
            }


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

                if (roleName !== 'Admin' && roleName !== 'Psychologist' && roleName !== 'Psychiatrist') {
                    $('#roleName').addClass('border-red-500');
                    $('#roleName').focus();
                    $('#roleError').text('Role name should be Admin, or Psychologist or Psychiatric');
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