$(document).ready(function () {

    $('.fancybox').fancybox();


    // Instantiate new modal
    var video = new Custombox.modal({
        content: {
            effect: 'fadein',
            target: '.video-pop'
        }
    });
    $(".video-popup").click(function () {
        video.open();

        return false;
    });


    // Instantiate new modal
    var questionnaire = new Custombox.modal({
        content: {
            effect: 'fadein',
            target: '#questionnaire-popup'
        }
    });
    $(".questionnaire-popup").click(function () {
        questionnaire.open();

        return false;
    });


   $(".read-more").click(function () {
      $(".readmore-text").fadeIn();

      return false;
   });


    // Instantiate new modal
    var politic = new Custombox.modal({
        content: {
            effect: 'fadein',
            target: '#politic',
            width: '100%'

        }
    });
    $(".politic").click(function () {
        politic.open();

        return false;
    });


    $(".phone").mask("+7 (999) 999-99-99");


    $('.slick-slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        prevArrow: ".prev",
        nextArrow: ".next",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 330,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
    ]
    });

    $('.sert-slider.slick-slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: ".prev",
        nextArrow: ".next"
    });


    $('input').change(function() {
        $('input').removeClass('incorrect correct');
    });


    //Яндекс карта

    ymaps.ready(function () {
        var markeroffSet = [61.264694, 73.371796];

        var myMap = new ymaps.Map('map', {
                center: markeroffSet,
                zoom: 16,
                controls: []
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark([61.264694, 73.371796], {
                hintContent: 'Кофейная компания «Funky Coffee» 628400, пр-т Ленина, 59',
                balloonContent: 'пр-т Ленина, 59'
            }, {
                preset: 'islands#circleIcon',
                iconColor: '#f75c52'

            });
        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('multiTouch');
        myMap.behaviors.disable('drag');
    });

    var _download = false;
    var _target='';
    $('form').ajaxForm({
        beforeSubmit: function(d, $e){
            $('input').removeClass('incorrect');

            var emailReg = new RegExp("^[-0-9a-z\._]+\@[-0-9a-z\.]+\.[a-z]{2,4}$", "i"),
                phoneReg = '';

            for (var j in d) {
                /*телефон*/
                if(d[j].name == 'phone' && d[j].value == '') {
                    $e.find('input[name="phone"]').addClass('incorrect');
                    return false;
                }

                if(d[j].name == 'phone' && d[j].value != '') {
                    for (var i = 0; i <= 9; i++) {
                        phoneReg = new RegExp(i.toString() + i.toString() + i.toString() + i.toString() + i.toString() + i.toString() + i.toString());

                        if (phoneReg.test(d[j].value)) {
                            $e.find('input[name="phone"]').addClass('incorrect');
                            return false;
                        }
                    }
                }

                $e.find('input[name="phone"]').addClass('correct');

                /*имя*/
                if(d[j].name == 'name' && d[j].value == '') {
                    $e.find('input[name="name"]').addClass('incorrect');
                    return false;
                }

                $e.find('input[name="name"]').addClass('correct');

                /*email*/
                if(d[j].name == 'email' && d[j].value == '') {
                    $e.find('input[name="email"]').addClass('incorrect');
                    return false;
                }

                if (d[j].name == 'email' && d[j].value != "") {
                    if (!emailReg.test(d[j].value)) {
                        $e.find('input[name="email"]').addClass('incorrect');
                        return false;
                    }
                }

                $e.find('input[name="email"]').addClass('correct');

                /*цель*/
                if (d[j].name == 'target') {
                    _target = d[j].value;
                }

                if (d[j].name == 'download') {
                    _download = true;
                }
            }

            return true;
        },

        success: function(data){
            if (_download == true) {

                var link = document.createElement('a');
                link.setAttribute('href','/price.pdf');
                link.setAttribute('download','download');
                onload=link.click();

                _download = false;
            }
            console.info(data);
            $('input').removeClass('incorrect correct');
            $.fancybox($('.thnx'));
        }
    });

});
