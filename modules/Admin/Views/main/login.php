<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>


<div class="h-screen flex">
    <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
          justify-around items-center">
        <div class="bg-black opacity-20 inset-0 z-0"></div>
        <div class="w-full mx-auto px-10 flex-col items-center space-y-6">
            <h1 class="text-white font-bold text-5xl font-sans">Welcome to Chiromo Hospital Group.</h1>
            <p class="text-red-600 mt-1 text-xl">Recovery in dignity</p>
            <a href="" class="inline-block bg-white text-[#0060a3] mt-5 py-2 px-6 rounded-2xl font-bold mb-2">Read More</a>
        </div>
    </div>
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <div class="bg-white rounded-md shadow-2xl p-5">
                <h1 class="text-[#0060a3] font-bold text-2xl mb-2">Hello Again!</h1>
                <p class="text-sm font-normal text-gray-600 mb-8">Welcome Back, please login to your account</p><div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                        <label for="" class="text-md font-semibold px-1">Email</label>
                        <div class="flex pt-2">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="input-icon uil uil-envelope"></i></div>
                            <input type="email" id="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                        </div>
                        <span id="emailError" class="text-xs text-red-500 pt-2"></span>
                    </div>
                </div>
                <div class="flex -mx-3">
                    <div class="w-full px-3 mb-12">
                        <label for="" class="text-md font-semibold px-1">Password</label>
                        <div class="flex pt-2">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="input-icon uil uil-lock-alt"></i></div>
                            <input type="password" id="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                        </div>
                        <span id="passwordError" class="text-xs text-red-500 pt-2"></span>
                    </div>
                </div>
                <button type="submit" id="signIn" class="block w-full bg-[#0060a3] mt-3 py-2 rounded-lg hover:bg-[#6e96b2] hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
                <div class="flex justify-between mt-4">
                    <span class="text-sm ml-2 hover:text-[#0060a3] cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

                    <a href="<?= base_url('customer/sign-up')?>" class="text-sm ml-2 hover:text-[#0060a3] cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
                </div>

            </div>
        </div>

    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('login-content-script') ?>
<script>
    $(document).ready(function () {
        $("#signIn").click(function (e) {
            e.preventDefault();
            let email = $("#email").val();
            let password = $("#password").val();

            if (email === "") {
                $('#email').addClass('border-red-500');
                $('#email').focus();
                $('#emailError').text('First name is required');
                return false;
            }else{
                $('#email').removeClass('border-red-500');
                $('#emailError').text('');
            }

            if (password === "") {
                $('#password').addClass('border-red-500');
                $('#password').focus();
                $('#passwordError').text('Password is required');
                return false;
            }else{
                $('#password').removeClass('border-red-500');
                $('#passwordError').text('');
            }

            $('#signIn').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span>');
            $.ajax({
                url: "<?= base_url('admin/auth/user-login') ?>",
                type: "POST",
                data: {
                    email: email,
                    password: password
                },
                success: function (response) {
                    if (response.status === 200) {
                        window.location.href = "<?= base_url('admin/dashboard') ?>";
                    } else if(response.status === 500) {
                        $('#toast-danger').removeClass('hidden');
                        $('#toast-danger #toast-danger-content').text(response.message);
                    }
                },

                error: function (response) {
                    $('#toast-danger').removeClass('hidden');
                    $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                },

                complete: function () {
                    $('#signIn').prop('disabled', false).html('Sign in');
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
