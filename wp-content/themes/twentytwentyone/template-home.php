<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- #### navbar #### -->
<nav class="page__nav">
  <div class="page__nav-logo">
    <a href="./index.html" class="logo">
      <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" width="110" height="44.001" viewBox="0 0 121.972 41.001">
        <g id="Group_2" data-name="Group 2">
          <path id="Path_1" data-name="Path 1" d="M88.164,89.306a.964.964,0,0,1-.792-.362,1.016,1.016,0,0,1-.205-.862L93.422,58.8a1.445,1.445,0,0,1,.521-.86,1.417,1.417,0,0,1,.93-.364H107.7a20.215,20.215,0,0,1,5.371.681,11.684,11.684,0,0,1,4.215,2.063,7.482,7.482,0,0,1,2.47,3.466,9.118,9.118,0,0,1,.136,4.894q-1.179,5.621-4.85,8.181t-10.152,2.561h-4.079l-1.858,8.656a1.446,1.446,0,0,1-.522.862,1.414,1.414,0,0,1-.928.362ZM102.35,71.042h3.174a2.638,2.638,0,0,0,1.517-.566,3.089,3.089,0,0,0,1.111-1.88,3.5,3.5,0,0,0,.069-1.18,1.779,1.779,0,0,0-.432-1,1.5,1.5,0,0,0-1.179-.409h-3.172Z" transform="translate(-87.146 -57.128)" fill="#03309b" />
          <path id="Path_2" data-name="Path 2" d="M103.75,89.306a.765.765,0,0,1-.726-.43.855.855,0,0,1,.045-.884L119.3,59.078a3.609,3.609,0,0,1,.862-1,2.235,2.235,0,0,1,1.5-.5h10.061a1.536,1.536,0,0,1,1.292.5,1.919,1.919,0,0,1,.43,1l3.988,28.914a.992.992,0,0,1-.317.952,1.335,1.335,0,0,1-.907.362h-8.158a1.33,1.33,0,0,1-1.541-1.132l-.453-2.992H116.3l-1.722,2.992a3.59,3.59,0,0,1-.658.747,1.962,1.962,0,0,1-1.337.385Zm16.724-12.961H125.6l-.771-8.43Z" transform="translate(-79.115 -57.128)" fill="#03309b" />
          <g id="Group_1" data-name="Group 1" transform="translate(56.093)">
            <path id="Path_3" data-name="Path 3" d="M164.968,57.877a.819.819,0,0,0-.656-.3H154.3a2.234,2.234,0,0,0-1.224.318,2.863,2.863,0,0,0-.771.679l-7.613,9.744h-.726L146,58.8a1.018,1.018,0,0,0-.2-.86.974.974,0,0,0-.794-.364h-17.63a1.416,1.416,0,0,0-.928.364,1.44,1.44,0,0,0-.522.86l-1.586,7.3a1.013,1.013,0,0,0,.2.86.966.966,0,0,0,.794.364h7.515l-4.434,20.756a1.027,1.027,0,0,0,.2.884,1,1,0,0,0,.794.34H138.3a1.421,1.421,0,0,0,.93-.362,1.444,1.444,0,0,0,.521-.862l2.086-9.788h1.541l3.444,9.969a4.335,4.335,0,0,0,.432.613,1.513,1.513,0,0,0,1.246.43h9.88a1.193,1.193,0,0,0,.77-.294,1.035,1.035,0,0,0,.407-.7.706.706,0,0,0,0-.5L153.8,72.764l11.058-13.686a1.124,1.124,0,0,0,.272-.5A.771.771,0,0,0,164.968,57.877Z" transform="translate(-124.317 -57.128)" fill="#03309b" />
            <path id="Path_4" data-name="Path 4" d="M175.5,60.5a13.236,13.236,0,0,0-4.579-2.4,19.048,19.048,0,0,0-5.642-.816q-7.341,0-11.353,3.241a16.069,16.069,0,0,0-5.17,8h3.614c.691,0,1.387.343,1.25,1.249L152.139,76.7a1.35,1.35,0,0,1-1.249,1.249H146.7A9.926,9.926,0,0,0,147.124,83a8.939,8.939,0,0,0,2.81,3.828,13.061,13.061,0,0,0,4.577,2.312,20.159,20.159,0,0,0,5.644.771q7.341,0,11.33-3.083a16.1,16.1,0,0,0,5.528-9.154q.455-1.858.907-3.943t.771-4.034a10.06,10.06,0,0,0-.385-5.3A9.27,9.27,0,0,0,175.5,60.5Zm-8.59,9.29q-.317,1.858-.724,3.762t-.907,3.853a4.915,4.915,0,0,1-1.541,2.786,3.966,3.966,0,0,1-2.584.884,2.635,2.635,0,0,1-2.2-.884,3.5,3.5,0,0,1-.386-2.786q.362-1.949.771-3.853t.862-3.762A5.135,5.135,0,0,1,161.786,67a3.9,3.9,0,0,1,2.538-.884,2.719,2.719,0,0,1,2.2.884A3.278,3.278,0,0,1,166.907,69.79Z" transform="translate(-112.992 -57.281)" fill="#03309b" />
          </g>
        </g>
        <path id="Path_5" data-name="Path 5" d="M92.64,82.632H91.386v3.08h-.872v-3.08H89.255v-.764H92.64Z" transform="translate(-86.073 -44.765)" fill="#03309b" />
        <path id="Path_6" data-name="Path 6" d="M110.516,84.48h-1.56l-.343,1.231h-.883l1.106-3.844h1.8l1.112,3.844h-.883Zm-.213-.764-.459-1.63h-.217l-.459,1.63Z" transform="translate(-76.668 -44.765)" fill="#03309b" />
        <path id="Path_7" data-name="Path 7" d="M117.142,81.868h1.717l1.162,3.625h.217l-.163-.545v-3.08h.872v3.844h-1.717l-1.16-3.625h-.219l.163.545v3.08h-.872Z" transform="translate(-71.876 -44.765)" fill="#03309b" />
        <path id="Path_8" data-name="Path 8" d="M128.471,85.784c-1.384,0-1.9-.567-1.9-1.538h.872c0,.59.294.774,1.056.774.563,0,.747-.13.747-.338,0-.278-.468-.4-1.029-.593-.813-.273-1.473-.49-1.473-1.243,0-.653.518-1.014,1.511-1.014,1.177,0,1.707.6,1.707,1.363h-.872c0-.468-.361-.6-.835-.6-.392,0-.638.088-.638.284,0,.174.094.24.709.447.708.24,1.793.545,1.793,1.346C130.118,85.332,129.655,85.784,128.471,85.784Z" transform="translate(-67.077 -44.783)" fill="#03309b" />
        <path id="Path_9" data-name="Path 9" d="M139.155,83.216c0,1.166-.741,1.351-1.711,1.351h-.507v1.145h-.872V81.868h1.379C138.414,81.868,139.155,82.054,139.155,83.216Zm-.872,0c0-.53-.267-.584-.785-.584h-.561V83.8h.561C138.015,83.8,138.282,83.75,138.282,83.216Z" transform="translate(-62.244 -44.765)" fill="#03309b" />
        <path id="Path_10" data-name="Path 10" d="M147.094,81.832a1.976,1.976,0,1,1-1.963,1.974A1.87,1.87,0,0,1,147.094,81.832Zm0,3.189c.724,0,1.085-.474,1.085-1.215s-.361-1.21-1.085-1.21S146,83.069,146,83.806,146.368,85.021,147.094,85.021Z" transform="translate(-57.628 -44.783)" fill="#03309b" />
        <path id="Path_11" data-name="Path 11" d="M167.378,82.632h-1.254v3.08h-.872v-3.08h-1.259v-.764h3.385Z" transform="translate(-48.026 -44.765)" fill="#03309b" />
        <path id="Path_12" data-name="Path 12" d="M154.677,85.712V81.868h1.879a1.562,1.562,0,0,1,.534.089,1.258,1.258,0,0,1,.421.243,1.117,1.117,0,0,1,.273.377,1.152,1.152,0,0,1,.1.483,1.088,1.088,0,0,1-.205.647,1.218,1.218,0,0,1-.546.423l.85,1.582h-.889l-.752-1.471h-.8v1.471Zm1.806-3.157h-.94v1.032h.94a.624.624,0,0,0,.432-.143.511.511,0,0,0,0-.745A.631.631,0,0,0,156.483,82.555Z" transform="translate(-52.768 -44.765)" fill="#03309b" />
        <path id="Path_13" data-name="Path 13" d="M98.623,85.712V81.868H100.5a1.556,1.556,0,0,1,.534.089,1.258,1.258,0,0,1,.421.243,1.142,1.142,0,0,1,.275.377,1.175,1.175,0,0,1,.1.483,1.077,1.077,0,0,1-.205.647,1.218,1.218,0,0,1-.546.423l.851,1.582h-.89l-.752-1.471h-.8v1.471Zm1.806-3.157h-.94v1.032h.94a.624.624,0,0,0,.432-.143.511.511,0,0,0,0-.745A.631.631,0,0,0,100.429,82.555Z" transform="translate(-81.304 -44.765)" fill="#03309b" />
      </svg>
    </a>
  </div>
  <ul class="page__nav-list">
    <li class="page__nav-list-item"><a href="#about" class="page__nav-list-item-link">O firmie</a></li>
    <li class="page__nav-list-item"><a href="#transport" class="page__nav-list-item-link">Usługi transportowe</a></li>
    <li class="page__nav-list-item"><a href="#flota" class="page__nav-list-item-link">Flota</a></li>
    <li class="page__nav-list-item"><a href="#uslugi" class="page__nav-list-item-link">Usługi</a></li>
    <li class="page__nav-list-item"><a href="#contact" class="page__nav-list-item-link btn" id="contact-btn">Kontakt</a></li>
    <li class="page__nav-list-item" id="social-button">
      <a href="https://www.facebook.com" class="page__nav-list-item-link" target="_blank">
        <i class="fab fa-facebook"></i>
      </a>
    </li>
  </ul>
  <div class="menu-btn">
    <div class="menu-btn__burger"> </div>
  </div>
