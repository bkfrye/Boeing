<?php get_header(); ?>
<main>
  <?php get_template_part('template_parts/hero-section'); ?>

  <section class="about">
    <article>
      <h2>What We Do</h2>
      <p><span>Pro-ficiency</span> creates <span>simulation-based video health training</span> systems that optimize outcomes for clinical trials, patients and doctors. Our flagship product, <span>ProCT</span>, is <span>human performance management</span> system designed to initiate clinical trial sites faster and more efficiently and reduce protocol violations. Sponsors use our technology to replace meetings, conduct site feasibility and predict and avoid study errors.</p>
    </article>
    <div class="about-graphic">
      <?php get_template_part('img/redstone.svg'); ?>
    </div>
  </section>

  <div class="callout-banner">
    <div class="callout-banner-content">
      <p>We turn training from a <span>cost center</span> to a <span>powerful site performance</span> asset</p>
    </div>
  </div>

  <div class="explainer">

    <div class="shape-divider">
      <?php get_template_part('img/circle-divider.svg'); ?>
    </div>
  </div>

  <div class="testimonial">
    <section class="testimonial-content">
      <p>“I found that the simulation was very intuitive and engaging. I appreciated being able to work at my own pace and felt that this model of training made it easy to follow. Personally, I would prefer this simulation as opposed to in-person meetings and training. Overall, it was a wonderful experience!”</p>
    </section>
  </div>



</main>

<div id="video-container"></div>
<?php get_footer(); ?>
