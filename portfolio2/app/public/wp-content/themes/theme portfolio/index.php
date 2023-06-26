<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="carousel">
            <div class="slide active">
                <img src="Evian.png" alt="Slide 1">
                <div class="overlay">
                    <h2>MyMeetic</h2>
                    <p>MyMeetic est une plateforme de rencontres en ligne qui vise à connecter les personnes partageant les mêmes intérêts et passions. Avec des fonctionnalités avancées de recherche et de mise en relation, MyMeetic offre une expérience unique pour trouver l'amour et créer des relations significatives.</p>
                    <a href="#" class="button" onclick="showImagePopupMyMeetic()">
    <span>Voir plus</span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M8 17l4 4 4-4z"/>
    </svg>
</a>

                </div>
            </div>
            <div class="slide active">
                <img src="Evian.png" alt="Slide 2">
                <div class="overlay">
                    <h2>MyTwitter</h2>
                    <p>MyTwitter est une plateforme de médias sociaux où les utilisateurs peuvent partager des messages courts, appelés "tweets", avec leurs abonnés. C'est un endroit idéal pour découvrir les dernières actualités, suivre vos personnalités préférées et interagir avec une communauté dynamique et diversifiée.</p>
                    <a href="#" class="button" onclick="showImagePopupMyTwitter()">
    <span>Voir plus</span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M8 17l4 4 4-4z"/>
    </svg>
</a>

                </div>
            </div>
            <div class="slide active">
                <img src="Evian.png" alt="Slide 3">
                <div class="overlay">
                    <h2>Info Personnel</h2>
                    <p>Compétences : Travail d'équipe, écoute active et adaptation aux situations professionnelles.</p>
                    <p>Projets : J'ai réalisé plusieurs projets lors de mon parcours à la Webacadémie, dont certains sont présentés sur ce portfolio.</p>
                    <p>Formation : J'ai suivi la formation de la Webacadémie d'Epitech pour développer mes compétences dans le domaine du web.</p>
                    <p>Auto-apprentissage : J'ai acquis de nombreuses connaissances en anglais en jouant à des jeux vidéo et en interagissant avec des anglophones en ligne.</p>
                    <p>Engagement : Je me tiens constamment informé(e) et je pose des questions pour approfondir mes connaissances dans le domaine professionnel qui m'intéresse.</p>
                    <a href="https://www.linkedin.com/posts/tom1-girard_activity-7073938057304911872-1x_a?utm_source=share&utm_medium=member_desktop" class="button" target="_blank">
                        <span>Voir plus</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 17l4 4 4-4z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="prev">&#10094;</div>
            <div class="next">&#10095;</div>
        </div>
    </div>

    <div class="image-popup-overlay" onclick="hideImagePopup('myMeeticPopup')"></div>
<div id="myMeeticPopup" class="image-popup-container">
  <div class="image-popup-content">
    <button class="close-button" onclick="hideImagePopup('myMeeticPopup')">Fermer</button>
    <img src="Date.png" alt="Image 1">
    <img src="DateAccount.png" alt="Image 2">
    <img src="DateAbout.png" alt="Image 3">
    <img src="DateRegister.png" alt="Image 4">
  </div>
</div>

<div class="image-popup-overlay" onclick="hideImagePopup('myTwitterPopup')"></div>
<div id="myTwitterPopup" class="image-popup-container">
  <div class="image-popup-content">
    <button class="close-button" onclick="hideImagePopup('myTwitterPopup')">Fermer</button>
    <img src="TwitterConexion.png" alt="Image 5">
    <img src="TwitterCreation.png" alt="Image 6">
    <img src="TwitterMain.png" alt="Image 7">
  </div>
</div>


    <script src="script.js"></script>
</body>
</html>
