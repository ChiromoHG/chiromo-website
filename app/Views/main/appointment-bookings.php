<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>

<div class="load"></div>

<section class="bg-blue-50">
    <div class="bg-white">
        <div class="mx-2 md:mx-10 py-8 md:py-10 flex items-center md:justify-between md:flex-row flex-col">
            <div>
                <i class="uil uil-link-h bg-[#0060a3] px-1.5 py-0.5 text-lg md:text-xl rounded-md text-white"></i>
                <span class="font-medium text-[#0060a3] text-md md:text-xl">Book An Appointment</span>
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
                        <span class="text-blue-700">Bookings</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mx-2 md:mx-10 py-4 md:py-5">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-2 md:gap-4">
            <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-md shadow-md relative overflow-hidden">
                <span class="absolute inset-x-0 top-0 h-2 bg-gradient-to-r from-[#0060a3] via-blue-500 to-[#ac8342]"></span>

                <form method="post" action="">
                    <div class="">
                        <label for="service" class="w-full text-slate-500">Select hospital service</label>
                        <select id="service" name="hospital_service" class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3] pt-2">
                            <?php if(!empty($services)): ?>
                                <?php foreach ($services as $service): ?>
                                    <option value="<?= $service['service_uuid'] ?>"><?= $service['service_name'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <?php if(isset($validation)) : ?>
                            <?php if($validation->hasError('hospital_service')) :?>
                                <span class="text-red-500 text-sm"><?= $validation->getError('hospital_service') ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="pt-2">
                        <label for="doctor_type" class="w-full text-slate-500">Select your doctor</label>
                        <select id="doctor_type" name="doctor_type" class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
                            <option value="Psychiatrist">Psychiatrist</option>
                            <option value="Psychologist">Psychologist</option>
                        </select>
                        <?php if(isset($validation)) : ?>
                            <?php if($validation->hasError('doctor_type')) :?>
                                <span class="text-red-500 text-sm"><?= $validation->getError('doctor_type') ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="pt-2">
                        <label for="date" class="w-full text-slate-500">Select appointment date</label>
                        <input type="date" name="date" id="date" class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
                        <?php if(isset($validation)) : ?>
                            <?php if($validation->hasError('date')) :?>
                                <span class="text-red-500 text-sm"><?= $validation->getError('date') ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="pt-2">
                        <label for="appointment_time" class="w-full text-slate-500">Select appointment time</label>
                        <select id="appointment_time" name="appointment_time" class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
                            <option value="8:00 AM">8:00 AM</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                        </select>
                        <?php if(isset($validation)) : ?>
                            <?php if($validation->hasError('appointment_time')) :?>
                                <span class="text-red-500 text-sm"><?= $validation->getError('appointment_time') ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="pt-2 flex text-[#0060a3] cursor-pointer items-center" id="display_description">
                        <i class="uil uil-plus"></i>
                        <span class="text-sm font-medium">Add Description</span>
                    </div>

                    <div class="pt-2 hidden" id="toggle_description">
                        <label for="description" class="text-slate-500">Description</label>
                        <textarea name="description" id="description" class="w-full rounded-lg border-gray-200 outline-none focus:border-[#0060a3] p-2" placeholder="Add Description"></textarea>
                        <?php if(isset($validation)) : ?>
                            <?php if($validation->hasError('description')) :?>
                                <span class="text-red-500 text-sm"><?= $validation->getError('description') ?></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="bg-[#0060a3] text-white py-2 px-3 rounded-lg font-semibold hover:opacity-50">Proceed to Book</button>
                    </div>
                </form>
            </div>
            <div class="col-span-1 md:col-span-1 border bg-white border-slate-100 rounded-lg overflow-hidden max-h-[300px] p-3 relative">
                <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-[#ac8342]"></span>
                <h6 class="text-center font-medium">Services We Offer</h6>
                <hr class="my-2">

                <div class="">
                    <ul class="list-disc list-inside">
                        <li class="text-sm text-[#0060a3]">Online Therapy</li>
                        <li class="text-sm text-[#0060a3]">Group Therapy</li>
                        <li class="text-sm text-[#0060a3]">Family Therapy</li>
                        <li class="text-sm text-[#0060a3]">Couples Therapy</li>
                        <li class="text-sm text-[#0060a3]">Adolescent Therapy</li>
                        <li class="text-sm text-[#0060a3]">Alcohol Use</li>
                        <li class="text-sm text-[#0060a3]">Anxiety</li>
                        <li class="text-sm text-[#0060a3]">Burnout</li>
                        <li class="text-sm text-[#0060a3]">Depression</li>
                        <li class="text-sm text-[#0060a3]">PTSD PCL-5)</li>
                        <li class="text-sm text-[#0060a3]">Psychological Counselling</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>

<?= $this->section('appointment-booking-script'); ?>
<script>

    let display_description = $("#display_description");
    let toggle_description = $("#toggle_description");

    display_description.on('click', function(){
        toggle_description.toggleClass('hidden');
    });


</script>
<?= $this->endSection(); ?>
