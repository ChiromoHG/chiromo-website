<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>
<?= view_cell('App\Cells\ShareBlogCell::display') ?>

<section class="px-4 xl:px-5 2xl:px-5 py-10 md:py-15">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-9">
            
                <div class="pb-80 bg-red-500 rounded-lg relative">
                    <img src="<?= base_url('images/carousel/yoga.jpg') ?>" alt="braeside branch" class="w-full h-full object-cover  rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-violet-600 rounded-lg p-3">
                    <h1 class="text-md font-semibold">Living Mentally Healthy: Strategies for a Fulfilling and Balanced Life</h1>
                    <p class="pt-2 text-sm leading-loose">
                        In our fast-paced and demanding world, maintaining good mental 
                        health is essential for overall well-being. Living mentally healthy 
                        involves adopting a holistic approach that encompasses various aspects 
                        of our lives. From managing stress to fostering positive relationships, 
                        there are numerous strategies that can contribute to a fulfilling and 
                        balanced life. In this article, we will explore key practices and habits that 
                        can help you live mentally healthy.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Prioritize Self-Care: Self-care is not a luxury; it’s a necessity for mental 
                        well-being. Taking time for yourself and engaging in activities that bring 
                        joy and relaxation can significantly impact your mental health. Whether 
                        it’s reading a book, practicing mindfulness, or enjoying a hobby, prioritize self-care 
                        to recharge your mind.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Build Strong Connections: Human connection is a fundamental 
                        aspect of mental health. Nurture relationships with friends, family, 
                        and colleagues. Engage in meaningful conversations, share 
                        experiences, and offer support. Strong social connections provide a 
                        sense of belonging and contribute to a positive mental state.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Maintain a Healthy Lifestyle: Physical and mental health are 
                        interconnected. Regular exercise, a balanced diet, and adequate sleep 
                        contribute to overall well-being. Physical activity releases endorphins, 
                        the “feel-good” hormones, while proper nutrition and rest support 
                        cognitive function and emotional resilience.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Manage Stress Effectively: Stress is a part of life, but managing it is 
                        crucial for mental health. Develop stress-reducing techniques such as 
                        deep breathing, meditation, or yoga. Creating a healthy work-life balance 
                        and setting realistic goals can also help alleviate stress.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Cultivate a Positive Mindset: Foster a positive outlook on 
                        life by practicing gratitude and mindfulness. Focus on the present 
                        moment and acknowledge the positive aspects of your life. 
                        Cultivating a positive mindset can enhance resilience in the face of 
                        challenges.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                    Living mentally healthy is an ongoing journey that requires intentional 
                    efforts and a commitment to self-care. By incorporating these 
                    strategies into your daily life, you can create a foundation for positive 
                    mental well-being. Remember, small changes can lead to significant 
                    improvements in your overall mental health. Prioritize yourself, build 
                    strong connections, and embrace a holistic approach to living mentally 
                    healthy.
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