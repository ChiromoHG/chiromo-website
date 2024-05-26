<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>

<div class="load"></div>

<section class="bg-blue-50">
    <div class="bg-white">
        <div class="mx-2 md:mx-10 py-8 md:py-10 flex items-center md:justify-between md:flex-row flex-col">
            <div>
                <i class="uil uil-book-medical bg-[#0060a3] px-1.5 py-0.5 text-lg md:text-xl rounded-md text-white"></i>
                <span class="font-medium text-[#0060a3] text-md md:text-xl">Patient Details</span>
            </div>
            <div class="icon-color py-1 px-3 rounded-lg bg-blue-100">
                <ul>
                    <li class="inline-block">
                        <a href="<?= base_url('') ?>" class="hover:text-blue-900">Home</a>
                    </li>

                    <li class="inline-block">
                        <i class="uil uil-angle-right"></i>
                    </li>
                    <li class="inline-block">
                        <a href="<?= base_url('appointment_bookings') ?>" class="hover:text-blue-900">Bookings</a>
                    </li>
                    <li class="inline-block">
                        <i class="uil uil-angle-right"></i>
                    </li>
                    <li class="inline-block">
                        <span class="text-blue-700">Patient Details</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mx-2 md:mx-10 py-4 md:py-5">
        <form action="<?= base_url('patient-details') ?>" method="post">
            <?= csrf_field() ?>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2 md:gap-4">
                <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-md shadow-md relative overflow-hidden">
                    <span class="absolute inset-x-0 top-0 h-2 bg-gradient-to-r from-[#0060a3] via-blue-500 to-[#ac8342]"></span>

                    <span class="font-medium text-[#0060a3] text-md md:text-xl">Patient Details</span>

                    <?php GLOBAL $patientDetails; ?>
                    <?php if(session()->has('patient_details')) : ?>
                    <?php $patientDetails = session()->get('patient_details') ?>
                    <?= 'helloe world'?>
                    <?php else: ?>
                    <?= 'No session set'?>
                    <?php endif; ?>

                    <div class="flex flex-col md:flex-row items-center md:space-x-4 pt-2">
                        <div class="w-full pt-2">
                            <label for="first_name" class="w-full text-slate-500">First Name</label>
                            <input type="text" id="first_name" name="first_name" value="<?= !empty($patientDetails['first_name']) ? $patientDetails['first_name'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('first_name')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('first_name') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="w-full pt-2">
                            <label for="last_name" class="w-full text-slate-500">Last Name</label>
                            <input type="text" id="last_name" name="last_name" value="<?= !empty($patientDetails['last_name']) ? $patientDetails['last_name'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('last_name')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('last_name') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:space-x-4 pt-2">
                        <div class="w-full pt-2">
                            <label for="dob" class="w-full text-slate-500">Date of Birth</label>
                            <input type="date" id="dob" name="dob" value="<?= !empty($patientDetails['dob']) ? $patientDetails['dob'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('dob')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('dob') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="w-full pt-2">
                            <label for="phone" class="w-full text-slate-500">Phone Number</label>
                            <input type="number" id="phone" name="phone" value="<?= !empty($patientDetails['phone']) ? $patientDetails['phone'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('phone')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('phone') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:space-x-4">
                        <div class="w-full pt-2">
                            <label for="residence" class="w-full text-slate-500">Residence</label>
                            <input type="text" id="residence" name="residence" value="<?= !empty($patientDetails['residence']) ? $patientDetails['residence'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('residence')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('residence') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="w-full pt-2">
                            <label for="nationality" class="w-full text-slate-500">Nationality</label>
                            <input type="text" id="nationality" name="nationality" value="<?= !empty($patientDetails['nationality']) ? $patientDetails['nationality'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('nationality')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('nationality') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="flex flex-row items-center space-x-4 pt-2">

                        <label for="residence" class="text-slate-500 font-semibold px-1">Gender</label>
                        <div class="flex items-center space-x-6">
                            <label>
                                <input type="radio" id="genderMale" class="form-radio cursor-pointer"
                                       value="Male" name="gender"/>
                                <span class="text-slate-500 px-1">Male</span>
                            </label>

                            <label>
                                <input type="radio" id="genderFemale" class="form-radio cursor-pointer"
                                       value="Female" name="gender"/>
                                <span class="text-slate-500 px-1">Female</span>
                            </label>
                        </div>

                        <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('gender')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('gender') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>

                    </div>

                    <div class="pt-4">
                        <span class="font-medium text-[#0060a3] text-md md:text-xl">Payment Details</span>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:space-x-4 pt-2">
                        <div class="w-full pt-2">
                            <label for="fullName" class="w-full text-slate-500">Full Name</label>
                            <input type="text" id="fullName" name="fullName" value="<?= !empty($patientDetails['full_name']) ? $patientDetails['full_name'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('fullName')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('fullName') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="w-full pt-2">
                            <label for="mpesaNumber" class="w-full text-slate-500">Mpesa Number</label>
                            <input type="number" id="mpesaNumber" name="mpesaNumber" value="<?= !empty($patientDetails['mpesaNumber']) ? $patientDetails['mpesaNumber'] : '' ?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('mpesaNumber')) : ?>
                                    <span class="text-red-500 text-sm"><?= $validation->getError('mpesaNumber') ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="pt-2">
                        <div class="w-full">
                            <label for="email" class="w-full text-slate-500">Email <span
                                        class="text-sm text-slate-400">(If set we will send appointment confirmation)</span></label>
                            <input type="text" id="email" name="email" value="<?= !empty($patientDetails['email']) ? $patientDetails['email'] : ''?>"
                                   class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                        </div>
                    </div>

                </div>


                <div class="col-span-1 md:col-span-1 border bg-white border-slate-100 rounded-lg overflow-hidden max-h-[350px] p-3 relative">
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-[#ac8342]"></span>
                    <h6 class="text-center font-medium">Appointment Details</h6>
                    <hr class="my-2">

                    <?php if (session()->has('appointment_bookings')): ?>
                        <?php $appointmentDetails = session()->get('appointment_bookings') ?>
                        <div class="flex pt-4 justify-between">
                            <span class="text-slate-500 text-sm font-semibold">Service</span>
                            <span class="text-slate-500 text-sm"><?= $appointmentDetails['service'] ?></span>
                        </div>
                        <div class="flex pt-4 justify-between">
                            <span class="text-slate-500 text-sm font-semibold">Doctor</span>
                            <span class="text-slate-500 text-sm"><?= $appointmentDetails['doctor_type'] ?></span>
                        </div>
                        <div class="flex pt-2 justify-between">
                            <span class="text-slate-500 text-sm font-semibold">Date</span>
                            <span class="text-slate-500 text-sm"><?= $appointmentDetails['date'] ?></span>
                        </div>
                        <div class="flex pt-2 justify-between">
                            <span class="text-slate-500 text-sm font-semibold">Time</span>
                            <span class="text-slate-500 text-sm"><?= $appointmentDetails['time'] ?></span>
                        </div>
                    <?php endif; ?>

                    <hr class="my-2">

                    <div class="flex items-center space-x-2 mt-8">
                        <input type="checkbox" id="termsConditions"
                               class="form-checkbox text-[#0060a3] cursor-pointer rounded-sm">
                        <span class="text-slate-500 text-xs">By continuing, you agree to the <a href=""
                                                                                                class="text-slate-500 text-xs font-semibold">Terms and Conditions</a></span>
                    </div>

                    <div class="pt-4">
                        <button type="submit" id="goToPayment"
                                class="bg-[#0060a3] text-white py-2 px-3 rounded-lg font-semibold opacity-75 cursor-progress" disabled>Go
                            to Payment
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</section>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>

<?= $this->section('bookings-patient-details-script'); ?>
<script>

    $(document).ready(function () {

        $('#termsConditions').change(function() {
            if ($(this).prop('checked')) {
                $('#goToPayment').prop('disabled', false);
                $('#goToPayment').removeClass('opacity-75 cursor-progress');
            } else {
                $('#goToPayment').prop('disabled', true);
                $('#goToPayment').addClass('opacity-75 cursor-progress');
            }
        });
    });
</script>
<?= $this->endSection(); ?>
