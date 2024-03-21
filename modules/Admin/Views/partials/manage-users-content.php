<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-users-alt bg-[#0060a3] text-white px-1.5 py-0.5 text-2xl rounded-md"></i>
            <span class="font-medium text-2xl ml-2">Manage System Users</span>
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
                    <span class="text-blue-700">Users</span>
                </li>
            </ul>
        </div>

    </div>


    <div class="pt-5">
        <button id="openNewUserModal"
                class="bg-[#0060a3] hover:bg-blue-500 text-white font-normal py-2 px-3 rounded">
            <i class="uil uil-plus"></i>
            Create New User
        </button>
    </div>

    <div id="usersContent" class="mt-5 bg-gray-50 p-3 rounded-md overflow-x-auto">
        <table class="cell-border hover stripe display nowrap" id="manage-users-dataTable" style="width: 100%">
            <thead class="bg-[#0060a3] text-white">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <!-- Add New User modal -->
    <div id="newUserModal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="flex items-center justify-start">
                            <span class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                <i class="uil uil-user-plus text-green-800"></i>
                            </span>
                            <span class="text-base ml-3 font-semibold leading-6 text-gray-900" id="modal-title">Create New User</span>
                        </div>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Title</span>
                            <select id="select-tittle" class="select select-bordered w-full">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                            </select>
                            <span id="selectTitle" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">First Name</span>
                            <input type="text" id="fname" class="input input-bordered w-full"/>
                            <span id="fnameError" class="text-xs text-red-500 pt-2"></span>
                        </label>
                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Last Name</span>
                            <input type="text" id="lname" class="input input-bordered w-full"/>
                            <span id="lnameError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Staff Email</span>
                            <input type="email" id="email" name="email" class="input input-bordered w-full"/>
                            <span id="emailError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                        <label class="block pt-2 w-full">
                            <span class="block text-sm font-medium text-slate-700 pb-2">Select Role</span>
                            <select id="select-role" class="select select-bordered w-full">
                                <option disabled selected>Select Role</option>
                                <?php if(!empty($roles)): foreach($roles as $role): ?>
                                    <option value="<?= $role['role_uuid'] ?>"><?= $role['role_name'] ?></option>
                                <?php endforeach; endif; ?>
                            </select>
                            <span id="selectError" class="text-xs text-red-500 pt-2"></span>
                        </label>

                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="new-user-btn"
                                class="inline-flex w-full justify-center rounded-md bg-green-200 px-3 py-3 text-sm font-semibold text-black shadow-sm hover:bg-green-100 sm:ml-3 sm:w-auto">
                            Create User
                        </button>
                        <button type="button" id="closeNewUserModal"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-100 hover:ring-0 sm:mt-0 sm:w-auto">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>