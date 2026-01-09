import './bootstrap';

new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 2000, // 2 detik
        disableOnInteraction: false
    },
});

$(function () {

    if (!$('section').hasClass('home')) return;

    const $navbar = $('.navbar');
    const trigger = 50;

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > trigger) {
            $navbar.addClass('is-scrolled');
        } else {
            $navbar.removeClass('is-scrolled');
        }
    });

});

$(function () {

    const $window = $(window);
    const $jumbotron = $('.jumbotron');
    const $bg = $('.jumbotron__background');

    if (!$jumbotron.length) return;

    let latestScroll = 0;
    let ticking = false;

    function onScroll() {
        latestScroll = $window.scrollTop();
        requestTick();
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    function updateParallax() {
        const offsetTop = $jumbotron.offset().top;
        const height = $jumbotron.outerHeight();
        const windowHeight = window.innerHeight;

        if (
            latestScroll + windowHeight > offsetTop &&
            latestScroll < offsetTop + height
        ) {
            const yPos = (latestScroll - offsetTop) * 0.35;
            $bg.css('transform', `translate3d(0, ${yPos}px, 0)`);
        }

        ticking = false;
    }

    $window.on('scroll', onScroll);

});
