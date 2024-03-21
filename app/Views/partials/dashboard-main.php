<?= $this->include('partials/patient-search.php') ?>

<div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-4 pt-0 md:pt-6">
    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer bg-green-100 px-4 py-3">
        <div>
            <a href="<?= base_url('patient-appointment') ?>" class="flex justify-between items-center">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-8 w-8 text-white">
                    <i class="uil uil-stethoscope text-xl"></i></span>
                    <span class="font-semibold text-[#0060a3] text-[14px]">Appointment</span>
            </a>
        </div>
    </div>

    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer bg-yellow-100 px-4 py-3">
        <div class="">

            <a href="<?= base_url('patient-prescription') ?>" class="flex justify-between items-center">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-8 w-8 text-white">
                    <i class="uil uil-band-aid text-xl"></i>
                </span>
                <span class="font-semibold text-[#0060a3] text-[14px]">Prescription</span>
            </a>

        </div>
    </div>

    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer bg-blue-100 px-4 py-3">
        <div class="">

            <a href="<?= base_url('patient-payment') ?>" class="flex justify-between items-center">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-8 w-8 text-white">
                    <i class="uil uil-invoice text-xl"></i>
                </span>
                <span class="font-semibold text-[#0060a3] text-[14px]">Payment</span>
            </a>

        </div>
    </div>

</div>


<div class="section">
    <div class="flex justify-between">
        <div>
            <h4 class="text-2xl md:text-3xl font-semibold pb-4 md:pt-6" id="name">Bill Clinton Ogot</h4>
            <span class="text-green-400 flex items-center"><span class="text-black pr-1"><i class="uil uil-stethoscope"></i></span>Active appointment <span class="bg-red-300 text-red-500 w-6 h-6 rounded-full flex items-center justify-center ml-2">0</span></span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-12 border border-slate-200 p-6 rounded-md mt-4">
        <div class="col-span-1 md:col-span-1">
            <div class="flex items-center justify-between">
                <h6 class="font-medium">UHID</h6>
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" id="uhid">
                    123456789
                </span>
            </div>

            <div class="flex items-center justify-between pt-2">
                <h6 class="font-medium">Encounter Number</h6>
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" id="encounter">

                </span>
            </div>

            <div class="flex items-center justify-between pt-2">
                <h6 class="font-medium">Assigned Doctor</h6>
                <span class="inline-flex leading-5 font-semibold text-green-800" id="doctor">

                </span>
            </div>

            <div class="flex items-center justify-between pt-2">
                <h6 class="font-medium">Gender</h6>
                <span class="inline-flex leading-5 font-semibold text-green-800" id="gender">

                </span>
            </div>
        </div>
        <div class="col-span-1 md:col-span-1">
            <div class="flex items-center justify-between">
                <h6 class="font-medium">Date of Birth</h6>
                <span class="inline-flex leading-5 font-semibold text-green-800" id="dob">

                </span>
            </div>

            <div class="flex items-center justify-between pt-2">
                <h6 class="font-medium">Age</h6>
                <span class="inline-flex leading-5 font-semibold text-green-800" id="age">

                </span>
            </div>

            <div class="flex items-center justify-between pt-2">
                <h6 class="font-medium">Residence</h6>
                <span class="inline-flex leading-5 font-semibold text-green-800" id="residence">

                </span>
            </div>

            <div class="flex items-center justify-between pt-2">
                <h6 class="font-medium">Email</h6>
                <span class="inline-flex leading-5 font-semibold text-green-800" id="email">

                </span>
            </div>
        </div>
    </div>
</div>

<div class="section py-10">
<div role="tablist" class="tabs tabs-lifted">
    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="General Information" checked/>
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        <div class="grid grid-col-1 md:grid-cols-2 gap-2 md:gap-4">
            <div class="flex justify-between items-center">
                <label for="address" class="font-medium">Address</label>
                <input id="address" type="text" class="rounded-md focus:outline-none w-1/2">
            </div>


            <div class="flex justify-between items-center">
                <label for="nationality" class="font-medium">Nationality</label>
                <input id="nationality" type="text" class="rounded-md focus:outline-none w-1/2">
            </div>
            <div class="flex justify-between items-center">
                <label for="title" class="font-medium">Title</label>
<!--                <input id="title" type="text" class="rounded-md focus:outline-none w-1/2">-->
                <select id="title" class="rounded-md focus:outline-none w-1/2">
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="miss">Miss</option>
                    <option value="dr">Dr</option>
                </select>
            </div>
            <div class="flex justify-between items-center">
                <label for="occupation" class="font-medium">Occupation</label>
                <input id="occupation" type="text" class="rounded-md focus:outline-none w-1/2">
            </div>
            <div class="flex justify-between items-center">
                <label for="education" class="font-medium">Patient Education</label>
<!--                <input id="education" type="text" class="rounded-md focus:outline-none w-1/2">-->
                <select id="education" class="rounded-md focus:outline-none w-1/2">
                    <option value="primary">Primary</option>
                    <option value="secondary">Secondary</option>
                    <option value="college">College</option>
                    <option value="university">University</option>
                </select>
            </div>
        </div>
        <div class="mt-4">
            <button type="button" id="general-information" class="bg-[#0060a3] py-2 px-10 text-white font-semibold text-md md:text-lg rounded-md"><i class="uil uil-save"></i> Save</button>
        </div>
    </div>

    <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Other Information"/>
    <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">

        <div class="grid grid-col-1 md:grid-cols-2 gap-2 md:gap-4">

            <div class="flex justify-between items-center">
                <label for="identity" class="font-medium">Government Identity</label>
                <input id="identity" type="text" class="rounded-md focus:outline-none w-1/2">
            </div>

            <div class="flex justify-between items-center">
                <label for="marital-status" class="font-medium">Marital Status</label>
<!--                <input id="marita-status" type="text" class="rounded-md focus:outline-none w-1/2">-->
                    <select id="marital-status" class="rounded-md focus:outline-none w-1/2">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
            </div>
        </div>

        <div class="mt-4">
            <button type="button" id="additional-information" class="bg-[#0060a3] py-2 px-10 text-white font-semibold text-md md:text-lg rounded-md"><i class="uil uil-save"></i> Save</button>
        </div>

    </div>
</div>
</div>
