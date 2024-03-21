<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-users-alt bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">Patient List</span>
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
                    <span class="text-blue-700">Patient List</span>
                </li>
            </ul>
        </div>
    </div>

<!--    <div class="container mx-auto pt-4" x-data="{ activeTab: 'users' }">-->
<!--        <div class="flex">-->
<!--            <div class="flex start">-->
<!--                <button class="py-2 px-4 text-lg hover:text-blue-700 border border-gray-300 rounded-l-lg"-->
<!--                        :class="{ 'text-[#0060a3]': activeTab === 'users' }"-->
<!--                        x-on:click="activeTab = 'users'">Patients List-->
<!--                </button>-->
<!--                <button class="py-2 px-4  text-lg hover:text-blue-700 border border-gray-300 rounded-r-lg"-->
<!--                        :class="{ 'text-[#0060a3]': activeTab === 'roles' }"-->
<!--                        x-on:click="activeTab = 'roles'" id="display-canceled-appointments">Cancelled Appointments-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->


            <div class="mt-10 bg-gray-50 p-3 rounded-md relative overflow-x-auto sm:rounded-lg">

                <div date-rangepicker datepicker-autohide class="flex items-center justify-between pb-10">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <input name="patient" type="text" id="patient" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Filter by name">
                        </div>
                        <span class="text-gray-500 mr-2">Filter by date:</span>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="start" type="text" id="startDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="end" type="text" id="endDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                        </div>
                    </div>
                    <div>
                        <button id="searchByDateName" class="bg-[#0060a3] text-white font-normal py-2 px-2 rounded">
                            <i class="uil uil-search"></i>
                            Filter
                        </button>

                        <button id="clearDateName" class="bg-[#0060a3] text-white font-normal py-2 px-2 rounded">
                            <i class="uil uil-times-circle"></i>
                            Reset
                        </button>

                    </div>

                </div>

                <table class="cell-border hover stripe display nowrap" id="manage-patients-dataTable" style="width: 100%">
                    <thead class="bg-[#0060a3] text-white">
                    <tr>
                        <th></th>
                        <th>Uhid</th>
                        <th>Encounter Number</th>
                        <th>Patient Name</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Consultant</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

<!--        <div id="rolesContent"  x-show="activeTab === 'roles'" style="display: none">-->
<!--            <div class="mt-10 bg-gray-50 p-3 rounded-md relative overflow-x-auto sm:rounded-lg">-->
<!--                <table class="cell-border hover stripe display nowrap" id="manage-canceled-dataTable" style="width: 100%">-->
<!--                    <thead class="bg-gray-200">-->
<!--                    <tr>-->
<!--                        <th></th>-->
<!--                        <th>Patient Name</th>-->
<!--                        <th>Reason</th>-->
<!--                        <th>Date Canceled</th>-->
<!--                        <th>Action</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->

</section>

