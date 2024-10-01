@extends('layouts.app')

@section('title', 'Page d\'accueil')

@section('content')
<!-- Main Section -->
<div class="intro-text__h">Développeur</div>
<section class="main">
    <div class="profile-card">
        <img src="{{ asset('images/me2.png') }}" alt="Profile Image" class="profile-img">
        <h2>David</h2>
        <p>Développeur Full-Stack</p>
        <ul class="contact-info">
            <li><img src="{{ asset('images/email.svg') }}" alt="Mon logo">david.grougi@gmail.com</li>
            <li><img src="{{ asset('images/locate.svg') }}" alt="Mon logo">France / Normandie / Caen</li>
            <li><img src="{{ asset('images/briefcase.svg') }}" alt="Mon logo">Full-time / Freelancer</li>
            <li><img src="{{ asset('images/link.svg') }}" alt="Mon logo"><a
                    href="https://davidgrougi.fr/">https://davidgrougi.fr/</a></li>
        </ul>
        <ul class="competence">
            <li class="competence__a">HTML</li>
            <li class="competence__a">CSS</li>
            <li class="competence__a">JS</li>
            <li class="competence__a">PHP</li>
        </ul>
    </div>

    <div class="intro-text">
        <h1>Bonjour, je suis</br>David</br>Développeur Full-Stack</h1>
        <p>J'aide les entreprises à se développer en créant des expériences Web incroyables. Si vous recherchez un
            développeur qui aime
            faire avancer les choses,</p>
        <a href="/contact" class="contact-button">Me contacter</a>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <div class="about-content">
            <h1 class="about-title">Sur moi</h1>

            <div class="about-text">
                <h2>Bonjour!</h2>
                <p>Je m'appelle David et je suis spécialisé dans le développement Web qui utilise le HTML, CSS, JS et le
                    PHP.</p>
                <p>Je suis une personne très motivée et un éternel optimiste qui se consacre à l'écriture de code
                    clair, concis et robuste qui fonctionne. Je m'efforce de ne jamais cesser d'apprendre et de
                    m'améliorer.</p>
                <p>Quand je ne code pas, j'aime concevoir des jeux ou étudier pour me perfectionner.</p>
                <p>J'aime que ma perspective et mes systèmes de croyances soient remis en question afin de voir le monde
                    avec de nouveaux yeux.</p>
            </div>
        </div>

        <div class="about-image">
            <img src="{{ asset('images/WorkingonLaptop.png') }}" alt="Travailler sur un ordinateur portable">
        </div>
    </div>
</section>

<section class="skills-section">
    <div class="skills-title">
        <h2>Compétences</h2>
        <p>Je m'efforce de ne jamais cesser d'apprendre et de m'améliorer</p>
    </div>

    <div class="skills-content">
        <div class="skill-card">
            <h3>Développement Web</h3>
            <p>HTML · CSS · JS · PHP</p>
        </div>
        <div class="skill-card">
            <h3>Développement d'applications</h3>
            <p>iOS · Android</p>
        </div>
    </div>

    <div class="icons-content">
    <div class="skill-icon skill-icon--html">
        <div class="html">
            <img src="{{ asset('images/html.svg') }}" alt="HTML Icon">
        </div>
        <p>HTML</p>
    </div>
    <div class="skill-icon skill-icon--css">
        <div class="css">
            <img src="{{ asset('images/css.svg') }}" alt="CSS Icon">
        </div>
        <p>CSS</p>
    </div>
    <div class="skill-icon skill-icon--js">
        <div class="js">
            <img src="{{ asset('images/js.svg') }}" alt="JS Icon">
        </div>
        <p>JS</p>
    </div>
    <div class="skill-icon skill-icon--php">
        <div class="php">
            <img src="{{ asset('images/php.svg') }}" alt="PHP Icon">
        </div>
        <p>PHP</p>
    </div>
</div>

</section>
<section>
    <div class="wrapper">
        <div class="skills-section">
            <div class="skills-title">
                <h2>Mon parcours</h2>
                <p class="skills-title__p">Je m'efforce de ne jamais cesser d'apprendre et de m'améliorer</p>
            </div>
        </div>
        <div class="carousel">
            <div id="carousel-0" class="carousel-img carousel-img-displayed">
                <img src="{{ asset('images/1.jpg') }}" alt="Project 1">
                <a href="https://archives.defense.gouv.fr/terre/l-armee-de-terre/le-niveau-divisionnaire/3e-division/2e-regiment-de-dragons.html"
                    target="_blank" class="carousel-link">2ème Régiment de Dragons <br> 1995 - 2020 <br> Sous-Officier
                    NRBC</a>
            </div>

            <div id="carousel-1" class="carousel-img carousel-img-hidden">
                <a href="https://neoxperiences.com/" target="_blank" class="carousel-link">NeoXperiences <br> 2022 -
                    2023 <br> Technicien Informatique</a>
                <img src="{{ asset('images/3.jpg') }}" alt="Project 3">
            </div>

            <div id="carousel-2" class="carousel-img carousel-img-hidden">
                <a href="https://www.creative-formation.fr/" target="_blank" class="carousel-link">Creative-formation
                    <br> 2024 - aujourd'hui <br> BAC+2 | Développement & Intégration Web</a>
                <img src="{{ asset('images/4.jpg') }}" alt="Project 3">
            </div>

            <!-- Boutons de défilement -->
            <button id="carousel-arrow-prev" class="carousel-arrow carousel-arrow-prev"></button>
            <button id="carousel-arrow-next" class="carousel-arrow carousel-arrow-next"></button>
        </div>
    </div>

</section>
<section>
    
</section>
<script>
    document.getElementById('carousel-arrow-next').addEventListener('click', carouselSwipe, false);
    document.getElementById('carousel-arrow-prev').addEventListener('click', carouselSwipe, false);

    /**
     * Switch header carousel to next image (swipe right)
     */
    function carouselSwipe() {

        // Récupère les numéros de l'ancienne et la nouvelle image
        var currentImg = document.getElementsByClassName('carousel-img-displayed')[0].id.substring(9);
        var newImg = parseInt(currentImg);

        // Gestion du début et de la fin de la liste d'images
        if (this.id == 'carousel-arrow-next') {
            newImg++;
            if (newImg >= document.getElementsByClassName('carousel-img').length) {
                newImg = 0;
            }
        } else if (this.id == 'carousel-arrow-prev') {
            newImg--;
            if (newImg < 0) {
                newImg = document.getElementsByClassName('carousel-img').length - 1;
            }
        }

        // Disparition progressive de l'ancienne image
        document.getElementById('carousel-' + currentImg).className = 'carousel-img carousel-img-hidden';

        // Apparition progressive de la nouvelle image
        var displayedCarousel = document.getElementById('carousel-' + newImg);
        displayedCarousel.className = 'carousel-img carousel-img-hidden';
        setTimeout(function () {
            displayedCarousel.className = 'carousel-img carousel-img-displayed';
        }, 20);

        // Disparition totale de l'ancienne image
        setTimeout(function () {
            document.getElementById('carousel-' + currentImg).className = 'carousel-img carousel-img-noDisplay';
        }, 520);

    }
</script>
@endsection