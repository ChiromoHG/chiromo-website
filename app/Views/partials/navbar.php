
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
            <?php if(session()->has('isLoggedIn')) : ?>
                <nav
                        class="w-full bg-white md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
                    <ul class="md:flex items-center">
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                               href="">
                                <i class="uil uil-comment-alt-message"></i>
                            </a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                               href="<?= base_url('patient/dashboard') ?>">
                                Dashsboard
                            </a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                               href="<?= base_url('api/patient_logout') ?>">
                                Log Out
                            </a>
                        </li>
                        <li class="md:ml-6 mt-3 md:mt-0">
                            <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded"
                               href="">
                                Appointments</a>
                        </li>
                        <li class="md:ml-6 mt-3 md:mt-0">

                            <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 cursor-pointer">
                                <span class="font-medium text-gray-600 dark:text-gray-300">
<!--                                    get the current logged user initials-->
                                   <?php
                                   $firstName = session()->get('fname');
                                   $lastName = session()->get('lname');

                                   $initials = '';
                                   if ($firstName) {
                                       $initials .= strtoupper($firstName[0]);
                                   }

                                   if ($lastName) {
                                       $initials .= strtoupper($lastName[0]);
                                   }

                                   echo $initials;
                                   ?>

                                </span>
                            </div>

                            <!-- Dropdown menu -->
                            <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div>
                                        <?php if(session()->has('isLoggedIn')) :?>

                                        <?= ucfirst(session()->get('fname')) . ' ' . ucfirst(session()->get('lname')) ?>

                                        <?php endif; ?>
                                    </div>
                                    <div class="font-medium truncate">
                                        <?php if(session()->has('isLoggedIn')) :?>

                                        <?= session()->get('email') ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Sessions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Subscription
                                        </a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Settings
                                    </a>
                                </div>
                            </div>

                        </li>
                    </ul>
                </nav>
            <?php else :?>
                <nav
                        class="w-full bg-white md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
                    <ul class="md:flex items-center">
                        <li><a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="<?= base_url('about-us')?>">About
                                Us</a></li>
                        <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                               href="<?= base_url('treatments')?>">Treatments</a></li>
                        <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                               href="<?= base_url('our-blog'); ?>">Our Blogs</a></li>
                        <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                                               href="<?= base_url('customer/sign-in') ?>">
                                Log in
                            </a></li>
                        <li class="md:ml-6 mt-3 md:mt-0">
                            <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded"
                               href="<?= base_url('book-appointment') ?>">Book
                                Appointment</a>
                        </li>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</header>