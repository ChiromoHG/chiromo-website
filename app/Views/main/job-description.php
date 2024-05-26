<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>

<div class="load"></div>

<?= $this->include('partials/careers-section-content') ?>
<section class="mx-5 my-5">

    <div class="grid grid-cols-12 md:grid-cols-12 gap-2 md:gap-6 bg-white p-4 rounded-md shadow-md my-4">
        <div class="col-span-12 md:col-span-8 border border-slate-200 rounded-md p-4">
            <div>
                <a href="<?= base_url('careers') ?>" class="text-[#0060a3] text-md font-semibold hover:text-blue-800 transition ease-out duration-700 hover:opacity-50"><i class="uil uil-angle-left"></i> Back to job listing</a>
            </div>
            <div class="pt-4 md:pt-8">
                <h5 class="font-semibold text-lg md:text-xl text-[#0060a3]">Gardener</h5>
            </div>
            <div class="grid grid-cols-2 gap-x-4 pt-3 w-full md:w-2/5">
                <div class="col-span-1">
                    <div class="font-semibold text:sm md:text-md">Job Type</div>
                </div>
                <div class="col-span-1">
                    <div class="text-left text:sm md:text-md text-slate-500">: Full Time</div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-4 pt-2 w-full md:w-2/5">
                <div class="col-span-1">
                    <div class="font-semibold text:sm md:text-md">Job Category</div>
                </div>
                <div class="col-span-1">
                    <div class="text-left text:sm md:text-md text-slate-500">: Gardener</div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-4 pt-2 w-full md:w-2/5">
                <div class="col-span-1">
                    <div class="font-semibold text:sm md:text-md">Closing Date</div>
                </div>
                <div class="col-span-1">
                    <div class="text-left text:sm md:text-md text-slate-500"></div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-4 pt-2 w-full md:w-2/5">
                <div class="col-span-1">
                    <div class="font-semibold text:sm md:text-md">Location</div>
                </div>
                <div class="col-span-1">
                    <div class="text-left text:sm md:text-md text-slate-500">: Nairobi</div>
                </div>
            </div>

            <div class="pt-4 md:pt-8">
                <p class="text-md text-slate-500">
                    CHG is a leading mental health hospital dedicated to providing evidence based mental health services in Africa and beyond. 
                    We are seeking committed Gardener to join our team. The ideal candidate will possess a vast knowledge of plant species, 
                    growth habits, and care requirements. They must be familiar with gardening techniques, tools, and equipment.
                </p>
            </div>

            <div class="pt-4 md:pt-8">
                <h5 class="text-md font-semibold pb-2">Duties and Responsibilities</h5>
                <ul class="list-disc pl-4">
                    <li class="text-md text-slate-500">
                        Plant Care: Plant, prune, trim, and fertilize various types of plants, flowers, shrubs, and trees according to their specific needs and seasonal requirements.
                    </li>
                    <li class="text-md text-slate-500">
                        Lawn Maintenance: Mow, edge, aerate, and apply fertilizers and pesticides to lawns to promote healthy growth and maintain desired appearance.
                    </li>
                    <li class="text-md text-slate-500">
                        Soil Management: Assess soil quality and composition, and implement measures such as mulching, watering, and soil amendment to optimize plant growth and health.
                    </li>
                    <li class="text-md text-slate-500">
                        Pest and Weed Control: Monitor for pests, diseases, and invasive weeds, and implement appropriate control measures to mitigate damage and preserve plant health.
                    </li>
                    <li class="text-md text-slate-500">
                        Landscaping: Design and implement landscape plans, including layout, planting schemes, and installation of features such as pathways, retaining walls, and decorative elements.
                    </li>
                    <li class="text-md text-slate-500">
                        Equipment Maintenance: Operate and maintain gardening tools and equipment, such as mowers, trimmers, and hand tools, ensuring they are in good working condition.
                    </li>
                    <li class="text-md text-slate-500">
                        Safety and Compliance: Adhere to safety protocols and regulations related to gardening activities, including proper handling and storage of chemicals and equipment.
                    </li>
            </div>

            <div class="pt-4 md:pt-8">
                <h5 class="text-md font-semibold pb-2">Knowledge Requirement</h5>
                <ul class="list-disc pl-4">
                    <li class="text-md text-slate-500">
                        Previous experience in gardening, landscaping, or horticulture preferred.
                    </li>
                    <li class="text-md text-slate-500">
                        Knowledge of plant species, growth habits, and care requirements.
                    </li>
                    <li class="text-md text-slate-500">
                        Familiarity with gardening techniques, tools, and equipment.
                    </li>
                    <li class="text-md text-slate-500">
                        Ability to work independently or as part of a team.
                    </li>
                    <li class="text-md text-slate-500">
                        Physical stamina and dexterity to perform tasks such as lifting, bending, and operating machinery.
                    </li>
                    <li class="text-md text-slate-500">
                        Certification or training in horticulture or landscaping is a plus.
                    </li>
                    <li class="text-md text-slate-500">
                        Previous experience in gardening, landscaping, or horticulture preferred
                    </li>
                    <li class="text-md text-slate-500">
                        Knowledge of plant species, growth habits, and care requirements.
                    </li>
                    <li class="text-md text-slate-500">
                        Excellent communication and interpersonal abilities.
                    </li>
                    <li class="text-md text-slate-500">
                        Strong attention to detail and organizational skills.
                    </li>
            </div>

            <div class="pt-4 md:pt-8">

                <p class="font-semibold text-md text-slate-500">
                    We recruit on a rolling basis and can close the procedure early if there are sufficient suitable candidates. 
                    We therefore encourage early applications. Only shortlisted applicants will be contacted.
                </p>
            </div>

            <div class="py-4">
                <a href="<?= base_url('careers') ?>" class="text-[#0060a3] text-md font-semibold hover:text-blue-800 transition ease-out duration-700 hover:opacity-50"><i class="uil uil-angle-left"></i> Back to job listing</a>
            </div>

        </div>
        <div class="col-span-12 md:col-span-4">
            <div class="bg-gray-200 px-3 py-2 rounded-md">

                <h5 class="text-black text-md font-semibold">Share this job</h5>

                <div class="grid grid-cols-2 gap-x-4 pt-3 w-2/5">
                    <div class="col-span-1">
                        <div class="font-semibold text-md"><i class="uil uil-envelope"></i></div>
                    </div>
                    <div class="col-span-1">
                        <div class="text-left text-md text-slate-500">Email</div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-4 pt-3 w-2/5">
                    <div class="col-span-1">
                        <div class="font-semibold text-md"><i class="uil uil-linkedin"></i></div>
                    </div>
                    <div class="col-span-1">
                        <div class="text-left text-md text-slate-500">LinkedIn</div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-4 pt-3 w-2/5">
                    <div class="col-span-1">
                        <div class="font-semibold text-md"><i class="uil uil-twitter"></i></div>
                    </div>
                    <div class="col-span-1">
                        <div class="text-left text-md text-slate-500">Twitter</div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-4 pt-3 w-2/5">
                    <div class="col-span-1">
                        <div class="font-semibold text-md"><i class="uil uil-facebook-f"></i></div>
                    </div>
                    <div class="col-span-1">
                        <div class="text-left text-md text-slate-500">Facebook</div>
                    </div>
                </div>

                <div class="pt-4 pb-3 md:pt-8 md:pb-6">
                    <a class="text-md font-semibold tracking-wider bg-[#0060a3] py-2 px-4 rounded-md hover:bg-[#0060a3] transition ease-out duration-700 hover:text-white transform hover:scale-125 hover:opacity-50 text-white" href="https://forms.gle/cNM8NYDgo4jEmau1A" target="_blank">Apply for this job</a>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
