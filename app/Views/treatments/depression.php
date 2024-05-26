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
                    <img src="<?= base_url('images/carousel/depression.png') ?>" alt="depression" class="w-full h-full object-cover rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-[#0060a3] rounded-lg p-3">
                    <h1 class="text-md font-semibold">Depression</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Depression is a prevalent and complex mental health condition that affects millions of people worldwide. 
                        It can manifest in various forms and can have a profound impact on a person's emotional and physical well-being. 
                        In this comprehensive guide, we'll explore the different aspects of depression, including its symptoms, causes, 
                        and available treatment options.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Understanding Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Depression is more than just feeling sad or down occasionally. It is a persistent and pervasive mood disorder 
                        characterized by feelings of sadness, hopelessness, and a loss of interest or pleasure in activities once enjoyed. 
                        Depression can affect how a person thinks, feels, and handles daily activities, and it can significantly impair their 
                        ability to function normally.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Types of Depression There are several types of depression, each with its own unique characteristics:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Major Depressive Disorder (MDD): This is the most common form of depression and involves persistent feelings
                                of sadness, worthlessness, and hopelessness.
                            </li>
                            <li class="pt-2 text-sm">
                                Persistent Depressive Disorder (PDD): PDD, also known as dysthymia, is a chronic form of depression lasting 
                                for two years or more.
                            </li>
                            <li class="pt-2 text-sm">
                                Postpartum Depression (PPD): PPD occurs in women after childbirth and is characterized by feelings of sadness, 
                                anxiety, and exhaustion.
                            </li>
                            <li class="pt-2 text-sm">
                                Seasonal Affective Disorder (SAD): SAD is a type of depression that occurs during specific seasons, typically 
                                in the fall and winter months when there is less sunlight.
                            </li>
                            <li class="pt-2 text-sm">
                                Bipolar Disorder: Formerly known as manic depression, bipolar disorder involves episodes of depression alternating 
                                with periods of mania or hypomania
                            </li>
                        </ul>
                    <h1 class="text-md font-semibold pt-2">Signs and Symptoms of Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        The symptoms of depression can vary from person to person and may include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Persistent feelings of sadness, emptiness, or hopelessness
                            </li>
                            <li class="pt-2 text-sm">
                                Loss of interest or pleasure in activities once enjoyed
                            </li>
                            <li class="pt-2 text-sm">
                                Changes in appetite or weight
                            </li>
                            <li class="pt-2 text-sm">
                                Difficulty sleeping or oversleeping
                            </li>
                            <li class="pt-2 text-sm">
                                Fatigue or loss of energy
                            </li>
                            <li class="pt-2 text-sm">
                                Feelings of worthlessness or guilt
                            </li>
                            <li class="pt-2 text-sm">
                                Difficulty concentrating or making decisions
                            </li>
                            <li class="pt-2 text-sm">
                                Thoughts of death or suicide
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Causes and Risk Factors</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Depression is a multifaceted condition with various contributing factors, including:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Biological factors: Imbalances in brain chemicals (neurotransmitters) such as serotonin and dopamine can play a role in the development of depression.
                            </li>
                            <li class="pt-2 text-sm">
                                Genetic factors: A family history of depression or other mood disorders may increase an individual's risk.
                            </li>
                            <li class="pt-2 text-sm">
                                Environmental factors: Stressful life events, trauma, chronic illness, and certain medications can trigger or exacerbate depression.
                            </li>
                            <li class="pt-2 text-sm">
                            Psychological factors: Negative thought patterns, low self-esteem, and unresolved emotional issues can contribute to the development of depression.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Treatment Options</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Treatment for depression typically involves a combination of therapy, medication, and lifestyle changes:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">    
                                Medication: Antidepressant medications such as selective serotonin reuptake inhibitors (SSRIs), 
                                serotonin-norepinephrine reuptake inhibitors (SNRIs), and others may be prescribed to help regulate 
                                brain chemistry.
                            </li>
                            <li class="pt-2 text-sm">
                                Psychotherapy: Cognitive-behavioral therapy (CBT), interpersonal therapy (IPT), and other forms of talk 
                                therapy can help individuals identify and address negative thought patterns and develop coping strategies.
                            </li>
                            <li class="pt-2 text-sm">
                                Lifestyle changes: Regular exercise, healthy eating, stress management techniques, and adequate sleep can 
                                all play a role in managing depression symptoms.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Conclusion</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Depression is a complex and challenging condition that can have a profound impact on individuals' lives. 
                        By understanding the symptoms, causes, and available treatment options for depression, individuals and their 
                        loved ones can take proactive steps towards managing the condition and improving overall well-being. Remember, 
                        you are not alone, and help is available. Reach out to a mental health professional or support group for assistance 
                        and support on your journey to recovery.
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