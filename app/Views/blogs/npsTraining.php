<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>
<?= view_cell('App\Cells\ShareBlogCell::display') ?>

<section class="px-4 xl:px-5 2xl:px-5 py-10 md:py-15">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-9">
            
                <div class="pb-80 bg-red-500 rounded-lg relative">
                    <img src="<?= base_url('images/carousel/police.jpg') ?>" alt="braeside branch" class="w-full h-full object-cover object-top rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-violet-600 rounded-lg p-3">
                    <h1 class="text-md font-semibold">Training NPS on Mental Healthg</h1>
                    <p class="pt-2 text-sm leading-loose">
                        The partnership between Chiromo Hospital Group and the Kenya National Police Service represents
                        a significant step forward in addressing mental health concerns within the law enforcement community.
                        Recognizing the unique challenges faced by police officers in their line of duty, Chiromo Hospital Group 
                        has taken proactive measures to provide specialized training and support tailored to the needs of the Kenya 
                        police.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        At the heart of this collaboration lies a shared commitment to promoting mental well-being and resilience
                        among police officers. The demanding nature of police work, characterized by high-stress situations, 
                        exposure to trauma, and long hours, can take a toll on officers' mental health. By offering training 
                        on mental health matters in the workplace, Chiromo Hospital Group aims to equip police personnel with 
                        the knowledge, skills, and resources needed to cope effectively with the pressures of their profession.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                         Workshops serve as a cornerstone of this collaborative effort, providing a platform for interactive learning
                         and dialogue between mental health professionals and police officers. These workshops cover a range of 
                         topics, including stress management, trauma response, coping strategies, and self-care techniques. 
                         Through engaging presentations, case studies, and practical exercises, participants gain valuable insights 
                         into recognizing and addressing mental health issues both in themselves and their colleagues.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        One of the key objectives of these workshops is to destigmatize mental health within the police
                        force and foster a culture of openness and support. By creating a safe and nonjudgmental 
                        environment for discussion, Chiromo Hospital Group encourages police officers to seek help 
                        when needed and to prioritize their mental well-being without fear of stigma or reprisal. 
                        This shift in attitude not only benefits individual officers but also contributes to the overall 
                        health and effectiveness of the police force as a whole.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Moreover, the partnership between Chiromo Hospital Group and the Kenya National Police Service extends 
                        beyond the confines of workshops to encompass ongoing support and collaboration. Mental health professionals
                        from Chiromo Hospital Group are available to provide consultation, counseling, and crisis intervention 
                        services to police officers as needed. This direct access to specialized care ensures that officers 
                        receive timely and appropriate support to address their mental health concerns.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        By leveraging the expertise and resources of both organizations, the partnership between Chiromo Hospital 
                        Group and the Kenya National Police Service exemplifies a holistic approach to mental health promotion 
                        within the law enforcement community. Through education, training, and support, this collaborative effort 
                        seeks to empower police officers to prioritize their mental well-being and thrive in their demanding roles.
                        In doing so, it underscores the importance of partnership and collaboration in fostering a mentally healthy
                        and resilient police force.
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