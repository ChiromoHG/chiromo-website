<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>

<div class="load"></div>

<section class="bg-blue-50">
    <div class="bg-white">
        <div class="mx-2 md:mx-10 py-8 md:py-10 flex items-center md:justify-between md:flex-row flex-col">
            <div>
                <i class="uil uil-transaction bg-[#0060a3] px-1.5 py-0.5 text-lg md:text-xl rounded-md text-white"></i>
                <span class="font-medium text-[#0060a3] text-md md:text-xl">Review and Pay</span>
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
                        <a href="<?= base_url('appointment_bookings') ?>" class="hover:text-blue-900">Patient Details</a>
                    </li>
                    <li class="inline-block">
                        <i class="uil uil-angle-right"></i>
                    </li>
                    <li class="inline-block">
                        <span class="text-blue-700">Review And Pay</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mx-2 md:mx-10 py-4 md:py-5">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-2 md:gap-4">
            <div class="col-span-1 md:col-span-3 bg-white p-6 rounded-md shadow-md relative overflow-hidden">
                <span class="absolute inset-x-0 top-0 h-2 bg-gradient-to-r from-[#0060a3] via-blue-500 to-[#ac8342]"></span>

                <span class="font-medium text-[#0060a3] text-md md:text-xl">Review Patient Details</span>
                <div class="flex py-4">
                    <?php if(session()->has('patient_details')) : ?>
                    <?php $patientDetails = session()->get('patient_details') ?>
                    <div class="flex-1">
                        <h5 class="">Name<span class="text-slate-500 font-normal ml-2"><?= !empty($patientDetails['full_name']) ? ucfirst($patientDetails['full_name']) : '?' ?></span></h5>
                        <h5 class="">Gender<span class="text-slate-500 font-normal ml-2"><?= !empty($patientDetails['gender']) ? $patientDetails['gender'] : '?' ?></span></h5>
                        <h5 class="">Date of Birth<span class="text-slate-500 font-normal ml-2"><?= !empty($patientDetails['dob']) ? $patientDetails['dob'] : '?' ?></span></h5>
                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('appointment_bookings')) : ?>
                    <?php $appointmentBookings = session()->get('appointment_bookings') ?>
                    <div class="flex-1">
                        <h5 class="">Service<span class="text-slate-500 font-normal ml-2"><?= !empty($appointmentBookings['service']) ? $appointmentBookings['service'] : '?' ?></span></h5>
                        <h5 class="">Appointment Date<span class="text-slate-500 font-normal ml-2"><?= !empty($appointmentBookings['date']) ? $appointmentBookings['date'] : '?' ?></span></h5>
                        <h5 class="">Appointment Time<span class="text-slate-500 font-normal ml-2"><?= !empty($appointmentBookings['time']) ? $appointmentBookings['time'] : '?' ?></span></h5>
                    </div>
                    <?php endif; ?>
                </div>

                <span class="font-medium text-[#0060a3] text-md md:text-xl">Payment Method</span>
                <div class="flex pt-4">
                    <h5 class="font-normal text-black">Pay with</h5>
                    <img src="<?= base_url('images/logo/mpesa.jpg') ?>" class="w-36 ml-2">
                </div>
                <div class="flex pt-2">
                    <span><i class="uil uil-phone-alt"></i></span>
                    <?php if(session()->has('patient_details')) : ?>
                    <?php $patientDetails = session()->get('patient_details') ?>
                    <h5 class="font-normal text-black ml-2"><?= !empty($patientDetails['phone_number']) ? $patientDetails['phone_number'] : '+254 700 000 000'?></h5>
                    <?php endif; ?>
                </div>
                <div class="pt-4">
                    <p>
                        An stk push will be sent to your phone to complete the payment
                    </p>
                    <p>
                        Before you proceed, please confirm that you have enough funds in your mpesa account.
                    </p>
                </div>

            </div>
            <div class="col-span-1 md:col-span-1 border bg-white border-slate-100 rounded-lg overflow-hidden max-h-[300px] p-3 relative">
                <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-[#ac8342]"></span>
                <h6 class="font-medium">Apply Promo Code</h6>
                <hr class="my-2">

                <div class="pt-2">
                    <label for="promo_code" class="w-full text-slate-500">Enter promo code (Optional)</label>
                    <input type="text" id="promo_code" name="promo_code" class="w-full py-1 rounded-lg border-gray-200 outline-none focus:border-[#0060a3]">
                </div>

                <div class="pt-3 md:pt-6 flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="rounded-sm border-gray-200 outline-none focus:border-[#0060a3]">
                    <label for="terms" class="text-slate-500 pl-2 text-sm">By continue, you agree to our terms and conditions</label>
                </div>
                <div class="pt-3 md:pt-6">
                    <button class="w-full py-2 bg-[#0060a3] text-white rounded-lg opacity-75 cursor-progress" disabled id="submitPayment">Pay Now</button>
                </div>

                <div class="pt-2 hidden">
                    <span class="text-sm text-red-500 bg-red-300 px-2 py-1 rounded-sm">There was an error</span>
                </div>
            </div>
        </div>
    </div>



<!-- stk confirmation model -->
<div id="stkConfirmationModel" class="relative z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="uil uil-check text-green-800"></i>
                        </div>
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">STK Confirmation</h3>
                        </div>
                    </div>

                    <div class="" id="">
                        <p class="text-md text-green-500 py-10 payment-message">
                            
                        </p>
                        <p class="text-md text-red-500 py-8 payment-message-error">
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</section>

<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>

<?= $this->section('review-and-pay'); ?>
<script>


    $(document).ready(function (){

        $('#terms').change(function() {
            if ($(this).prop('checked')) {
                $('#submitPayment').prop('disabled', false);
                $('#submitPayment').removeClass('opacity-75 cursor-progress');
            } else {
                $('#submitPayment').prop('disabled', true);
                $('#submitPayment').addClass('opacity-75 cursor-progress');
            }
        });

       $('#submitPayment').on('click', function (){

           $(this).html('<span class="loading loading-spinner loading-xs"></span>');
           $.ajax({
               url: '<?= base_url('api/save_booked_appointment_payment') ?>',
               type: 'POST',
               data: {},
               success: function (response){
                if(response.status === 200){
                    $('#stkConfirmationModel').removeClass('hidden');
                    $('#stkConfirmationModel p.payment-message').text(response.message);
                }else if(response.status === 500){
                    $('#stkConfirmationModel').removeClass('hidden');
                    $('#stkConfirmationModel p.payment-message-error').text(response.message);
                }
               },

                error: function (error){

                    console.log(error);
                },

               complete: function (){
                   $('#submitPayment').prop('disabled', true).html('Pay Now');
               }

           })

       });

    })

</script>
<?= $this->endSection(); ?>