</nav>

<!-- #### header #### -->
<header class="page__header">
  <div class="page__header-top">
    <div class="page__header-top-left">
      <h1>Bezpeczny, pewny i szybki transport</h1>
      <p class="text">
        Profesjonalne usługi z zakresu transportu drogowego, dopasowane do potrzeb i indywidualnych wymagań.
        Solidna firma z doświadczeniem na rynku.
      </p>
    </div>
    <div class="page__header-top-right">
      <div class="swiper-container swiper-header-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src='https://source.unsplash.com/random/400x600/?car' alt='image' />
          </div>
          <div class="swiper-slide">
            <img src='https://source.unsplash.com/random/400x600/?car' alt='image' />
          </div>
          <div class="swiper-slide">
            <img src='https://source.unsplash.com/random/400x600/?car' alt='image' />
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="btn download">Pobierz ofertę</a>
  <div class="page__header-bottom">
    <div class="page__header-bottom-img-box" data-aos="fade-up" data-aos-duration="1000">
      <img src="../images/content/header-bottom-img.jpg" alt="wheel">
    </div>
    <div class="page__header-bottom-content">
      <ul class="page__header-bottom-content-list" data-aos="fade-up" data-aos-duration="1000">
        <li class="page__header-bottom-content-list-item">
          <img src="../images/content/truck.svg" alt="">
          <span>Błyskawiczny transport towarów na wskazany adres. Dostawa 7/24 na terenie całego kraju </span>
        </li>
        <li class="page__header-bottom-content-list-item">
          <img src="../images/content/like.svg" alt="">
          <span>Najwysza jakość usług, potwierdzona dziesiątkami zadowolonych klientów </span>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- #### main #### -->
