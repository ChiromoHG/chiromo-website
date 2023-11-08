<?= $this->include('partials/patient-search.php') ?>

<div class="bg-gray-100 rounded-md h-auto p-4 mt-4">
    <h4 class="text-[16px] lg:text-xl text-center font-semibold">Book Your Appointment</h4>
    <div class="flex">
        <div class="w-full px-3 mb-5">
            <label for="" class="text-md font-semibold px-1">Appointment Date</label>
            <div class="flex pt-3">
                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="uil uil-mobile-android"></i></div>
                <input type="tel" id="phone" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#0060a3]">
            </div>
            <span id="phoneError" class="text-xs text-red-500 pt-2"></span>
        </div>
    </div>

    <div class="flex">
        <div class="w-full px-3 mb-5">
            <label for="doctor-type" class="text-md font-semibold px-1">Who do you want to see?</label>
            <select id="doctor-type" class="flex pt-3 w-full pr-2 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#0060a3]">
                <option value="1">Psychologist</option>
                <option value="2">Psychiatric</option>
            </select>
            <span id="phoneError" class="text-xs text-red-500 pt-2"></span>
        </div>
    </div>

    <div class="flex">
        <div class="wrapper w-full px-3 mb-5">
            <label for="select-doctor" class="text-md font-semibold px-1">Select Doctor</label>
            <div class="select-input flex pt-3 relative">
                <input type="text" id="select-doctor" class="w-full pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#0060a3] cursor-pointer placeholder:text-black" placeholder="select doctor" readonly>
                <span class="absolute right-3 top-4"><i class="uil uil-angle-down text-2xl text-gray-500"></i></span>
            </div>

            <div class="content rounded-md bg-white mt-3">
                <div class="p-4">
                    <div class="relative">
                        <input type="text" class="w-full py-2 pl-10 rounded-lg border-2 border-gray-200 outline-none placeholder:text-black" placeholder="search doctor">
                        <span class="absolute left-3 top-2"><i class="uil uil-search"></i></span>
                    </div>
                    <div class="mt-2 max-h-32 overflow-auto">
                        <ul class="block cursor-pointer">
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">Dr Rose</li>
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">Dr Kemunto</li>
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">Dr Salwa</li>
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">Dr Amadi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="wrapper-time w-full px-3 mb-5">
            <label for="select-doctor" class="text-md font-semibold px-1">Time</label>
            <div class="select-time flex pt-3 relative">
                <input type="text" id="selectTime" class="w-full pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#0060a3] cursor-pointer placeholder:text-black" placeholder="select doctor" readonly>
                <span class="absolute right-3 top-4"><i class="uil uil-angle-down text-2xl text-gray-500"></i></span>
            </div>

            <div class="content-time rounded-md bg-white mt-3">
                <div class="p-4">
                    <div class="relative">
                        <input type="text" class="w-full py-2 pl-10 rounded-lg border-2 border-gray-200 outline-none placeholder:text-black" placeholder="search time">
                        <span class="absolute left-3 top-2"><i class="uil uil-search"></i></span>
                    </div>
                    <div class="mt-2 max-h-32 overflow-auto">
                        <ul class="block cursor-pointer">
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">10:00</li>
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">11:00</li>
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">12:00</li>
                            <li class="hover:bg-gray-100 py-1 pl-2 rounded-sm font-semibold">13:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-2 px-3">
        <button type="submit"
                class="px-10 py-2 text-black rounded-[2.5rem] inline-block text-md font-semibold bg-white border border-slate-300 hover:bg-slate-100 hover:border-[#0060a3] transition-all duration-500 transform hover:scale-100 hover:opacity-50">
            Submit Appointment
        </button>
    </div>

</div>
