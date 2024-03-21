<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-user-arrows bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">Patient Services</span>
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
                    <a href="<?= base_url('admin/dashboard/patients') ?>" class="hover:text-blue-900">Patient</a>
                </li>
                <li class="inline-block">
                    <i class="uil uil-angle-right"></i>
                </li>
                <li class="inline-block">
                    <span class="text-blue-700">Services</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="pt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-2 md:gap-4">
            <div class="col-span-1 md:col-span-3 border border-slate-200 p-6 rounded-md">

            </div>
            <div class="col-span-1 md:col-span-1 bg-slate-50 max-h-[300px] p-3">

            </div>
        </div>
    </div>
</section>