<main role="main"></main>
<section id="about" class="sec sec1 about-sec">
  <div class="container">
    <h2>
      Kompleksowo obsługujemy naszych klientów
      w zakresie transportu drogowego i spedycji
    </h2>
    <p class="text">
      Jesteśmy dynamicznie rozwijającą się firmą, prowadzimy działania specjalizując się w usługach przewozowych i spedycyjnych. Swoją działalność na rynku transportowym rozpoczęliśmy w 2014 roku.
      W naszych działaniach jesteśmy niezawodni, cieszymy się uznaniem i zaufaniem Klientów w kraju, jak również za granicą. Naszą firmę wyróżnia indywidualne podejście do Klienta i chęć sprostania wszelkim jego wymaganiom.
    </p>
  </div>
  <div class="row counter__box-container container">
    <div class="counter__box" data-aos="fade-up" data-aos-delay="100">
      <span class="counter" data-target="24">0</span>
      <h4>Godziny na dobę</h4>
      <p class="text">
        Pracujemy 24 godziny na dobę. Nasi kierowcy dostarczają towary biorąc pod uwagę wygodę klienta.
      </p>
    </div>
    <div class="counter__box" data-aos="fade-up" data-aos-delay="200">
      <span class="counter" data-target="6">0</span>
      <h4>Pojazdów we flocie</h4>
      <p class="text">
        Nasza flota pojazdów składa się z aut o różnych gabarytach jak i ładowności.
      </p>
    </div>
    <div class="counter__box" data-aos="fade-up" data-aos-delay="300">
      <span class="counter" data-target="7">0</span>
      <h4>Dni w tygodniu</h4>
      <p class="text">
        Transportujemy towary każdego dnia, aby zapewnić szybką dostawę do klienta.
      </p>
    </div>
  </div>
  <div class="row btn-container">
    <a href="#opinion-header" class="btn">Sprawdź opinie</a>
    <a id="download" href="#">Pobierz regulamin <img src="../images/content/regulamin.svg" alt="icon"> </a>
  </div>
