<?php require_once "header.php" ?>

<main>

    <section style="margin-top: 150px" class="card">
        <div class="up_side_card">
            <article class="change_img_contain">
                <h1>Фото</h1>
                <article class="change_img">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" multiple onchange="javascript:updateList()">
                        <label class="custom-file-label" for="file">
                            <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAQlBMVEX///8AAABhYWFlZWWSkpL19fW9vb01NTXf398kJCTw8PBRUVGdnZ1dXV3m5uZ0dHR8fHzExMSMjIzU1NSxsbEhISGIc9b1AAADv0lEQVR4nO2d607jMBhEa1pa6AVaLu//qgixq2+XxmlSe+IZa85vazQjhZMCarJaGWOMMcYYc8WxdQE0m7RpXQHLNqW0bV0CyVP65ql1DRyP6YfH1kVg7P4s3LUugmKd/rJuXQXDJgVdCnWb/qVDoT6l/+lOqI/pN70JdXe1sDOhrq8GdibUzcDAroS6HRzYkVB/a7Q7oV5rtDehXms06EKoQxoNOhDqsEYDeaHmNBqICzWv0UBaqGMaDZSFOqbRQFio4xoNZIV6S6OBqFBvazSQFOoUjQaCQp2m0UBPqNM0GsgJdapGAzGhTtdoICXUORoNhIQ6T6OBjFDnajRQEepcjQYiQp2v0UBCqPdoNBAQ6n0aDeiFeq9GA3Kh3q/RgFuo92s0oBZqiUYDYqGWaTSgFWqpRgNSoZZrNKAUag2NBoxCraHRgFCodTQa0Am1lkYDMqHW02hAJdSaGg2IhFpXowGPUOtqNKARam2NBiRCra/RgEKoCI0GBELFaDRoLlSURoPWQkVpNGgsVJxGg6ZCRWo0aChUrEaDZkJFazRoJFS8RoM2QsVrNGgi1NOCA1M6LT9we3iYzPp5sPXzenrEgeDj2xjDt02S3xyq8DC48KF1rYp4oT5eqI8X6uOF+nihPl6ojxfq44X6eKE+XqiPF+rjhfp4oT5eqI8X6uOF+nihPl6ojxfq44X6eKE+XqiPF+rjhfp4oT5eqI8XLsVhsMehQjJu4bzOuB4sySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wySw9cMksPXDJLD1wybgew8/nq/EcPZaFb6eBx+id3ioksyzE4YUlpznwwpLTHHhhyWkOvLDkNAdeWHKaAy8sOc2BF5ac5sALS05z4IUlpznwwpLTHNRYyP2OhuH3SsxbOOc9G4uTeTdIbuESr6dahtx1d25drBrnzMJj62LVOGYWXloXq8Yls3Dfulg19pmFq8/WzSrxnBu40Kvw8ORftvfSulolXrILM99XVGPsO6HvrctV4X1k4cKvi8Mw/s/zHm4Y2VvFDx+t+xXzMT5wtXpt3bCQ11sD1X066bv1yhMnPjxA90KdcIn+oKqbm5IJ9or3xdON28Qv3tV+Gg+jn2QGedkM/5WHkc/NyIftMfaX45n5L23frM/Hy7zL0xhjjDHGEPIFcc477O4fZUsAAAAASUVORK5CYII=" /> Добавьте новое фото</label>
                    </div>
                    <ul id="fileList" class="file-list"></ul>
                </article>
            </article>
            <article class="change_input">
                <label for="">
                    <input placeholder="Название" type="text">
                    <h2>Цена домокомплекта:</h2>
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
            <article>
                <a href="">Оставить заявку</a>
            </article>
        </div>
    </section>
    <section style="margin-top: 100px" class="card">
        <svg class="cross_delete" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.47484 24.4246C1.01039 23.9601 0.778704 23.4137 0.779796 22.7853C0.778704 22.1569 1.01039 21.6105 1.47484 21.1461L9.67117 12.9497L1.47484 4.75339C1.01039 4.28894 0.778157 3.74197 0.778158 3.11249C0.778157 2.4852 1.01039 1.93932 1.47484 1.47486C1.9393 1.0104 2.48573 0.777628 3.11411 0.776535C3.7425 0.777628 4.28892 1.0104 4.75338 1.47486L12.9497 9.67119L21.146 1.47486C21.6105 1.0104 22.1575 0.778175 22.7869 0.778175C23.4142 0.778175 23.9601 1.0104 24.4246 1.47486C24.889 1.93932 25.1218 2.48574 25.1229 3.11413C25.1218 3.74251 24.889 4.28894 24.4246 4.75339L16.2282 12.9497L24.4246 21.1461C24.889 21.6105 25.1213 22.1564 25.1213 22.7837C25.1213 23.4132 24.889 23.9601 24.4246 24.4246C23.9601 24.889 23.4137 25.1207 22.7853 25.1196C22.1569 25.1207 21.6105 24.889 21.146 24.4246L12.9497 16.2283L4.75338 24.4246C4.28892 24.889 3.74304 25.1213 3.11575 25.1213C2.48627 25.1213 1.9393 24.889 1.47484 24.4246Z" fill="black"/>
        </svg>
        <svg class="change_pin" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 26V19.9019L14.7063 5.18499L20.8 11.2831L6.09375 26H0ZM3.25 22.7477H4.7125L16.25 11.2831L14.7063 9.73827L3.25 21.2841V22.7477ZM22.6281 9.49435L16.5344 3.3962L19.4594 0.469088C19.7573 0.143854 20.1365 -0.0122588 20.5969 0.000750542C21.0573 0.014844 21.4365 0.170956 21.7344 0.469088L25.5531 4.29059C25.851 4.58873 26 4.96166 26 5.4094C26 5.85606 25.851 6.242 25.5531 6.56724L22.6281 9.49435Z" fill="black"/>
        </svg>
        <div class="up_side_card">
            <swiper-container style="width: 220vw;">
                <swiper-slide>
                    <img src="img/image%202.png" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="img/1111%201.png" alt="">
                </swiper-slide>
            </swiper-container>
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
        <svg class="cross_delete" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.47484 24.4246C1.01039 23.9601 0.778704 23.4137 0.779796 22.7853C0.778704 22.1569 1.01039 21.6105 1.47484 21.1461L9.67117 12.9497L1.47484 4.75339C1.01039 4.28894 0.778157 3.74197 0.778158 3.11249C0.778157 2.4852 1.01039 1.93932 1.47484 1.47486C1.9393 1.0104 2.48573 0.777628 3.11411 0.776535C3.7425 0.777628 4.28892 1.0104 4.75338 1.47486L12.9497 9.67119L21.146 1.47486C21.6105 1.0104 22.1575 0.778175 22.7869 0.778175C23.4142 0.778175 23.9601 1.0104 24.4246 1.47486C24.889 1.93932 25.1218 2.48574 25.1229 3.11413C25.1218 3.74251 24.889 4.28894 24.4246 4.75339L16.2282 12.9497L24.4246 21.1461C24.889 21.6105 25.1213 22.1564 25.1213 22.7837C25.1213 23.4132 24.889 23.9601 24.4246 24.4246C23.9601 24.889 23.4137 25.1207 22.7853 25.1196C22.1569 25.1207 21.6105 24.889 21.146 24.4246L12.9497 16.2283L4.75338 24.4246C4.28892 24.889 3.74304 25.1213 3.11575 25.1213C2.48627 25.1213 1.9393 24.889 1.47484 24.4246Z" fill="black"/>
        </svg>
        <svg class="change_pin" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 26V19.9019L14.7063 5.18499L20.8 11.2831L6.09375 26H0ZM3.25 22.7477H4.7125L16.25 11.2831L14.7063 9.73827L3.25 21.2841V22.7477ZM22.6281 9.49435L16.5344 3.3962L19.4594 0.469088C19.7573 0.143854 20.1365 -0.0122588 20.5969 0.000750542C21.0573 0.014844 21.4365 0.170956 21.7344 0.469088L25.5531 4.29059C25.851 4.58873 26 4.96166 26 5.4094C26 5.85606 25.851 6.242 25.5531 6.56724L22.6281 9.49435Z" fill="black"/>
        </svg>
        <div class="up_side_card">
                <swiper-container style="width: 220vw;">
                    <swiper-slide>
                        <img src="img/image%202.png" alt="">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="img/1111%201.png" alt="">
                    </swiper-slide>
                </swiper-container>
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


</main>

<!--<script src="js/script_change.js"></script>-->

<?php require_once "footer.php"; ?>

