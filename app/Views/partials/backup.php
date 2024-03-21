
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-96 md:h-128 overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image.JFIF') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center start ml-20">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-lg font-semibold text-2xl">Our Online Therapy is Here</h2>
                    <p class="text-gray-300 pt-3 text-xl">Achieve Your Potential With Our Online Therapy</p>
                    <div class="pt-10 pb-3">
                        <a href=""
                           class="border border-1 border-yellow-500 text-black font-normal py-3 px-6 rounded-md hover:bg-yellow-600 transition-colors">GET
                            STARTED</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image1.JPG') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-2xl font-semibold text-center">Chiromo Hospital Group</h2>
                    <p class="text-gray-300 text-center text-xl">Recovery in Dignity</p>
                    <div class="pt-10 pb-3 flex ">
                        <a href=""
                           class="border border-1 border-yellow-500 text-black font-normal py-3 px-6 rounded-md hover:bg-yellow-600 transition-colors mr-2">ABOUT
                            US</a>
                        <a href=""
                           class="border border-1 border-yellow-500 text-black font-normal py-3 px-6 rounded-md hover:bg-yellow-600 transition-colors">OUR
                            SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image2.JPG') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-lg font-semibold">Item 1 Title</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?= base_url('images/carousel/image3.JFIF') ?>"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-60"
                 alt="...">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-gray-800 bg-opacity-70 p-4 rounded-lg">
                    <h2 class="text-white text-lg font-semibold">Item 1 Title</h2>
                    <p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<div class="bg-slate-50 flex justify-center px-10">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>


            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#"
                   class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-4 mb-4 ml-4">
                    <img class="mx-auto" src="<?= base_url('images/logo/logo.png') ?>" alt="Image placeholder"
                         width="80">
                </a>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>



<div class="h-full relative bg-cover bg-center bg-no-repeat overflow-visible"
     style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.33), rgba(0,96,163,0.25)), url('<?= base_url('images/carousel/njenga.jpg') ?>')">
    <div class="h-[75vh]">
        <div class="absolute top-[70px] left-[20px] md:absolute md:top-[80px] md:left-[50px] lg:top-[100px] lg:left-[70px] lg:absolute lg:w-3/4 xl:w-2/4">
            <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">

            </h1>
            <p class="text-white text-xl md:text-2xl leading-snug pt-5">

            </p>
            <p class="text-[#ac8342] text-md md:text-xl leading-snug pt-10 font-semibold">
                <span></span>
            </p>
            <span class="">

                        </span>
        </div>
    </div>
</div>



<div class="h-full relative bg-cover bg-center bg-no-repeat overflow-visible"
     style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.33), rgba(0,96,163,0.25)), url('<?= base_url('images/carousel/valentine.jpg') ?>')">
    <div class="h-[75vh]">
        <div class="absolute top-[80px] left-[20px] md:absolute md:top-[80px] md:left-[50px] lg:top-[100px] lg:left-[70px] lg:absolute lg:w-3/4 xl:w-2/4">
            <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">
            </h1>
            <p class="text-blue-100 text-xl md:text-2xl leading-snug pt-5">
            </p>
        </div>
    </div>
</div>


<div class="h-full relative bg-cover object-cover bg-center bg-no-repeat overflow-visible"
     style="background-image: linear-gradient(to right bottom, rgba(127,161,190,0.33), rgba(0,96,163,0.25)), url('<?= base_url('uploads/carousel/') . $item['carousel_image']?>')">
    <div class="h-[75vh]">
        <div class="absolute top-[70px] left-[20px] md:absolute md:top-[80px] md:left-[50px] lg:top-[100px] lg:left-[70px] lg:absolute lg:w-3/4 xl:w-2/4">
            <?php if(!empty($item['carousel_title'])): ?>
                <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-bold leading-snug">
                    <?= $item['carousel_title'] ?>
                </h1>
            <?php endif; ?>
            <?php if(!empty($item['carousel_description'])): ?>
                <p class="text-white text-xl md:text-2xl leading-snug pt-5">
                    <?= $item['carousel_description'] ?>
                </p>
            <?php endif; ?>
            <?php if(!empty($item['carousel_tag'])) : ?>
                <p class="text-[#ac8342] text-md md:text-xl leading-snug pt-10 font-semibold">
                    <span><i class="uil uil-check-circle mr-2"></i></span>
                    <?= $item['carousel_tag'] ?>
                </p>
            <?php endif; ?>
            <?php if(!empty($item['carousel_has_button']) && $item['carousel_has_button'] == 1): ?>

                <span class="">
                    <a href="<?= base_url('book-appointment') ?>"
                       class="px-8 py-3 text-white rounded inline-block mt-8 font-semibold custom-bg transition-all duration-500 transform hover:scale-90">Book
                        Appointment <i class="uil uil-arrow-right"></i>
                    </a>
                </span>

            <?php endif; ?>
        </div>
    </div>
