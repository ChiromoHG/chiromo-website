<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>
<?= view_cell('App\Cells\ShareBlogCell::display') ?>

<section class="px-4 xl:px-5 2xl:px-5 py-10 md:py-15">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-9">
            
                <div class="pb-80 bg-red-500 rounded-lg relative">
                    <img src="<?= base_url('images/carousel/frank.jpg') ?>" alt="braeside branch" class="w-full h-full object-cover object-top rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-violet-600 rounded-lg p-3">
                    <h1 class="text-md font-semibold">Healing the Mind: A Journey to Mental Wellness</h1>
                    <h2 class="text-sm font-semibold pt-2">Introduction</h2>
                    <p class="pt-2 text-sm leading-loose">
                         In a world where physical health often takes center stage, mental health
                         remains a silent battle for many. Dr. Frank Njenga’s groundbreaking book, 
                         Healing the Mind, sheds light on the struggles faced by individuals dealing 
                         with mental illnesses. As we delve into the pages of this 328-page masterpiece, 
                         we uncover stories of resilience, hope, and the urgent need for compassionate care.
                    </p>

                    <div class="pt-2">
                        <h2 class="text-sm font-semibold">Understanding Mental Health</h2>
                        <h3 class="text-sm font-semibold text-blue-500 pt-2">Breaking the Stigma</h3>
                        <p  class="pt-2 text-sm leading-loose">
                            Dr. Njenga’s book emphasizes the importance of breaking down the stigma associated with 
                            mental health. Kenyans, like people worldwide, often lack awareness about mental health 
                            or how to cope with it. The misconceptions surrounding mental illnesses perpetuate 
                            discrimination, fear, and isolation. As a society, we must recognize that mental health 
                            is as crucial as physical health.
                        </p>

                        <h3 class="text-sm font-semibold text-blue-500 pt-2">The Role of Psychiatric Hospitals</h3>
                        <p  class="pt-2 text-sm leading-loose">
                            Psychiatric hospitals play a pivotal role in healing minds. These specialized institutions 
                            provide a safe haven for individuals struggling with conditions such as depression, anxiety, 
                            bipolar disorder, and schizophrenia. Here’s why psychiatric hospitals matter:
                        </p>
                        <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Holistic Treatment: Psychiatric hospitals offer comprehensive care, including therapy, 
                                medication management, and support. Patients receive personalized treatment plans tailored 
                                to their unique needs.
                            </li>
                            <li class="pt-2 text-sm">
                                24/7 Support: Unlike outpatient services, psychiatric hospitals provide round-the-clock care. 
                                This continuous support ensures that patients receive immediate attention during crises.
                            </li>
                            <li class="pt-2 text-sm">
                                Multidisciplinary Teams: Psychiatrists, psychologists, nurses, social workers, and occupational 
                                therapists collaborate to address various aspects of mental health. Their combined expertise 
                                ensures holistic healing.
                            </li>
                            <li class="pt-2 text-sm">
                                Safe Environment: Psychiatric hospitals create a safe environment where patients can express 
                                their feelings without judgment. It’s a space where they can learn coping strategies and build 
                                resilience.
                            </li>
                        </ul>
                    </div>

                    <h1 class="text-md font-semibold pt-2">
                    Conclusion
                    </h1>
                    <p class="text-sm leading-loose">
                         Dr. Frank Njenga’s Healing the Mind reminds us that mental health matters. As we advocate for better
                         understanding, let us support psychiatric hospitals—the beacons of hope for those navigating the 
                         labyrinth of their minds. Together, we can heal, one mind at a time.
                    </p>
                </div>

            </div>

            <div class="grid md:col-span-3">

            <?= view_cell('App\Cells\RecentBlogCell::display') ?>

            </div>
        </div>
</section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>