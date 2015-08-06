<?php
/**
 * Created by PhpStorm.
 * User: streetcoder
 * Date: 5/1/15
 * Time: 4:13 AM
 */

/**
 * Template Name: Home Template
 */
?>
<div id="getstarted" class="get-started">
    <div class="row">

        <div class="col-md-offset-2 col-md-3 col-sm-offset-1 col-sm-4">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/guru.png" alt="list-guru" />
        </div>
        <div class="col-md-7 col-sm-7">
            <h2 class="big-text">Build your email list!</h2>
            <h3 class="big-text-third">Grow your customers, relationships and sales with our email marketing campaigns.</h3>

            <p>
                <a href="#packages" type="button" class="btn btn-guru btn-lg btn-responsive">Get Started!</a>
                <a href="#faq" type="button" class="btn btn-default btn-lg btn-responsive">Learn more about List Guru</a>
            </p>
        </div>
    </div>
</div>
<div id="works">&nbsp;</div>
<div class="how-works">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <h2 class="big-text">How it works</h2>
            <h2 class="big-second-text">Landing Page Creation</h2>
            <h3 class="big-text-third">We start the process by designing a fully</h3>
            <h3 class="big-text-third">customized landing page for your business </h3>
            <h3 class="big-text-third">to capture emails of potential customers.</h3>
        </div>
    </div>
    <div class="row how-works-2">
        <div class="col-md-4 col-sm-4">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/monitor.png" alt="how it works" />
        </div>
        <div class="col-md-8 col-sm-8 how-works-2-right">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/envelop.png" alt="" class="envelop" />
            <h2>Collect Emails</h2>

            <h3>Next, we drive <span class="target-text">TARGETED</span> traffic to your</h3>
            <h3>landing page and collect the emails of</h3>
            <h3>thousands of potential customers!</h3>
        </div>
    </div>
</div>

<div class="promotion">
    <div class="row">
        <div class="col-md-6 col-sm-6 promo-left">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/mike.png" alt="" class="img-responsive">
            <h3>A custom email marketing </h3>
            <h3>campaign is then designed </h3>
            <h3>to help promote your message </h3>
            <h3>and drive sales!</h3>
        </div>
        <div class="col-md-6 col-sm-6 promo-right">
            <h3 class="promo-right-text-left">... and relax!</h3>
            <img src="<?= get_template_directory_uri(); ?>/dist/images/guru-transparent.png" alt="list guru">
            <h3>Sit back and watch as List Guru</h3>
            <h3>gets you thousands of potential</h3>
            <h3>customers!</h3>
        </div>
    </div>
</div>

<div class="pricing-table" id="packages">
    <h2 class="big-text">Our Packages</h2>
    <?php echo do_shortcode('[easy-pricing-table id="40"]'); ?>
</div>

<div id="faq" class="faq">
    <h2 class="big-text">FAQ</h2>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div id="accordion">
                <h3>Is List Guru useful for my business?</h3>
                <div>
                    <p>Of course :)</P>

                    <p>List Guru works best for online companies that have a global customer base or audience. Our services can be used for traditional brick and mortar businesses as well but the results may vary a little.
                    </p>
                </div>
                <h3>What kind of customers do you serve?</h3>
                <div>
                    <p>Some of our current customers include:</p>
                    <ul>
                        <li>Online clothing shops</li>
                        <li>Fitness brands</li>
                        <li>Photographers</li>
                        <li>Models</li>
                        <li>Start-up companies</li>
                        <li>Kickstarter Campaigns</li>
                        <li>Marketing agencies</li>
                        <li>And much, much more…</li>
                    </ul>
                </div>
                <h3>How does your process work?</h3>
                <div>
                    <p>We start by understanding your business and what your target audience/customer base is.</p>
                    <p>From there we create a simple, yet effective landing page that will capture the emails of thousands of potential customers.</p>
                    <p>Once we capture those emails we have a 3-5 email campaign that will sent to those customers on a predetermined schedule. Our email messaged are designed to peak the customer’s interest and drive them to your website.</p>
                </div>
            </div>

            <a href="#packages" type="button" class="btn btn-guru btn-lg btn-block btn-responsive">Get Started!</a>
        </div>
    </div>
</div>

<div id="projects" class="wave"></div>

<div class="past-project">
    <h2 class="big-text">Past Projects</h2>
    <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
</div>

<div class="triangle"></div>

<div id="contact" class="contact-us">
    <h2 class="big-text">Contact Us</h2>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php echo do_shortcode( '[contact-form-7 id="24" title="Contact form 1"]' ); ?>
        </div>
    </div>
</div>