</div>




<!--appointment bookings -->

<div class="flex">
    <div class="w-full px-3 my-3">
        <label for="appointment-reason" class="text-md px-1 font-semibold">What service are you looking for? <span class="text-red-400">*</span></label>
        <select id="appointment-reason" class="flex mt-1 w-full pr-2 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
            <?php if(!empty($services)): ?>
                <?php foreach ($services as $service): ?>
                    <option value="<?= $service['service_uuid'] ?>"><?= $service['service_name'] ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <span id="appointmentReasonError" class="text-xs text-red-500 pt-2"></span>
    </div>
</div>
<div class="flex">
    <div class="w-full px-3 mb-3">
        <label for="doctor-type" class="text-md px-1 font-semibold">Who do you want to see ? <span class="text-red-400">*</span></label>
        <select id="doctor-type" class="flex mt-1 w-full pr-2 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
            <option value="1">Psychologist</option>
            <option value="2">Psychiatrist</option>
        </select>
        <span id="doctorError" class="text-xs text-red-500 pt-2"></span>
    </div>

    <div class="wrapper w-full px-3 mb-3 relative">
        <label for="select-doctor" class="text-md px-1 font-semibold">Select Doctor <span class="text-red-400">*</span></label>
        <div class="select-input flex pt-1 relative">
            <input type="text" id="select-doctor"
                   class="w-full pr-3 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] cursor-pointer placeholder:text-black"
                   placeholder="select doctor" readonly>
            <span class="absolute right-3 top-2.5"><i class="uil uil-angle-down text-2xl text-gray-500"></i></span>
        </div>
        <span id="selectDoctorError" class="text-xs text-red-500 pt-2"></span>

        <div class="content rounded-md border border-[#0060a3] bg-white absolute left-3 top-full z-50">
            <div class="p-4">
                <div class="relative">
                    <input type="search"
                           class="w-full py-2 pl-10 rounded-lg border-gray-200 outline-none placeholder:text-black"
                           placeholder="search doctor"
                           id="search-input"
                    >
                    <span class="absolute left-3 top-2"><i class="uil uil-search"></i></span>
                </div>
                <div class="mt-2 max-h-32 overflow-auto" id="doctor-list-container">
                    <ul class="block cursor-pointer" id="doctor-list">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="flex">
    <div class="w-full px-3 mb-3">
        <label for="appointmentDate" class="text-md px-1 font-semibold">Appointment Date <span class="text-red-400">*</span></label>
        <div class="flex pt-1">
            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="uil uil-calender"></i></div>
            <input type="text" id="appointmentDate" readonly class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
        </div>
        <span id="appointmentDateError" class="text-xs text-red-500 pt-2"></span>
    </div>
    <div class="wrapper-time w-full px-3 mb-3 relative">
        <label for="select-doctor" class="text-md px-1 font-semibold">Time <span class="text-red-400">*</span></label>
        <div class="select-time flex relative pt-1">
            <input type="text" id="selectTime"
                   class="w-full pr-3 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] cursor-pointer placeholder:text-black"
                   placeholder="select time" readonly>
            <span class="absolute right-3 top-2.5"><i class="uil uil-angle-down text-2xl text-gray-500"></i></span>
        </div>

        <span id="timeError" class="text-xs text-red-500 pt-2"></span>

        <div class="content-time rounded-md bg-white border border-[#0060a3] absolute lef-3 top-full z-50">
            <div class="p-4">
                <div class="relative">
                    <input type="search" id="search-time"
                           class="w-full py-2 pl-10 rounded-lg border-gray-200 outline-none placeholder:text-black"
                           placeholder="search time">
                    <span class="absolute left-3 top-2"><i class="uil uil-search"></i></span>
                </div>
                <div class="mt-2 max-h-32 overflow-auto" id="time-list-container">
                    <ul class="block cursor-pointer" id="time-slot-list">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex">
    <div class="w-full px-3">
        <label class="text-md px-1 font-semibold">Notes <span class="text-stone-300 text-sm">(Optional)</span></label>
        <div class="flex pt-1 h-20" id="quill-editor-content">

        </div>
    </div>
</div>

<div class="pt-3 px-3">
    <button type="submit" id="submit-appointment"
            class="px-10 py-2 text-white rounded-md inline-block text-md font-semibold  bg-[#0060a3] transition-all duration-500 transform hover:scale-100 hover:opacity-80">
        Book Appointment
    </button>
