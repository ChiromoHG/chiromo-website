<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center justify-between">

        <div>
            <i class="uil uil-clinic-medical bg-[#0060a3] text-white px-1.5 py-0.5 text-2xl rounded-md"></i>
            <span class="font-medium text-2xl ml-2">Create Web Carousel</span>
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
                    <span class="text-blue-700">Web carousel</span>
                </li>
            </ul>
        </div>

    </div>


    <div class="pt-4">
        <button id="openNewCarousel"
                class="bg-[#0060a3] text-white hover:bg-[#0060a3] font-normal py-2 px-3 rounded">
            <i class="uil uil-plus"></i>
            Create Carousel
        </button>
    </div>


    <div class="mt-5 bg-gray-50 p-3 rounded-md overflow-x-auto">
        <table class="cell-border hover stripe display nowrap" id="carouselDataTable" style="width: 100%">
            <thead class="bg-[#0060a3] text-white">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Button</th>
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
                                <i class="uil uil-clinic-medical text-green-800"></i>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Create Carousel</h3>
                            </div>
                        </div>

                        <input type="hidden" id="carouselId">

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Title</span>
                            <input type="text" id="carouselTitle" class="input input-bordered w-full"/>
                            <span id="carouselTitleError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Description</span>
                            <textarea id="carouselDescription" class="textarea textarea-bordered w-full placeholder:text-stone-400" rows="1" placeholder="Carousel description"></textarea>
                            <span id="carouselDescriptionError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <span class="block text-sm font-medium text-slate-700 pb-2">Upload Image</span>
                        <div class="flex items-center justify-center w-full">
                            <label for="uploadImage" class="flex flex-col items-center justify-center w-full h-20 border border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-3 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                                </div>
                                <input id="uploadImage" type="file" />
                            </label>
                        </div>
                        <span id="uploadImageError" class="text-xs text-red-500 pt-2"></span>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">#Tag</span>
                            <input type="text" id="tag" class="input input-bordered w-full"/>
                            <span id="tagError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="pt-2 w-full flex justify-between">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Carousel has button?</span>
                            <input id="carouselCheckbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </label>

                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="createCarousel"
                                class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                            Save Carousel
                        </button>
                        <button type="button" id="closeCarouselModal"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>