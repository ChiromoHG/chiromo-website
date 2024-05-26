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
                    <img src="<?= base_url('images/carousel/schizophrenia.png') ?>" alt="schizophrenia" class="w-full h-full object-cover rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-[#0060a3] rounded-lg p-3">
                    <h1 class="text-md font-semibold">Schizophrenia</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Schizophrenia is a severe and chronic mental disorder characterized by disturbances in thinking, perception, 
                        emotions, and behavior. It affects approximately 1% of the global population and often emerges in late 
                        adolescence or early adulthood. Here's an overview of schizophrenia covering its symptoms, causes, and 
                        treatment options.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        The DSM-5 thoroughly explores the various criteria necessary for a schizophrenia diagnosis. While reviewing this
                         information can help you to better understand the condition, one of the most important things to note is that
                          a significant interruption in functioning must occur over time in order for schizophrenia to be present
                    </p>
                    <h1 class="text-md font-semibold pt-2">Understanding Schizophrenia</h1>
                    <p class="pt-2 text-sm leading-loose">
                        The various psychotic symptoms that accompany this disorder must be pervasive, continuously affecting the 
                        individual at varying intervals. A mental health professional can provide a clinical assessment to make an 
                        appropriate diagnosis.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Signs and Symptoms of Schizophrenia</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Without proper care, a person who is living with schizophrenia may find it difficult, if not impossible, 
                        to fully engage in a healthy and satisfying lifestyle. The following are common possible long-term and 
                        short-term effects of schizophrenia:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Problems forming and maintaining friendships and other interpersonal relationships
                            </li>
                            <li class="pt-2 text-sm">
                                Difficulties achieving to expectation in school or at work
                            </li>
                            <li class="pt-2 text-sm">
                                Inability to achieve financial independence
                            </li>
                            <li class="pt-2 text-sm">
                                Medical problems related to poor decision-making, substandard self-care, and dangerous or reckless behaviors
                            </li>
                            <li class="pt-2 text-sm">
                                Legal problems related to impaired decision-making and dangerous or reckless behaviors, including arrest and incarceration
                            </li>
                            <li class="pt-2 text-sm">
                                Onset or worsening of co-occurring mental health disorders
                            </li>
                            <li class="pt-2 text-sm">
                                Substance abuse and addiction
                            </li>
                            <li class="pt-2 text-sm">
                                Pervasive sense of hopelessness
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Causes and Risk Factors</h1>
                    <p class="pt-2 text-sm leading-loose">
                        The exact cause of schizophrenia is not fully understood, but it is believed to involve a combination of 
                        genetic, environmental, and neurobiological factors. Potential contributors include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Genetics: Having a family history of schizophrenia increases the risk.
                            </li>
                            <li class="pt-2 text-sm">
                                Brain Chemistry and Structure: Imbalances in neurotransmitters like dopamine and abnormalities in brain structure or function may play a role.
                            </li>
                            <li class="pt-2 text-sm">
                                Environmental Factors: Prenatal exposure to infections, maternal stress, malnutrition, and birth complications have been linked to an increased risk.
                            </li>
                            <li class="pt-2 text-sm">
                                Drug Use: Substance abuse, particularly during adolescence, can trigger or exacerbate symptoms in vulnerable individuals.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Treatment Options</h1>
                    <p class="pt-2 text-sm leading-loose">
                        While there is no cure for schizophrenia, treatment aims to manage symptoms, prevent relapses, and improve
                         quality of life. Treatment options include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Medication: Antipsychotic medications are the primary treatment for schizophrenia, helping to alleviate
                                 positive symptoms. Newer antipsychotics have fewer side effects.
                            </li>
                            <li class="pt-2 text-sm">
                                Psychotherapy: Cognitive-behavioral therapy (CBT), supportive therapy, and family therapy can help 
                                individuals manage symptoms, improve coping skills, and enhance social functioning.
                            </li>
                            <li class="pt-2 text-sm">
                                Social Support: Supportive housing, vocational training, and community support programs can assist individuals
                                 in reintegrating into society and improving their overall functioning.
                            </li>
                            <li class="pt-2 text-sm">
                                Hospitalization: In severe cases or during acute episodes, hospitalization may be necessary to ensure safety and
                                 stabilize symptoms.
                            </li>
                            <li class="pt-2 text-sm">
                                Lifestyle Changes: Healthy lifestyle habits, including regular exercise, balanced nutrition, stress management, 
                                and avoidance of substance abuse, can complement medical treatment and support recovery.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Conclusion</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Schizophrenia is a complex and challenging mental disorder that requires comprehensive treatment and support. 
                        With early intervention, appropriate medication, therapy, and social support, many individuals with schizophrenia 
                        can lead fulfilling lives and manage their symptoms effectively. Ongoing research into the causes and treatments of 
                        schizophrenia offers hope for improved outcomes and better quality of life for those affected by this condition.
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