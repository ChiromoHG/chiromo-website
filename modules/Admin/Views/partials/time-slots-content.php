<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-users-alt bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">Time Availability Slots</span>
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
                    <span class="text-blue-700">Time available</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mx-auto pt-4" x-data="{ activeTab: 'users' }">
        <div class="flex">
            <div class="flex start">
                <button class="py-2 px-4 text-lg hover:text-blue-700 border border-gray-300 rounded-l-lg"
                        :class="{ 'text-[#0060a3]': activeTab === 'users' }"
                        x-on:click="activeTab = 'users'">Time Availability
                </button>
                <button class="py-2 px-4  text-lg hover:text-blue-700 border border-gray-300 rounded-r-lg"
                        :class="{ 'text-[#0060a3]': activeTab === 'roles' }"
                        x-on:click="activeTab = 'roles'" id="display-time-slots">Time Slots
                </button>
            </div>
        </div>

        <div class="flex justify-center items-center mt-10" x-show="activeTab === 'users'">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-3xl w-full">
                <div class="flex items-center justify-start pb-5">
                    <span class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                        <i class="uil uil-clock-three text-green-800"></i>
                    </span>
                    <span class="text-base ml-3 font-semibold leading-6 text-gray-900" id="modal-title">
                       Set Time and Dates you are available
                    </span>
                </div>
                <label class="block pt-2 w-full">
                    <span class="block text-sm font-medium text-slate-700 pb-2">Select Date</span>
                    <input type="text" id="dateAvailable" class="input input-bordered w-full placeholder:text-slate-500 text-sm" placeholder="select date"/>
                    <span id="dateError" class="text-xs text-red-500 pt-2"></span>
                </label>
                <label class="block pt-2 w-full">
                    <span class="block text-sm font-medium text-slate-700 pb-2">Start Time</span>
                    <input type="text" id="startTime" class="input input-bordered w-full"/>
                    <span id="startTimeError" class="text-xs text-red-500 pt-2"></span>
                </label>
                <label class="block pt-2 w-full">
                    <span class="block text-sm font-medium text-slate-700 pb-2">End Time</span>
                    <input type="text" id="endTime" name="mobile" class="input input-bordered w-full"/>
                    <span id="endTimeError" class="text-xs text-red-500 pt-2"></span>
                </label>
                <div class="py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="save-time-slots"
                            class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                        <i class="uil uil-save pr-2"></i>
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
        <div id="rolesContent"  x-show="activeTab === 'roles'" style="display: none">

            <h4 class="text-base font-semibold leading-6 text-gray-900 pt-8">
                       Your Active Time Slots
            </h4>
            <div class="mt-8 bg-gray-50 p-3 rounded-md relative overflow-x-auto sm:rounded-lg">
                <table class="cell-border hover stripe display nowrap" id="manage-slots-dataTable" style="width: 100%">
                    <thead class="bg-[#0060a3] text-white">
                    <tr>
                        <th>Doctor Name</th>
                        <th>Slot Start Date</th>
                        <th>Slot End Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</section>
