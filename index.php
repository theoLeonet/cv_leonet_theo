<?php
require('sources/PHP/content.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/dist/css/main.css">
    <title>CV de Théo Léonet</title>
</head>
<body class="body">
<h1 class="hidden">
    CV de Théo Léonet
</h1>
<header>
    <a href="" class="title__link"></a>
    <h2 class="header__title">
        WDF
    </h2>
    <input type="checkbox" name="burger-menu__icon" id="burger-menu__icon" class="burger-menu__icon__input">
    <label class="burger-menu__icon" for="burger-menu__icon">
        <div class="navs">
            <nav class="sec-nav">
                <h3 class="hidden">
                    Navigation secondaire
                </h3>
                <ul class="sec-nav__main-menu">
                    <?php for ($i = 0; $i < count($sec_nav['main_menu']['links']); $i++): ?>
                        <li class="sec-nav__main-menu__link">
                            <a href="<?= $sec_nav['main_menu']['links'][$i] ?>">
                                <?= $sec_nav['main_menu']['texts'][$i] ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
                <ul class="sec-nav__socials">
                    <li class="sec-nav__socials__follow">
                        Nous suivre
                    </li>
                    <?php for ($i = 0; $i < count($sec_nav['socials']['links']); $i++): ?>
                        <li class="sec-nav__socials__link <?= $sec_nav['socials']['texts'][$i] ?>--gray">
                            <a href="<?= $sec_nav['socials']['links'][$i] ?>">
                                <?= $sec_nav['socials']['texts'][$i] ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
                <ul class="sec-nav__sec-menu">
                    <li>
                        <a href="#" class="sec-menu__newsletter">
                            S'inscrire à la newsletter
                        </a>
                    </li>
                    <li class="sec-menu__search">
                        <a href="" class="search__link"> Rechercher </a>
                        <div class="search__dropdown__container">
                            <div class="search__dropdown">
                                <p class="search__dropdown__text">Chercher</p>
                                <form action="#" class="search__dropdown__form">
                                    <label for="search__input" class="search__input__label hidden">Rechercher</label>
                                    <input type="search" id="search__input">
                                    <button class="search__button">Rechercher</button>
                                </form>
                                <button class="search__button--close">Fermer</button>
                            </div>
                        </div>
                    </li>
                    <li class="sec-menu__language">
                        <form action="#" class="language-picker__form">
                            <label for="language-picker__select" class="language-picker__label">
                                <select name="language-picker__select" id="language-picker__select">
                                    <option value="" class="select__option french">Francais</option>
                                    <option value="" class="select__option english">English</option>
                                </select>
                            </label>
                        </form>
                    </li>
                </ul>
            </nav>
            <nav class="main-nav">
                <h3 class="hidden">
                    Navigation principale
                </h3>
                <ul class="main-nav__main-menu">
                    <?php for ($i = 0; $i < count($main_nav['main_menu']['links']); $i++): ?>
                        <li class="main-nav__main-menu__link">
                            <a href="<?= $main_nav['main_menu']['links'][$i] ?>">
                                <?= $main_nav['main_menu']['texts'][$i] ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                    <?php ?>
                </ul>
            </nav>
        </div>
    </label>
</header>
<video class="background__video" autoplay loop muted>
    <source
            src="sources/videos/resized/coding_blured-1920.mp4"
            type="video/mp4"
    />
</video>
<section class="intro">
    <h2 class="intro__title">
        Théo Léonet
    </h2>
    <p class="intro__sub">
        Fondateur de la WDF
    </p>
    <p class="intro__description">
        Théo Léonet est un jeune homme de 24 ans qui a décidé il y a maintenant 3 ans d’en finir avec la pénurie des
        métiers du web. C’est ainsi que la WDF est née.
    </p>
    <?php for ($i = 0; $i < count($intro['numbers']); $i++): ?>
        <div class="intro__info">
            <p class="intro__info__title">
                <?= $intro['numbers'][$i] ?>
            </p>
            <p class="intro__info__sub">
                <?= $intro['texts'][$i] ?>
            </p>
        </div>
    <?php endfor; ?>
    <p class="intro__btn__share">
        Je partage
    </p>
    <ul class="intro__socials">
        <?php for ($i = 0; $i < count($intro['socials']['links']); $i++): ?>
            <li class="intro__socials__link <?= $intro['socials']['texts'][$i] ?>--white">
                <a href="<?= $intro['socials']['links'][$i] ?>"><?= $intro['socials']['texts'][$i] ?></a>
            </li>
        <?php endfor; ?>
    </ul>
</section>
<section class="about">
    <h2 class="about__title">
        THÉO
    </h2>
    <img src="/sources/pictures/original/me.png" alt="shrek" class="about__image">
    <dl class="about__infos">
        <?php for ($i = 0; $i < count($about['subtitles']); $i++): ?>
            <div class="infos__info">
                <dt class="about__info__title">
                    <?= $about['subtitles'][$i] ?>
                </dt>
                <dd class="about__info__sub">
                    <?= $about['texts'][$i] ?>
                </dd>
            </div>
        <?php endfor; ?>
    </dl>
</section>
<section class="did-you-know">
    <h2 class="hidden">
        Le saviez vous?
    </h2>
    <div class="slider__btn__container">
        <div class="left-arrow__btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.863" height="18.53" viewBox="0 0 21.863 18.53">
                <g id="Groupe_33" data-name="Groupe 33" transform="translate(-37.637 -39.635)">
                    <path id="Tracé_3" data-name="Tracé 3" d="M20,0H0" transform="translate(39.5 48.5)" fill="none"
                          stroke="#000" stroke-width="3"/>
                    <path id="Tracé_1" data-name="Tracé 1" d="M2198.659,5690.593l-7.053,8.5,7.053,8.086"
                          transform="translate(-2152 -5650)" fill="none" stroke="#000" stroke-width="3"/>
                </g>
            </svg>
        </div>
        <div class="did-you-know__slider__box">
            <div class="did-you-know__slider">
                <?php for ($i = 0; $i < count($did_you_know['subtitles']); $i++): ?>
                    <article class="did-you-know__slide">
                        <h3 class="slide__sub">
                            <?= $did_you_know['subtitles'][$i] ?>
                        </h3>
                        <p class="slide__title">
                            Le saviez vous?
                        </p>
                        <p class="slide__text">
                            <?= $did_you_know['texts'][$i] ?>
                        </p>
                        <p class="slide__btn__share">
                            Je partage
                        </p>
                        <ul class="slide__socials">
                            <?php for ($j = 0; $j < count($intro['socials']['links']); $j++): ?>
                                <li class="slide__socials__link <?= $intro['socials']['texts'][$j] ?>--black">
                                    <a href="<?= $intro['socials']['links'][$j] ?>"><?= $intro['socials']['texts'][$j] ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </article>
                <?php endfor; ?>
            </div>
        </div>
        <div class="right-arrow__btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.863" height="18.53" viewBox="0 0 21.863 18.53">
                <g id="Groupe_34" data-name="Groupe 34" transform="translate(-39.5 -39.635)">
                    <path id="Tracé_2" data-name="Tracé 2" d="M0,0H20" transform="translate(39.5 48.5)" fill="none"
                          stroke="#000" stroke-width="3"/>
                    <path id="Tracé_1" data-name="Tracé 1" d="M2191.606,5690.593l7.053,8.5-7.053,8.086"
                          transform="translate(-2139.265 -5650)" fill="none" stroke="#000" stroke-width="3"/>
                </g>
            </svg>
        </div>
    </div>
    <div class="slider__dots">
        <?php for ($i = 0; $i < count($did_you_know['subtitles']); $i++): ?>
            <div class="slider__dot" data-index="<?= $i ?>"></div>
        <?php endfor; ?>
    </div>
</section>
<section class="projects">
    <h2 class="projects__title">
        Les projets qu’il a réalisé
    </h2>
    <p class="projects__sub">
        Si vous cherchez de l’inspiration, vous êtes au bon endroit. Avec un total de 45 projets, vous devriez trouver
        quelque chose qui vous plaît. Voici ses trois projets les plus récents.
    </p>
    <?php for ($i = 0; $i < count($projects['names']); $i++): ?>
        <div class="projects__project">
            <div class="inner__container">
                <div class="project__inner">
                    <p class="inner__title">
                        <?= $projects['names'][$i] ?>
                    </p>
                    <p class="inner__description">
                        <?= $projects['excerpt'][$i] ?>
                    </p>
                    <a href="#" class="inner__more">En savoir plus sur ce projet</a>
                </div>
            </div>
            <img src="<?= $projects['images__src'][$i] ?>"
                 srcset="<?= $projects['images__srcset'][$i] ?>"
                 alt="<?= $projects['images__alt'][$i] ?>"
                 class="project__image">
            <div class="project__name">
                <p>
                    <?= $projects['names'][$i] ?>
                </p>
            </div>
        </div>
    <?php endfor; ?>
</section>
<section class="engagement">
    <h2 class="engagement__title">
        L’engagement de la WDF Belgique
    </h2>
    <p class="engagement__desc">
        La WDF s’engage à fournir des contenus de qualité à petit prix et à utiliser cet argent pour aider les
        développeurs prometteurs à se lancer dans le web.
    </p>
    <?php for ($i = 0; $i < count($engagement['titles']); $i++): ?>
        <article class="engagement__infos">
            <div class="engagement__info__texts">
                <h3 class="engagement__info__title">
                    <?= $engagement['titles'][$i] ?>
                </h3>
                <p class="engagement__info__sub">
                    <?= $engagement['texts'][$i] ?>
                </p>
            </div>
            <img class="engagement__info__image"
                 srcset="<?= $engagement['images__srcset'][$i] ?>"
                 src="<?= $engagement['images__src'][$i] ?>"
                 sizes="<?= $engagement['images__sizes'] ?>"
                 alt="<?= $engagement['images__alt'][$i] ?>">
        </article>
    <?php endfor; ?>
</section>
<section class="projects__images">
    <h2 class="projects__images__title hidden">
        Images des projets
    </h2>
    <?php for ($i = 0; $i < count($pictures['src']); $i++): ?>
        <a href="#" class="projects__images__link">
            <img class="projects__images__image" src="<?= $pictures['src'][$i] ?>" alt="<?= $pictures['alt'][$i] ?>">
        </a>
    <?php endfor; ?>
</section>
<section class="latest">
    <h2 class="latest__title">
        À LA UNE
    </h2>
    <div class="latest__articles">
        <?php for ($i = 0; $i < count($latest['titles']); $i++): ?>
            <article class="latest__article">
                <a href="#" class="article__link"></a>
                <h3 class="latest__article__title">
                    <?= $latest['titles'][$i] ?>
                </h3>
                <div class="latest__article__image__container">
                    <img
                            src="<?= $latest['images__src'][$i] ?>"
                            srcset="<?= $latest['images__srcset'][$i] ?>"
                            sizes="<?= $latest['images__sizes'] ?>"
                            alt="<?= $latest['images__alt'][$i] ?>"
                            class="latest__article__image">
                </div>
                <p class="latest__article__sub">
                    <?= $latest['subtitles'][$i] ?>
                </p>
                <p class="latest__article__date">
                    <?= $latest['dates'][$i] ?>
                </p>
            </article>
        <?php endfor; ?>
    </div>
    <a href="#" class="latest__all">
        Toutes les actualités
    </a>
</section>
<section class="newsletter">
    <div class="newsletter__texts">
        <h2 class="newsletter__title">
            Restez à <span class="newsletter__title--highlight"> la pointe de l’actualité </span> sur le développement
            web
        </h2>
        <div class="newsletter__sub-btn">
            <a href="#">
                Je m’abonne à la Newsletter
            </a>
        </div>
        <p class="newsletter__socials__intro">
            Retrouvez aussi toute l’actualité WDF sur :
        </p>
        <ul class="newsletter__socials">
            <?php for ($i = 0; $i < count($newsletter['socials']['links']); $i++): ?>
                <li class="newsletter__socials__social <?= $newsletter['socials']['texts'][$i] ?>__newsletter">
                    <a href="<?= $newsletter['socials']['links'][$i] ?>">
                        <?= $newsletter['socials']['texts'][$i] ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
    <img class="newsletter__image"
         srcset="sources/pictures/resized/newsletter/newsletter-1024x576.jpg 1024w,
                sources/pictures/resized/newsletter/newsletter-768x432.jpg   768w,
                sources/pictures/resized/newsletter/newsletter-640x360.jpg   640w,
                sources/pictures/resized/newsletter/newsletter-544x306.jpg   544w,
                sources/pictures/resized/newsletter/newsletter-416x234.jpg   416w,
                sources/pictures/resized/newsletter/newsletter-304x171.jpg   304w,
                sources/pictures/resized/newsletter/newsletter-256x144.jpg   256w
                "
         sizes="
            (min-width: 1021px) 317px,
            (max-width: 1020px) 80vw
        "
         src="sources/pictures/resized/newsletter/newsletter-1024x576.jpg"
         alt="Blurry computer screen with code">
</section>
<section class="subscribe">
    <h2 class="subscribe__title">
        Comment puis-je faire la différence ?
    </h2>
    <p class="subscribe__text">
        C’est en suivant une ou plusieurs de nos nombreuses formations que vous pourrez faire la différence. Grâce à
        vous, les métiers du web pourraient cesser d’être en pénurie. Vous pourriez vous-même devenir conseiller WDF et
        aider des centaines de personnes à rejoindre le mouvement.
    </p>
    <div class="subscribe__btn">
        <a href="#">
            Inscrivez-vous !
        </a>
    </div>
</section>
<section class="wdf__infos">
    <div class="wdf__intro">
        <h2 class="wdf__title">
            WDF
        </h2>
        <p class="wdf__sub">
            La WDF crée chaque jour de nouvelles vocations dans le monde du web. Formations, conseils, inspiration, vous
            trouverez forcément quelque chose qui vous convient.
        </p>
    </div>
    <aside class="wdf__numbers">
        <h3 class="numbers__title">
            LA WDF EN QUELQUES CHIFFRES C’EST
        </h3>
        <?php for ($i = 0; $i < count($wdf__infos['numbers']); $i++): ?>
            <div class="numbers__infos">
                <p class="numbers__number">
                    <?= $wdf__infos['numbers'][$i] ?>
                </p>
                <p class="numbers__text">
                    <?= $wdf__infos['texts'][$i] ?>
                </p>
            </div>
        <?php endfor; ?>
    </aside>
</section>
<section class="useful">
    <h2 class="useful__title hidden">
        Liens utiles
    </h2>
    <ul class="useful__links">
        <?php for ($i = 0; $i < count($useful['links']); $i++): ?>
            <li class="useful__link">
                <a href="<?= $useful['links'][$i] ?>">
                    <?= $useful['texts'][$i] ?>
                </a>
            </li>
        <?php endfor; ?>
    </ul>
    <ul class="useful__links--orange">
        <?php for ($i = 0; $i < count($useful['orange-links']); $i++): ?>
            <li class="useful__link">
                <a href="<?= $useful['orange-links'][$i] ?>">
                    <?= $useful['orange-texts'][$i] ?>
                </a>
            </li>
        <?php endfor; ?>
    </ul>
    <div class="useful__follow">
        <p class="useful__follow__intro">
            Nous suivre
        </p>
        <ul class="useful__follow__links">
            <?php for ($i = 0; $i < count($useful['socials']['links']); $i++): ?>
                <li class="useful__follow__link <?= $useful['socials']['texts'][$i] ?>--useful">
                    <a href="<?= $useful['socials']['links'][$i] ?>">
                        <?= $useful['socials']['texts'][$i] ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</section>
<footer class="footer">
    <div class="footer__main">
        <ul class="footer__links">
            <?php for ($i = 0; $i < count($footer['links']); $i++): ?>
                <li class="footer__link">
                    <a href="<?= $footer['links'][$i] ?>">
                        <?= $footer['texts'][$i] ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
        <div class="footer__language">
            <form action="#" class="language-picker__form">
                <label for="language-picker__select" class="language-picker__label">
                    <select name="language-picker__select" id="language-picker__select">
                        <option value="" class="select__option french">Francais</option>
                        <option value="" class="select__option english">English</option>
                    </select>
                </label>
            </form>
        </div>

    </div>
    <div class="footer__sec">
        <ul class="footer__infos">
            <?php for ($i = 0; $i < count($footer['infos']['texts']); $i++): ?>
                <li class="footer__info">
                    <?= $footer['infos']['texts'][$i] ?>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</footer>
<script src="dist/js/Main.js"></script>
</body>
</html>