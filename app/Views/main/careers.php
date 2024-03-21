<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>

<div class="load"></div>
    <?= $this->include('partials/careers-section-content.php') ?>
    <section class="mx-5 my-5">
        <div class="grid grid-cols-12 md:grid-cols-12 gap-2 md:gap-6 bg-white p-4 rounded-md shadow-md my-4">
            <div class="col-span-12 md:col-span-3 hidden md:block">
                <div class="relative pb-24">
                    <img src="<?= base_url('images/logo/logo.png')?>" alt="" class="absolute top-0 w-full h-full object-contain rounded-md">
                </div>

                <div class="pt-4">
                    <div class="flex">
                        <h4 class="font-semibold text-md">Location</h4>
                        <span class="ml-16 text-slate-500 text-md">: Nairobi</span>
                    </div>
                    <div class="flex">
                        <h4 class="font-semibold text-md">Closing Date</h4>
                        <span class="ml-8 text-slate-500 text-md">: 26/2/2024</span>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="flex flex-col">
                    <h1 class="text-2xl font-semibold uppercase text-center pb-4 md:pb-2">Data Analyst</h1>
                    <p class="text-slate-500 mt-4">

                        CHG is a leading mental health hospital dedicated to providing evidence based mental health
                        services in Africa and beyond. We are seeking a talented and dedicated Data Analyst to join our team.
                        The ideal candidate will possess a strong analytical background and understanding of healthcare data systems.
                        The successful candidate will play a vital role in analyzing healthcare data to identify trends, patterns,
                        and opportunities for growth.
                    </p>
                    <div class="flex py-2 block md:hidden justify-between">
                        <h4 class="font-semibold text-md">Closing Date</h4>
                        <span class="ml-8 text-slate-500 text-md">20/3/2024</span>
                    </div>
                    <a class="flex justify-start text-[#0060a3] text-md font-semibold hover:text-blue-800 transition ease-out duration-700 hover:opacity-50" href="<?= base_url('careers/job_description_1')?>">Read More <i class="uil uil-arrow-right text-md font-semibold"></i></a>
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <div class="flex flex-col justify-center items-center">
                    <a class="text-md uppercase font-semibold tracking-wider border-2 border-[#0060a3] py-2 px-4 rounded-md hover:bg-[#0060a3] transition ease-out duration-700 hover:text-white transform hover:scale-75 hover:opacity-50
                  w-full text-center mt-8 md:mt-0" href="<?= base_url('careers/job_description_1')?>">Full Time</a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 md:grid-cols-12 gap-2 md:gap-6 bg-white p-4 rounded-md shadow-md my-4 pt-5">
            <div class="col-span-12 md:col-span-3 hidden md:block">
                <div class="relative pb-24">
                    <img src="<?= base_url('images/logo/logo.png')?>" alt="" class="absolute top-0 w-full h-full object-contain rounded-md">
                </div>

                <div class="pt-4">
                    <div class="flex">
                        <h4 class="font-semibold text-md">Location</h4>
                        <span class="ml-16 text-slate-500 text-md">: Nairobi</span>
                    </div>
                    <div class="flex">
                        <h4 class="font-semibold text-md">Closing Date</h4>
                        <span class="ml-8 text-slate-500 text-md">: 26/2/2024</span>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="flex flex-col">
                    <h1 class="text-2xl font-semibold uppercase text-center pb-4 md:pb-2">Digital Content Specialist</h1>
                    <p class="text-slate-500 mt-4">
                        As a key player in the Digital Relations Department, the job holder will be responsible for developing and implementing engaging
                        social media strategies across various platforms, with a primary focus on TikTok and Instagram Reels.
                    </p>
                    <div class="flex py-2 block md:hidden justify-between">
                        <h4 class="font-semibold text-md">Closing Date</h4>
                        <span class="ml-8 text-slate-500 text-md">26/2/2024</span>
                    </div>
                    <a class="flex justify-start text-[#0060a3] text-md font-semibold hover:text-blue-800 transition ease-out duration-700 hover:opacity-50" href="<?= base_url('careers/job_description')?>">Read More <i class="uil uil-arrow-right text-md font-semibold"></i></a>
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <div class="flex flex-col justify-center items-center">
                    <a class="text-md uppercase font-semibold tracking-wider border-2 border-[#0060a3] py-2 px-4 rounded-md hover:bg-[#0060a3] transition ease-out duration-700 hover:text-white transform hover:scale-75 hover:opacity-50
                  w-full text-center mt-8 md:mt-0" href="<?= base_url('careers/job_description')?>">Full Time</a>
                </div>
            </div>
        </div>
    </section>

<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>