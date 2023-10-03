<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center justify-between">
        <div>
            <i class="uil uil-users-alt bg-blue-700 px-1.5 py-0.5 text-2xl rounded-md"></i>
            <span class="font-medium text-2xl ml-2">Permissions</span>
        </div>

        <div class="bg-blue-100 py-1 px-3 rounded-lg">
            <ul>
                <li class="inline-block">
                    <a href="<?= base_url('admin/dashboard') ?>" class="text-blue-700 hover:text-blue-900">Dashboard</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <a href="<?= base_url('admin/dashboard/manage_users') ?>" class="text-blue-700 hover:text-blue-900">Manage
                        Users</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <span class="text-blue-700">Permission</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="card lg:card-side bg-base-100 shadow-xl mt-10">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <h2 class="card-title">Roles and Permission Management</h2>
                <span class="text-stone-400">View</span>
            </div>
            <form class="flex flex-col justify-center">

                <div class="form-control">
                    <label class="label cursor-pointer">
                            <span class="font-semibold text-slate-600">Security<br>
                                <span class="text-stone-400 font-normal">The user can edit and view security module</span>
                            </span>
                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                    </label>
                </div>

                <div class="form-control pt-3">
                    <label class="label cursor-pointer">
                            <span class="font-semibold text-slate-600">Reception<br>
                                <span class="text-stone-400 font-normal">The user can edit and view reception module</span>
                            </span>
                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                    </label>
                </div>

                <div class="form-control pt-3">
                    <label class="label cursor-pointer">
                            <span class="font-semibold text-slate-600">Conference<br>
                                <span class="text-stone-400 font-normal">The user can edit and view conference module</span>
                            </span>
                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                    </label>
                </div>


                <div class="form-control pt-3">
                    <label class="label cursor-pointer">
                            <span class="font-semibold text-slate-600">Communication<br>
                                <span class="text-stone-400 font-normal">The user can edit and view communication module</span>
                            </span>
                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                    </label>
                </div>

                <div class="form-control pt-3">
                    <label class="label cursor-pointer">
                            <span class="font-semibold text-slate-600">User Management<br>
                                <span class="text-stone-400 font-normal">The user can edit and view user management module</span>
                            </span>
                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                    </label>
                </div>

                <div class="form-control pt-3">
                    <label class="label cursor-pointer">
                            <span class="font-semibold text-slate-600">Reports<br>
                                <span class="text-stone-400 font-normal">The user can edit and view reports module</span>
                            </span>
                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                    </label>
                </div>

            </form>
        </div>
    </div>



</section>