</section>
<section id="transport" class="sec sec2 transport-sec">
  <div class="container transport-container">
    <h2>Usługi transportowe</h2>
    <div class="logistic__box">
      <div class="logistic__box-left">
        <h4>Postaw na sprawną logistykę i podnieś efektywność swojej firmy</h4>
        <p>
          Dobrze wiemy, że kluczowym aspektem rozwoju przedsiębiorstwa, jest czas i realizowanie dostaw zgodnie z charmonogramem, dlatego oferujemy rozwiązania dopasowane do wymagań klientów.
        </p>
        <div class="transport__list-container">
          <ul class="transport__list-left">
            <li class="transport__list-item">
              <img src="../images/content/clock.svg" alt=""> <span>
                Oferujemy transporty
                ekspresowe
              </span>
            </li>
            <li class="transport__list-item">
              <img src="../images/content/phone.svg" alt=""> <span>
                Zawsze w stałym kontakcie z klientem.
              </span>
            </li>
          </ul>
          <ul class="transport__list-right">
            <li class="transport__list-item">
              <img src="../images/content/list.svg" alt=""> <span>
                Ładunki całopojazdowe, częściowe i drobnicowe
              </span>
            </li>
            <li class="transport__list-item">
              <img src="../images/content/medal.svg" alt=""> <span>
                Każdy transport jest ubezpieczony.
              </span>
            </li>
          </ul>
        </div>
        <div class="magazine">
          <img src='../images/content/paleciak.jpg' alt='image' />
        </div>
      </div>
      <div class="logistic__box-right">
        <img src="../images/content/teczka1.jpg" alt="tir">
      </div>
    </div>
    <div class="row uslugi" id="uslugi">
      <h2>Solidna i profesjonalna firma transportowa, oferująca usługi najwyszych standardów</h2>
      <p class="text">
        Nasze wysiłki skoncentrowane są na byciu najbardziej elastycznym i godnym zaufania dostawcą usług
        z zakresu transportu drogowego. Zapewniamy spersonalizowaną obsługę, wiedzę i doświadczenie na rynku
      </p>
    </div>
    <div class="row profess-box-container">
      <div class="profess-box" data-aos="fade-up" data-aos-delay="100">
        <img src="../images/content/truck.svg" alt="">
        <span>
          Bezpieczeństwo transportu i możliwość dostarczenia już na drugi dzień
        </span>
      </div>
      <div class="profess-box" data-aos="fade-up" data-aos-delay="200">
        <img src="../images/content/clock.svg" alt="">
        <span>
          Oferujemy usługi błyskawiczne, gwarantujemy najkrótszy czas dostawy towaru.
        </span>
      </div>
      <div class="profess-box" data-aos="fade-up" data-aos-delay="300">
        <img src="../images/content/home-ok.svg" alt="">
        <span>
          W naszych usługach znajduje się tównież transport gabarytów niestandardowych.
        </span>
      </div>
      <div class="profess-box" data-aos="fade-up" data-aos-delay="400">
        <img src="../images/content/hands.svg" alt="">
        <span>
          Wspólpraca z nami to gwarancja jakości dostarczanych usług.
        </span>
      </div>
    </div>
  </div>
