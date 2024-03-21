
<header class="w-full main-bg px-4 sm:px-8 lg:px-16 xl:px-20 2xl:px-20 nav">
    <div class="flex flex-wrap items-center justify-between py-3">
        <div class="w-1/2 md:w-auto">
            <a href="<?= base_url('/') ?>"
               class="text-white font-bold text-2xl rounded-lg focus:outline-none focus:shadow-outline">
                <img src="<?= base_url('images/logo/chg-logo-2.png') ?>" class="rounded-lg" alt="logo"
                     style="width: 240px;">
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <svg class="fill-current text-white"
                 xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>

        <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden md:block w-full md:w-auto" id="menu">

                <nav class="w-full bg-white md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
                    <ul class="md:flex items-center">
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold pointer-events-none cursor-not-allowed" href="<?= base_url('about-us')?>">About Us</a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold pointer-events-none cursor-not-allowed" href="<?= base_url('our-blog'); ?>">Our Blogs</a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold pointer-events-none cursor-not-allowed" href="<?= base_url('treatments')?>">Treatments</a>
                        </li>
                        <li class="md:ml-4">
                            <span class="py-2 inline-block md:text-white md:px-2 font-semibold cursor-pointer" id="openLoginModel">Log in</span>
                        </li>
                        <li class="md:ml-6 mt-3 md:mt-0">



                            <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="py-2 text-center inline-flex items-baseline md:text-white md:px-2 font-semibold">Resources
                            </a>

                            <!-- Dropdown menu -->
                            <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                    <li>
                                        <a href="http://95.111.235.117:120/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Staff Portal</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url("careers") ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Careers</a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="md:ml-6 mt-3 md:mt-0">
                            <a class="inline-block font-semibold px-4 py-2 text-black md:text-white  md:bg-transparent border border-gradient rounded-lg hover:border-none"
                               href="<?= base_url('assessments') ?>">
                                Assessments</a>
                        </li>
                    </ul>
                </nav>
        </div>
    </div>
</header>



<!-- verify user modal -->
<div id="verifyUserModel" class="relative z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="uil uil-user text-green-800"></i>

                        </div>
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Sign In or Register</h3>
                        </div>
                    </div>

                    <label class="block pt-2 w-full">
                        <span class="block text-sm font-medium text-slate-700 pb-2">Enter Email Address to sign in or register</span>
                        <input type="text" id="email" class="input input-bordered w-full"/>
                        <span id="emailError" class="text-xs text-red-500 pt-2"></span>
                    </label>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="verifyUser"
                            class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                        Continue
                    </button>
                    <button type="button" id="closeVerifyUserModal"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- login user  modal -->
<div id="loginModel" class="relative z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="uil uil-clinic-medical text-green-800"></i>
                        </div>
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Login</h3>
                        </div>
                    </div>

                    <input type="hidden" id="serviceId">

                    <label class="block pt-2 w-full">
                        <span class="block text-sm font-medium text-slate-700 pb-2">Enter Password</span>
                        <input type="password" id="userPass" class="input input-bordered w-full"/>
                        <span id="passwordError" class="text-xs text-red-500 pt-2"></span>
                    </label>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="loginUser"
                            class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                        Login
                    </button>
                    <button type="button" id="closeLogInUserModal"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->section('navbar-section-script') ?>
<script>
   $(document).ready(function () {

       $('#openLoginModel').on('click', function () {
           $('#verifyUserModel').removeClass('hidden');
       });

         $('#closeVerifyUserModal').on('click', function () {
              $('#verifyUserModel').addClass('hidden');
         });

         function validateEmail(){
                let email = $('#email').val();
                if(email === ''){
                    showEmailError('Email is required');
                    return false;
                } else if(!validEmail(email)) {
                    showEmailError('Email is not valid');
                    return false;
                } else{
                    ClearEmailError();
                    return true;
                }
         }

         function validEmail(email){
             let regEx = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
             return regEx.test(email);
         }

         function showEmailError(message){
             $('#emailError').text(message);
             $('#email').addClass('border-red-500 focus:border-red-500');
         }

         function ClearEmailError(){
             $('#emailError').text('');
             $('#email').removeClass('border-red-500 focus:border-red-500');
         }


         $('#email').on('keyup', validateEmail);

         $('#verifyUser').on('click', function () {
             if(validateEmail()){
                 let email = $('#email').val();
                 $('#verifyUser').prop('disabled', true).html('<span class="loading loading-spinner loading-xs"></span>');
                    $.ajax({
                        url: '<?= base_url('api/verify_email') ?>',
                        type: 'POST',
                        data: {email: email},
                        dataType: 'json',
                        success: function (response) {
                            if(response.status === 200){
                                $('#verifyUserModel').addClass('hidden');
                                $('#loginModel').removeClass('hidden');
                                $('#closeLogInUserModal').on('click', function () {
                                    $('#loginModel').addClass('hidden');
                                });
                                $('#loginUser').on('click', logInUser);
                            }else if(response.status === 404){
                                $('#verifyUserModel').addClass('hidden');
                                window.location.href = '<?= base_url('customer/sign-up') ?>';
                            }
                        },

                        error: function (error) {
                            $('#verifyUserModel').addClass('hidden');
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                        },

                        complete: function () {
                            $('#verifyUser').prop('disabled', false).html('Continue');
                        }
                    });

             }else{
                 return false;
             }
         });

         function logInUser(){
             let email = $('#email').val();
             let pass  = $('#userPass').val();

             console.log(email, pass)

             if(pass.length === 0){
                 $('#passwordError').text('This field is required!');
                 $('#userPass').addClass('border-red-500 focus:border-red-500');
                 return false;
             }else {
                 $('#passwordError').text('');
                 $('#userPass').removeClass('border-red-500 focus:border-red-500');
             }

             $('#loginUser').prop('disabled', true).html('<span class="loading loading-spinner loading-xs"></span>');
             $.ajax({
                 url: '<?= base_url('api/patient_login') ?>',
                 type: 'POST',
                 data: {
                     email: email,
                     password: pass
                 },
                 dataType: 'json',
                 success: function (response){
                     if(response.status === 200){
                         window.location.href = "<?= base_url('patient/dashboard') ?>";
                     }else{
                         $('#loginModel').addClass('hidden');
                         $('#toast-danger').removeClass('hidden');
                         $('#toast-danger #toast-danger-content').text(response.message);
                     }
                 },
                 error: function (){
                     alert('Server Error Reported');
                 },

                 complete: function (){
                     $('#loginUser').prop('disabled', false).html('Login');
                 }
             })
         }
   });
</script>
<?php $this->endSection() ?>
