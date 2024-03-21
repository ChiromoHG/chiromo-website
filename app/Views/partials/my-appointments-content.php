<?= $this->include('partials/patient-search.php') ?>


<div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-0 md:pt-6">
    <div class="rounded-md shadow-md hover:shadow-lg cursor-pointer bg-green-100 px-4 py-3">
            <a href="#" class="flex justify-between items-center" id="display-full-calendar">
                <span class="flex items-center justify-center rounded-full bg-[#0060a3] h-8 w-8 text-white">
                    <i class="uil uil-schedule"></i> 
                </span>
                <span class="font-semibold text-[#0060a3] text-[14px]">View Appointments in Calendar</span>
            </a>
    </div>

</div>

<div class="">

    <h4 class="font-semibold text-xl pt-4">My Appointments</h4>

    <div class="mt-4 bg-gray-50 py-6 px-2 rounded-md sm:rounded-lg">
        <table class="cell-border hover stripe display nowrap" width="100%" id="manage-my-appointments">
            <thead class="bg-[#0060a3] text-white font-medium">
            <tr>
                <th>Doctor Name</th>
<!--                <th>Appointment Date</th>-->
<!--                <th>Appointment Time</th>-->
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- Cancel booked appointment model -->
<div id="cancelAppointmentModal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="uil uil-cancel text-green-800"></i>
                        </div>
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Cancel Appointment</h3>
                            <div class="mt-2">
                                <div class="pb-3">
                                    <p class="mt-1 text-sm leading-6 text-gray-600">Let us know why you are canceling the appointment.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <label class="block pt-2 w-full">
                        <span class="block text-sm font-medium text-slate-700 pb-2">Reason for canceling your appointment:</span>
                        <textarea id="cancel-appointment-reason" class="textarea textarea-bordered w-full placeholder:text-stone-400" placeholder="Type the reason"></textarea>
                    </label>

                    <span id="cancelAppointmentError" class="text-xs text-red-500 pt-2"></span>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="cancel-appointment"
                            class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                        Submit
                    </button>
                    <button type="button" id="closeCancelAppointmentModal"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show calendar model -->
<div id="showCalendarModel" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">


                    <div class="pt-5">
                        <div class="shadow-md hover:shadow-lg h-full" id="calender">

                        </div>
                    </div>


                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 overflow-y-auto">
                    <button type="button" id="closeViewCalendarModal"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-[#0060a3] px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-300 hover:text-black hover:ring-0 sm:mt-0 sm:w-auto">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