</section>
<section id="flota" class="sec fleet-sec sec3">
  <div class="container">
    <h2>Flota pojazdów</h2>
    <p>
      Dzięki rozbudowanej flocie, codziennym transportom w całym kraju, strategicznym decyzjom oraz dopasowanym do potrzeb klientów rozwiązaniom, dbamy o to, aby Twój ładunek został dostarczony na czas. Gdy najważniejszy jest czas,
      nasze ekspresowe usługi transportowe są najlepszym rozwiązaniem.
    </p>
    <div class="row fleet-slider">
      <div class="swiper-container swiper-fleet-container ">
        <div class="swiper-wrapper">
          <div class="swiper-slide fleet-slide">
            <img src='../images/content/ss1.jpg' alt='image' />
          </div>
          <div class="swiper-slide fleet-slide">
            <img src='../images/content/ss2.jpg' alt='image' />
          </div>
          <div class="swiper-slide fleet-slide">
            <img src='../images/content/ss3.png' alt='image' />
          </div>
        </div>
      </div>
    </div>
    <h3 id="opinion-header">Opinie klientów mówią same za siebie</h3>
    <p class="text">
      Kapitałem naszej firmy są ludzie i zadowoleni klienci, dlatego nasz zespół składa się z doświadczonych, ambitnych i otwartych osób, które nie boją się nowych wyzwań, co pozwala im na szybkość i pełen profesjonalizm w działaniach. Elastyczne podejście do każdego zlecenia i szyte na miarę usługi owocują zadowoleniem naszych klientów.
    </p>
  </div>
  <div class="row slider-opinion">
    <div class="container">
      <div class="swiper-container swiper-opinion-contianer" data-aos="fade-up" data-aos-duration="1000">
        <div class="swiper-wrapper">
          <div class="swiper-slide opinion-slide">
            <div class="opinion-content">
              <p class="text">
                Firma transportowa, na którą można liczyć. Świetny kontakt, atrakcyjne ceny i transport zawsze na czas. Śmiało mogę polecić współpracę z tą firmą.
              </p>
              <span class="opinion-name">Jan Kowalski</span>
            </div>
          </div>
          <div class="swiper-slide opinion-slide">
            <div class="opinion-content">
              <p class="text">
                Firma transportowa, na którą można liczyć. Świetny kontakt, atrakcyjne ceny i transport zawsze na czas. Śmiało mogę polecić współpracę z tą firmą.
              </p>
              <span class="opinion-name">Jan Kowalski</span>
            </div>
          </div>
          <div class="swiper-slide opinion-slide  ">
            <div class="opinion-content">
              <p class="text">
                Firma transportowa, na którą można liczyć. Świetny kontakt, atrakcyjne ceny i transport zawsze na czas. Śmiało mogę polecić współpracę z tą firmą.
              </p>
              <span class="opinion-name">Jan Kowalski</span>
            </div>
          </div>
          <div class="swiper-slide opinion-slide">
            <div class="opinion-content">
              <p class="text">
                Firma transportowa, na którą można liczyć. Świetny kontakt, atrakcyjne ceny i transport zawsze na czas. Śmiało mogę polecić współpracę z tą firmą.
              </p>
              <span class="opinion-name">Jan Kowalski</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contact" class="sec sec5 contact-sec">
  <div class="container">
    <h2>Kontakt</h2>
    <div class="contact-wrapper">
      <div class="contact__content-box">
        <p class="text">
          W celu uzyskania szczegółowych informacji na temat zakesu usłóg, cen oraz możliwości transportu, prosimy o kontakt telefoniczny pod poniższymi numerami. Zapraszamy do kontaktu mailowego, jaki przez profil na portalu facebook.
        </p>
        <div class="contact-lis-wrapper">
          <div class="row contact-list-box">
            <ul class="contact-us-list">
              <li class="contact-us-list-item">NIP 6661991137</li>
              <li class="contact-us-list-item">REGON: 302821507</li>
            </ul>
          </div>
          <p class="text">Numer telefonu kontaktowego:</p>
          <div class="row contact-list-box">
            <ul class="contact-phones-list">
              <li class="contact-phones-list-item">
                <i class="fa fa-phone"></i>
                6661991137</li>
              <li class="contact-phones-list-item"> 302821507</li>
            </ul>
          </div>
          <p class="text mail-text">Adres e-mail:</p>
          <div class="row email-box">
            <i class="fa fa-envelope"></i>
            <a href="mail:kontakt@pakotransport.pl">
              kontakt@pakotransport.pl
            </a>
          </div>
        </div>
      </div>
      <div class="contact__map-box" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/content/polska-kontakt.png" alt="mapa">
      </div>
    </div>
  </div>
</section>