</div>

<!--end of appointment bookings -->


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

        $('#appointment-reason').on('keyup', validateAppointmentReason);



        const doctorType = document.querySelector('#doctor-type');
        doctorType.addEventListener('input', function () {
            const doctorTypeValue = this.value;
            getDoctors(doctorTypeValue);
        });

        let initialDoctorType = $('#doctor-type').val();
        getDoctors(initialDoctorType);

        $('#doctor-type').on('keyup', validateDoctorType);

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

        $('#select-doctor').on('keyup', validateSelectDoctor);
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

        $('#appointmentDate').on('keyup', validateAppointmentDate);
        $('#selectTime').on('keyup', validateTime);

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


        //validations
        //validate appointment reason
        function validateAppointmentReason() {
            let reason = $('#appointment-reason').val();

            if (reason.length === 0) {
                showError('This field is required');
                return false;
            } else if (reason.length > 100) {
                showError('This field cannot exceed 100 characters');
                return false;
            } else {
                clearError();
                return true;
            }
        }

        function showError(message) {
            $('#appointmentReasonError').text(message);
            $('#appointment-reason').addClass('border-red-500 focus:border-red-500');
        }

        function clearError() {
            $('#appointmentReasonError').text('');
            $('#appointment-reason').removeClass('border-red-500 focus:border-red-500');
        }

        function validateDoctorType() {
            let doctorType = $('#doctor-type').val();

            if (doctorType === "" || doctorType === null || doctorType === undefined) {
                $('#doctorError').text('This field is required');
                $('#doctor-type').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#doctorError').text('');
                $('#doctor-type').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateSelectDoctor() {
            let doctorType = $('#select-doctor').val();

            if (doctorType === "" || doctorType === null || doctorType === undefined) {
                $('#selectDoctorError').text('This field is required');
                $('#select-doctor').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#selectDoctorError').text('');
                $('#select-doctor').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateAppointmentDate() {
            let currentDate = moment();
            let appointmentDate = $('#appointmentDate').val();
            let appointmentDateConvert = moment(appointmentDate);

            if (appointmentDate === "" || appointmentDate === null || appointmentDate === undefined) {
                $('#appointmentDateError').text('This field is required');
                $('#appointmentDate').addClass('border-red-500 focus:border-red-500');
                return false;
            } else if(appointmentDateConvert.isBefore(currentDate, 'day')){
                $('#appointmentDateError').text('Selected date has passed, please select another date');
                $('#appointmentDate').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#appointmentDateError').text('');
                $('#appointmentDate').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateTime() {
            let selectTime = $('#selectTime').val();

            if (selectTime === "" || selectTime === null || selectTime === undefined) {
                $('#timeError').text('This field is required');
                $('#selectTime').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#timeError').text('');
                $('#selectTime').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }



        $('#submit-appointment').on('click', function () {

            if(!validateAppointmentReason() || !validateDoctorType() || !validateSelectDoctor() || !validateAppointmentDate() || !validateTime()){
                return false;
            }

            let selectedTime = $('#selectTime').val();
            let reason = $('#appointment-reason').val();
            let quillText = quill.getText();


            $('#submit-appointment').prop('disabled', true).html('<span class="loading loading-spinner loading-xs"></span> Booking ....');
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
                    $('#submit-appointment').prop('disabled', false).html('Book Appointment');
                }
            });

        })


    })



    $data = [
        'transaction_uuid' => Uuid::uuid4()->toString(),
        'service_id' => $sessionData['service_id'],
        'doctor_type' => $sessionData['doctor_type'],
        'appointment_time' => $sessionData['appointment_time'],
        'appointment_date' => $sessionData['appointment_date'],
        'appointment_description' => $sessionData['appointment_description'],
        'first_name' => $sessionData['first_name'],
        'last_name' => $sessionData['last_name'],
        'dob' => $sessionData['dob'],
        'email' => $sessionData['email'],
        'mpesa_number' => $sessionData['mpesa_number'],
        'residency' => $sessionData['residency'],
        'nationality' => $sessionData['nationality'],
        'gender' => $sessionData['gender'],
        'merchantRequestID' => $response['MerchantRequestID'],
        'checkoutRequestID' => $response['CheckoutRequestID'],
    ];


    $saveResponse = $this->apiModel->savePaymentsData($data);
    if ($saveResponse) {
        return[
            'status' => 200,
            'merchantRequestID' => $response['MerchantRequestID'],
            'message' => 'Payment Pending, please check your phone to complete the payment',
    ];

    } else {
        return [
            'status' => 500,
            'message' => 'We could not process your payment, please, try again later',
    ];
    }


</script>