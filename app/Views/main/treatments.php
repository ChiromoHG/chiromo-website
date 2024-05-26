<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>

<div class="load"></div>

<section class="mx-5 my-5">
    <div class="treatments-section">
        <div class="flex flex-col h-[50vh] justify-center items-start pl-10">
            <div class="w-full md:w-1/2">
                <h1 class="text-3xl font-semibold pb-[2rem]">Treatments We Offer</h1>

                <div class="flex text-white text-lg">
                    <a href="<?= base_url('/') ?>" class="hover:text-gray-400">Home</a>
                    <i class="uil uil-angle-right-b"></i>
                    <a href="<?= base_url('treatments') ?>" class="hover:text-gray-400">Our Treatments</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--bg-[#f4faff] px-4 rounded-md self-stretch flex items-start justify-center flex-col-->

<section>
    <h1 class="text-2xl font-semibold sm:text-3xl pl-8 pt-4 text-[#ac8342]">Our Treatments</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 px-8 py-8 ">
        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">Anxiety</span>
                <h1 class="mb-3 text-xl font-[800] mt-3">Anxiety</h1>
                <p class="max-w-lg text-lg truncate">
                    Anxiety disorders are a category of mental health conditions that are characterized by 
                    symptoms such as pervasive worry and overwhelming fear.
                </p>
            </div>
            <a href="<?= base_url('treatments/anxiety'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>


        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">PTSD</span>
                <h1 class="mb-3 text-xl font-[800] mt-3">Post Traumatic Stress Disorder (PTSD)</h1>
                <p class="max-w-lg text-lg truncate">
                Posttraumatic stress disorder, which is commonly referred to as PTSD, is a mental health condition that occurs after a person has experienced one or more traumatic events.
                </p>
            </div>
            <a href="<?= base_url('treatments/ptsd'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>

        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">Bipolar Disorder</span>
                <hv class="mb-3 text-xl font-[800] mt-3">Bipolar Disorder</hv>
                <p class="max-w-lg text-lg truncate">
                    Bipolar disorder is a mood disorder and serious mental illness that is characterized by 
                    abrupt shifts in mood. These shifts include episodes of low mood and catatonia and 
                    heightened states of euphoria and mania. 
                </p>
            </div>
            <a href="<?= base_url('treatments/bipolar'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>

        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">Schizophrenia</span>
                <h1 class="mb-3 text-xl font-[800] mt-3">Schizophrenia</h1>
                <p class="max-w-lg text-lg truncate">
                    Schizophrenia is a mental illness that impacts an individual’s ability to remain grounded 
                    in reality. The disorder involves episodes of hallucinations in which a person may 
                    hear or see things that aren’t truly there.
                </p>
            </div>
            <a href="<?= base_url('treatments/schizophrenia'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>

        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">Burnout</span>
                <h1 class="mb-3 text-xl font-[800] mt-3">Burnout</h1>
                <p class="max-w-lg text-lg truncate">
                    Burnout is a state of emotional, physical, and mental exhaustion caused by prolonged stress and overwork. 
                    It leads to inefficiency and detachment.
                </p>
            </div>
            <a href="<?= base_url('treatments/burnout'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>

        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">Depression</span>
                <h1 class="mb-3 text-xl font-[800] mt-3">Depression</h1>
                <p class="max-w-lg text-lg truncate">
                    Depression: a complex mental health condition, characterized by persistent sadness, 
                    loss of interest, fatigue, and difficulty concentrating. Treatment options available.
                </p>
            </div>
            <a href="<?= base_url('treatments/depression'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>

        <div class="group p-8 mt-4 rounded-lg shadow-[0px_10px_15px_9px_#DDE4F1] relative hover:bg-[#0060a3] hover:text-white hover:cursor-pointer">
            <div class="pr-4">
                <span class="absolute slide-in-top bg-[#0060a3] text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm group-hover:hidden">Substance Use Disorder (SUD)</span>
                <h1 class="mb-3 text-xl font-[800] mt-3">Substance Use Disorder (SUD)</h1>
                <p class="max-w-lg text-lg truncate">
                    Substance Use Disorder (SUD) is a complex condition that affects millions of people worldwide, 
                    impacting their physical health, mental well-being, relationships, and overall quality of life.
                </p>
            </div>
            <a href="<?= base_url('treatments/substance-use'); ?>" class="pt-4 flex items-center justify-between">
                <span class="font-semibold">Do you want to learn more?</span>
                <span class="font-semibold flex items-center justify-center w-10 h-10 bg-gray-200 rounded-md"><i class="uil uil-external-link-alt"></i></span>
            </a>
        </div>

    </div>
</section>


<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>