<!-- #### footer #### -->
<footer class="page__footer">
  <div class="container footer-container">
    <div class="footer-box-left">
      <a href="./index.html" class="logo">
        <svg id="Group_3" data-name="Group 3" xmlns="http://www.w3.org/2000/svg" width="80" height="25.001" viewBox="0 0 121.972 41.001">
          <g id="Group_2" data-name="Group 2">
            <path id="Path_1" data-name="Path 1" d="M88.164,89.306a.964.964,0,0,1-.792-.362,1.016,1.016,0,0,1-.205-.862L93.422,58.8a1.445,1.445,0,0,1,.521-.86,1.417,1.417,0,0,1,.93-.364H107.7a20.215,20.215,0,0,1,5.371.681,11.684,11.684,0,0,1,4.215,2.063,7.482,7.482,0,0,1,2.47,3.466,9.118,9.118,0,0,1,.136,4.894q-1.179,5.621-4.85,8.181t-10.152,2.561h-4.079l-1.858,8.656a1.446,1.446,0,0,1-.522.862,1.414,1.414,0,0,1-.928.362ZM102.35,71.042h3.174a2.638,2.638,0,0,0,1.517-.566,3.089,3.089,0,0,0,1.111-1.88,3.5,3.5,0,0,0,.069-1.18,1.779,1.779,0,0,0-.432-1,1.5,1.5,0,0,0-1.179-.409h-3.172Z" transform="translate(-87.146 -57.128)" fill="#03309b" />
            <path id="Path_2" data-name="Path 2" d="M103.75,89.306a.765.765,0,0,1-.726-.43.855.855,0,0,1,.045-.884L119.3,59.078a3.609,3.609,0,0,1,.862-1,2.235,2.235,0,0,1,1.5-.5h10.061a1.536,1.536,0,0,1,1.292.5,1.919,1.919,0,0,1,.43,1l3.988,28.914a.992.992,0,0,1-.317.952,1.335,1.335,0,0,1-.907.362h-8.158a1.33,1.33,0,0,1-1.541-1.132l-.453-2.992H116.3l-1.722,2.992a3.59,3.59,0,0,1-.658.747,1.962,1.962,0,0,1-1.337.385Zm16.724-12.961H125.6l-.771-8.43Z" transform="translate(-79.115 -57.128)" fill="#03309b" />
            <g id="Group_1" data-name="Group 1" transform="translate(56.093)">
              <path id="Path_3" data-name="Path 3" d="M164.968,57.877a.819.819,0,0,0-.656-.3H154.3a2.234,2.234,0,0,0-1.224.318,2.863,2.863,0,0,0-.771.679l-7.613,9.744h-.726L146,58.8a1.018,1.018,0,0,0-.2-.86.974.974,0,0,0-.794-.364h-17.63a1.416,1.416,0,0,0-.928.364,1.44,1.44,0,0,0-.522.86l-1.586,7.3a1.013,1.013,0,0,0,.2.86.966.966,0,0,0,.794.364h7.515l-4.434,20.756a1.027,1.027,0,0,0,.2.884,1,1,0,0,0,.794.34H138.3a1.421,1.421,0,0,0,.93-.362,1.444,1.444,0,0,0,.521-.862l2.086-9.788h1.541l3.444,9.969a4.335,4.335,0,0,0,.432.613,1.513,1.513,0,0,0,1.246.43h9.88a1.193,1.193,0,0,0,.77-.294,1.035,1.035,0,0,0,.407-.7.706.706,0,0,0,0-.5L153.8,72.764l11.058-13.686a1.124,1.124,0,0,0,.272-.5A.771.771,0,0,0,164.968,57.877Z" transform="translate(-124.317 -57.128)" fill="#03309b" />
              <path id="Path_4" data-name="Path 4" d="M175.5,60.5a13.236,13.236,0,0,0-4.579-2.4,19.048,19.048,0,0,0-5.642-.816q-7.341,0-11.353,3.241a16.069,16.069,0,0,0-5.17,8h3.614c.691,0,1.387.343,1.25,1.249L152.139,76.7a1.35,1.35,0,0,1-1.249,1.249H146.7A9.926,9.926,0,0,0,147.124,83a8.939,8.939,0,0,0,2.81,3.828,13.061,13.061,0,0,0,4.577,2.312,20.159,20.159,0,0,0,5.644.771q7.341,0,11.33-3.083a16.1,16.1,0,0,0,5.528-9.154q.455-1.858.907-3.943t.771-4.034a10.06,10.06,0,0,0-.385-5.3A9.27,9.27,0,0,0,175.5,60.5Zm-8.59,9.29q-.317,1.858-.724,3.762t-.907,3.853a4.915,4.915,0,0,1-1.541,2.786,3.966,3.966,0,0,1-2.584.884,2.635,2.635,0,0,1-2.2-.884,3.5,3.5,0,0,1-.386-2.786q.362-1.949.771-3.853t.862-3.762A5.135,5.135,0,0,1,161.786,67a3.9,3.9,0,0,1,2.538-.884,2.719,2.719,0,0,1,2.2.884A3.278,3.278,0,0,1,166.907,69.79Z" transform="translate(-112.992 -57.281)" fill="#03309b" />
            </g>
          </g>
          <path id="Path_5" data-name="Path 5" d="M92.64,82.632H91.386v3.08h-.872v-3.08H89.255v-.764H92.64Z" transform="translate(-86.073 -44.765)" fill="#03309b" />
          <path id="Path_6" data-name="Path 6" d="M110.516,84.48h-1.56l-.343,1.231h-.883l1.106-3.844h1.8l1.112,3.844h-.883Zm-.213-.764-.459-1.63h-.217l-.459,1.63Z" transform="translate(-76.668 -44.765)" fill="#03309b" />
          <path id="Path_7" data-name="Path 7" d="M117.142,81.868h1.717l1.162,3.625h.217l-.163-.545v-3.08h.872v3.844h-1.717l-1.16-3.625h-.219l.163.545v3.08h-.872Z" transform="translate(-71.876 -44.765)" fill="#03309b" />
          <path id="Path_8" data-name="Path 8" d="M128.471,85.784c-1.384,0-1.9-.567-1.9-1.538h.872c0,.59.294.774,1.056.774.563,0,.747-.13.747-.338,0-.278-.468-.4-1.029-.593-.813-.273-1.473-.49-1.473-1.243,0-.653.518-1.014,1.511-1.014,1.177,0,1.707.6,1.707,1.363h-.872c0-.468-.361-.6-.835-.6-.392,0-.638.088-.638.284,0,.174.094.24.709.447.708.24,1.793.545,1.793,1.346C130.118,85.332,129.655,85.784,128.471,85.784Z" transform="translate(-67.077 -44.783)" fill="#03309b" />
          <path id="Path_9" data-name="Path 9" d="M139.155,83.216c0,1.166-.741,1.351-1.711,1.351h-.507v1.145h-.872V81.868h1.379C138.414,81.868,139.155,82.054,139.155,83.216Zm-.872,0c0-.53-.267-.584-.785-.584h-.561V83.8h.561C138.015,83.8,138.282,83.75,138.282,83.216Z" transform="translate(-62.244 -44.765)" fill="#03309b" />
          <path id="Path_10" data-name="Path 10" d="M147.094,81.832a1.976,1.976,0,1,1-1.963,1.974A1.87,1.87,0,0,1,147.094,81.832Zm0,3.189c.724,0,1.085-.474,1.085-1.215s-.361-1.21-1.085-1.21S146,83.069,146,83.806,146.368,85.021,147.094,85.021Z" transform="translate(-57.628 -44.783)" fill="#03309b" />
          <path id="Path_11" data-name="Path 11" d="M167.378,82.632h-1.254v3.08h-.872v-3.08h-1.259v-.764h3.385Z" transform="translate(-48.026 -44.765)" fill="#03309b" />
          <path id="Path_12" data-name="Path 12" d="M154.677,85.712V81.868h1.879a1.562,1.562,0,0,1,.534.089,1.258,1.258,0,0,1,.421.243,1.117,1.117,0,0,1,.273.377,1.152,1.152,0,0,1,.1.483,1.088,1.088,0,0,1-.205.647,1.218,1.218,0,0,1-.546.423l.85,1.582h-.889l-.752-1.471h-.8v1.471Zm1.806-3.157h-.94v1.032h.94a.624.624,0,0,0,.432-.143.511.511,0,0,0,0-.745A.631.631,0,0,0,156.483,82.555Z" transform="translate(-52.768 -44.765)" fill="#03309b" />
          <path id="Path_13" data-name="Path 13" d="M98.623,85.712V81.868H100.5a1.556,1.556,0,0,1,.534.089,1.258,1.258,0,0,1,.421.243,1.142,1.142,0,0,1,.275.377,1.175,1.175,0,0,1,.1.483,1.077,1.077,0,0,1-.205.647,1.218,1.218,0,0,1-.546.423l.851,1.582h-.89l-.752-1.471h-.8v1.471Zm1.806-3.157h-.94v1.032h.94a.624.624,0,0,0,.432-.143.511.511,0,0,0,0-.745A.631.631,0,0,0,100.429,82.555Z" transform="translate(-81.304 -44.765)" fill="#03309b" />
        </svg>
      </a>

    </div>
    <div class="footer-box-right">
      <ul class="footer-list-top">
        <li class="footer-list-top-item"><a href="" class="footer-list-top-item-link">Flota</a></li>
        <li class="footer-list-top-item"><a href="" class="footer-list-top-item-link">Regulamin</a></li>
        <li class="footer-list-top-item"><a href="" class="footer-list-top-item-link">Przydatne informacje</a></li>
        <li class="footer-list-top-item"><a href="" class="footer-list-top-item-link">KRS</a></li>
        <li class="footer-list-top-item"><a href="" class="footer-list-top-item-link">Oferta</a></li>
      </ul>
      <ul class="footer-list-bottom">
        <li class="footer-list-bottom-item"><a href="" class="footer-list-bottom-item-link">Polityka cookies</a></li>
        <li class="footer-list-bottom-item"><a href="" class="footer-list-bottom-item-link">Usługi transportowe</a></li>
        <li class="footer-list-bottom-item"><a href="" class="footer-list-bottom-item-link">O firmie</a></li>
        <li class="footer-list-bottom-item"><a href="" class="footer-list-bottom-item-link">Usługi</a></li>
      </ul>
    </div>
  </div>
