<?php require_once "header.php" ?>

<main>

    <section style="margin-top: 150px" class="card">
        <div class="up_side_card">
            <article class="change_img_contain">
                <h1>Фото</h1>
                <article class="change_img">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" multiple
                               onchange="updateList()">
                        <label class="custom-file-label" for="file">
                            Добавьте новое фото</label>
                        <svg style="width: 10px; margin-left: 10px" height="14" viewBox="0 0 6 10" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 10C2.16364 10 1.45455 9.73333 0.872727 9.2C0.290909 8.66667 0 8.01667 0 7.25V2C0 1.45 0.213636 0.979167 0.640909 0.5875C1.06818 0.195833 1.58182 0 2.18182 0C2.78182 0 3.29545 0.195833 3.72273 0.5875C4.15 0.979167 4.36364 1.45 4.36364 2V6.75C4.36364 7.1 4.23182 7.39583 3.96818 7.6375C3.70455 7.87917 3.38182 8 3 8C2.61818 8 2.29545 7.87917 2.03182 7.6375C1.76818 7.39583 1.63636 7.1 1.63636 6.75V2H2.45455V6.75C2.45455 6.89167 2.50691 7.01033 2.61164 7.106C2.716 7.202 2.84545 7.25 3 7.25C3.15455 7.25 3.28418 7.202 3.38891 7.106C3.49327 7.01033 3.54545 6.89167 3.54545 6.75V2C3.54545 1.65 3.41364 1.35417 3.15 1.1125C2.88636 0.870833 2.56364 0.75 2.18182 0.75C1.8 0.75 1.47727 0.870833 1.21364 1.1125C0.95 1.35417 0.818182 1.65 0.818182 2V7.25C0.818182 7.8 1.03182 8.27083 1.45909 8.6625C1.88636 9.05417 2.4 9.25 3 9.25C3.6 9.25 4.11364 9.05417 4.54091 8.6625C4.96818 8.27083 5.18182 7.8 5.18182 7.25V2H6V7.25C6 8.01667 5.70909 8.66667 5.12727 9.2C4.54545 9.73333 3.83636 10 3 10Z"
                                fill="black"/>
                        </svg>
                    </div>
                    <ul id="fileList" class="file-list"></ul>
                </article>
            </article>
            <article class="change_input">
                <label for="">
                    <input placeholder="Название" type="text">
                </label>
                <h2>Цена домокомплекта:</h2>
                <label for="">
                    <input placeholder="Цена" type="number">
                    <textarea placeholder="Описание 1" name="" id="" cols="30" rows="10"></textarea>
                    <textarea placeholder="Описание 2" name="" id="" cols="30" rows="10"></textarea>
                </label>
            </article>
        </div>
        <div class="down_side_card">
            <article>
                <h1>Технические характеристики</h1>
                <aside>
                    <div>
                        <label for="">
                            <input class="tech_change" type="number" max="2">
                        </label>
                        <h2>Комнаты</h2>
                    </div>
                    <div class="pob_down">
                        <label for="">
                            <input class="tech_change" type="number" max="1">
                        </label>
                        <h2>М²</h2>
                    </div>
                    <div>
                        <label for="">
                            <input class="tech_change" type="number" max="1">
                        </label>
                        <h2>Этажа</h2>
                    </div>
                </aside>
            </article>
            <label>
                <a href="">Оставить заявку</a>
            </label>
        </div>
    </section>
    <section style="margin-top: 100px" class="card">
        <svg class="cross_delete" width="26" height="26" viewBox="0 0 26 26" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.47484 24.4246C1.01039 23.9601 0.778704 23.4137 0.779796 22.7853C0.778704 22.1569 1.01039 21.6105 1.47484 21.1461L9.67117 12.9497L1.47484 4.75339C1.01039 4.28894 0.778157 3.74197 0.778158 3.11249C0.778157 2.4852 1.01039 1.93932 1.47484 1.47486C1.9393 1.0104 2.48573 0.777628 3.11411 0.776535C3.7425 0.777628 4.28892 1.0104 4.75338 1.47486L12.9497 9.67119L21.146 1.47486C21.6105 1.0104 22.1575 0.778175 22.7869 0.778175C23.4142 0.778175 23.9601 1.0104 24.4246 1.47486C24.889 1.93932 25.1218 2.48574 25.1229 3.11413C25.1218 3.74251 24.889 4.28894 24.4246 4.75339L16.2282 12.9497L24.4246 21.1461C24.889 21.6105 25.1213 22.1564 25.1213 22.7837C25.1213 23.4132 24.889 23.9601 24.4246 24.4246C23.9601 24.889 23.4137 25.1207 22.7853 25.1196C22.1569 25.1207 21.6105 24.889 21.146 24.4246L12.9497 16.2283L4.75338 24.4246C4.28892 24.889 3.74304 25.1213 3.11575 25.1213C2.48627 25.1213 1.9393 24.889 1.47484 24.4246Z"
                fill="black"/>
        </svg>
        <svg class="change_pin" width="26" height="26" viewBox="0 0 26 26" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 26V19.9019L14.7063 5.18499L20.8 11.2831L6.09375 26H0ZM3.25 22.7477H4.7125L16.25 11.2831L14.7063 9.73827L3.25 21.2841V22.7477ZM22.6281 9.49435L16.5344 3.3962L19.4594 0.469088C19.7573 0.143854 20.1365 -0.0122588 20.5969 0.000750542C21.0573 0.014844 21.4365 0.170956 21.7344 0.469088L25.5531 4.29059C25.851 4.58873 26 4.96166 26 5.4094C26 5.85606 25.851 6.242 25.5531 6.56724L22.6281 9.49435Z"
                fill="black"/>
        </svg>
        <div class="up_side_card">
            <div style="border-radius: 25px;
            margin-right: 20px; width: 220vw;" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <swiper-slide>
                        <img src="img/image%202.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="img/1111%201.png" alt="">
                    </swiper-slide>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <article>
                <h1>OPTI 62</h1>
                <div>
                    <h2>Цена домокомплекта:</h2>
                    <h3>5 690 000 ₽</h3>
                </div>
                <h4>Дом OPTI — это оптимальное решение для загородной жизни. </h4>
                <p>Это просторный и красивый двухэтажный дом. В нем есть все элементы премиум-недвижимости: второй свет
                    (отсутствует перекрытие между первым и вторым этажом, что делает пространство в гостиной просторным
                    и наполненным светом), панорамное остекление, строительные материалы премиум-класса.</p>
            </article>
        </div>
        <div class="down_side_card">
            <article>
                <h1>Технические характеристики</h1>
                <aside>
                    <div>
                        <h1>4</h1>
                        <h2>Комнаты</h2>
                    </div>
                    <div class="pob_down">
                        <h1>127</h1>
                        <h2>М²</h2>
                    </div>
                    <div>
                        <h1>2</h1>
                        <h2>Этажа</h2>
                    </div>
                </aside>
            </article>
            <article>
                <a href="">Оставить заявку</a>
                <p>
                    Смотреть другие дома
                </p>
            </article>
        </div>
    </section>
    <section style="margin-top: 100px" class="card">
        <svg class="cross_delete" width="26" height="26" viewBox="0 0 26 26" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.47484 24.4246C1.01039 23.9601 0.778704 23.4137 0.779796 22.7853C0.778704 22.1569 1.01039 21.6105 1.47484 21.1461L9.67117 12.9497L1.47484 4.75339C1.01039 4.28894 0.778157 3.74197 0.778158 3.11249C0.778157 2.4852 1.01039 1.93932 1.47484 1.47486C1.9393 1.0104 2.48573 0.777628 3.11411 0.776535C3.7425 0.777628 4.28892 1.0104 4.75338 1.47486L12.9497 9.67119L21.146 1.47486C21.6105 1.0104 22.1575 0.778175 22.7869 0.778175C23.4142 0.778175 23.9601 1.0104 24.4246 1.47486C24.889 1.93932 25.1218 2.48574 25.1229 3.11413C25.1218 3.74251 24.889 4.28894 24.4246 4.75339L16.2282 12.9497L24.4246 21.1461C24.889 21.6105 25.1213 22.1564 25.1213 22.7837C25.1213 23.4132 24.889 23.9601 24.4246 24.4246C23.9601 24.889 23.4137 25.1207 22.7853 25.1196C22.1569 25.1207 21.6105 24.889 21.146 24.4246L12.9497 16.2283L4.75338 24.4246C4.28892 24.889 3.74304 25.1213 3.11575 25.1213C2.48627 25.1213 1.9393 24.889 1.47484 24.4246Z"
                fill="black"/>
        </svg>
        <svg class="change_pin" width="26" height="26" viewBox="0 0 26 26" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 26V19.9019L14.7063 5.18499L20.8 11.2831L6.09375 26H0ZM3.25 22.7477H4.7125L16.25 11.2831L14.7063 9.73827L3.25 21.2841V22.7477ZM22.6281 9.49435L16.5344 3.3962L19.4594 0.469088C19.7573 0.143854 20.1365 -0.0122588 20.5969 0.000750542C21.0573 0.014844 21.4365 0.170956 21.7344 0.469088L25.5531 4.29059C25.851 4.58873 26 4.96166 26 5.4094C26 5.85606 25.851 6.242 25.5531 6.56724L22.6281 9.49435Z"
                fill="black"/>
        </svg>
        <div class="up_side_card">
            <div style="border-radius: 25px;
            margin-right: 20px; width: 220vw;" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <swiper-slide>
                        <img src="img/image%202.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="img/image%202.png" alt="">
                    </swiper-slide>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <article>
                <h1>OPTI 62</h1>
                <div>
                    <h2>Цена домокомплекта:</h2>
                    <h3>5 690 000 ₽</h3>
                </div>
                <h4>Дом OPTI — это оптимальное решение для загородной жизни. </h4>
                <p>Это просторный и красивый двухэтажный дом. В нем есть все элементы премиум-недвижимости: второй свет
                    (отсутствует перекрытие между первым и вторым этажом, что делает пространство в гостиной просторным
                    и наполненным светом), панорамное остекление, строительные материалы премиум-класса.</p>
            </article>
        </div>
        <div class="down_side_card">
            <article>
                <h1>Технические характеристики</h1>
                <aside>
                    <div>
                        <h1>4</h1>
                        <h2>Комнаты</h2>
                    </div>
                    <div class="pob_down">
                        <h1>127</h1>
                        <h2>М²</h2>
                    </div>
                    <div>
                        <h1>2</h1>
                        <h2>Этажа</h2>
                    </div>
                </aside>
            </article>
            <article>
                <a href="">Оставить заявку</a>
                <p>
                    Смотреть другие дома
                </p>
            </article>
        </div>
    </section>

    <swiper-container style="display: none; width: 220vw;">
        <swiper-slide>
            <img src="img/image%202.png" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="img/1111%201.png" alt="">
        </swiper-slide>
    </swiper-container>
    <article>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            let swiper = new Swiper(".mySwiper", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>


</main>

<?php require_once "footer.php"; ?>

