<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>


<?= view_cell('App\Cells\NavbarCell::display') ?>
<?= view_cell('App\Cells\CookiesCell::display') ?>
<?= view_cell('App\Cells\ShareBlogCell::display') ?>

<section class="px-4 xl:px-5 2xl:px-5 py-10 md:py-15">
        <div class="grid md:grid-cols-12 gap-10 md:px-10">
            <div class="grid md:col-span-9">
            
                <div class="pb-80 bg-red-500 rounded-lg relative">
                    <img src="<?= base_url('images/carousel/eating.png') ?>" alt="braeside branch" class="w-full h-full object-cover  rounded-lg absolute"/>
                </div>

                <div class="mt-5 border border-violet-600 rounded-lg p-3">
                    <h1 class="text-md font-semibold">
                        Beyond the Scale: Understanding Eating Disorders
                    </h1>
                    <p class="pt-2 text-sm leading-loose">
                        In the modern world, where
                        body image and dietary trends
                        dominate our social media feeds
                        and cultural norms, the concept
                        of “eating disorders” is more
                        relevant and pressing than ever.
                        Yet, despite increased awareness,
                        misconceptions still abound. What
                        exactly does it mean to have an eating
                        disorder? How can we recognize the
                        signs? And what factors contribute
                        to the development of these serious
                        conditions?
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        At its core, an eating disorder
                        signifies irregular or abnormal eating
                        habits, encompassing a spectrum
                        of conditions that affect not only
                        physical health but also mental well
                        being. According to the DSM-5, the
                        diagnostic manual used by mental
                        health professionals, these disorders
                        entail disturbances in how individuals
                        perceive food, eating, weight, and
                        shape, along with corresponding
                        behaviors that often spiral out of
                        control.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        The most common eating disorders
                        include anorexia nervosa, bulimia
                        nervosa, and binge-eating disorder.
                        However, lesser-known variants
                        such as rumination disorder,
                        avoidant/restrictive food intake
                        disorder, purging disorder, and night
                        eating syndrome also afflict many
                        individuals. These disorders can
                        manifest through a variety of signs,
                        both mental and physical, which,
                        when recognized, can serve as crucial
                        indicators for intervention.
                    </p>
                    <p class="pt-2 text-sm leading-loose">
                        Mental and behavioral signs may
                        include dramatic weight loss,
                        obsession with food and weight,
                        avoidance of eating in public, and
                        patterns of binge eating and purging.
                        Physical manifestations might include
                        gastrointestinal issues, lethargy,
                        menstrual irregularities, and changes
                        in skin and hair health. These
                        signs, when observed collectively,
                        raise red flags that prompt further
                        investigation and support.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        But what lies beneath the surface?
                        What triggers these complex and
                        often debilitating conditions? The
                        exact causes of eating disorders
                        remain elusive, though various
                        factors have been identified. Genetics
                        may predispose some individuals to
                        these disorders, especially if there’s
                        a family history. Biological factors,
                        such as changes in brain chemistry,
                        also play a role. Additionally, societal
                        influences, including media portrayal
                        of unrealistic body ideals and societal
                        pressures, contribute significantly.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Moreover, certain risk factors
                        increase susceptibility to eating
                        disorders. Family history, other
                        mental health issues, history of
                        weight-related bullying, and stress
                        are among the key factors that
                        heighten vulnerability. Alarmingly,
                        eating disorders are not confined to
                        specific demographics; they can affect
                        anyone, regardless of age, gender, or
                        socioeconomic background.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        The prevalence of eating disorders is
                        staggering, with estimates indicating
                        a substantial increase globally
                        over the past decades. In a society
                        inundated with social media and
                        perpetuated by unattainable beauty
                        standards, the prevalence of eating
                        disorders has soared. Recent studies
                        suggest a prevalence rate of 8.60%
                        among females and 4.07% among
                        males, underscoring the urgency of
                        addressing this silent epidemic.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Recognizing the signs and
                        understanding the factors
                        contributing to eating disorders
                        is the first step toward combating
                        this pervasive issue. If you suspect
                        that a loved one is struggling with
                        an eating disorder, approach them
                        with compassion and empathy.
                        Encourage them to seek professional
                        help and offer your unwavering
                        support throughout their journey to
                        recovery.
                    </p>

                    <p class="pt-2 text-sm leading-loose">
                        Education and destigmatization are
                        vital in dismantling the barriers that
                        prevent individuals from seeking help.
                        By fostering open conversations and
                        promoting acceptance, we can create
                        a more supportive environment
                        for those battling eating disorders.
                        Together, let us strive to unveil the
                        truth behind these conditions and
                        pave the way toward healing and
                        recovery.
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