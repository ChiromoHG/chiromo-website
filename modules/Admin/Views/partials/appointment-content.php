<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-stethoscope bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">Patient Appointment</span>
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
                    <a href="<?= base_url('admin/dashboard/appointments') ?>" class="hover:text-blue-900">Appointments</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <span class="text-blue-700">Appointment</span>
                </li>
            </ul>
        </div>
    </div>

    <?php if(isset($appointment)) :?>
    <div class="pt-16">
        <h4 class="text-xl font-medium"><?= $appointment[0]['fname'] . ' ' . $appointment[0]['lname']?></h4>
        <span class="text-sm font-medium text-green-400">patient type: OP</span>

        <div class="mt-3 border border-slate-200 p-6 rounded-md">
            <h6 class="text-lg font-medium">Appointment Details</h6>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-12 mt-4">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center justify-between">
                        <h6 class="font-medium">Appointment Date</h6>
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" id="appointmentDate">
                        <?= $appointment[0]['appointment_date'] ?>
                </span>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <h6 class="font-medium">Doctor Assigned</h6>
                        <span class="px-2 inline-flex leading-5 font-semibold text-green-800" id="doctorAssigned">
                            <?= $appointment[0]['title'] . ' ' . $appointment[0]['doctor_fname'] . ' ' . $appointment[0]['doctor_lname'] ?>
                        </span>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <h6 class="font-medium">UHID</h6>
                        <span class="inline-flex leading-5 font-semibold text-green-800" id="uhid">
                            <?= $appointment[0]['uhid'] ?>
                       </span>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center justify-between">
                        <h6 class="font-medium">Appointment time</h6>
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" id="appointmentTime">
                            <?= $appointment[0]['appointment_time'] ?>
                       </span>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <h6 class="font-medium">Date Booked</h6>
                        <span class="inline-flex leading-5 font-semibold text-green-800" id="dateBooked">
                            <?= $appointment[0]['created_at'] ?>
                        </span>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <h6 class="font-medium">Encounter Number</h6>
                        <span class="inline-flex leading-5 font-semibold text-green-800" id="encounterNumber">
                            <?= $appointment[0]['encounter_number'] ?>
                       </span>
                    </div>
                </div>
              </div>

            <div class="pt-8">
                <label for="appointmentTitle" class="text-lg">Appointment title</label>
                <input type="text" class="border-slate-200 w-full rounded-md mt-2" readonly id="appointmentTitle" value="<?= $appointment[0]['appointment_title']?>">
            </div>

            <div class="pt-4">
                <label for="appointmentText" class="text-lg">Appointment Notes</label>
                <textarea type="text" class="border-slate-200 w-full rounded-md mt-2" readonly id="appointmentText"><?= $appointment[0]['appointment_notes']?></textarea>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>