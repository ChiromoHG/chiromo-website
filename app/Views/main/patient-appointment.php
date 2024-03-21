<?= $this->extend('base/base.php') ?>
<?= $this->section('content') ?>

<?= $this->include('partials/navbar.php'); ?>

<div class="load"></div>

<main class="grid md:grid-cols-3 gap-3 md:gap-4 mx-4 lg:mx-4 pt-2">
    <div class="grid md:col-span-1 h-96">
        <?= $this->include('partials/dashboard-side-bar.php'); ?>
    </div>
    <div class="grid md:col-span-2">
        <?= $this->include('partials/patient-appointment-content.php'); ?>
    </div>
</main>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection() ?>
<?= $this->section('patient-appointment-script') ?>
<script>
    $(document).ready(function () {
        const wrapper = document.querySelector('.wrapper'),
            selectInput = wrapper.querySelector('.select-input');

        selectInput.addEventListener('click', function () {
            wrapper.classList.toggle('active');
        });

        const wrapperTime = document.querySelector('.wrapper-time'),
            selectTime = wrapperTime.querySelector('.select-time');

        selectTime.addEventListener('click', function () {
            wrapperTime.classList.toggle('active');

        });

        //start of the book appointment section

        const doctorType = document.querySelector('#doctor-type');
        doctorType.addEventListener('input', function () {
            const doctorTypeValue = this.value;
            getDoctors(doctorTypeValue);
        });

        let initialDoctorType = $('#doctor-type').val();
        getDoctors(initialDoctorType);

        const quill = new Quill('#quill-editor-content', {
            theme: 'snow'
        });

        function getDoctors(selectedDoctorType) {
            $.ajax({
                url: '<?= base_url('api/get_doctors') ?>',
                method: 'POST',
                data: {
                    selectedDoctorType: selectedDoctorType
                },
                success: function (response) {
                    renderDoctors(response);
                    searchDoctor(response);
                    fillDoctorInput();
                }

            });
        }

        //render doctors
        function renderDoctors(response) {
            let output = '';

            if (response && response.length > 0) {
                response.forEach(function (doctor) {
                    output += `
                            <li data-id="${doctor.user_uuid}" class="hover:bg-gray-100 py-1 pl-2 rounded-md font-semibold list-doctor">${doctor.title} ${doctor.fname} ${doctor.lname}</li>
                            `;
                });
            } else {
                output = '<li>No doctors found</li>'; // Display a message when the response is null or empty
            }

            $('#doctor-list').empty();
            $('#doctor-list').html(output);
        }

        // searching doctors
        function searchDoctor(response) {
            $('#search-input').on('input', function () {
                const searchTerm = $(this).val().toLowerCase();
                let output = '';

                if (response && response.length > 0) {
                    const filteredDoctors = response.filter(function (doctor) {
                        const fullName = `${doctor.fname} ${doctor.lname}`.toLowerCase();
                        return fullName.includes(searchTerm);
                    });

                    if (filteredDoctors.length > 0) {
                        filteredDoctors.forEach(function (doctor) {
                            output += `
                                <li data-id="${doctor.user_uuid}" class="hover:bg-gray-100 py-1 pl-2 rounded-md font-semibold list-doctor">${doctor.title} ${doctor.fname} ${doctor.lname}</li>
                                 `;
                        });
                    } else {
                        output = '<li>No matching doctors found</li>';
                    }
                }
                $('#doctor-list').empty();
                $('#doctor-list').html(output);
                fillDoctorInput();
            });
        }

        //saving the appointment

        let doctorId = '';

        function getDoctorId() {
            $('#doctor-list-container').on('click', '#doctor-list li', function () {
                doctorId = $(this).data('id');
                $.ajax({
                    url: '<?= base_url('api/get_doctor_date_time_slots') ?>',
                    method: 'POST',
                    data: {
                        doctorId: doctorId
                    },
                    success: function (response) {
                        initializeAppointmentDateFlatpickr(response);
                        renderTimeSlots(response);
                        filterTimeSlots(response);
                        fillSearchTimeInput();
                    }
                });
            });
        }

        getDoctorId();

        let appointmentDate = '';

        function initializeAppointmentDateFlatpickr(response) {
            $('#appointmentDate').flatpickr({
                enableTime: false,
                mode: "single",
                dateFormat: 'Y-m-d',
                enable: response.date,
                disable: [
                    function (date) {
                        // return true to disable
                        return (date.getDay() === 0 || date.getDay() === 6);

                    }
                ],
                onChange: function (selectedDates, dateStr, instance) {
                    appointmentDate = dateStr;
                }
            });
        }

        function renderTimeSlots(response) {
            let output = '';
            if (response.time && response.time.length > 0) {
                response.time.forEach(function (timeSlot) {
                    const formattedTime = formatTime(timeSlot);
                    output += `
                  <li class="hover:bg-gray-100 py-1 pl-2 rounded-md font-semibold list-time">${formattedTime}</li>
                `;
                });
            } else {
                output = '<li>No time slots available</li>';
            }

            $('#time-slot-list').empty();
            $('#time-slot-list').html(output);
        }


        function filterTimeSlots(response) {
            $('#search-time').on('input', function () {
                const searchTerm = $(this).val().toLowerCase();
                let output = '';

                if (response.time && response.time.length > 0) {
                    const filteredTimeSlots = response.time.filter(function (timeSlot) {
                        const time = `${timeSlot}`.toLowerCase();
                        return time.includes(searchTerm);
                    });

                    if (filteredTimeSlots.length > 0) {
                        filteredTimeSlots.forEach(function (timeSlot) {
                            const formattedTime = formatTime(timeSlot);
                            output += `
                                <li class="hover:bg-gray-100 py-1 pl-2 rounded-md font-semibold list-time">${formattedTime}</li>
                                 `;
                        });
                    } else {
                        output = '<li>No matching time found</li>';
                    }
                }
                $('#time-slot-list').empty();
                $('#time-slot-list').html(output);
                fillSearchTimeInput();
            });
        }

        function fillDoctorInput(){
            const getAllDoctors = document.querySelectorAll('#doctor-list-container #doctor-list .list-doctor');
            getAllDoctors.forEach(function (doctor) {
                doctor.addEventListener('click', function () {
                    const selectedDoctor = this.textContent;
                    $('#select-doctor').val(selectedDoctor);
                    wrapper.classList.toggle('active');
                });
            });
        }

        function fillSearchTimeInput(){
            const getAllTimeSlots = document.querySelectorAll('#time-list-container #time-slot-list .list-time');
            getAllTimeSlots.forEach(function (timeSlot) {
                timeSlot.addEventListener('click', function () {
                    const selectedTime = this.textContent;
                    $('#selectTime').val(selectedTime);
                    wrapperTime.classList.toggle('active');
                });
            });
        }

        function formatTime(time) {
            const [hours, minutes] = time.split(':');

            const ampm = hours >= 12 ? 'PM' : 'AM';

            // Convert hours to 12-hour format
            const formattedHours = hours % 12 || 12;

            return `${formattedHours}:${minutes} ${ampm}`;
        }


        $('#submit-appointment').on('click', function () {

            let currentDate = moment();
            let appointmentDateConvert = moment(appointmentDate);
            let selectedDoctor = $('#select-doctor').val();
            let selectedTime = $('#selectTime').val();
            let reason = $('#appointment-reason').val();
            let quillText = quill.getText();

            if(reason === ""){
                $('#appointmentReasonError').text('Please enter the reason for booking an appointment before you proceed');
                return false;
            }else{
                $('#appointmentReasonError').text('');
            }

            if(reason.length > 20){
                $('#appointmentReasonError').text('The reason for booking an appointment should not be more than 20 characters');
                return false;
            }else{
                $('#appointmentReasonError').text('');
            }
            if(!reason.match(/^[a-zA-Z0-9\s]+$/)){
                $('#appointmentReasonError').text('The reason for booking an appointment should not contain special characters');
                return false;
            }else{
                $('#appointmentReasonError').text('');
            }
            if(selectedDoctor === ""){
                $('#selectDoctorError').text('Please select a doctor you want to see before you proceed');
                return false;
            }else{
                $('#selectDoctorError').text('');
            }
            if(appointmentDate === "") {
                $('#appointmentDateError').text('Please select appointment date before you proceed');
                return false;
            }else{
                $('#appointmentDateError').text('');
            }
            if(appointmentDateConvert.isBefore(currentDate, 'day')){
                $('#appointmentDateError').text('The date selected has passed, please select a valid one');
                return false;
            }else{
                $('#appointmentDateError').text('');
            }
            if(selectedTime === ""){
                $('#timeError').text('Please select a time before you proceed');
                return false;
            }else{
                $('#timeError').text('');
            }

            $('#submit-appointment').prop('disabled', true).html('<span class="loading loading-dots loading-md pl-1"></span>');
            $.ajax({
                url: '<?= base_url('api/save_booked_appointment') ?>',
                method: 'POST',
                data: {
                    doctorId: doctorId,
                    appointmentDate: appointmentDate,
                    selectedTime: selectedTime,
                    reason: reason,
                    quillText: quillText,
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

                error: function (error){
                    $('#toast-danger').removeClass('hidden');
                    $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                },

                complete: function (){
                    $('#submit-appointment').prop('disabled', false).html('Submit Appointment');
                }
            });

        })


    })
</script>
<?= $this->endSection() ?>