</footer>


<!-- ######### swiper slider cdn ##########  -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
import '../scss/app.scss'
// import Swiper JS
// import Swiper from 'swiper'
// import Swiper styles
// import 'swiper/swiper-bundle.css'
/* Demo JS */
import '../../node_modules/waypoints/src/waypoint'
import $ from 'jquery'
// import 'aos'
// import '../../node_modules/aos/dist/aos.js'
import {
  navChange,
  logoChange,
  contactBtnChange
} from './nav.js'

window.$ = $
// navChange()
// logoChange()
// contactBtnChange()

/* Your JS Code goes here */

// aos:

AOS.init()


// ######### vanilla ########## //

// ---- swiper slider:

var swiper_header = new Swiper('.swiper-header-container', {
  slidesPerView: 3,
  spaceBetween: 30,
  arrows: true,
  loop: true,
  autoplay: true,
  breakpoints: {
    640: {
      slidesPerView: 1
      // spaceBetween: 20
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  }

})

var swiper = new Swiper('.swiper-fleet-container', {
  slidesPerView: 3,
  spaceBetween: 30,
  arrows: true,
  loop: true,
  autoplay: true,
  breakpoints: {
    270: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  }

})

var swiper_opininon = new Swiper('.swiper-opinion-contianer', {
  slidesPerView: 2,
  spaceBetween: 20,
  loop: true,
  autoplay: true,
  breakpoints: {
    270: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 10
    }
  }
})

