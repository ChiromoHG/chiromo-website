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
                    <img src="<?= base_url('images/carousel/bipolar.png') ?>" alt="Bipolar Mood Disorder" class="w-full h-full object-cover rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-[#0060a3] rounded-lg p-3">
                    <h1 class="text-md font-semibold">Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Bipolar Mood Disorder (BMD), also known as Bipolar Disorder, is a mental health condition characterized by 
                        extreme shifts in mood, energy, and activity levels. In this comprehensive guide, we'll explore the clinical 
                        features of bipolar disorder, its pathophysiology, diagnosis criteria, and care planning.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Bipolar Mood Disorder is a chronic and recurrent condition that affects millions of people worldwide. 
                        It is characterized by episodes of mania or hypomania, which involve elevated or irritable mood, 
                        increased energy, and impulsivity, alternating with episodes of depression, marked by low mood, 
                        loss of interest or pleasure, and feelings of worthlessness or guilt.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Understanding Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Bipolar 1 Disorder is the most severe form of bipolar disorder and is defined by the presence 
                        of at least one manic episode, which may be preceded or followed by hypomanic or major depressive 
                        episodes. Clinical features of bipolar 1 disorder include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Manic Episode: A distinct period of abnormally and persistently elevated, expansive, or irritable mood, 
                                lasting at least one week (or any duration if hospitalization is necessary).
                            </li>
                            <li class="pt-2 text-sm">
                                Hypomanic Episode: Similar to manic episodes but less severe, lasting at least four consecutive days.
                            </li>
                            <li class="pt-2 text-sm">
                                Major Depressive Episode: Persistent feelings of sadness, hopelessness, or irritability, along with 
                                changes in appetite, sleep, energy levels, and concentration, lasting at least two weeks.
                            </li>
                        </ul>
                    <h1 class="text-md font-semibold pt-2">Signs and Symptoms of Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Bipolar disorder is a complex condition that takes many forms. No two people will have identical 
                        experiences of the disorder or presentation of symptoms. However, it’s helpful to familiarize yourself 
                        with some of the more common signs, symptoms, and effects. These include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Engaging in risky or impulsive behavior
                            </li>
                            <li class="pt-2 text-sm">
                                Taking on grandiose projects
                            </li>
                            <li class="pt-2 text-sm">
                                Rapid, loud, or pressured speech
                            </li>
                            <li class="pt-2 text-sm">
                                Slowing of motor activity
                            </li>
                            <li class="pt-2 text-sm">
                                Reduced need for sleep
                            </li>
                            <li class="pt-2 text-sm">
                                Changes in appetite, which could lead to weight loss or gain
                            </li>
                            <li class="pt-2 text-sm">
                                Trouble sleeping
                            </li>
                            <li class="pt-2 text-sm">
                                Racing thoughts
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Causes and Risk Factors</h1>
                    <p class="pt-2 text-sm leading-loose">
                        We still need to conduct more research to determine the precise cause of bipolar disorder. 
                        But some causes and risk factors have shown to increase an individual’s chances of developing
                        this condition, including:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Having family members who struggle with bipolar disorder
                            </li>
                            <li class="pt-2 text-sm">
                                Traumatic or stressful life experiences, such as childhood trauma or significant life changes
                            </li>
                            <li class="pt-2 text-sm">
                                Living in a more affluent country
                            </li>
                            <li class="pt-2 text-sm">
                                Neurobiological factors, including imbalances in neurotransmitters or brain chemistry
                            </li>
                            <li class="pt-2 text-sm">
                                Experiencing a marital separation or divorce, or the death of a spouse
                            </li>
                            <li class="pt-2 text-sm">
                                Personal history of mental illness
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Treatment Options</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Fortunately, anxiety disorders are highly treatable, and a variety of effective interventions are 
                        available to help individuals manage their symptoms and improve their quality of life. Some common 
                        treatment options for anxiety include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Medication Management: Mood stabilizers, antipsychotic medications, antidepressants, or other psychotropic 
                                medications may be prescribed to manage mood symptoms.
                            </li>
                            <li class="pt-2 text-sm">
                                Psychotherapy: Cognitive-behavioral therapy (CBT), interpersonal therapy (IPT), and 
                                psychoeducation can help individuals better understand and cope with their condition.
                            </li>
                            <li class="pt-2 text-sm">
                                Lifestyle Modifications: Regular exercise, healthy eating habits, adequate sleep, stress management 
                                techniques, and avoiding alcohol and drugs can help stabilize mood and improve overall health.
                            </li>
                            <li class="pt-2 text-sm">
                                Social Support: Engaging in supportive relationships, joining peer support groups, and involving family 
                                members in treatment can provide valuable emotional support and encouragement.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Conclusion</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Bipolar Mood Disorder is a complex and challenging condition that requires comprehensive treatment and ongoing management. 
                        By understanding the clinical features, pathophysiology, diagnosis criteria, and care planning strategies outlined in this
                        guide, healthcare providers can effectively support individuals with bipolar disorder in achieving stability, improving quality 
                        of life, and maximizing functioning. Early diagnosis, appropriate intervention, and access to supportive resources are key to successful management of bipolar mood disorder.
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