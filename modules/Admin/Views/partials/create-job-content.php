<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center justify-between">

        <div>
            <i class="uil uil-suitcase-alt bg-[#0060a3] text-white px-1.5 py-0.5 text-2xl rounded-md"></i>
            <span class="font-medium text-2xl ml-2">Create Job</span>
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
                    <span class="text-blue-700">Create Job</span>
                </li>
            </ul>
        </div>

    </div>


    <div class="pt-4">
        <button id="openNewCarousel"
                class="bg-[#0060a3] text-white hover:bg-[#0060a3] font-normal py-2 px-3 rounded">
            <i class="uil uil-plus"></i>
            Create Job
        </button>
    </div>


    <div class="mt-5 bg-gray-50 p-3 rounded-md overflow-x-auto">
        <table class="cell-border hover stripe display nowrap" id="jobDataTable" style="width: 100%">
            <thead class="bg-[#0060a3] text-white">
            <tr>
                <th>Job Title</th>
                <th>Responsibility</th>
                <th>Requirements</th>
                <th>Closing Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <!-- Add New Role modal -->
    <div id="newCarouselModel" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Create Job</h3>
                            </div>
                        </div>

                        <input type="hidden" id="carouselId">

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Job Title</span>
                            <input type="text" id="jobTitle" class="input input-bordered w-full"/>
                            <span id="jobTitleError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Job Type</span>
                            <select class="input input-bordered w-full" id="jobType">
                                <option value="full-time">Full Time</option>
                                <option value="part-time">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="internship">Internship</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                            <span id="jobTypeError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Category</span>
                            <input type="text" id="category" class="input input-bordered w-full"/>
                            <span id="categoryError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Location</span>
                            <input type="text" id="location" class="input input-bordered w-full"/>
                            <span id="locationError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Description</span>
                            <textarea id="jobDescription" class="textarea textarea-bordered w-full placeholder:text-stone-400" rows="1" placeholder="Job description"></textarea>
                            <span id="jobDescriptionError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Closing Date</span>
                            <input type="date" id="closingDate" class="input input-bordered w-full"/>
                            <span id="closingDateError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Application Link</span>
                            <input type="text" id="link" class="input input-bordered w-full"/>
                            <span id="linkError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Job Advert</span>
                            <input type="file" class="" id="uploadImage" accept="image/*"/>
                            <span id="uploadImageError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Disclaimer</span>
                            <textarea id="disclaimer" class="textarea textarea-bordered w-full placeholder:text-stone-400" rows="1" placeholder="Job description"></textarea>
                            <span id="disclaimerError" class="text-xs text-red-500 pt-2"></span>
                        </label>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="createJob"
                                class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                            Save Job
                        </button>
                        <button type="button" id="closeJobModal"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>