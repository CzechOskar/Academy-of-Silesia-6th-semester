
<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wizytówka na PHPa</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09a3e987c6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Header i Nav -->
    <header class="bg-dark fixed-top">
      <nav class="container-xxl navbar navbar-expand-lg py-3 bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold fs-3" href="#">Oskar Czech</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link" href="#umiejetnosci">CZYM SIĘ ZAJMUJE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#o-mnie">O MNIE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#cv">CV</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#kontakt">KONTAKT</a>
              </li>
          </div>
        </div>
      </nav>
    </header>

    <!-- Sekcja HERO -->
    <section class="hero d-flex flex-column align-items-center justify-content-center">
      <div class="text-center">
        <h1 class="h1 text-white fw-medium fst-italic">Oskar Czech</h1>
        <h2 class="display-3">Informatyka - Akademia Śląska<br /> Projekt na PHP</h2>
        <img src="img/main-1.png" alt="" width="400" height="400" style="margin-top: 2rem;">
        <a href="#umiejetnosci" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3" style="margin: 0 2rem;">DOWIEDZ SIĘ WIĘCEJ</a>
      </div>
    </section>
    
    <!--Sekcja CZYM SIĘ ZAJMUJE -->
    <section class="container py-5" id="umiejetnosci">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2>CZYM SIĘ ZAJMUJE?</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">Na codzień pracuję w kancelarii syndyka, oto kilka z miliona rzeczy które wykonuję.</h5>
        </div>
      </div>
      <div class="row d-flex justify-content-between mx-0">
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-computer" style="width: 4rem; height: 4rem;"></i>
          <h3 class="mt-4 h4">Administracjami sprzętem oraz serwerami upadłych spółek</h3>
          <p class="text-center">Spółki które ogłaszają upadłość niejednokrotnie kontynuują przez jakiś czas swoją działalność - odpowiadam za to, aby było to możliwe zarządzając zajętym sprzętem informatycznym w tym serwerami.</p>
        </div>
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-laptop" style="width: 4rem; height: 4rem;"></i>
          <h3 class="mt-4 h4">Zarządzanie sprzętem i oprogramowaniem w kancelarii</h3>
          <p class="text-center">Nasz zespół składa się z około 30 osób (w tym księgowe, którym ciągle coś nie działa 😁), które korzystają z różnych systemów - MacOS oraz Windows.</p>
        </div>
        <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
          <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-database" style="width: 4rem; height: 4rem;"></i>
          <h3 class="mt-4 h4">Zabezpieczanie danych</h3>
          <p class="text-center">Przejmując sprzęt zabezpieczam wszelkie dane, wykonuję kopie binarnę, odzyskuję utracone zasoby oraz administruję bazami danych.</p>
        </div>
      </div>
    </section>

    <!-- Sekcja O MNIE -->
    <section class="container py-5" id="o-mnie">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center">
          <h2>POKRÓTCE O MNIE</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">Zapraszam do zapoznania się po krótce z moją osobą.</h5>
        </div>
      </div>
      <div class="row flex-row-reverse flex-md-row mt-5 pt-5" style="align-items: center;">
        <div class="col-9 col-md-5 text-md-end">
          <h5>IT to mój konik 💻</h5>
          <p>Niektórzy mężczyźni lubią majsterkować, inni naprawiać samochody, a mnie od dziecka interesują komputery (ogarniam nawet te szafe!).</p>
        </div>
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-3 border-dark-subtle img-fluid" src="img/o-mnie-1.jpg" alt="img" style="margin-left: 1rem;">
        </div>
      </div>
      <div class="row justify-content-md-end mt-5 pt-5" style="align-items: center;">
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-3 border-dark-subtle img-fluid" src="img/o-mnie-2.jpg" alt="img" style="margin-right: 1rem;">
        </div>
        <div class="col-9 col-md-5">
          <h5>Jestem ciekawy świata 🗺</h5>
          <p>Poza komputerami lubię podróże. Żyjemy w niesamowitych czasach, w których świat daje łatwo się poznać.</p>
        </div>
      </div>
      <div class="row flex-row-reverse flex-md-row mt-5 pt-5" style="align-items: center;">
        <div class="col-9 col-md-5 text-md-end">
          <h5>Zakochałem się w kinie 📽</h5>
          <p>Lubię oglądać nowości w kinie. Zaskakuje mnie poziom i jakość nowych produkcji - z ostatnich tytułów warty uwagi Oppenheimer. Sale kinowe również mają znaczenie - IMAX to oczywisty król, jednak sale Dream Heliosa też mają swój klimat.</p>
        </div>
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-3 border-dark-subtle img-fluid" src="img/o-mnie-3.jpg" alt="img" style="margin-left: 1rem;">
        </div>
      </div>
      <div class="row justify-content-md-end mt-5 pt-5" style="align-items: center;">
        <div class="col-3 col-md-2 img text-center">
          <img class="rounded-circle border border-3 border-dark-subtle img-fluid" src="img/o-mnie-4.jpg" alt="img" style="margin-right: 1rem;">
        </div>
        <div class="col-9 col-md-5">
          <h5>Nie wyrosłem z LEGO 🏰</h5>
          <p>W wolnych chwilach dalej lubię składać zestawy z LEGO! Te z lat dzieciństwa, które mi się zachowały (seria Adventures ❤) oraz nowości, które też są świętne!.</p>
        </div>
      </div>     
    </section>

    <!-- Sekcja CV -->
    <section class="container py-5" id="cv">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center">
          <h2>CV</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">Mała próbka moich umiejętności zawodowych i doświadczenia.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mt-5 order-lg-0 order-1 text-center">
          <img class="img-fluid rounded border border-3 border-dark-subtle" src="img/cv-1.jpg" alt="zdjęcie profilowe">
          <h2 class="mt-3">Oskar Czech</h2>
          <ul class="list-unstyled kontakt-info">
            <li><i class="fas fa-envelope me-2"></i> czech.oskar@gmail.com</li>
            <li><i class="fas fa-map-marker-alt me-2"></i>Sosnowiec</li>
          </ul>
          <h5>Umiejętności</h5>
          <ul class="list-unstyled">
            <li>• HTML - 4/5</li>
            <li>• CSS 4/5</li>
            <li>• JavaScript 3/5</li>
            <li>• React 2/5</li>
            <li>• Linux, MacOS, Windows 4/5</li>
            <li>• Grafika 2D - rastrowa i wektorowa 3/5</li>
            <li>• Znajomość architektury komputerów</li>
            <li>• Język Angielski - B2/C1</li>
          </ul>
        </div>
        <div class="col-lg-7 order-lg-1 order-0 mt-5 text-start">
          <h3>Edukacja</h3>
          <hr>
          <dl>
            <dt>2020 - 2024</dt>
            <dd>Akademia Śląska</dd>
            <dd>Informatyka - studia inżynierskie</dd>
          </dl>
          <h3>Certyfikaty</h3>
          <hr>
          <dl>
            <dt>2021</dt>
            <dd>Cisco - CCNAv7: Introduction to Networks</dd>
            <dt>2022</dt>
            <dd>Cisco - CCNAv7: Switching, Routing, and Wireless Essentials</dd>
            <dt>2022</dt>
            <dd>Grupa Infomax - Tworzenie stron www</dd>
            <dt>2022</dt>
            <dd>Red Hat - System Administration I (RH124)</dd>
            <dt>2023</dt>
            <dd>Red Hat - System Administration II (RH134)</dd>
            <dt>2023</dt>
            <dd>NDG - Linux Essentials</dd>
          </dl>
          <h3>Doświadczenie zawodowe</h3>
          <hr>
          <dl>
            <dt>marzec 2023 - nadal</dt>
            <dd>Specjalista IT</dd>
            <dd>Kancelaria Syndyka - top secret 😶</dd>
          </dl>
        </div>
      </div>      
    </section>

     <!-- Sekcja KONTAKT -->
     <section class="py-5" id="kontakt">
      <div class="container-xxl py-5">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2>Skontaktuj się ze mną!</h2>
          <h5 class="fw-normal py-2 fst-italic">Jesteś zainteresowany kontaktem ze mną? Wypełnij ten formularz i bądźmy w kontakcie!</h5>
        </div>
        <div class="row pt-4 mt-5">
          <div class="col-12">
            <form action="#" method="POST">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name*" required>
                    <label for="floatingInput">Podaj imię*</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Enter Email*" required>
                    <label for="floatingEmail">Podaj email*</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingPassword" placeholder="Enter Phone*" required>
                    <label for="floatingPassword">Podaj Phone*</label>
                  </div>
                </div>
                <div class="form-floating col-lg-6">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 205px" required></textarea>
                  <label for="floatingMessage" class="px-4">Podaj treść wiadomości*</label>
                </div>
                <div class="col-12 mt-5 d-flex justify-content-center">
                  <button class="btn btn-primary">WYŚLIJ</button>
                </div>
              </div>
  
            </form>
          </div>
        </div>
       </div>
     </section>

     <!-- Footer -->
     <!-- <footer>
      <div class="container-xxl flex-wrap pt-3 d-flex align-items-center justify-content-center justify-content-md-between">
        <p>Copyright © 2023 Oskar Czech</p>
      </div>
     </footer> -->
    
     <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
