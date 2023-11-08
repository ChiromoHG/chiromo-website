<?= $this->include('partials/patient-search.php') ?>

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 pt-4 md:pt-6">
    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer border-2 border-[#0060a3] bg-white">
        <div class="p-6 h-full flex items-center justify-center">

            <a href="<?= base_url('patient-appointment') ?>" class="flex items-center flex-col">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-stethoscope text-xl"></i></span>
                <h4 class="pt-4 font-semibold text-[#0060a3] text-[14px]">Appointment</h4>
            </a>

        </div>
    </div>

    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer border-2 border-[#0060a3] bg-white">
        <div class="p-6 h-full flex items-center justify-center">

            <a href="<?= base_url('patient-prescription') ?>">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-band-aid text-xl"></i></span>
                <h4 class="pt-4 font-semibold text-[#0060a3] text-[14px]">Prescription</h4>
            </a>

        </div>
    </div>

    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer border-2 border-[#0060a3] bg-white">
        <div class="p-6 h-full flex items-center justify-center">

            <a href="<?= base_url('patient-payment') ?>">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-invoice text-xl"></i></span>
                <h4 class="pt-4 font-semibold text-[#0060a3] text-[14px]">Payment</h4>
            </a>

        </div>
    </div>

    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer border-2 border-[#0060a3] bg-white">
        <div class="p-6 h-full flex items-center justify-center">

            <a href="<?= base_url('patient-profile') ?>">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-12 w-12 text-white"><i class="uil uil-sliders-v-alt"></i></span>
                <h4 class="pt-4 font-semibold text-[#0060a3] text-[14px]">Settings</h4>
            </a>

        </div>
    </div>

</div>

<div class="grid grid-cols-1 gap-4 pt-4 md:pt-6">
    <div class="shadow-md hover:shadow-lg" id="calender">

    </div>

    <div class="shadow-md hover:shadow-lg">

    </div>
</div>