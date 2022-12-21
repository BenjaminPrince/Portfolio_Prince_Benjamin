<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Portfolio Prince Benjamin</title>
</head>


<!-- -----------------------------------------------------------------------------------
                                    navbar
----------------------------------------------------------------------------------- -->
<nav>
  <div class="profile">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKgAAAEsCAMAAABgwwj8AAAAA1BMVEUvT05y7gNaAAAASElEQVR4nO3BMQEAAADCoPVPbQwfoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+BsYMAAFjd3WkAAAAAElFTkSuQmCC" alt="profile photo" />
    <h1>PRINCE BENJAMIN</h1>
  </div>
  <ul>
    <li> <a href="#projects-section">Mes projets</a></li>
    <li> <a target="_blank" href="src/image/Dev web Intégrateur CV (1).pdf">Curriculum Vitae</a></li>
    <li> <a target="_blank" href="https://github.com/BenjaminPrince">Github</a></li>
    <li><button for="themeSwitch" id="themeLogo">&#9789;</button></li>
  </ul>
</nav>

<!-- -----------------------------------------------------------------------------------
                                   header
--------------------------------------------------------------------------------------->
<section class="page-content">
  <div class="backgroundText">
    <header>
      <h1>Développeur intégrateur web</h1>
      <p class="mb-4">Je suis développeur intégrateur web et je recherche mon premier emploi. J'ai terminé ma formation en développement web et j'ai acquis des compétences en HTML, CSS, JavaScript, Bootstrap et Tailwind. J'ai également de l'expérience en gestion de projet et en travail en équipe. Je suis passionné par le développement web et j'ai hâte de continuer à apprendre et à me développer dans ce domaine.</p>
      <p class="mb-4">Avant d’intégrer un cursus développeur-web, j’ai obtenu un master "Professorat des écoles" à l’Université Claude Bernard, Lyon1, ainsi qu'une licence "Lettre/Art du spectacle" à Lyon2. A travers ces cursus, j’ai pu gagner en efficacité et en autonomie dans mon travail et acquérir une certaine adaptabilité.</p>
      <p class="mb-4">Aujourd'hui je m'épanouis pleinement dans le domaine du web, ma formation me permet d'évoluer en tant que développeur "fullstack". Je suis toutefois particulièrement ouvert pour découvrir de nouvelles "technos" et à approfondir la partie "frontend", qui me permet de faire un lien avec mon attrait pour l'art et ma sensibilité artistique.</p>
      <p class="mb-4">Si vous êtes à la recherche d'un développeur intégrateur web motivé, n'hésitez pas à me contacter.</p>
      <div class="flex items-center mb-4">
        <a class="button" target="_blank" href="src/image/Dev web Intégrateur CV (1).pdf">Curriculum Vitae</a>
      </div>
      

    </header>
  </div>

  <!-- -----------------------------------------------------------------------------------
                                    section projet
----------------------------------------------------------------------------------- -->


  <section id="projects-section" class="projects-section">
    <h1>Projets réalisés</h1>
    <div class="projects">

     <!-- -----------------------------------------------------------------------------------
                                    projet 5
----------------------------------------------------------------------------------- -->
<div class="card">
  <a class="card-image" target="_blank" href="http://bp-grandfroid.projets.simplon-roanne.com">
    <img src="./src/image/grand froid.JPG" /></a>
  <div class="project">
    <h4>Projet Grand Froid</h4>
    <p class="description">
      Projet découverte de Wordpress.
    <p class="dates">Dates 2022</p>
  </div>
</div>
      <!-- -----------------------------------------------------------------------------------
                                    projet 1
----------------------------------------------------------------------------------- -->
      <div class="card">
        <a class="card-image" target="_blank" href="https://portfolio-benjamin-prince.herokuapp.com/projet/morpion/index.html">
          <img src="./src/image/morpion.png" /></a>
        <div class="project">
          <h4>Jeu morpion </h4>
          <p class="description">
            html,css,javascript,poo.
          </p>
          <p class="dates">2022</p>
        </div>
      </div>
      <!-- -----------------------------------------------------------------------------------
                                    projet 2
