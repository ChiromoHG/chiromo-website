<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-stethoscope bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">Patients Appointments</span>
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
                    <span class="text-blue-700">Appointments</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mx-auto pt-4" x-data="{ activeTab: 'users' }">
        <div class="flex">
            <div class="flex start">
                <button class="py-2 px-4 text-lg hover:text-blue-700 border border-gray-300 rounded-l-lg"
                        :class="{ 'text-[#0060a3]': activeTab === 'users' }"
                        x-on:click="activeTab = 'users'">Active Appointments
                </button>
                <button class="py-2 px-4  text-lg hover:text-blue-700 border border-gray-300 rounded-r-lg"
                        :class="{ 'text-[#0060a3]': activeTab === 'roles' }"
                        x-on:click="activeTab = 'roles'" id="display-canceled-appointments">Cancelled Appointments
                </button>
            </div>
        </div>

        <div x-show="activeTab === 'users'">
            <div class="mt-10 bg-gray-50 p-3 rounded-md relative overflow-x-auto sm:rounded-lg">
                <table class="cell-border hover stripe display nowrap" id="manage-appointment-dataTable" style="width: 100%">
                    <thead class="bg-[#0060a3] text-white">
                    <tr>
                        <th></th>
                        <th>Patient Name</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Date Booked</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="rolesContent"  x-show="activeTab === 'roles'" style="display: none">
            <div class="mt-10 bg-gray-50 p-3 rounded-md relative overflow-x-auto sm:rounded-lg">
                <table class="cell-border hover stripe display nowrap" id="manage-canceled-dataTable" style="width: 100%">
                    <thead class="bg-[#0060a3] text-white">
                    <tr>
                        <th></th>
                        <th>Patient Name</th>
                        <th>Reason</th>
                        <th>Date Canceled</th>
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


<!-- Approve appointment model -->
<div id="approveAppointmentModal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Approve Appointment</h3>
                        </div>
                    </div>

                    <label class="block pt-5 w-full">
                        <span class="block text-sm font-medium text-slate-700 pb-3">Approve the appointment:</span>
                        <select id="approve-appointment" class="select select-bordered w-full">
                            <option value="1">Approve</option>
                            <option value="2">Reject</option>
                        </select>
                    </label>

                    <span id="approveAppointmentError" class="text-xs text-red-500 pt-2"></span>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="approveAppointment"
                            class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-2 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                        Submit
                    </button>
                    <button type="button" id="closeApproveAppointmentModal"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

