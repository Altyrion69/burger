<!-- ------------------------------------php-------------------------------------------------------- -->
<?php
$experience = [
    [
        'job' => 'Devellopeur Web Full Stack - JS, PHP',
        'company' => 'CBD',
        'city' => 'Lyon, France',
        'date' => 'depuis Septembre 2022',
        'whatIdo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!',
    ],
    [
        'job' => 'Devellopeur Web Front-End Senior - JS',
        'company' => 'MOF',
        'city' => 'Lyon, France',
        'date' => 'Février 2021 - Septembre 2022',
        'whatIdo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!',
    ],
    [
        'job' => 'Assistant Back-End - PHP',
        'company' => 'Le Karma',
        'city' => 'Lyon, France',
        'date' => 'Septembre 2020 - Février 2021',
        'whatIdo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eos mollitia temporibus, autem in expedita. Delectus magnam eos molestias illo quaerat. Amet enim doloribus non!',
    ],
]
// ------------------------------------------------------html--------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <header>
	<div class="menu-btn">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</div>
</header>

<div class="header__nav">
	<nav class="nav">
    <ul class="nav__list">
      <li class="nav__list_item"><a class="nav__link" href="#">Informations</a></li>
      <li class="nav__list_item"><a class="nav__link" href="#">Experiences</a></li>
      <li class="nav__list_item"><a class="nav__link" href="#">Formations</a></li>
      <li class="nav__list_item"><a class="nav__link" href="#">Soft Skills</a></li>
      <li class="nav__list_item"><a class="nav__link" href="#">References</a></li>
      <li class="nav__list_item"><a class="nav__link" href="#">Portofolio</a></li>
    </ul>
	</nav>
</div>
    <main>
        <!-- ------------------------ infocontact ------------------------------- -->
        <div class="description">
            <div class="info">
                <p>Web develloper diplomée de la Wild Code School, passionnée avec 3 années d'expérience dans la
                    création de sites web. Compétences solides en HTML, CSS, JavaScript, et PHP. Toujours à la pointe
                    des dernières tendances technologiques.
                </p>
            </div>
            <div class="line"></div>
            <div class="contact">
                <p class="semi-title">Date de naissance :</p>
                <p>16 septembre 1984 </p>
                <p class="semi-title">Adresse :</p>
                <p> 17 rue Delandine 69002 LYON </p>
                <p class="semi-title">Mail :</p>
                <p> oderaie@blabla.fr </p>
                <p class="semi-title">Téléphone :</p>
                <p>06 12 34 56 78 </p>
            </div>
            <img src="./assets/visage_de_femme_pour_CV_seed-0ts-1695307229_idx-0.png" alt="photo d'odile deraie">
            <div class="logo">
                <a href="http://www.linkedin.fr"><i class="fa-brands fa-linkedin" style="color: #0077b5;"></i></a>
                <a href="http://www.facebook.fr"><i class="fa-brands fa-facebook" style="color: #3b5998;"></i></a>
                <a href="http://www.instagram.fr"><i class="fa-brands fa-instagram" style="color: #222222"></i></a>
                <a href="http://www.pinterest.fr"><i class="fa-brands fa-pinterest" style="color: #c8232c"></i></a>
                <a href="http://www.github.fr"><i class="fa-brands fa-github" style="color: #171515"></i></a>
                <a href="http://www.twitter.fr"><i class="fa-brands fa-x-twitter" style="color: #000000"></i></a>
            </div>
        </div>

        <!-- ---------------------------------Experience---------------------------------------------------- -->
<div class="experience-container">
<h2>EXPERIENCE</h2>
<?php for ($i=0; $i < (count($experience)); $i++): ?>
<div class="experience">
<div class="job">
    <?php echo $experience[$i]['job']?>
</div>
<div class="companyCity">
    <?php echo $experience[$i]['company'] . "|" . $experience[$i]['city'] ?>
</div>
<div class="date">
    <?php echo $experience[$i]['date']?>
</div>
<div class="whatIDo">
     <?php echo $experience[$i]['whatIdo']?>
     </div>
     <button class="learnmore">En savoir plus...</button>
    </div>
</div>
<?php endfor ?>
    </main>
</body>
<script src="https://kit.fontawesome.com/72de8a1f72.js" crossorigin="anonymous"></script>
<script src="index.js"></script>
</html>