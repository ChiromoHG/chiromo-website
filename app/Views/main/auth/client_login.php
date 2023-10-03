<?= $this->extend('base/base.php') ?>
<?= $this->section('content') ?>



    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-full" src="<?= base_url('images/logo/chg-logo-1.png') ?>" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="text" class="block w-full rounded-md border-0 py-2 pl-4 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
                        <span id="emailError" class="text-xs text-red-500 pt-2"></span>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-blue-700 hover:text-blue-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" class="block w-full rounded-md border-0 pl-4 py-2 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
                        <span id="passwordError" class="text-xs text-red-500 pt-2"></span>
                    </div>
                </div>

                <div>
                    <button type="submit" id="signIn" class="flex w-full justify-center rounded-md bg-blue-800 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">Sign in</button>
                </div>
                <div class="mt-2">
                    <span>Don't have account? <a href="<?= base_url('customer/sign-up')?>" class="text-blue-900 hover:text-blue-800">Sign up</a></span>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>