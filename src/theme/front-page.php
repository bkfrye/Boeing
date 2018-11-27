<?php get_header(); ?>
<main class="home-pg">
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

  <div class="siv-dashboard">
    <div class="siv-dashboard-wrapper">
      <figure>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dashboard.png" alt="">
      </figure>
      <div class="siv-dashboard-content">
        <h2>Our SIV* Dashboard</h2>
        <p>Shows each site's <span>strengths</span> and <span>weaknesses</span></p>

        <div class="break-mark"></div>
        <p>FPI can't happen until everyone is <span>trained</span> and <span>certified</span> in the protocol. We do it <span>faster</span> than anyone</p>
      </div>
    </div>
  </div>

  <div class="testimonial">
    <section class="testimonial-content">
      <div class="testimonial-quote">
        <p>“I found that the simulation was very intuitive and engaging. I appreciated being able to work at my own pace and felt that this model of training made it easy to follow. Personally, I would prefer this simulation as opposed to in-person meetings and training. Overall, it was a wonderful experience!”</p>
      </div>
      <div class="testimonial-author">
        <div class="profile-img">
          <img src="" alt="">
        </div>
        <div class="profile-info">
          <p class="name">Christine S.</p>
          <p class="title">Study Coordinator</p>
        </div>
      </div>
    </section>
  </div>

  <div class="features">
    <section>
      <div>
        <?php get_template_part('img/features.svg'); ?>
      </div>
      <div class="features-content">
        <p>Pro-ficiency offers <span>enrolled subject training through ProPatient. This better prepares your subjects for the study and keep them engaged.</p>
        <div class="btn">
          <a href="#">Read More</a>
        </div>
      </div>
    </section>
  </div>


  <div class="investigator-stats">
    <h3>Investigators <span>Love Us</span></h3>
    <ul class="investigator-stats-info">
      <li>
        <div class="icon">
          <?php get_template_part(''); ?>
        </div>
      </li>
    </ul>
  </div>


  <div class="extra-video">
    <div class="extra-video-placeholder">
      <svg id="play-btn" viewBox="0 0 34.2 34">
        <polygon id="play" style="fill:#ffffff;" points="12.2,24.1 24.6,17 12.2,10 "/>
        <g id="circle">
        	<g>
        		<path style="fill:#ffffff;" d="M33.2,17c0,8.8-7.2,16-16,16s-16-7.2-16-16c0-0.4,0.3-0.8,0.8-0.8c0.4,0,0.8,0.3,0.8,0.8
        			c0,8,6.5,14.5,14.5,14.5S31.6,25,31.6,17c0-8-6.5-14.5-14.5-14.5c-0.4,0-0.8-0.3-0.8-0.8c0-0.4,0.3-0.8,0.8-0.8
        			C26,1,33.2,8.2,33.2,17z"/>
        	</g>
        </g>
      </svg>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/extra-video-poster.png" alt="">
    </div>
  </div>



</main>

<div id="video-container"></div>
<?php get_footer(); ?>
