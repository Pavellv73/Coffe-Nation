$(document).ready(function () {
    $(".fancybox").fancybox();
    var e = new Custombox.modal({content: {effect: "fadein", target: ".video-pop"}});
    $(".video-popup").click(function () {
        return e.open(), !1
    });
    var n = new Custombox.modal({content: {effect: "fadein", target: "#questionnaire-popup"}});
    $(".questionnaire-popup").click(function () {
        return n.open(), !1
    }), $(".read-more").click(function () {
        return $(".readmore-text").fadeIn(), !1
    });
    var o = new Custombox.modal({content: {effect: "fadein", target: "#politic", width: "100%"}});
    $(".politic").click(function () {
        return o.open(), !1
    }), $(".phone").mask("+7 (999) 999-99-99"), $(".slick-slider").slick({
        dots: !1,
        infinite: !0,
        slidesToShow: 5,
        slidesToScroll: 5,
        prevArrow: ".prev",
        nextArrow: ".next",
        responsive: [{breakpoint: 768, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
            breakpoint: 330,
            settings: {slidesToShow: 2, slidesToScroll: 2}
        }]
    }), $(".sert-slider.slick-slider").slick({
        dots: !1,
        infinite: !0,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: ".prev",
        nextArrow: ".next"
    }), $("input").change(function () {
        $("input").removeClass("incorrect correct")
    }), ymaps.ready(function () {
        var e = [61.264694, 73.371796], n = new ymaps.Map("map", {
            center: e,
            zoom: 16,
            controls: []
        }, {searchControlProvider: "yandex#search"}), o = new ymaps.Placemark([61.264694, 73.371796], {
            hintContent: "Кофейная компания «Funky Coffee» 628400, пр-т Ленина, 59",
            balloonContent: "пр-т Ленина, 59"
        }, {preset: "islands#circleIcon", iconColor: "#f75c52"});
        n.geoObjects.add(o), n.behaviors.disable("scrollZoom"), n.behaviors.disable("multiTouch"), n.behaviors.disable("drag")
    });
    var t = !1, r = "";
    $("form").ajaxForm({
        beforeSubmit: function (e, n) {
            $("input").removeClass("incorrect");
            var o = new RegExp("^[-0-9a-z._]+@[-0-9a-z.]+.[a-z]{2,4}$", "i"), i = "";
            for (var a in e) {
                if ("phone" == e[a].name && "" == e[a].value)return n.find('input[name="phone"]').addClass("incorrect"), !1;
                if ("phone" == e[a].name && "" != e[a].value)for (var c = 0; c <= 9; c++)if (i = new RegExp(c.toString() + c.toString() + c.toString() + c.toString() + c.toString() + c.toString() + c.toString()), i.test(e[a].value))return n.find('input[name="phone"]').addClass("incorrect"), !1;
                if (n.find('input[name="phone"]').addClass("correct"), "name" == e[a].name && "" == e[a].value)return n.find('input[name="name"]').addClass("incorrect"), !1;
                if (n.find('input[name="name"]').addClass("correct"), "email" == e[a].name && "" == e[a].value)return n.find('input[name="email"]').addClass("incorrect"), !1;
                if ("email" == e[a].name && "" != e[a].value && !o.test(e[a].value))return n.find('input[name="email"]').addClass("incorrect"), !1;
                n.find('input[name="email"]').addClass("correct"), "target" == e[a].name && (r = e[a].value), "download" == e[a].name && (t = !0)
            }
            return !0
        }, success: function (e) {
            if (1 == t) {
                var n = document.createElement("a");
                yaCounter44768152.reachGoal(r);
                n.setAttribute("href", "/price.pdf"), n.setAttribute("download", "download"), onload = n.click(), t = !1
            }
            console.info(e), $("input").removeClass("incorrect correct"), $.fancybox($(".thnx"))
        }
    })
});