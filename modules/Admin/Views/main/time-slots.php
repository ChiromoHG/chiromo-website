<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\time-slots-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('psychologist-content-script') ?>
    <script>
        $(document).ready(function () {

            function getSlots(startDate, startTime, endTime){

                $('#dateAvailable').flatpickr({
                    enableTime: false,
                    dateFormat: "Y-m-d",
                    minDate: "today",
                    mode: "range",
                    maxDate: new Date().fp_incr(30),
                    disable: [
                        function(date) {
                            // return true to disable
                            return (date.getDay() === 0 || date.getDay() === 6);

                        }
                    ],
                });


                $('#startTime').flatpickr({
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: "H:i",
                    time_24hr: true,
                    defaultDate: "08:00",
                    minTime: "08:00",
                    maxTime: "18:00",
                });

                $('#endTime').flatpickr({
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: "H:i",
                    time_24hr: true,
                    defaultDate: "18:00",
                    minTime: "08:00",
                    maxTime: "18:00",
                });
            }

            getSlots();

            $('#save-time-slots').on('click', function (){
                let date = $('#dateAvailable').val();
                let startTime = $('#startTime').val();
                let endTime = $('#endTime').val();

                let splitDate = date.split('to');
                let startDate = splitDate[0];
                let endDate = splitDate[1];


                if(date === ""){
                    $('#dateError').text('Please select a date');
                    return false;
                }else{
                    $('#dateError').text('');
                }

                if(startTime === ""){
                    $('#startTimeError').text('Please select a start time');
                    return false;
                }else{
                    $('#startTimeError').text('');
                }

                if(endTime === ""){
                    $('#endTimeError').text('Please select an end time');
                    return false;
                }else{
                    $('#endTimeError').text('');
                }

                $('#save-time-slots').prop('disabled', true).html('<span class="loading loading-dots loading-md pl-1"></span>')
                $.ajax({
                    url: '<?= base_url('admin/doctor/save-time-slots') ?>',
                    type: 'POST',
                    data: {
                        startDate: startDate,
                        endDate: endDate,
                        startTime: startTime,
                        endTime: endTime
                    },
                    success: function (response){
                        if(response.status === 200) {
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                        }
                        else if(response.status === 500){
                                $('#toast-danger').removeClass('hidden');
                                $('#toast-danger #toast-danger-content').text(response.message);
                        }
                    },
                    error: function (error){
                        $('#toast-danger').removeClass('hidden');
                        $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                    },

                    complete: function (){
                        $('#save-time-slots').prop('disabled', false).html('<i class="uil uil-save pr-2"></i>Save Changes')
                    }
                })
            })


            function displayTimeSlots(){
                $('#manage-slots-dataTable').DataTable({
                    dom: 'lfBrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                            titleAttr: 'Transactions summery excel',
                            exportOptions: {
                                columns: [0, 1, 2, 3]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="uil uil-file-pdf"></i> PDF',
                            titleAttr: 'Transactions summery pdf',
                            exportOptions: {
                                columns: [0, 1, 2, 3]
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class="uil uil-print"></i> Print',
                            titleAttr: 'Print Transactions summery',
                            exportOptions: {
                                columns: [0, 1, 2, 3]
                            }
                        }
                    ],
                    "paging": true,
                    "language": {
                        "emptyTable": "No time slots available"
                    },
                    "responsive": true,
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },

                    columnDefs: [
                        { responsivePriority: 1, targets: 0 },
                        { responsivePriority: 2, targets: -1 },
                        {
                            orderable: false,
                            targets: 0
                        }
                    ],
                    order: [[1, 'asc']],
                    ajax: {
                        url: '<?= base_url('admin/doctor/get-time-slots') ?>',
                        type: 'GET',
                        dataSrc: function (response){
                            if(response.status === 200){
                                return response.data;
                            }else{
                                return [];
                            }
                        }
                    },
                    columns: [
                        {
                            data: null,
                            render: function (data, type, row) {
                                return data.title + ' ' + data.fname + ' ' + data.lname;
                            }
                        },
                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.slot_start_date}
                            </span>`
                            }

                        },
                        {
                            data: null,
                            render: function (data) {
                                return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            ${data.slot_end_date}
                            </span>`
                            }

                        },
                        {
                           data: "slot_start_time"

                        },
                        {
                           data: "slot_end_time"

                        },
                        {
                            data: null,
                            render: function (data) {
                                return `<a href="<?= base_url('admin/dashboard/psychologists')?>" class="btn btn-sm btn-outline-danger"><i class="uil uil-edit-alt"></i></a>`
                            }
                        }
                    ]
                })
            }


            $('#display-time-slots').on('click', function (){
                 $('#manage-slots-dataTable').DataTable().destroy();
                displayTimeSlots();
            })

        });
    </script>
<?= $this->endSection() ?>