<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center justify-between">
        <div>
            <i class="uil uil-users-alt bg-blue-700 px-1.5 py-0.5 text-2xl rounded-md"></i>
            <span class="font-medium text-2xl ml-2">Edit User</span>
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
                    <span class="text-blue-700">Edit User</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="card lg:card-side bg-base-100 shadow-xl mt-10">
        <div class="card-body">
            <h2 class="card-title">Edit User!</h2>
            <form class="flex flex-col justify-center">
                <label class="block pt-2 w-full">
                    <span class="block text-sm font-medium text-slate-700 pb-2">First Name</span>
                    <input type="text" class="input input-bordered w-full"
                           id="fname"
                        <?php if (isset($getUser)) : ?>
                            value="<?= $getUser['fname'] ?>"
                        <?php endif; ?>
                    />
                    <span id="fnameError" class="text-xs text-red-500 pt-2"></span>
                </label>
                <label class="block pt-2 w-full">
                    <span class="block text-sm font-medium text-slate-700 pb-2">Last Name</span>
                    <input type="text" class="input input-bordered w-full"
                           id="lname"
                        <?php if (isset($getUser)) : ?>
                            value="<?= $getUser['lname'] ?>"
                        <?php endif; ?>
                    />
                    <span id="lnameError" class="text-xs text-red-500 pt-2"></span>
                </label>

                <label class="block pt-2 w-full">
                    <span class="block text-sm font-medium text-slate-700 pb-2">Email Address</span>
                    <input type="tel" class="input input-bordered w-full"
                           id="email"
                        <?php if (isset($getUser)) : ?>
                            value="<?= $getUser['email'] ?>"
                        <?php endif; ?>
                    />
                    <span id="emailError" class="text-xs text-red-500 pt-2"></span>
                </label>

                <button type="submit"
                        id="updateUser"
                    <?php if (isset($getUser)) : ?>
                        data-id="<?= $getUser['user_uuid'] ?>"
                    <?php endif; ?>
                        class="bg-blue-500 hover:bg-blue-600 text-black font-normal py-2 px-2 rounded mt-3">
                    Update User
                </button>

            </form>
        </div>
    </div>

</section>