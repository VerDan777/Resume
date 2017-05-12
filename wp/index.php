<?php
    /*
        Template Name: Home Page
    */
    get_header();
?>
<body>
  <div class="container-fluid">
    <div class="row"> 
      <header class="site-header">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <nav class="col-sm-4 col-xs-6">
                <div class="site-header__icon" src="./img/avatar.jpg"></div>
              </nav>
              <div class="col-sm-4">
                <div class="site-header__fullname animated bounceInLeft">Daniil Vereschagin </div>
                <div class="site-header__position animated bounceInRight">Web developer</div>
              </div>
              <div class="col-sm-4 col-xs-3">
                <div class="site-header__contacts">
                  <ul>
                    <li class="animated rollIn">Kaliningrad</li>
                    <li class="animated rollIn">vereshhagin98@mail.ru</li>
                    <li class="animated rollIn">+7(952)-796--11--99</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main class="main-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <section class="about"><img class="about__img animated rotateIn" src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio.png"/>
                <div class="about__title">Profile Info</div>
                <?php 
                  $args= array('category_name'=>'about');
                  query_posts($args);

                 if(have_post()){
                   while(have_post()){
                     the_post();
                   
                 //vars
                 $about_title = get_field('about_title');
                 $about_text = get_field('about_text');
                 $about_icon = get_field('about_icon');
                
                ?>
                <div class="about__text"><?php echo $about_text?></div><img class="about__img animated rotateIn" src="<?php echo $about_icon;?>"/>
                <div class="about__title"><?php echo $about_title;?> </div><img class="about__icon center-block animated rotateIn" src="<?php echo $about_icon;?>"/><img class="about__img animated rotateIn" src="<?php  echo $about_icon?>"/>
                <div class="about__title"><?php echo $about_title?></div>
                <div class="about__text text-center"><?php echo $about_text?></div>
                <div class="about__text--purple text-center"><?php echo $about_text?></div><br/>
                <div class="about__text text-center"><?php echo $about_text?></div>
                <div class="about__text--purple text-center"><?php echo $about_text?></div><img class="about__img animated rotateIn" src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio.png"/>
                <div class="about__title"><?php echo $about_title?></div>
                <div class="about__text text-center"><?php echo $about_text?></div>
                <div class="about__text text-center"><?php echo $about_text?></div>
                <?php
                   }
                 }
                ?>
              </section>
            </div>
            <div class="col-sm-4">
              <section class="about about--nobg"><img class="about__img animated rotateIn" src="<?php bloginfo('stylesheet_directory'); ?>/img/portfolio.png"/>
                <div class="about__title">Work Experince</div>
                <div class="about__text text-center">March 2017-Present</div>
                <div class="about__text--purple text-center">Frontend Developer</div>
                <div class="about__text--bold text-center">OldBoy</div>
                <div class="about__text text-center">April 2017-Present</div>
                <div class="about__text--purple text-center">Frontend Developer</div>
                <div class="about__text--bold text-center">WebDrive</div>
                <div class="about__text text-center">July 2016- March 2017</div>
                <div class="about__text--purple text-center">Storekeeper</div>
                <div class="about__text--bold text-center">Trans Starter</div><img class="about__img animated rotateIn" src="<?php bloginfo('stylesheet_directory');?>/img/education.png"/>
                <div class="about__title">Education</div>
                <div class="about__text--bold text-center">-2016-2021 KGTU </div>
              </section>
            </div>
            <div class="col-sm-4">       
              <div class="about__description text-center animated bounceInRight"> I'm engaged in frontend part of projects of barberwild.com.My stack technology-Gulp,Sass</div>
              <div class="about__description text-center animated bounceInRight"> I'm engaged in frontend part of projects of barberwild.com.My stack technology-Gulp,Sass</div>
              <div class="about__description text-center animated bounceInRight"> I'm engaged in frontend part of projects of barberwild.com.My stack technology-Gulp,Sass</div>
            </div>
            <div class="col-sm-8 col-xs-12"><img class="about__img animated rotateIn" src="<?php bloginfo('stylesheet_directory');?>/img/skills.png"/>
              <div class="about__title text-left">Professionals Skills</div>
              <div class="about__skills">
                <ul class="about__skills__list">
                  <li><span class="lines" data-count="83">83</span></li>
                  <li><span class="lines" data-count="74">74</span></li>
                  <li><span class="lines" data-count="76">76</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.js"> </script>
  <script src="./libs/animateNumber/jquery.animateNumber.min.js"></script>
  <script src="./scripts/App.js"></script>
</body>
<?php
    get_footer();
?>