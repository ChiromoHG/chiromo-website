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
                    <img src="<?= base_url('images/carousel/ptsd.png') ?>" alt="braeside branch" class="w-full h-full object-cover rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-[#0060a3] rounded-lg p-3">
                    <h1 class="text-md font-semibold">Post-traumatic disorder (PTSD)</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Posttraumatic stress disorder, which is commonly referred to as PTSD, is a mental health condition 
                        that occurs after a person has experienced one or more traumatic events
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        When a person experiences, witnesses, or learns about the types of trauma described in the previous paragraph,
                        it is common to react with shock, fear, sadness, and similar feelings. Temporary responses such as these are
                        normal, valid, and even healthy responses to trauma. If these types of reactions persist and become severe 
                        enough to impact your ability to function, you may be dealing with PTSD.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        If you think that you or someone you care about is struggling with PTSD, please know that this condition 
                        responds to treatment. When you receive the right type and level of care, you can overcome the effects of 
                        posttraumatic stress disorder and regain control of your life. Dove International Mental Health Center, an 
                        inpatient PTSD treatment center in Karen, can provide you with the care you need to live the healthier life 
                        you deserve.
                    </p>
                    <h1 class="text-md font-semibold pt-2">Understanding Anxiety Disorders</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Examples of traumatic events that can precede the onset of PTSD include:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Physical abuse
                            </li>
                            <li class="pt-2 text-sm">
                                Sexual assault
                            </li>
                            <li class="pt-2 text-sm">
                                Acts of terrorism or combat
                            </li>
                            <li class="pt-2 text-sm">
                                Automobile accidents and natural disasters
                            </li>
                            <li class="pt-2 text-sm">
                                People can develop PTSD after being directly involved in a traumatic experience or after witnessing 
                                such an occurrence. PTSD can also develop after a person learns the details of a loved one’s traumatic experience.
                            </li>
                        </ul>
                    <h1 class="text-md font-semibold pt-2">Post-traumatic disorder (PTSD)</h1>
                    <p class="pt-2 text-sm leading-loose">
                        The signs and symptoms of posttraumatic stress disorder can vary from person to person. A broad range 
                        of factors can influence the nature and severity of a person’s PTSD signs and symptoms. In general, 
                        though, the following are among the more common signs and symptoms of PTSD:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Fighting, destroying property, and other violent actions
                            </li>
                            <li class="pt-2 text-sm">
                                Changing how you act to avoid people or things that remind you of the trauma
                            </li>
                            <li class="pt-2 text-sm">
                                Ending your participation in activities that were once important to you
                            </li>
                            <li class="pt-2 text-sm">
                                Diminished energy levels
                            </li>
                            <li class="pt-2 text-sm">
                                Persistent fatigue
                            </li>
                            <li class="pt-2 text-sm">
                                Exaggerated startle response
                            </li>
                            <li class="pt-2 text-sm">
                                Intrusive memories of the traumatic event
                            </li>
                            <li class="pt-2 text-sm">
                                Persistent sense of danger or dread
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Causes and Risk Factors</h1>
                    <p class="pt-2 text-sm leading-loose">
                        The one common element among all cases of posttraumatic stress disorder is the presence of a traumatic 
                        event. But the cause of PTSD is much more complex than this. Some people develop PTSD after one traumatic 
                        experience, while others endure multiple exposures to trauma prior to developing signs of PTSD. Most 
                        people who experience trauma will never develop PTSD. Experts have not identified one single cause for
                        PTSD. As is the case with most mental health challenges, a person’s risk for PTSD can be influenced by a 
                        variety of factors, such as the following:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Family history of mental illness
                            </li>
                            <li class="pt-2 text-sm">
                                Previous struggles with other mental health disorders
                            </li>
                            <li class="pt-2 text-sm">
                                Being a police officer, firefighter, emergency medical technician, military member, or member of another profession that is associated with increased exposure to trauma
                            </li>
                            <li class="pt-2 text-sm">
                                Enduring ongoing trauma or multiple forms of trauma
                            </li>
                            <li class="pt-2 text-sm">
                                Living in extreme poverty as a child
                            </li>
                            <li class="pt-2 text-sm">
                                Lacking effective coping skills
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Treatment Options</h1>
                    <p class="pt-2 text-sm leading-loose">
                     Fear of the unknown can cause people to delay getting treatment for posttraumatic stress disorder. 
                     The best way to overcome this obstacle is to learn what you can expect during your time in treatment 
                     for PTSD. At Chiromo Hospital Group, individuals who participate in PTSD treatment 
                     receive personalized care. This means that each person has a customized experience in our behavioral 
                     health hospital. However, certain elements and features are common among all who heal with us:
                    </p>
                    <ul class="list-disc pt-2 ml-10">
                            <li class="pt-2 text-sm">
                                Admissions: Once you’ve decided to get treatment for PTSD, the last thing you want to do is become 
                                bogged down with paperwork. At Mount Carmel Behavioral Health, that won’t happen. Our admissions process
                                is a streamlined experience that’s designed to get you into treatment as efficiently as possible. 
                                You can start the admissions process with a phone call.
                            </li>
                            <li class="pt-2 text-sm">
                                Comprehensive assessment: In order to provide you with the most effective treatment for PTSD, 
                                it’s vital that your treatment team understands the full scope of your needs. Prior to receiving care, you’ll 
                                complete a thorough assessment. Information collected during this assessment will include the nature and severity of 
                                your PTSD signs and symptoms, the presence of any co-occurring disorders, your treatment history, and related 
                                matters that are important to your care.
                            </li>
                            <li class="pt-2 text-sm">
                                Inpatient treatment: Our commitment to personalized care means that your time in our inpatient PTSD treatment 
                                center will be unique to you. In general, though, you can expect to participate in a variety of therapeutic 
                                approaches, heal within a safe and supportive treatment environment, work in close collaboration with compassionate 
                                professionals, and benefit from our unwavering commitment to dignity and respect.
                            </li>
                            <li class="pt-2 text-sm">
                                 Discharge planning: As you prepare to leave Dove International Mental Health Center, you’ll
                                 receive a detailed discharge plan that will guide your continued healing from PTSD. Your 
                                 discharge plan will document the progress you made at our behavioral health hospital, note 
                                 areas that may need continued focus, and identify the services and resources that can 
                                 support you in the weeks and months ahead.
                            </li>
                    </ul>
                    <h1 class="text-md font-semibold pt-2">Conclusion</h1>
                    <p class="pt-2 text-sm leading-loose">
                        Self-care is an important part of maintaining your mental health after you’ve completed treatment for PTSD. During your time in treatment, 
                        you’ll learn about the value and necessity of self-care, and will develop habits to support your continued recovery.
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