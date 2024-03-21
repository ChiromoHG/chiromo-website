<?= $this->include('partials/patient-search.php') ?>


<div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-0 md:pt-6">
    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer bg-green-100 px-4 py-3">
        <div>
            <a href="<?= base_url('my-appointments') ?>" class="flex justify-between items-center">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-8 w-8 text-white">
                    <i class="uil uil-stethoscope text-xl"></i></span>
                <span class="font-semibold text-[#0060a3] text-[14px] flex justify-center items-center">My Appointment <span class="text-black bg-white h-5 w-5 rounded-full flex items-center justify-center ml-1 font-semibold">0</span></span>
            </a>
        </div>
    </div>

</div>

<div class="rounded-md border border-slate-300 h-auto p-4 mt-4 mb-6 md:mb-8">
    <h4 class="text-[16px] lg:text-xl text-center font-semibold text-[#0060a3]">Book Your Appointment</h4>

    <div class="flex">
        <div class="w-full px-3 my-3">
            <label for="appointment-reason" class="text-md px-1 font-semibold">Appointment Reason</label>
            <div class="flex pt-1">
                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"></div>
                <input type="text" id="appointment-reason" class="w-full -ml-10 pr-3 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
            </div>
            <span id="appointmentReasonError" class="text-xs text-red-500 pt-2"></span>
        </div>
    </div>
    <div class="flex">
        <div class="w-full px-3 mb-3">
            <label for="doctor-type" class="text-md px-1 font-semibold">Who do you want to see?</label>
            <select id="doctor-type" class="flex mt-1 w-full pr-2 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
                <option value="1">Psychologist</option>
                <option value="2">Psychiatrist</option>
            </select>
            <span id="doctorError" class="text-xs text-red-500 pt-2"></span>
        </div>

        <div class="wrapper w-full px-3 mb-3 relative">
            <label for="select-doctor" class="text-md px-1 font-semibold">Select Doctor</label>
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
            <label for="appointmentDate" class="text-md px-1 font-semibold">Appointment Date</label>
            <div class="flex pt-1">
                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="uil uil-calender"></i></div>
                <input type="text" id="appointmentDate" readonly class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
            </div>
            <span id="appointmentDateError" class="text-xs text-red-500 pt-2"></span>
        </div>
        <div class="wrapper-time w-full px-3 mb-3 relative">
            <label for="select-doctor" class="text-md px-1 font-semibold">Time</label>
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
            <label class="text-md px-1 font-semibold">Notes</label>
            <div class="flex pt-1 h-20" id="quill-editor-content">

            </div>
        </div>
    </div>

    <div class="pt-2 px-3">
        <button type="submit" id="submit-appointment"
                class="px-10 py-2 text-white rounded-md inline-block text-md font-semibold  bg-[#0060a3] transition-all duration-500 transform hover:scale-100 hover:opacity-80">
            Submit Appointment
        </button>
    </div>

</div>



