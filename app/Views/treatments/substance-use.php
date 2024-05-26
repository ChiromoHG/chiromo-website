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
                    <img src="<?= base_url('images/carousel/substance.jpg') ?>" alt="Bipolar Mood Disorder" class="w-full h-full object-cover rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-[#0060a3] rounded-lg p-3">
                    <h1 class="text-md font-semibold">Substance Use Disorder (SUD)</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Substance Use Disorder (SUD) is a complex condition that affects millions of people worldwide, 
                        impacting their physical health, mental well-being, relationships, and overall quality of life. 
                        In this comprehensive guide, we'll explore the definition of SUD, examples of substances involved, 
                        treatment options, confidentiality considerations, and more.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Understanding Bipolar Mood Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Substance Use Disorder is a multifaceted condition influenced by various factors, including genetic 
                        predisposition, environmental influences, psychological factors, and socioeconomic status. It can lead
                        to a range of adverse consequences, including physical health problems, mental health disorders 
                        (e.g., depression, anxiety), relationship issues, legal problems, and financial difficulties
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Substance Use Disorder (SUD) is a medical condition characterized by the problematic use of alcohol, 
                        illicit drugs, or prescription medications. It is diagnosed based on specific criteria outlined in 
                        the Diagnostic and Statistical Manual of Mental Disorders (DSM-5), including:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Impaired control over substance use
                            </li>
                            <li class="pt-2 text-sm">
                                Continued use despite harmful consequences
                            </li>
                            <li class="pt-2 text-sm">
                                Craving or strong desire to use substances
                            </li>
                            <li class="pt-2 text-sm">
                                Tolerance (needing increased amounts to achieve the desired effect) and withdrawal symptoms
                            </li>
                        </ul>
                    <h1 class="text-md font-semibold pt-2">Examples of Substance Use Disorder</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Examples of substances commonly associated with SUD include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Alcohol
                            </li>
                            <li class="pt-2 text-sm">
                                Cannabis (marijuana)
                            </li>
                            <li class="pt-2 text-sm">
                                Opioids (e.g., heroin, prescription painkillers)
                            </li>
                            <li class="pt-2 text-sm">
                                Stimulants (e.g., cocaine, methamphetamine)
                            </li>
                            <li class="pt-2 text-sm"> 
                               Sedatives and tranquilizers (e.g., benzodiazepines)
                            </li>
                            <li class="pt-2 text-sm"> 
                               Hallucinogens (e.g., LSD, ecstasy)
                            </li>
                            <li class="pt-2 text-sm"> 
                                Inhalants (e.g., solvents, aerosols)
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Treatment Options</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Treatment for SUD typically involves a combination of medical interventions, psychotherapy, 
                        and support services tailored to the individual's needs. Some common approaches to treating SUD 
                        include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Detoxification: Medically supervised withdrawal to manage withdrawal symptoms safely.
                            </li>
                            <li class="pt-2 text-sm">
                                Medication-Assisted Treatment (MAT): Prescription medications (e.g., methadone, buprenorphine)
                                combined with counseling and behavioral therapies to support recovery from opioid or alcohol 
                                dependence.
                            </li>
                            <li class="pt-2 text-sm">
                                Behavioral Therapies: Cognitive-behavioral therapy (CBT), motivational interviewing, contingency management,
                                 and relapse prevention strategies to address underlying issues and promote long-term sobriety.
                            </li>
                            <li class="pt-2 text-sm">
                                Support Groups: Participation in peer-led support groups such as Alcoholics Anonymous (AA) 
                                or Narcotics Anonymous (NA) to connect with others in recovery and receive ongoing support.
                            </li>
                            <li class="pt-2 text-sm">
                                Residential Treatment: Inpatient or residential rehabilitation programs offering intensive 
                                therapy, medical supervision, and a supportive environment free from substance use triggers.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Conclusion</h1>
                    <p class="pt-2 text-sm leading-loose">

                        Substance Use Disorder is a significant public health concern with far-reaching consequences for individuals, 
                        families, and communities. By understanding the nature of SUD, recognizing its signs and symptoms, and seeking 
                        appropriate treatment and support, individuals can take proactive steps toward recovery and improved quality of 
                        life. Confidentiality protections ensure that individuals seeking treatment for SUD can do so without fear of 
                        stigma or discrimination, fostering trust and promoting access to care. With comprehensive treatment, ongoing 
                        support, and a commitment to recovery, individuals with SUD can achieve lasting sobriety and lead fulfilling 
                        lives.
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