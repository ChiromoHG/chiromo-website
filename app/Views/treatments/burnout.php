<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>
<?= view_cell('App\Cells\ShareBlogCell::display') ?>
<?= view_cell('App\Cells\BookCell::display') ?>

<section class="px-4 xl:px-5 2xl:px-5 py-10 md:py-15">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-9">
            
                <div class="pb-80 bg-red-500 rounded-lg relative">
                    <img src="<?= base_url('images/carousel/burnout.jpg') ?>" alt="burnout" class="w-full h-full object-cover rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-[#0060a3] rounded-lg p-3">
                    <h1 class="text-md font-semibold">Burnout</h1>
                    <p class="pt-2 text-sm leading-loose">
                        In today's fast-paced world, burnout has become an all too familiar term. It's not just exhaustion from work or 
                        personal life, but a profound sense of mental, emotional, and physical depletion. Burnout doesn't discriminate; 
                        it can affect anyone, regardless of age, profession, or background. It's crucial to understand this phenomenon, 
                        its signs, causes, and most importantly, how to address it effectively
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Burnout is more than just feeling tired or stressed; it's a state of chronic stress that leads to feelings of cynicism,
                        detachment, and inefficacy. Initially coined in the 1970s by psychologist Herbert Freudenberger, burnout was primarily 
                        associated with high-stress professions like healthcare workers or first responders. However, its reach has extended far 
                        beyond, affecting individuals in various fields, from corporate offices to creative industries and beyond.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Understanding Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        To truly comprehend burnout, one must recognize it as a multifaceted issue encompassing emotional, physical, 
                        and mental dimensions. It's not merely a result of overwork or excessive demands but a complex interplay of factors. 
                        Burnout often arises when there's a prolonged misalignment between the individual's expectations, abilities, and the 
                        demands placed upon them. This misalignment can gradually erode one's sense of purpose and fulfillment, leading to a 
                        state of chronic stress and exhaustion.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Moreover, burnout isn't solely confined to the workplace; it can permeate every aspect of life, including 
                        relationships, hobbies, and personal well-being. The societal pressure to constantly achieve and excel, 
                        coupled with the prevalence of technology blurring the boundaries between work and leisure, has exacerbated 
                        the issue. As a result, burnout has emerged as a significant public health concern, with far-reaching consequences 
                        on individuals and society as a whole.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Signs and Symptoms of Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Identifying burnout can be challenging since its symptoms often mimic those of stress or depression. 
                        However, there are distinct indicators that differentiate burnout from ordinary fatigue. These may include
                        persistent feelings of exhaustion, cynicism, and detachment from work or activities once found enjoyable.
                        Physical symptoms such as headaches, insomnia, and digestive issues may also manifest. Additionally, reduced 
                        performance and increased irritability or frustration are common signs of burnout.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Causes and Risk Factors</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Several factors contribute to the development of burnout, ranging from work-related stressors to personal 
                        predispositions. High workload, lack of autonomy, and unclear job expectations are prevalent causes in the workplace. 
                        Additionally, poor work-life balance, organizational culture, and interpersonal conflicts can exacerbate burnout. 
                        Outside of work, factors such as perfectionism, caregiving responsibilities, and societal pressures can also increase 
                        the risk.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Treatment Options</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Addressing burnout requires a multifaceted approach that addresses the underlying causes while also providing 
                        support for mental and emotional well-being. This may involve making practical changes in the work environment, 
                        such as workload management, promoting a healthy work-life balance, and fostering a supportive organizational 
                        culture. Additionally, individual interventions such as therapy, mindfulness practices, and lifestyle modifications
                         can help alleviate symptoms and build resilience.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Conclusion</h1>
                    <p class="pt-2 text-sm leading-loose">
                        In conclusion, burnout is a pervasive issue that affects individuals across all walks of life. Its detrimental 
                        effects extend beyond the individual, impacting productivity, relationships, and overall societal well-being. 
                        Recognizing the signs and understanding the underlying causes are crucial steps in addressing burnout effectively. 
                        By implementing preventive measures and providing support for those affected, we can mitigate the impact of burnout 
                        and create healthier, more sustainable work and life environments.
                    </p>
                </div>

            </div>

            <div class="grid md:col-span-3">

            <?= view_cell('App\Cells\TreatmentsCell::display') ?>

            </div>
        </div>
</section>


<?= $this->include('partials/footer.php'); ?>

<?= $this->endSection(); ?>