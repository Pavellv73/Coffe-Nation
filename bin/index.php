<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffe Nation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="js/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick-theme.css">
    <link href="js/custombox.min.css" rel="stylesheet">
    <link href="js/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/custombox.min.js"></script>
    <script src="js/custombox.legacy.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  </head>
  <body>
    <header class="cnt">
      <div class="header-content row">
        <div class="block-logo"><img src="img/logo-full.png"></div>
        <div class="phone-block"><a href="tel:89088918290">8 908 891 82 90</a><span>звонок бесплатный</span></div>
      </div>
      <div class="block1">
        <div class="block1-content">
          <div class="block1-head"><span>Оптовая продажа<br></span>
            <h1>обжаренного кофе в зёрнах</h1>
            <p>для кафе, кофеен, ресторанов, кофе с собой и организаций</p>
          </div>
          <div class="steps-block">
            <div class="step">
              <div class="step-img"><img src="img/b1-icon1.svg"></div>
              <div class="step-text">
                <p>БЕСПЛАТНАЯ ПАЧКА <br> КОФЕ НА ПРОБУ</p>
              </div>
            </div>
            <div class="step">
              <div class="step-img"><img src="img/b1-icon2.svg"></div>
              <div class="step-text">
                <p>СОБСТВЕННАЯ <br> ОБЖАРКА КОФЕ</p>
              </div>
            </div>
            <div class="step">
              <div class="step-img"><img src="img/b1-icon3.svg"></div>
              <div class="step-text">
                <p>ДОСТАВКА В <br> ТЕЧЕНИЕ 5 ДНЕЙ</p>
              </div>
            </div>
            <div class="step">
              <div class="step-img"><img src="img/b1-icon4.svg"></div>
              <div class="step-text">
                <p>ОТСРОЧКА ПЛАТЕЖА <br> ДО 10 ДНЕЙ</p>
              </div>
            </div>
          </div>
          <form method="post" action="mailer.php">
            <input type="email" name="email" placeholder="E-mail" required="required">
            <input class="phone" type="tel" name="phone" placeholder="Контактный телефон" required="required">
            <input type="hidden" name="Download_the_price" value="true">
            <button class="button-white" type="submit">Скачать прайс-лист</button>
          </form>
        </div>
      </div>
    </header>
    <section class="block2 cnt">
      <div class="block2-content">
        <div class="block2-head">
          <h2>наш ассортимент</h2>
          <hr>
        </div>
        <div class="varieties-blocks row">
          <div class="variety-block">
            <h3>бразилия <br> сантос</h3>
            <p class="text-gold">классический <br> вкус</p>
          </div>
          <div class="variety-block">
            <h3>колумбия <br> супремо</h3>
            <p class="text-gold">Ореховый <br> аромат</p>
          </div>
          <div class="variety-block">
            <h3>эфиопия <br> иргачиф</h3>
            <p class="text-gold">цитрусовая <br> кислинка</p>
          </div>
          <div class="variety-block">
            <h3>эспрессо <br> смесь</h3>
            <p class="text-gold">плотное тело <br> насыщенный <br> вкус</p>
          </div>
          <div class="variety-block">
            <h3>вендинг <br> смесь</h3>
            <p class="text-gold">идеально для <br> вендинговых <br> автоматов</p>
          </div>
          <div class="variety-block">
            <h3>Пробник <br> бесплатно</h3>
            <p class="text-gold">заполните <br><a class="questionnaire-popup" href="#">анкету</a> и <br> получите</p>
          </div>
        </div>
      </div>
    </section>
    <div id="questionnaire-popup">
      <div class="logo-popup">
        <div class="logo-block"><img src="img/logo-color.png">
          <p>оставьте заявку и получите пробник<span> бесплатно</span></p>
        </div>
        <form method="post" action="mailer.php">
          <input name="name" type="email" placeholder="E-mail" required="required">
          <input class="phone" name="phone" type="tel" placeholder="Ваш номер телефона" required="required">
          <button class="button-gold" type="submit">Получить пробник</button>
        </form>
      </div>
    </div>
    <section class="block3 cnt">
      <div class="block3-content row">
        <div class="bg"></div>
        <div class="block3-head">
          <h2>Коротко о нас</h2>
          <hr>
          <p>Наша компания обжаривает и продает кофе в зернах по всей России.</p>
          <p>Мы любим своё дело и наша главная задача состоит в том, чтобы вашим клиентам нравился кофе. Поэтому, прежде чем заключить договор, мы предлагаем вам сначала попробовать наш кофе. Мы всегда идем на встречу и готовы предложить вам индивидуальные условия сотрудничества.</p>
          <div class="readmore-text">
            <p>Наша компания обжаривает и продает кофе в зернах по всей России.</p>
            <p>Мы любим своё дело и наша главная задача состоит в том, чтобы вашим клиентам нравился кофе.</p>
            <p>Поэтому, прежде чем заключить договор, мы предлагаем вам сначала попробовать наш кофе.</p>
            <p>Мы всегда идем на встречу и готовы предложить вам индивидуальные условия сотрудничества: по доставке, оплате, отсрочке платежа и даже степени обжарки кофе.</p>
            <p>Особое внимание уделяется контролю за качеством на всех этапах производства.</p>
            <p>За процессом обжарки следит электроника, однако после, мы  обязательно дегустируем получившийся кофе, чтобы лично убедиться в качестве нашего продукта.</p>
            <p>Звоните, пробуйте! Будем рады видеть вас в числе постоянных партнеров!</p>
          </div><a class="read-more" href="#">Читать дальше…</a>
        </div>
        <div class="about-video"><a class="video-popup" href=" " onclick="yaCounter44768152.reachGoal('video_about_us'); return true;"><img src="img/video-button.svg"></a><a class="video-popup" href=" ">
            <p>Видео о нас</p></a></div>
      </div>
    </section>
    <div id="video-pop">
      <div class="video-pop">
        <iframe src="https://www.youtube.com/embed/earNpQ7Nxgs?rel=0&amp;showinfo=0?ecver=2" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <section class="block4 cnt">
      <div class="block4-content row">
        <div class="block4-head">
          <h2>Всегда идем на встречу <br>клиенту</h2><span>и готовы предложить вам <br>индивидуальные условия сотрудничества</span>
        </div>
        <form method="post" action="mailer.php">
          <input name="name" placeholder="Ваше имя" type="text" required="required">
          <input class="phone" name="phone" placeholder="Контактный телефон" required="required">
          <input type="hidden" name="individual_conditions_1" value="true">
            <button class="button-white" type="submit">Узнать</button>
        </form>
      </div>
    </section>
    <section class="block5 cnt">
      <div class="block5-content">
        <div class="block5-head">
          <h2>С нами работают</h2>
          <hr>
        </div>
        <div class="slider">
          <div class="prev"></div>
          <div class="slick-slider">
            <div class="slick-slide"><img src="img/logo-1.png"></div>
            <div class="slick-slide"><img src="img/logo-2.png"></div>
            <div class="slick-slide"><img src="img/logo-3.png"></div>
            <div class="slick-slide"><img src="img/logo-4.png"></div>
            <div class="slick-slide"><img src="img/logo-5.png"></div>
            <div class="slick-slide"><img src="img/logo-6.png"></div>
            <div class="slick-slide"><img src="img/logo-7.png"></div>
            <div class="slick-slide"><img src="img/logo-8.png"></div>
            <div class="slick-slide"><img src="img/logo-9.png"></div>
            <div class="slick-slide"><img src="img/logo-10.png"></div>
          </div>
          <div class="next"></div>
        </div>
      </div>
    </section>
    <section class="block6 cnt">
      <div class="block6-content">
        <div class="block6-head">
          <h2>Ответы на вопросы</h2>
        </div>
        <div class="answers-blocks row">
          <div class="answer-block">
            <div class="answer-img"><img src="img/answer-img1.png"></div>
            <div class="answer-text">
              <h2>ВКУСНЫЙ ЛИ КОФЕ?</h2>
              <hr>
              <p>Рассказывать о кофе можно много, однако это тот продукт, который нужно пробовать, а не говорить о нем.</p>
              <p>Поэтому прежде чем начать сотрудничать, мы отправим вам бесплатную пачку кофе на пробу, чтобы вы лично пробовали его.</p>
            </div>
          </div>
          <div class="answer-block">
            <div class="answer-img"><img src="img/answer-img2.png"></div>
            <div class="answer-text">
              <h2>СТЕПЕНЬ ОБЖАРКИ?</h2>
              <hr>
              <p>Мы используем среднюю степень обжарки, т.к. полученный кофе имеет более сбалансированный вкус, что позволяет использовать его для приготовления любого напитка.</p>
              <p>Однако мы можем сделать индивидуальную обжарку при заказе от 20 кг кофе.</p>
            </div>
          </div>
          <div class="sertificate-block">
            <h2>ФИНАНСОВЫЕ УСЛОВИЯ СОТРУДНИЧЕСТВА и СТОИМОСТЬ?</h2>
            <hr>
            <div class="discription-sertificate">
              <div class="discription-text">
                <p>Обычно мы работаем по 100% предоплате, но тем не менее можем предоставить отсрочку платежа. Всё обговаривается индивидуально.</p>
                <p>Оптовая стоимость нашего обжаренного кофе - от 800 руб.  Можем сделать индивидуальную скидку, либо обговорить индивидуальные условия.</p>
              </div>
              <div class="sertificate-img"><a class="fancybox g2l" rel="glry21" href="img/sertificate.jpg"><img src="img/sertificate.jpg"></a><a class="fancybox g2l" rel="glry21" href="img/sertificate-2.jpg" style="display: none;"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="block7 cnt">
      <div class="block7-content row">
        <div class="block7-head">
          <h2>Всегда идем на встречу <br>клиенту</h2><span>и готовы предложить вам <br>индивидуальные условия сотрудничества</span>
        </div>
        <form method="post" action="mailer.php">
          <input name="name" placeholder="Ваше имя" type="text" required="required">
          <input class="phone" name="phone" placeholder="Контактный телефон" required="required">
          <input type="hidden" name="individual_conditions_2" value="true">
          <button class="button-white" type="submit">Узнать</button>
        </form>
      </div>
    </section>
    <section class="block8 cnt">
      <div class="block8-content row">
        <div class="block8-head">
          <h2>Контакты</h2>
          <hr>
        </div>
        <div class="map" id="map"></div>
        <div class="contacts">
          <div class="phone">
            <h3>Телефон</h3>
            <p>Менеджер отдела продаж: <br> +79088918290 (Никита)</p>
            <p>Ответственный за обжарку: <br> +79044885025 (Александр)</p>
          </div>
          <div class="adress">
            <h3>АДРЕС</h3>
            <p>Кофейная компания «Coffe Nation» <br>628400, пр-т Ленина, 59, г. Сургут,<br> ХМАО Тюменской области</p>
          </div>
          <div class="time-works">
            <h3>ЧАСЫ РАБОТЫ</h3>
            <p>Пн-Вс: с 9:00 до 20:00.<br> Перерыв: с 14:00 до 15:00.</p>
            <p>Без выходных. Прием заявок: 24 часа</p>
          </div>
        </div>
      </div>
    </section>
    <footer class="cnt">
      <div class="footer-content row">
        <div class="politic">
          <h3>COFFEE-NATION</h3><a class="politic" href="#">Политика конфиденциальности</a>
        </div>
        <div class="tel"><a href="tel:88003021246">8 908 891 82 90</a>
          <p>звонок бесплатный</p>
        </div>
        <div class="nt-logo"><a href="http://worknext.ru/" target="_blank"><img src="img/logotype.png"></a></div>
      </div>
    </footer>
    <div id="politic">
      <div class="politic-popup">
        <h3>Политика конфиденциальности</h3>
        <p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.</p>
        <p>Все лица, заполнившие сведения, составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных.</p>
        <p>Под персональными данными Гражданина понимается нижеуказанная информация: общая информация (имя и адрес электронной почты, телефон).</p>
        <p>Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение.</p>
        <p>Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.</p>
      </div>
    </div>
    <div class="hidden"><a class="fancybox" id="thnx" href=".thnx"></a>
      <div class="thnx"><img src="img/logo-color.png">
        <h2>Благодарим <br>за обращение!</h2>
      </div>
    </div>
    <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=ed83462b190ef7e6006142ddb673634b" charset="UTF-8" async></script>
  </body>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function () {
              try {
                  w.yaCounter44768152 = new Ya.Metrika({
                      id: 44768152,
                      clickmap: true,
                      trackLinks: true,
                      accurateTrackBounce: true,
                      webvisor: true
                  });
              } catch (e) {
              }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () {
                  n.parentNode.insertBefore(s, n);
              };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/watch.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else {
              f();
          }
      })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript>
      <div><img src="https://mc.yandex.ru/watch/43540629" style="position:absolute; left:-9999px;" alt=""/></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

</html>