// ---- counter-up:

const counters = document.querySelectorAll('.counter')
const speed = 6000

counters.forEach(counter => {
  const updCount = () => {
    const target = counter.getAttribute('data-target')
    const count = +counter.innerText

    const score = target / speed

    if (count < target) {
      counter.innerText = count + Math.ceil(score)
      setTimeout(updCount, 2)
    } else {
      counter.innerText = target
    }
  }
  updCount()
})

// ######### jQuery ########## //

$(function() {
  //  totop button scrolling

  if ($('#totop').length) {
    var scrollTrigger = 300 // px
    var backToTop = function() {
      var scrollTop = $(window).scrollTop()
      if (scrollTop > scrollTrigger) {
        $('#totop').addClass('showTop')
      } else {
        $('#totop').removeClass('showTop')
      }
    }
    backToTop()
    $(window).on('scroll', function() {
      backToTop()
    })
    $('#totop').on('click', function(e) {
      e.preventDefault()
      $('html,body').animate({
        scrollTop: 0
      }, 700)
    })
  }

  // counters:

  // smooth scroll to section:

  $('a').on('click', function(event) {
    $('.page__nav-list').removeClass('navOpen')
    $('.menu-btn').removeClass('open')

    if (this.hash !== '') {
      event.preventDefault()

      var hash = this.hash

      $('html, body').animate({
        scrollTop: $(hash).offset().top - $('.page__nav').height()
      }, 800, function() {
        window.location.hash = hash
      })
    } // End if
  })

  console.log($('.page__nav').height())
})
</script>




<?php get_footer(); ?>