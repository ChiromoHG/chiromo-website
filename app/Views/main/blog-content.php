<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>

<div class="load"></div>

<section class="mx-5 my-5">
    <div class="blog-section">
        <div class="flex flex-col h-[50vh] justify-center items-start pl-10">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-semibold pb-[2rem]">What is going on in our blog</h2>
                <p class="text-white text-lg">
                    Read our mental health articles and blog to get more information about mental health.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- start blog -->
     <section class="top-stories">
        <div class="pb-10 pt-5 px-4 md:px-16">
            <div class="flex md:justify-between items-center flex-col md:flex-row space-y-6">
            <h1 class="text-2xl font-semibold sm:text-3xl pt-4">Our Blog and Latest News</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6 py-10">
                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture" style='background-image: linear-gradient(to right bottom, #ac8342, #d28c24), url("../images/carousel/launching.jpg"); clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);'>

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[0.8rem]">August 30, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold">CHG Bustani Branch Launching</h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold text-white">CHG Bustani Branch
                                Launching</h4>
                            <a href="<?= base_url('our-blog/bustani-launch'); ?>"
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture" style=' background-image: linear-gradient(to right bottom, #41789f, #0060a3), url("../images/carousel/frank.jpg"); clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);'>

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[0.8rem]">October 9, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold">Healing the Mind: A Journey to Mental Wellness</h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold text-white">Healing the Mind: A Journey to Mental Wellness</h4>
                            <a href="<?= base_url('our-blog/healing-the-mind');?>"
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture" style='background-image: linear-gradient(to right bottom, #881919, #931616), url("../images/carousel/police.jpg"); clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);'>

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[0.8rem]">October 9, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold">Training NPS on Mental Health</h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold text-white">Training NPS on Mental
                                Health</h4>
                            <a href="<?= base_url('our-blog/nps-trainings'); ?>"
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture" style='background-image: linear-gradient(to right bottom, #881919, #931616), url("../images/carousel/yoga.jpg"); clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);'>

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[0.8rem]">October 9, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold">
                                Living Mentally Healthy: Strategies for a Fulfilling and Balanced Life
                            </h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold text-white">
                                Living Mentally Healthy: Strategies for a Fulfilling and Balanced Life
                            </h4>
                            <a href="<?= base_url('our-blog/mental-health'); ?>"
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                
                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture" style='background-image: linear-gradient(to right bottom, #41789f, #0060a3), url("../images/carousel/eating.png"); clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);'>

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[0.8rem]">October 9, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold">
                                Beyond the Scale: Understanding Eating Disorders
                            </h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold text-white">
                                Beyond the Scale: Understanding Eating Disorders
                            </h4>
                            <a href="<?= base_url('our-blog/eating-disorder'); ?>"
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


                <div class="stories-card">
                    <div class="stories-card--side-front shadow-xl rounded-xl overflow-hidden">
                        <div class="card-picture" style='background-image: linear-gradient(to right bottom, #881919, #931616), url("../images/carousel/adolecent.png"); clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);'>

                        </div>
                        <div class="py-10 px-8">
                            <span class="text-slate-600 text-[0.8rem]">October 9, 2023</span>
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold">
                                Children & Adolescent Mental Health
                                Awareness
                            </h4>
                            <a href="" class="pt-[1.5rem] inline-block font-semibold text-[#0060a3] text-[1rem]">Read
                                More</a>
                        </div>
                    </div>
                    <div class="stories-card--side-back shadow-xl rounded-xl">
                        <div class="flex flex-col justify-center items-center h-[30rem]">
                            <h4 class="pt-[.8rem] text-[1.2rem] font-semibold text-white">
                                Children & Adolescent Mental Health
                                Awareness
                            </h4>
                            <a href="<?= base_url('our-blog/adolescent'); ?>"
                               class="inline-block mt-[2.0rem] py-2 px-7 border border-[#E5E7EB] rounded-full text-white text-body-color font-medium hover:border-[#0060a3] hover:bg-[#0060a3] hover:text-white transition">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--end of stories section-->

<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>
