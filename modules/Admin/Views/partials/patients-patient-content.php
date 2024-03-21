<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-user-arrows bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">View Patient</span>
        </div>
        <div class="icon-color py-1 px-3 rounded-lg bg-blue-100">
            <ul>
                <li class="inline-block">
                    <a href="<?= base_url('admin/dashboard') ?>" class="hover:text-blue-900">Dashboard</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <a href="<?= base_url('admin/dashboard/patients') ?>" class="hover:text-blue-900">Patient</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <span class="text-blue-700">View</span>
                </li>
            </ul>
        </div>
    </div>
    <?php
    if (!empty(session()->getFlashdata('error'))) {
        ?>
            <div class="pt-3 text-center">
                <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300"><?= session()->getFlashdata('error') ?></span>
            </div>
        <?php
    }
    ?>
    <?php if(isset($patient)) : ?>
    <div class="pt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-2 md:gap-4">
            <div class="col-span-1 md:col-span-3 border border-slate-200 p-6 rounded-md">
                <h6 class="text-lg font-medium text-[#0060a3]">Patient Data</h6>
                <div class="flex items-center justify-between">
                    <div>
                        <h6 class="text-lg font-medium"><?= $patient[0]['fname'] . ' ' . $patient[0]['lname']?></h6>
                    </div>
                    <div class="avatar">
                        <div class="w-16 mask mask-squircle">
                            <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"  alt="patient-profile"/>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">UHID</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="uhid">
                        <?= $patient[0]['uhid']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Encounter Number</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="encounterNumber">
                        <?= $patient[0]['encounter_number']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Gender</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="gender">
                        <?= $patient[0]['gender']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Date of Birth</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="dob">
                        <?= $patient[0]['dob']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Residence</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="residence">
                        <?= $patient[0]['residence']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Phone Number</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="phone">
                        <?= $patient[0]['phone']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Email</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="email">
                        <?= $patient[0]['email']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Admission Date</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="admission">
                        <?= $patient[0]['updated_at']?>
                    </span>
                </div>

                <div class="flex items-center justify-between pt-3">
                    <h6 class="font-medium text-md">Consulting Doctor</h6>
                    <span class="px-2 inline-flex text-md leading-5 font-medium" id="doctor">
                        <?= $patient[0]['title'] . ' ' . $patient[0]['doctor_fname'] . ' ' . $patient[0]['doctor_lname']?>
                    </span>
                </div>

                <div class=" pt-3 space-x-1">
                    <a href="<?= base_url('admin/dashboard/patients/patient/update/?uud='.$patient[0]['patient_uuid']. '&uhid='. $patient[0]['uhid'])?>" class="bg-[#0060a3] rounded-md px-3 py-2 text-white hover:bg-[#04385e]"><i class="uil uil-edit-alt"></i> Update Data</a>
                    <a href="<?= base_url('admin/dashboard/patients') ?>" class="bg-red-100 rounded-md px-3 py-2 text-red-600 hover:bg-red-300"><i class="uil uil-times"></i> Cancel</a>
                </div>

            </div>
            <div class="col-span-1 md:col-span-1 bg-slate-50 max-h-[300px] p-3">
                <?= $this->include('Modules\Admin\Views\includes\patients-small-section.php'); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>