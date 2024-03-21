<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?= view_cell('Modules\Admin\Cells\SideBarCell::display') ?>


<?= $this->include('Modules\Admin\Views\partials\appointments-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('appointments-content-script') ?>
    <script>
        $(document).ready(function () {

            manageDoctorAppointmentsDataTable();

            function manageDoctorAppointmentsDataTable() {
                $('#manage-appointment-dataTable').dataTable({

                    dom: 'lfBrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                            titleAttr: 'Transactions summery excel',
                            exportOptions: {
                                columns: [1, 2, 3, 4]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="uil uil-file-alt"></i> PDF',
                            titleAttr: 'Transactions summery pdf',
                            exportOptions: {
                                columns: [1, 2, 3, 4]
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class="uil uil-document-info"></i> Print',
                            titleAttr: 'Transactions summery print',
                            exportOptions: {
                                columns: [1, 2, 3, 4]
                            }
                        },
                    ],
                    scrollY: "800px",
                    scrollCollapse: true,

                    "language": {
                        "emptyTable": "You do not have any appointment yet"
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

                    "ajax": {
                        url: '<?= base_url('admin/appointment/get-appointments') ?>',
                        type: 'GET',
                        dataSrc: function (response) {
                            if (response.status === 200) {
                                const appointmentDateTime = moment(`${response.data.appoinment_date} ${response.data.appointment_time}`, "DD MM YYYY hh:mm:ss");
                                return response.data;
                            } else {
                                return [];
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

                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.appointment_date}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.appointment_time}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${moment(data.created_at).format('MMMM Do YYYY')}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {

                                return `
                                   <div>
                                      <a href="/admin/dashboard/appointment/${data.appointment_uuid}" class="text-green-400 hover:text-green-700 bg-slate-200 rounded-md text-lg px-2 font-bold hover:bg-slate-400"><i class="uil uil-edit-alt"></i></a>
                                       <button data-id="${data.appointment_uuid}" class="text-green-400 hover:text-green-700 bg-slate-200 rounded-md text-lg px-2 font-bold hover:bg-slate-400 approve-appointment">
                                       <i class="uil uil-check"></i>
                                     </button>
                                   </div>
                                 `;
                            }
                        },
                    ],
                })
            }

            $('#display-canceled-appointments').on('click', function () {
                if ($('#manage-canceled-dataTable'.length > 0)) {
                    $('#manage-canceled-dataTable').DataTable().destroy();
                    getCanceledAppointments();
                }
            })

            function getCanceledAppointments() {

                $('#manage-canceled-dataTable').dataTable({

                    dom: 'lfBrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                            titleAttr: 'Transactions summery excel',
                            exportOptions: {
                                columns: [1, 2]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="uil uil-file-alt"></i> PDF',
                            titleAttr: 'Transactions summery pdf',
                            exportOptions: {
                                columns: [1, 2]
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class="uil uil-document-info"></i> Print',
                            titleAttr: 'Transactions summery print',
                            exportOptions: {
                                columns: [1, 2]
                            }
                        },
                    ],

                    "language": {
                        "emptyTable": "You do not have any canceled appointment yet"
                    },

                    "responsive": true,
                    columnDefs: [
                        {
                            orderable: false,
                            className: 'select-checkbox',
                            targets: 0
                        }
                    ],

                    order: [[1, 'asc']],

                    select: {
                        style: 'os',
                        selector: 'td:first-child'
                    },

                    scrollCollapse: true,

                    ajax: {
                        url: '<?= base_url('admin/appointment/get-canceled-appointments') ?>',
                        type: 'GET',
                        dataType: 'json',
                        dataSrc: function (response) {
                            if (response.status === 200) {
                                return response.data;
                            } else {
                                return [];
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

                        {
                            data: null,
                            render: function (data) {
                                let reason;
                                if (data.appointment_reason.length > 40) {
                                    reason = data.appointment_reason.substring(0, 40) + '...';
                                } else {
                                    reason = data.appointment_reason;
                                }
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            ${reason}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                let bookedDate = moment(data.created_at).format('LLLL');
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            ${bookedDate}
                            </span>`
                            }
                        },

                        {
                            data: null,
                            render: function (data) {
                                return `<a href="" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 hover:bg-green-200 hover:text-green-900">
                            View Patient
                            </a>`
                            }
                        },
                    ]

                })
            }

            approveAppointmentModel();

            let appointmentUuid = '';

            function approveAppointmentModel() {
                $(document).on('click', '.approve-appointment', function () {
                    appointmentUuid = $(this).data('id');
                    $('#approveAppointmentModal').removeClass('hidden');
                });

                $('#closeApproveAppointmentModal').on('click', function () {
                    $('#approveAppointmentModal').addClass('hidden');
                });
            }

            approveAppointment();

            function approveAppointment() {

                $('#approveAppointment').on('click', function () {
                    let appointmentStatus = $('#approve-appointment').val();
                    if (appointmentStatus === null) {
                        $('#approveAppointmentError').text('Please select an option');
                        return false;
                    } else {
                        $('#approveAppointmentError').text('');
                    }
                    $.ajax({
                        url: '<?= base_url('admin/appointment/approve-appointment') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            appointmentUuid: appointmentUuid,
                            appointmentStatus: appointmentStatus
                        },
                        success: function (response) {
                            if (response.status === 200) {
                                $('#toast-success').removeClass('hidden');
                                $('#toast-success #toast-success-content').text(response.message);
                                $('#manage-appointment-dataTable').DataTable().destroy();
                                manageDoctorAppointmentsDataTable();
                                $('#approveAppointmentModal').addClass('hidden');
                            } else {

                            }
                        }
                    })
                })
            }

        });
    </script>
<?= $this->endSection() ?>