----------------------------------------------------------------------------------- -->
      <div class="card">
        <a class="card-image" target="_blank" href="https://audio-players.herokuapp.com/">
          <img src="./src/image/audio.jpg" /></a>
        <div class="project">
          <h4>Audio player </h4>
          <p class="description">
            html,css,javascript,php,json.
          </p>
          <p class="dates">2022</p>
        </div>
      </div>

      <!-- -----------------------------------------------------------------------------------
                                    projet 3
----------------------------------------------------------------------------------- -->
 <div class="card">
        <a class="card-image" target="_blank" href="https://portfolio-benjamin-prince.herokuapp.com/projet/Drumpad/index.html">
          <img src="./src/image/drumpad.png" /></a>
        <div class="project">
          <h4><a href="http://127.0.0.1:5500/Drumpad/index.html"> DRUMPAD</a></h4>
          <p class="description">
            html, css, javascript ,front-end, projet musical.
          </p>
          <p class="dates">2021</p>
        </div>
    </div>
      <!-- -----------------------------------------------------------------------------------
                                    projet 4
----------------------------------------------------------------------------------- -->
 <div class="card">
        <a class="card-image" target="_blank" href="https://portfolio-benjamin-prince.herokuapp.com/projet/Allo-cin%C3%A9/Projet-allo-cine-main/index.html">
          <img src="./src/image/allo-ciné.png" /></a>
        <div class="project">
          <h4>Allo-ciné</h4>
          <p class="description">
            html,css,javascript.
          <p class="dates">Dates 2021</p>
        </div>
      </div>

     
      </div>
    </div>
  </section>
</section>

<!-- -----------------------------------------------------------------------------------
                                    Experiences
----------------------------------------------------------------------------------- -->

<h1 id="experience"> Expériences </h1>

<div class="wrapper">
  <div class="center-line">

    <a href="#experience" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
  </div>
  <div class="row row-1">
    <section>
      <i class="icon fas fa-home"></i>
      <div class="details">
        <span class="title">Formation développeur-web</span>
        <span>2021-2022</span>
      </div>
      <p>Chambre des commerces et de l'industrie de Roanne (CCI)</p>
      <i> HTML/CSS- Javascript  -PHP - MYSQL - Symfony - Wordpress.<i>

      <div class="bottom">
      </div>
    </section>
  </div>
  <div class="row row-2">
    <section>
      <i class="icon fas fa-star"></i>
      <div class="details">
        <span class="title">Master MEEF</span>
        <span>2018-2021</span>
      </div>
      <p>INSPÉ Académie de Lyon - Université Lyon 1</p>
      <i>Apprendre à apprendre - Atelier numérique - Mise en situation professionnelle - Anglais. <i>

      <div class="bottom">
      </div>
    </section>
  </div>
  <div class="row row-1">
    <section>
      <i class="icon fas fa-rocket"></i>
      <div class="details">
        <span class="title">Licence de Lettre/Art du spectacle</span>
        <span>2014-2017</span>
      </div>
      <p>Faculté Université Lumière Lyon 2 </p>
      <i>Droit et économie - Théorie et accompagnement de la création.<i>
  </div>
  </section>
</div>

</div>



<!-- -----------------------------------------------------------------------------------
                                    footer
----------------------------------------------------------------------------------- -->

<footer>
  <div class="colonne">
    <h3>Me Contacter</h3>
    <a href="mailto:prince-benjamin@hotmail.com">
      <p>prince-benjamin@hotmail.com</p>
    </a>
    <p>06.42.57.73.64</p>
    <p>Lyon</p> <br>
    <p>Copyright © 2022 Benjamin PRINCE</p>
  </div>
</footer>



<script src="modeNuit.js"></script>


</body>

</html>