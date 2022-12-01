<?php get_header() ?>
<main>
        <section class="section home__section">
            <div class="container">
                <div class="home__content grid">
                    <div class="home__description">
                        <h1 class="home__title"><?php bloginfo('description') ?></h1>
                        <p>La sobriété du numérique c'est bien trop important pour être négligé.</p>
                        <a href="" class="home__button">
                            <span>
                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.3536 4.35356C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464468C15.9763 0.269205 15.6597 0.269205 15.4645 0.464467C15.2692 0.65973 15.2692 0.976312 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53554C15.6597 7.7308 15.9763 7.7308 16.1716 7.53554L19.3536 4.35356ZM-4.37114e-08 4.5L19 4.5L19 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#1D1D1B"/>
                                </svg>                                    
                            </span>
                        S'inscrire</a>
                    </div>
    
                    <div class="home__img">
                        <img src="/assets/img/illustration_hero.svg" alt="home">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="definition__box">
                    <h1 class="definition__title">Qu’est-ce que c’est la sobriété numérique ?</h1>
                    <p class="definition__description">La sobriété numérique est un concept qui vise à réduire l’empreinte carbone du secteur du numérique, notamment en matière de consommation énergétique.</p>
                </div>
            </div>
        </section>

        <!---
        <section class="section">
                <div class="container">
                    <h2 class="section__title">Quelques chiffres</h2>
                    <div class="number__container grid">
                        <div class="number__card">
                            <h2 class="number__title">35%</h2>
                            <div class="number__divider"></div>
                            <p class="number__description">C’est la réduction de l’impact carbone lorsque vous faites une recherche par URL (si vous la connaissez !) au lieu de faire une recherche Google.</p>
                        </div>
                        <div class="number__card">
                            <h2 class="number__title">35%</h2>
                            <div class="number__divider"></div>
                            <p class="number__description">C’est la réduction de l’impact carbone lorsque vous faites une recherche par URL (si vous la connaissez !) au lieu de faire une recherche Google.</p>
                        </div>
                        <div class="number__card">
                            <h2 class="number__title">35%</h2>
                            <div class="number__divider"></div>
                            <p class="number__description">C’est la réduction de l’impact carbone lorsque vous faites une recherche par URL (si vous la connaissez !) au lieu de faire une recherche Google.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        --->

        <section class="section">
            <div class="container">
                <h2 class="section__title">Quelques conseils</h2>
                <div class="advices__container">
                    <div class="advices__content">
                        <div class="advices__card">
                            <div class="advices__ellipse">
                                <div class="ellipse"></div>
                            </div>
                            <div>
                                <h3 class="advices__title">Éviter les vidéos en très haute qualité sur votre site.</h3>
                                <p class="advices__description">Les vidéos en très haute qualité sont très gourmandes en bande passante et en énergie. Il est donc préférable de les remplacer par des vidéos en qualité standard.</p>
                            </div>
                        </div>
                        <div class="advices__card">
                            <div class="advices__ellipse">
                                <div class="ellipse"></div>
                            </div>
                            <div>
                                <h3 class="advices__title">Éviter les vidéos en très haute qualité sur votre site.</h3>
                                <p class="advices__description">Les vidéos en très haute qualité sont très gourmandes en bande passante et en énergie. Il est donc préférable de les remplacer par des vidéos en qualité standard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="advices__img">
                        <img src="/assets/img/illustration_serveur.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="news__container">
                    <h2 class="section__title">L'actualité des pros du digital</h2>
                    <a href="#">TOUT VOIR</a>
                </div>
                <div class="news__searchbar">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 22L16.6845 16.6845M16.6845 16.6845C17.5377 15.8313 18.2144 14.8185 18.6762 13.7038C19.1379 12.5891 19.3755 11.3943 19.3755 10.1878C19.3755 8.98121 19.1379 7.78647 18.6762 6.67176C18.2144 5.55705 17.5377 4.5442 16.6845 3.69103C15.8313 2.83787 14.8185 2.16111 13.7038 1.69938C12.5891 1.23765 11.3943 1 10.1878 1C8.98121 1 7.78647 1.23765 6.67176 1.69938C5.55705 2.16111 4.5442 2.83787 3.69103 3.69103C1.96799 5.41407 1 7.75102 1 10.1878C1 12.6245 1.96799 14.9615 3.69103 16.6845C5.41407 18.4075 7.75102 19.3755 10.1878 19.3755C12.6245 19.3755 14.9615 18.4075 16.6845 16.6845V16.6845Z" stroke="#F3F3E4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        
                    <input type="text" placeholder="Rechercher des articles par thème">
                </div>
                    <div class="news__card">
                        <img src="assets/img/news.jpg" alt="news" class="news__img">
                        <div class="news__content">
                            <div class="news__category">
                                <p>Low-tech</p>
                                <p>25 novembre 2022</p>
                            </div>
                            <a href="#" class="news__title">5 conseils de Paul Muller pour développer en dimuniant son impact Co2 en 2022</a>
                        </div>
                    </div>
                    <div class="news__card">
                        <img src="assets/img/news.jpg" alt="news" class="news__img">
                        <div class="news__content">
                            <div class="news__category">
                                <p>Low-tech</p>
                                <p>25 novembre 2022</p>
                            </div>
                            <a href="#" class="news__title">5 conseils de Paul Muller pour développer en dimuniant son impact Co2 en 2022</a>
                        </div>
                    </div>
                    <div class="news__card">
                        <img src="assets/img/news.jpg" alt="news" class="news__img">
                        <div class="news__content">
                            <div class="news__category">
                                <p>Low-tech</p>
                                <p>25 novembre 2022</p>
                            </div>
                            <a href="#" class="news__title">5 conseils de Paul Muller pour développer en dimuniant son impact Co2 en 2022</a>
                        </div>
                    </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="newsletter__box">
                    <h1 class="newsletter__title">USEGREEN NEWSLETTER</h1>
                    <p class="newsletter__description">Être informé de nos dernières actualités pour un meilleur réflexe éco-responsable dans vos conceptions et manière d’utilisation du numérique.</p>
                    <div class="newsletter__searchbar">
                        <input type="text" placeholder="Votre adresse mail ici">
                        <button class="newsletter__button">
                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.3536 4.35356C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464468C15.9763 0.269205 15.6597 0.269205 15.4645 0.464467C15.2692 0.65973 15.2692 0.976312 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53554C15.6597 7.7308 15.9763 7.7308 16.1716 7.53554L19.3536 4.35356ZM-4.37114e-08 4.5L19 4.5L19 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#1D1D1B"/>
                            </svg>  
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer() ?>