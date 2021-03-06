<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body style="font-family: 'Robot', sans-serif;">

  <header class="bg-primary" style="font-family: 'Ubuntu', sans-serif;">
      <h1 class="title-name text-uppercase color-white">Lucie Bernard-Légat</h1>
      <h2 class="sub-title-name text-uppercase color-white">
      Développeuse web-fullstack <br> CV
      </h2>
  </header>

  <div class="navbar" id="myTopnav">
    <a href="#about-section">à propos</a>
    <a href="#skills-section">compétences</a>
    <a href="#studies-section">parcours</a>
    <a href="#realisation-section">réalisations</a>
    <a href="#contact-section">contact</a>
    <a href="#" class="icon">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <main>

    <section>
      <div class="container-one">
        <div class="section-title">
          <h2 class="text-uppercase">à propos</h2>
        </div>
        <div class="about" id="about-section">
          <img src="images/wonder-woman.png" alt="">
          <p>En cours de formation comme développeuse web junior curieuse, autonome et rigoureuse. J'apprécie les sites et applications, simples, ergonomiques et efficaces. Mes centres d'intérêt sont multiples. J'aime découvrir de nouvelles choses dans des domaines variés et acquérir de nouvelles compétences.<br>
          </p>
          <p id="skills-section">Principaux centres d'intérêts : Histoire, Jeux-vidéos, Cinéma, Sport</p>
        </div>
      </div>
      <hr>
    </section>

    <section>
      <div class="container-two">
        <div class="section-title">
          <h2 class="text-uppercase">Compétences</h2>
        </div>
        <article class="front">
          <h3>Front-end</h3>
          <div class="competence-text">Création et intégration de sites web et applications mobiles responsive, accessibles et répondant aux normes W3C.</div>
          <div class="competences">
            <table class="table-comp">
              <tbody>
                <tr>
                  <td>HTML5</td>
                  <td>⭐⭐⭐</td>
                  <td>SASS</td>
                  <td>⭐</td>
                </tr>  
                <tr>
                  <td>CSS3</td>
                  <td>⭐⭐</td>
                  <td>Bootstrap</td>
                  <td>⭐⭐</td>
                </tr>
                <tr>
                  <td>JavaScript</td>
                  <td>⭐</td>
                  <td>CMS Wordpress</td>
                  <td class="small">en cours d'apprentissage</td>
                </tr>
                <tr>
                  <td>JQuery</td>
                  <td class="small">en cours d'apprentissage</td>
                  <td>JSON</td>
                  <td class="small">en cours d'apprentissage</td>
                </tr>
                <tr>
                  <td>AJAX</td>
                  <td class="small">en cours d'apprentissage</td>
                  <td>React.js</td>
                  <td class="small">en cours d'apprentissage</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>
        <div class="symbols-front"><img src="images/symbol-front.png" alt="image front-end"></div>
        
        <article class="back">
          <h3>Back-end</h3>
          <div class="competence-text">Développement de sites web et applications, création et gestion de bases de données, programmation orientée objet</div>
          <table class="table-comp">
            <tbody>
              <tr>
                <td>MySQL</td>
                <td class="small">en cours d'apprentissage</td>
                <td>PHP</td>
                <td class="small">en cours d'apprentissage</td>
              </tr>
              <tr>
                <td>Symfony</td>
                <td class="small">en cours d'apprentissage</td>
                <td>React Native</td>
                <td class="small">en cours d'apprentissage</td>
              </tr>  
            </tbody>
          </table>
        </article>
        <div class="symbols-back">
          <img src="images/database.png" alt="image data-base">
        </div>
        <article class="android">
          <h3>Spécialisation Mobile Android</h3>
          <div class="competence-text">Développement d'applications mobiles sur Android</div>
            <table class="table-comp">
              <tr>
                <td>Kotlin</td>
                <td class="small">en cours d'apprentissage</td>
              </tr>
              <tr>
                <td>Firebase</td>
                <td class="small">en cours d'apprentissage</td>
              </tr>
            </table>
        </article>
        <div class="symbols-mobile">
          <img src="images/smartphone.png" alt="image smartphone">
        </div>
        <article class="other">
          <div>
            <h3>Autres</h3>
            <div class="other-comp">
              <ul>
                <li>Référencement naturel</li>
                <li>Se connecter et communiquer avec une API</li>
                <li>Architecture MVVM</li>
                <li>Architecture MVC</li>
                <li>Git</li>
                <li>VS Code, Atom</li>
              </ul>
            </div>
          </div>  
        </article>
        <div class="symbols-other">
          <img src="images/symbol-other.png" alt="image ecran d'ordinateur">
        </div>
      </div>
      <hr id="studies-section">
    </section>
    
    <section>
      <div class="container-four">
        <article class="parcours">
        <div>
          <h2 class="text-uppercase">Parcours</h2>
        </div>
        <table class="table-diplomes">
          <thead>
            <tr>
              <th>Années</th>
              <th>Diplômes / Expériences</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>2020</td>
                <td>En cours de formation Développeuse web Full-Stack - Studi</td>
              </tr> 
              <tr>
                <td>2013 - 2016</td>
                <td>Chargée de Mission Histoire-Patrimoine - EDF</td>
              </tr>  
              <tr>
                <td>2015</td>
                <td>Doctorat en Histoire et Patrimoine - Université Savoie  Mont-Blanc</td>
              </tr>  
              <tr>
                <td>2012</td>
                <td>Masteur 2 en Histoire - Université Savoie Mont-Blanc</td>
              </tr>
              <tr>
                <td>2011</td>
                <td>Stage de 6 mois - Musée de l'Aluminium</td>
              </tr>
              <tr>
                <td>2010</td>
                <td>License en Histoire - Université Savoie Mont-Blanc</td>
              </tr>
              <tr>
                <td>2007</td>
                <td>Baccalauréat ES - Mention Bien</td>
              </tr>
            </tbody>
          </table>
        </article>
      </div>
      <hr id="realisation-section">
    </section>

    <section>
      <div>
        <h2 class="text-uppercase">Réalisations</h2>
      </div>
      <div class="container-three">
        <article class="card">
          <div >
            <div class="card-title text-uppercase">
              réalisation
            </div>
            <div class="card-body">
              <img src="images/home-hpbissy.png">
              <div class="card-content">
                <p>Site réalisé pour une Association sur l'histoire et le patrimoine du quartier bisserain de la ville de Chambéry</p>
                <button type="button" class="btn btn-primary text-uppercase"><a href="http://hpbissy.fr/" target="_blank">consulter le site</a></button>
              </div>
            </div>
          </div>
        </article>

        <article class="card">
          <div class="card-title text-uppercase">
            réalisation
          </div>
          <div class="card-body">
            <img src="images/vue-site-kikimeter.png">
            <div class="card-content">
              <p>Site web personnel contenant un répertoire des divers sites de classement des joueurs de jeux-vidéos</p>
              <button type="button" class="btn btn-primary text-uppercase"><a href="http://kikimeter.fr/" target="_blank">consulter le site</a></button>
            </div>
          </div>
        </article>

        <article class="card">
          <div class="card-title text-uppercase">
            FULL CSS ANIMATIONS
          </div>
          <div class="card-body">
            <img src="images/animation-img.png">
            <div class="card-content">
              <p id="contact-section">Divers projets d'animations full CSS déposés sur Github</p>
              <button type="button" class="btn btn-primary text-uppercase"><a href="https://github.com/luckyluchie" target="_blank">consulter les repositories</a></button>
            </div>
          </div>
        </article>

        <article class="card">
          <div class="card-title text-uppercase">
            AUTRES PROJETS
          </div>
          <div class="card-body">
            <img src="images/others-project-img.png">
            <div class="card-content">
              <p>Divers projets déposés sur Github</p>
              <button type="button" class="btn btn-primary text-uppercase"><a href="https://github.com/luckyluchie?tab=repositories" target="_blank">consulter les repositories</a></button>
            </div>
          </div>
        </article>

      </div>
      <hr>
    </section>

    <section>
      <div>
        <h2 class="text-uppercase">Contact</h2>
      </div>
      <div class="contact-list">
        <div class="contact"><a href="tel:+33629494147"><i class="fas  fa-phone-square-alt color-secondary"></i>06 29 49 41 47</a></div>
        <div class="contact"><a href="mailto:lucie.legat@hotmail.fr"><i  class="fas fa-envelope color-secondary"></i>lucie.legat@hotmail.fr</a></div>
        <div class="contact"><a href="https://www.linkedin.com/inlucie-l%C3%A9gat-6932a1122/"><i class="fab fa-linkedin color-secondary"></i></a></div>
      </div>
    </section>

  </main>
  <footer>
    <i class="far fa-copyright"> Lucie Bernard-Légat</i>
  </footer>
  <script src="script.js"></script>

</body>
</html>