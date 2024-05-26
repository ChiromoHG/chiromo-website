<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>
<?= view_cell('App\Cells\ShareBlogCell::display') ?>

<section class="px-4 xl:px-5 2xl:px-5 py-10 md:py-15">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-9">
            
                <div class="pb-80 bg-red-500 rounded-lg relative">
                    <img src="<?= base_url('images/carousel/launching.jpg') ?>" alt="braeside branch" class="w-full h-full object-cover object-top rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-violet-600 rounded-lg p-3">
                    <h1 class="text-md font-semibold">CHG Bustani Branch Launching</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Chiromo Hospital Group's Bustani branch holds a unique position within Kenya's 
                        healthcare landscape, symbolizing resilience and dedication amid the challenges 
                        posed by the COVID-19 pandemic. Established in 2020, amidst the throes of the pandemic, 
                        the inauguration of the Bustani branch marked a significant milestone in the nation's 
                        healthcare journey. The distinguished presence of Her Excellency Margaret Kenyatta, the 
                        First Lady of Kenya, during the launch underscored the branch's importance and signaled a 
                        commitment to addressing critical healthcare needs, particularly in mental health.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Led by the esteemed Dr. Njenga, Chiromo Hospital Group's Bustani branch stands as a 
                        beacon of hope, specializing in mental health services. Dr. Njenga's leadership exemplifies
                        a steadfast commitment to promoting mental well-being and providing compassionate care to 
                        those in need. In a time where mental health issues were exacerbated by the pandemic's 
                        uncertainty and social isolation, the Bustani branch emerged as a vital resource, offering 
                        support and healing to individuals grappling with various mental health challenges.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        The timing of the Bustani branch's establishment amidst the pandemic speaks volumes about the 
                        foresight and dedication of Chiromo Hospital Group and its leadership. Despite the formidable 
                        obstacles posed by the global health crisis, the hospital forged ahead, recognizing the urgency 
                        of addressing mental health concerns exacerbated by the pandemic's unprecedented impact. 
                        By providing specialized mental health services, the Bustani branch demonstrated a proactive 
                        approach to healthcare, prioritizing the holistic well-being of its patients.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        The Bustani branch's commitment to mental health extends beyond clinical care to encompass
                        community outreach and education. Recognizing the importance of raising awareness and 
                        reducing stigma surrounding mental health issues, the hospital actively engages with the 
                        community through various initiatives and programs. By fostering open dialogue and 
                        promoting understanding, the Bustani branch strives to create a supportive environment 
                        where individuals feel empowered to seek help and access the resources they need to thrive.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        The Bustani branch's commitment to mental health extends beyond clinical care to encompass
                        community outreach and education. Recognizing the importance of raising awareness and 
                        reducing stigma surrounding mental health issues, the hospital actively engages with the 
                        community through various initiatives and programs. By fostering open dialogue and 
                        promoting understanding, the Bustani branch strives to create a supportive environment 
                        where individuals feel empowered to seek help and access the resources they need to thrive.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Moreover, the Bustani branch's affiliation with Chiromo Hospital Group ensures access to 
                        cutting-edge medical technology, world-class facilities, and a multidisciplinary team of 
                        healthcare professionals. This synergy enables the hospital to deliver high-quality, 
                        comprehensive care that meets the diverse needs of its patients. Whether through individual 
                        therapy, group sessions, or specialized treatment programs, the Bustani branch remains 
                        steadfast in its mission to promote mental wellness and resilience.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        In conclusion, Chiromo Hospital Group's Bustani branch stands as a testament to the power
                        of perseverance and compassion in the face of adversity. Launched during the COVID-19 
                        pandemic under the auspices of Her Excellency Margaret Kenyatta, the branch serves as a 
                        cornerstone of mental health advocacy and care in Kenya. Led by Dr. Njenga, the hospital's 
                        unwavering commitment to mental well-being reflects a profound dedication to serving the 
                        community and fostering a brighter, healthier future for all.
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