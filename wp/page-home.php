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
              <section class="about"><img class="about__img animated rotateIn" src="img/portfolio.png"/>
                <div class="about__title">Profile Info</div>
                <div class="about__text">Hello! I'm a beginner developer and created this site-resume so that you can quickly see all my skills and skills in one place</div><img class="about__img animated rotateIn" src="img/portfolio.png"/>
                <div class="about__title">Interests </div><img class="about__icon center-block animated rotateIn" src="img/interests.png"/><img class="about__img animated rotateIn" src="img/portfolio.png"/>
                <div class="about__title">Reference</div>
                <div class="about__text text-center">July 2016- August 2017 </div>
                <div class="about__text--purple text-center">Storekeeper</div><br/>
                <div class="about__text text-center">2017-Present </div>
                <div class="about__text--purple text-center">Web-Developer</div><img class="about__img animated rotateIn" src="img/portfolio.png"/>
                <div class="about__title">Awards</div>
                <div class="about__text text-center">Oleg Vidyakin's courses on AS3 -2013</div>
                <div class="about__text text-center">Courses DRV programming</div>
              </section>
            </div>
            <div class="col-sm-4">
              <section class="about about--nobg"><img class="about__img animated rotateIn" src="img/portfolio.png"/>
                <div class="about__title">Work Experince</div>
                <div class="about__text text-center">March 2017-Present</div>
                <div class="about__text--purple text-center">Frontend Developer</div>
                <div class="about__text--bold text-center">OldBoy</div>
                <div class="about__text text-center">April 2017-Present</div>
                <div class="about__text--purple text-center">Frontend Developer</div>
                <div class="about__text--bold text-center">WebDrive</div>
                <div class="about__text text-center">July 2016- March 2017</div>
                <div class="about__text--purple text-center">Storekeeper</div>
                <div class="about__text--bold text-center">Trans Starter</div><img class="about__img animated rotateIn" src="img/portfolio.png"/>
                <div class="about__title">Education</div>
                <div class="about__text--bold text-center">-2016-2021 KGTU </div>
              </section>
            </div>
            <div class="col-sm-4">       
              <div class="about__description text-center animated bounceInRight"> I'm engaged in frontend part of projects of barberwild.com.My stack technology-Gulp,Sass</div>
              <div class="about__description text-center animated bounceInRight"> I'm engaged in frontend part of projects of barberwild.com.My stack technology-Gulp,Sass</div>
              <div class="about__description text-center animated bounceInRight"> I'm engaged in frontend part of projects of barberwild.com.My stack technology-Gulp,Sass</div>
            </div>
            <div class="col-sm-8 col-xs-12"><img class="about__img animated rotateIn" src="img/portfolio.png"/>
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
  <script src="https://code.jquery.com/jquery-3.2.1.js">      </script>
  <script src="./libs/animateNumber/jquery.animateNumber.min.js">      </script>
  <script src="./scripts/App.js"></script>
</body>
<?php
    get_footer();
?>