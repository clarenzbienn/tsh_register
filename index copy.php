<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Times+New+Roman:ital,wght@0,700;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@600&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="styles/home.css" />


    <script src="java/newspaper-scroll.js" defer></script>
  </head>
  <body>
    <div class="header">
        <a href="https://www.phinma.edu.ph/" class="phinma-ed-logo"></a>
        <a href="https://up.phinma.edu.ph/" class="university-banner"></a>
        <div class="contact">
          <a href="others/editorialboard.html" class="our-team">OUR TEAM</a>
          <a href="others/aboutUS.html" class="our-company">ABOUT US</a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSdpWiwf8qrty13yz9wv1q7QGNEllz_vNJs8hT_Udv2xuhBkjw/closedform?fbclid=IwAR1RJ2IWUvNVqDs2I2oSAyvwNX5F-M2y41Jg8O39xYQM7l7D6TuH4Hw-XNg" class="join-us">JOIN US</a>
        </div>
        <a href="logout.php" class="login"><span class="log-in">LOG OUT</span></a>
        <a href="https://www.facebook.com/upangherald" class="vector"></a>
        <a href="others/contactUS.html" class="vector-1"><a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sh.journ@gmail.com&subject=Subject%20Line" class="vector-2"></a>
      </div>
      
    <div class="main-container">
      <section id="rectangle">
        <div class="heading">
          <div class="logo">
            <div class="tsh-logo"></div>
            <div class="frame">
              <button class="frame-3">
                <a href="#newspapers" class="group"></a>
                <a href="#newspapers" class="get-started">Get Started</a>
              </button>
              <span class="the">The</span>
              <span class="students-herald">Students’Herald</span>
              <span class="truth-above-all">“TRUTH ABOVE ALL”</span>
              <span class="official-publication">THE OFFICIAL PUBLICATION OF PHINMA UNIVERSITY OF
                PANGASINAN</span>
            </div>
          </div>
        </div>


        
          
        <section id="newspapers">
          <div class="wrapper">
            <i class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li>
                  <a href="newspapers/NEWSPAPER1.html" class="card">
                    <div class="img"><img src="styles/HOMEnewspaperscroll-styles/1.png" alt="img"></div>
                    <h2 style="text-align: center;">The Students' Herald Vol. XXXII Issue no. 1</h2>
                    <span>NOVEMBER, 2023</span>
                  </a>
                </li>
                <li>
                  <a href="newspapers/NEWSPAPER2.html" class="card">
                    <div class="img"><img src="styles/HOMEnewspaperscroll-styles/2.png" alt="img"></div>
                    <h2 style="text-align: center;">The Students' Herald Vol. XXXI Issue No. 1</h2>
                    <span>OCTOBER, 2022</span>
                  </a>
                </li>
                <li>
                  <a href="newspapers/NEWSPAPER3.html" class="card">
                    <div class="img"><img src="styles/HOMEnewspaperscroll-styles/3.png" alt="img"></div>
                    <h2 style="text-align: center;">The Students' Herald Vol. XXX Special Issue</h2>
                    <span>APRIL, 2022</span>
                  </a>
                </li>
                <li>
                  <a href="newspapers/NEWSPAPER4.html" class="card">
                    <div class="img"><img src="styles/HOMEnewspaperscroll-styles/4.png" alt="img"></div>
                    <h2 style="text-align: center;">The Students' Herald Vol. XXIX Issue No.1</h2>
                    <span>NOVEMBER, 2021</span>
                  </a>
                </li>
                <li>
                  <a href="newspapers/NEWSPAPER5.html" class="card">
                    <div class="img"><img src="styles/HOMEnewspaperscroll-styles/5.png" alt="img"></div>
                    <h2 style="text-align: center;">The Students' Herald Vol. XXVIII Issue No. 1</h2>
                    <span>JANUARY, 2021</span>
                  </a>
                </li>
                <li>
                  <a href="newspapers/NEWSPAPER6.html" class="card">
                    <div class="img"><img src="styles/HOMEnewspaperscroll-styles/6.png" alt="img"></div>
                    <h2 style="text-align: center;">The Students' Herald Vol. XXVII Issue No. 1</h2>
                    <span>NOVEMBER, 2019</span>
                  </a>
                </li>
            </ul>
            <i class="fa-solid fa-angle-right"></i>
          </div>
        </section>
      </section>

      <div class="rectangle-c"></div>
      <div class="flex-row">
        <div class="articles">
          <div class="articles-d">
            <div class="flex-row-edb">
              <div class="news">
                <div class="img1"></div>
                <span class="news-article"
                  >PHINMA University of Pangasinan Leads Brigada Eskwela 2023
                  with a Commitment to Community Welfare</span
                ><span class="author-info"
                  >By Quency Gylle C. Cabral | AUGUST 2023</span
                >
              </div>
              <div class="news-e">
                <div class="news-f"></div>
                <span class="event-info"
                  >Student Leaders across PHINMA Education Network attended 5th
                  PSLS in Iloilo</span
                ><span class="author-info-10"
                  >By Jasmine Bernadette R. Bembo | NOVEMBER 2023</span
                >
              </div>
              <div class="news-11">
                <div class="frame-12"><div class="news-section"></div></div>
                <span class="news-article-13"
                  >UPang MedTech Quiz Bee Team Made Another Winning History in
                  National MedTech Quiz Show</span
                ><span class="author-info-14"
                  >By Neil Mark L. Galvez <br />SEPTEMBER 2023</span
                >
              </div>
              <div class="news-15">
                <div class="frame-16"><div class="image"></div></div>
                <span class="news-article-17"
                  >PHINMA UPang Aids Aspiring SK Candidates Through MLOB Gabay
                  Lakbay Program</span
                ><span class="author-info-18"
                  >By Trisha U. Batallones<br />OCTOBER 2023</span
                >
              </div>
            </div>
            <div class="flex-row-19">
              <div class="feature">
                <span class="news-article-1a"
                  >Rising Price of Rice: Impact on Filipino’s Dining Table</span
                ><span class="author-info-1b">By Angeline Soriano</span>
                <div class="section"></div>
                <div class="image-1c"></div>
                <span class="source-info"
                  >Picture from
                  https://www.reuters.com/world/asia-pacific/philippines-curbs-rice-prices-inflation-worry-mounts-2023-09-01/</span
                >
              </div>
              <div class="sports">
                <div class="frame-1d"></div>
                <span class="news-article-1e">Off to the races</span
                ><span class="author-info-1f">By Roxan D. Resuello</span
                ><span class="content-info"
                  >Packed with incredible and mind-blowing high-speed
                  overtakes,... it is without a doubt that Formula 1 is at the
                  top-shelf of motorsports and is therefore worthy of global
                  appreciation and attention.
                </span>
              </div>
            </div>
            <div class="flex-row-20">
              <div class="labels">
                <div class="flex-row-21">
                  <div class="news-label">
                    <span class="feature-label">CAMPUS NEWS</span>
                  </div>
                  <div class="sports-label">
                    <span class="news-label-22">FEATURE</span>
                  </div>
                  <div class="flex-row-23">
                    <span class="news-label-24">SPORTS FEATURE</span>
                  </div>
                </div>
                <div class="news-label-25">
                  <span class="flex-row-26">CAMPUS NEWS</span>
                </div>
                <div class="news-label-27">
                  <div class="news-label-28">
                    <span class="news-label-29">CAMPUS NEWS</span>
                  </div>
                  <div class="flex-row-2a">
                    <span class="news-label-2b">CAMPUS NEWS</span>
                  </div>
                </div>
                <div class="news-label-2c">
                  <div class="feature-label-2d">
                    <span class="feature-label-2e">CAMPUS NEWS</span>
                  </div>
                  <div class="flex-row-2f">
                    <span class="text-26">CAMPUS NEWS</span>
                  </div>
                  <div class="section-d">
                    <span class="text-27">FEATURE</span>
                  </div>
                  <div class="section-e">
                    <span class="text-28">FEATURE</span>
                  </div>
                </div>
                <div class="wrapper-d">
                  <div class="editorial-label">
                    <span class="opinion">OPINION</span>
                  </div>
                  <div class="editorial-label-30">
                    <span class="editorial">EDITORIAL</span>
                  </div>
                </div>
                <div class="devcom-label">
                  <span class="devcom">DEVCOM</span>
                </div>
              </div>
              <div class="editorial-31">
                <div class="pic-frame"><div class="e"></div></div>
                <span class="drainage-ngenergy"
                  >DRAINAGE NGENERGY: Ang Flood Mitigation Project ng
                  lungsod</span
                ><span class="taga-tak-ang-pawis"
                  >Taga't tak ang pawis ng mga estudyante sapaglakad mula sa
                  kanilang bus stop hanggang sa Arellano kung saan andito
                  angmain gate ng kampus. Bawa't padyak ng kanilang makintab na
                  itim na sapatos ayilang beses na pagmura dahil sa hassle ng
                  daanan patungo dito. 'E grabe namankasi ang taas ng drainage
                  system na ginagawa rito, hanggang dibdib na atakumpara sa
                  dati.</span
                >
              </div>
              <div class="news-32">
                <div class="frame-33"></div>
                <span class="life-along-the-sidewalk"
                  >Life along the Sidewalk</span
                ><span class="by-jasmine-bernadette-r-bembo"
                  >By Jasmine Bernadette R. Bembo</span
                ><span class="running-a-business"
                  >Running a business comes with different reasons among
                  business-minded people. Their reasons run deeper, for money,
                  yes, but with this money, they can provide for their
                  family...</span
                >
              </div>
            </div>
            <div class="flex-row-cb">
              <div class="news-34">
                <div class="frame-35"><div class="img-36"></div></div>
                <span class="apss-launches-paralegal-training"
                  >APSS launches Paralegal Training 2.0</span
                ><span class="by-jasmine-bernadette-r-bembo-september"
                  >By Jasmine Bernadette R. Bembo <br />SEPTEMBER 2023</span
                >
              </div>
              <div class="news-37">
                <div class="frame-38"></div>
                <span
                  class="upsto-successfully-earns-prestigious-unesco-accreditation"
                  >UPSTO Successfully Earns Prestigious UNESCO
                  Accreditation</span
                ><span class="by-neil-mark-l-galvez-september"
                  >By Neil Mark L. Galvez <br />SEPTEMBER 2023</span
                >
              </div>
              <div class="news-39">
                <div class="frame-3a"></div>
                <span class="michael-gambons-illustrious-journey"
                  >Michael Gambon's Illustrious Journey: A Yearning Ode to Albus
                  Dumbledore</span
                ><span class="by-kyzea-simon">By Kyzea Simon</span>
              </div>
              <div class="news-3b">
                <div class="frame-3c"></div>
                <span class="pass-the-mike"
                  >Pass The Mike: His Legacy to Broadcasting and beyond</span
                ><span class="by-angelo-melben-bautista"
                  >By Angelo Melben Bautista</span
                >
              </div>
            </div>
            <div class="news-3d">
              <div class="frame-3e"></div>
              <span class="mia-and-marco"
                >MIA and MARCO: AI-generated Sportscasters</span
              ><span class="by-jasmine-bernadette-r-bembo-3f"
                >By Jasmine Bernadette R. Bembo</span
              >
            </div>
          </div>
        </div>




        <div class="sections">
          <a href="sections/SECTIONSgraphics.html" class="pictures"><span class="graphics">GRAPHICS</span></a>
          <a href="sections/SECTIONSnews.html" class="news-40"><span class="news-41">NEWS</span></a>
          <a href="sections/SECTIONSfeature.html" class="feature-42"><span class="feature-43">FEATURE</span></a>
          <a href="sections/SECTIONSeditorial.html" class="editorial-44"><span class="editorial-45">EDITORIAL</span></a>
          <a href="sections/SECTIONSliterary.html" class="literary"><span class="literary-46">LITERARY</span></a>
          <a href="sections/SECTIONSsports.html" class="sports-47"><span class="sports-48">SPORTS</span></a>
        </div>
      </div>




      <div class="latest-stories">
        <div class="division">
          <div class="rectangle-49"></div>
          <div class="rectangle-4a"></div>
        </div>
        <div class="latest-stories-4b">
          <span class="latest-stories-4c">LATEST STORIES</span>
        </div>
        <div class="frame-4d">
          <div class="frame-4e">
            <div class="ed">
              <div class="frame-4f">
                <div class="frame-50">
                  <span class="editorial-51">EDITORIAL</span>
                </div>
                <span class="age-doesnt-matter"
                  >Age Doesn’t Matter, So Does Your Jail Sentence</span
                ><span class="by-isshael-espiritu">By Isshael Espiritu</span>
              </div>
            </div>
            <div class="ed-52">
              <div class="frame-53">
                <span class="editorial-54">EDITORIAL</span>
              </div>
              <span class="drawing-the-lines"
                >Drawing the lines where the lines should be</span
              ><span class="by-roxan-d-resuello">By Roxan D. Resuello</span>
            </div>
            <div class="ed-55">
              <div class="frame-56">
                <span class="editorial-57">EDITORIAL</span>
              </div>
              <span class="n-word-non-negotiable">N-word: Non-negotiable</span
              ><span class="by-kisly-moira-pera">By Kisly Moira Pera</span>
            </div>
            <div class="ed-58">
              <div class="frame-59">
                <span class="editorial-5a">EDITORIAL</span>
              </div>
              <span class="open-ceasefire-now"
                >OPEN CEASEFIRE NOW: Ang Kamalayan ay Pakikipabaka!</span
              ><span class="by-neil-galvez">By Neil Galvez</span>
            </div>
            <div class="news-5b">
              <div class="frame-5c"><span class="news-5d">NEWS</span></div>
              <span class="siyak-ya-mismo"
                >Siyak Ya Mismo: Chel Diokno arrives at PHINMA-UPang to hold
                good governance seminar</span
              ><span class="by-isshael-espiritu-5e">By Isshael Espiritu</span>
            </div>
          </div>
          <div class="frame-5f">
            <div class="news-60">
              <div class="frame-61"><span class="news-62">NEWS</span></div>
              <span class="ex-cj-sereno"
                >Ex-CJ Sereno holds good governance seminar at
                PHINMA-UPang</span
              ><span class="by-isshael-espiritu-63">By Isshael Espiritu</span>
            </div>
            <div class="news-64">
              <div class="frame-65"><span class="news-66">NEWS</span></div>
              <span class="fvr-library-records"
                >FVR library records high student visits in 2023 through
                computer logbook system</span
              ><span class="by-roxan-d-resuello-67">By Roxan D. Resuello</span>
            </div>
            <div class="news-68">
              <div class="frame-69"><button class="news-6a">NEWS</button></div>
              <span class="speed-up-makes-it"
                >SPEED-UP makes it to Diliman Debating Pre-ABP Top 4 Teams</span
              ><span class="by-isshael-espiritu-6b">By Isshael Espiritu</span>
            </div>
            <div class="news-6c">
              <div class="frame-6d"><span class="news-6e">NEWS</span></div>
              <span class="phinma-university-of-pangasinan-teams"
                >PHINMA-University of Pangasinan teams win awards in 2023 IECEP
                LUPANG SC Undergraduate Research Competition</span
              ><span class="by-isshael-espiritu-6f">By Isshael Espiritu</span>
            </div>
          </div>
        </div>


      <div class="howler">
        <div class="untitled"></div>
        <div class="herald-howler">
          <span class="herald">HERALD </span><span class="howler-1">HOWLER</span>
        </div>
        <div class="rectangle">
        <div class="howler-question">
          <span class="howler-text">“Bilang estudyante, ano ang opinyon mo sa pagtaas ng drainage system na
            ginagawa ngayon sa Arellano Street na nagdulot sa pagsara ng main
            gate ng ating unibersidad?”</span>
          </div>
        </div>
        <a href="others/heraldhowler.php" class="comment">
          <div class="material-symbols-light-comment">
            <div class="comment-icon"></div>
          </div>
          <button class="add-a-comment">Add a comment...</button>
        </a>
      </div>


        <div class="application">
          <span class="journalistic-contribution"
            >WE ARE IN NEED OF YOUR JOURNALISTIC CONTRIBUTIONS!</span
          ><span class="journalistic-contribution-7f"
            >If you are dedicated, passionate, creative, and brave student and
            has an interest in News writing, Feature writing, Column writing,
            Literary writing, Development Communication writing, Sports writing,
            Photojournalism adn Captioning, Digital Layouting, Comics, Editorial
            Cartooning, and Literary Graphics, message us in any of our social
            media accounts.</span
          ><span class="certified-campus-journalist">Be a Certified</span>
          <div class="certified-campus-journalist-80">
            <span class="campus-journalist">Campus J</span
            ><span class="campus-journalist-81">our</span
            ><span class="campus-journalist-82">nalist</span>
          </div>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSdpWiwf8qrty13yz9wv1q7QGNEllz_vNJs8hT_Udv2xuhBkjw/closedform?fbclid=IwAR1RJ2IWUvNVqDs2I2oSAyvwNX5F-M2y41Jg8O39xYQM7l7D6TuH4Hw-XNg" class="rectangle-83">JOIN US NOW!</a>
          
        </div>
        <div class="footer">
          <div class="logo-84">
            <div class="logo-85"></div>
            <div class="logo-86"></div>
            <span class="logo-87"
              >THE OFFICIAL PUBLICATION OF PHINMA UNIVERSITY OF PANGASINAN</span
            >
            <div class="icons">
              <a href="https://www.facebook.com/upangherald" class="vector-88"></a>
              <a href="others/contactUS.html" class="vector-89"></a>
              <a href="https://issuu.com/thestudentsheraldofficial?fbclid=IwAR039y8iqXxhC-Kgz-VOSO4JzdL-1Ne8zl2dpXTzWHIkEx3NfVih0aFP7-s" class="vector-8a"></a>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sh.journ@gmail.com&subject=Subject%20Line" class="vector-8b"></a>
            </div>
          </div>
          <div class="text">
            <div class="flex-row-ed">
              <span class="company">COMPANY</span
              ><span class="categories">CATEGORIES</span>
            </div>
            <div class="flex-row-d">
              <a href="#rectangle" class="home-8c">HOME</a>
              <a href="sections/SECTIONSnews.html" class="news-8d">NEWS</a>
            </div>
            <a href="sections/SECTIONSfeature.html" class="feature-8e">FEATURE</a
            ><a href="others/contactUS.html" class="contact-us-8f">CONTACT US</a
            ><a href="sections/SECTIONSeditorial.html" class="editorial-90">EDITORIAL</a
            ><a href="others/editorialboard.html" class="editorial-board">EDITORIAL BOARD</a
            ><a href="sections/SECTIONSliterary.html" class="literary-91">LITERARY</a
            ><a href="sections/SECTIONSliterary.html" class="devcom-92">DEVCOM</a
            ><a href="sections/SECTIONSgraphics.html" class="entertainment">ENTERTAINMENT</a
            ><a href="sections/SECTIONSgraphics.html" class="graphics-93">GRAPHICS</a
            ><a href="sections/SECTIONSsports.html" class="sports-94">SPORTS</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>












<!--<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;600;700&display=swap" />
    
    <link rel="stylesheet" href="style/login.css" />
  </head>
  <body>
    <div class="container">
        <h1>WELCOME</h1>
        <a href="logout.php" class="logOUT">LOGOUT</a>

</body>
</html>-->