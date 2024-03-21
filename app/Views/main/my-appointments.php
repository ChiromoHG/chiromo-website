<?= $this->extend('base/base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('partials/navbar.php'); ?>

    <div class="load"></div>

<main class="grid md:grid-cols-3 gap-3 md:gap-4 mx-4 lg:mx-4 pt-2">
    <div class="grid md:col-span-1 h-96">
        <?= $this->include('partials/dashboard-side-bar.php'); ?>
    </div>
    <div class="grid md:col-span-2">
        <?= $this->include('partials/my-appointments-content.php'); ?>
    </div>
</main>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection() ?>
<?= $this->section('my-appointments-script') ?>
<script>
    $(document).ready(function (){

        $('#display-full-calendar').on('click', function (){
            showFullCalendar();
        });

        $('#closeViewCalendarModal').on('click', function (){
            $('#showCalendarModel').addClass('hidden');
        });


        function showFullCalendar(){
            $('#showCalendarModel').removeClass('hidden');
            let calendarEl = document.getElementById('calender');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    right: 'dayGridMonth,timeGridDay'
                },

                events: function (fetchInfo, successCallback, failureCallback) {
                    $.ajax({
                        url: '<?= base_url('api/get_get_display_appointments') ?>',
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            let events = [];
                            if (response.status === 200) {
                                response.appointments.forEach(function (data) {
                                    let startMoment = moment(data.appointment_date + ' ' + data.appointment_time, 'YYYY-MM-DD HH:mm:ss');
                                    let endMoment = startMoment.clone().add(1, 'hour');

                                    events.push({
                                        title: data.appointment_title,
                                        start: startMoment.format(),
                                        end: endMoment.format(),
                                    });
                                });
                            }
                            successCallback(events);
                        },
                        error: function (response) {
                            console.log(response);
                        }
                    });
                },

            });
            calendar.render();
        }


        manage_my_appointments_dataTable();

        function manage_my_appointments_dataTable(){
            $('#manage-my-appointments').dataTable({
                scrollY: "800px",
                scrollCollapse: true,
                paging: false,
                searching: false,

                "language":{
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

                ajax: {
                    url: '<?= base_url('api/get_patient_appointments') ?>',
                    method: 'POST',
                    dataSrc: function (response) {
                        console.log(response)
                        if(response.status === 200){
                            console.log(response.appointments);
                            cancelAppointmentModel();
                            cancelAppointment();
                            return response.appointments;
                        }else{
                            return [];
                        }
                    }
                },

                columns: [
                    {
                        data: null,
                        render: function (data, type, row) {
                            return data.doctor_title + ' ' + data.doctor_fname + ' ' + data.doctor_lname;
                        }
                    },

                    // {
                    //     data: null,
                    //     render: function (data) {
                    //         return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    //         ${data.appointment_date}
                    //         </span>`
                    //     }
                    // },
                    //
                    // {
                    //     data: null,
                    //     render: function (data) {
                    //         return `<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    //         ${data.appointment_time}
                    //         </span>`
                    //     }
                    // },
                    {
                        data: null,
                        render: function (data) {
                            return `<button data-id=${data.appointment_uuid} data-doctor-id=${data.doctor_uuid} class="text-red-400 hover:text-red-700 text-sm font-semibold cancel-my-appointment">
                                Cancel
                            </button>`
                        }
                    }
                ],
            })
        }

        let appointmentUuid = '';
        let doctorUuid = '';
        function cancelAppointmentModel(){
            $(document).on('click', '.cancel-my-appointment', function () {
                appointmentUuid = $(this).data('id');
                doctorUuid = $(this).data('doctor-id')
                $('#cancelAppointmentModal').removeClass('hidden');
            });

            $('#closeCancelAppointmentModal').on('click', function () {
                $('#cancelAppointmentModal').addClass('hidden');
            });
        }


        function cancelAppointment(){
            $('#cancel-appointment').on('click', function (){

                let cancelAppointmentReason = $('#cancel-appointment-reason').val();
                if(cancelAppointmentReason === "") {
                    $('#cancelAppointmentError').text('Please type the reason for canceling the appointment');
                    $('#cancelAppointmentModal #cancel-appointment-reason').addClass('border-red-500');
                    return false;
                }else{
                    $('#cancelAppointmentModal #cancel-appointment-reason').removeClass('border-red-500');
                    $('#cancelAppointmentError').text('');
                }


                $('#cancel-appointment').prop('disabled', true).html('<span class="loading loading-dots loading-md pl-1"></span>');
                $.ajax({
                    url: '<?= base_url('api/cancel_appointment') ?>',
                    method: 'POST',
                    data: {
                        appointmentUuid: appointmentUuid,
                        doctorUuid: doctorUuid,
                        cancelAppointmentReason: cancelAppointmentReason
                    },
                    success: function (response){
                        if(response.status === 200){
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                            $('#manage-my-appointments').DataTable().destroy();
                            manage_my_appointments_dataTable();
                            $('#cancelAppointmentModal').addClass('hidden');
                        }else if(response.status === 500){
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text(response.message);
                        }
                    },

                    error: function (error){
                        $('#cancelAppointmentModal').addClass('hidden');
                        $('#toast-danger').removeClass('hidden');
                        $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                    },

                    complete: function (){
                        $('#cancel-appointment').prop('disabled', false).html('Submit');
                    }
                })
            })

        }

    })

</script>
<?php $this->endSection() ?>