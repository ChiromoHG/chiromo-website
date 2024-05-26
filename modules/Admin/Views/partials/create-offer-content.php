<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center justify-between">

        <div>
            <i class="uil uil-align bg-[#0060a3] text-white px-1.5 py-0.5 text-2xl rounded-md"></i>
            <span class="font-medium text-2xl ml-2 text-black">Create Offer</span>
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
                    <a href="<?= base_url('admin/dashboard/master') ?>" class="hover:text-blue-900">Master</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <span class="text-blue-700">Create Offer</span>
                </li>
            </ul>
        </div>

    </div>


    <div class="pt-4">
        <button id="openNewOffer"
                class="bg-[#0060a3] text-white hover:bg-[#0060a3] font-normal py-2 px-3 rounded">
            <i class="uil uil-plus"></i>
            Create Offer
        </button>
    </div>


    <div class="mt-5 bg-gray-50 p-3 rounded-md overflow-x-auto">
        <table class="cell-border hover stripe display nowrap" id="offerDataTable" style="width: 100%">
            <thead class="bg-[#0060a3] text-white">
            <tr>
                <th>Offer Title</th>
                <th>Start Date</th>
                <th>Count Down</th>
                <th>Offer</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <!-- Add New Role modal -->
    <div id="newOfferModel" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                <i class="uil uil-suitcase-alt text-green-800"></i>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal_title">Create Offer</h3>
                            </div>
                        </div>

                        <input type="hidden" id="offerId">

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Offer Title</span>
                            <input type="text" id="offerTitle" class="input input-bordered w-full"/>
                            <span id="offerTitleError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Offer</span>
                            <select class="input input-bordered w-full" id="offer">
                                <option value="10">10 %</option>
                                <option value="20">20 %</option>
                                <option value="30">30 %</option>
                                <option value="40">40 %</option>
                                <option value="50">50 %</option>
                            </select>
                            <span id="offerError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Start Date</span>
                            <input type="date" id="startDate" class="input input-bordered w-full"/>
                            <span id="startDateError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">End Date</span>
                            <input type="date" id="endDate" class="input input-bordered w-full"/>
                            <span id="endDateError" class="text-xs text-red-500 pt-2"></span>
                        </label>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="createOffer"
                                class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                            Save Offer
                        </button>
                        <button type="button" id="closeOfferModal"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>