<section class="dashboard">
    <?= $this->include('Modules\Admin\Views\includes\navbar.php'); ?>
    <div class="pt-20 flex items-center md:justify-between md:flex-row flex-col">
        <div>
            <i class="uil uil-link-h bg-[#0060a3] px-1.5 py-0.5 text-2xl rounded-md text-white"></i>
            <span class="font-medium text-2xl ml-2">Master Links</span>
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
                    <span class="text-blue-700">Master</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="pt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-2 md:gap-4">
            <div class="col-span-1 md:col-span-3 border border-slate-200 p-6 rounded-md">
                <h6 class="text-lg font-medium text-[#0060a3]">Useful Links</h6>
                <h6 class="text-sm font-medium py-2">Groups and Roles</h6>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/create_roles')?>">Create Groups</a>
                </div>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/manage_users')?>">Create Users</a>
                </div>
                <h6 class="text-sm font-medium py-2">Departments</h6>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/departments')?>">Create Department</a>
                </div>
                <h6 class="text-sm font-medium py-2">Services</h6>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/services')?>">Create Hospital Service</a>
                </div>
                <h6 class="text-sm font-medium py-2">Assessments</h6>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/assessment_group')?>">Create Assessment Group</a>
                </div>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/assessment_questions')?>">Create Assessment Questions</a>
                </div>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/assessment_answers')?>">Create Assessment Answers</a>
                </div>
                <h6 class="text-sm font-medium py-2">Web Components</h6>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/create_carousel')?>">Create Carousel</a>
                </div>
                <div class="flex items-center space-x-1 text-[#0060a3] hover:text-black">
                    <span><i class="uil uil-history-alt"></i></span>
                    <a href="<?= base_url('admin/dashboard/create_job')?>">Create Job</a>
                </div>
            </div>
        </div>
    </div>
</section>