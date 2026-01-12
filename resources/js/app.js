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

$(function () {

    const $elements = $('[data-animate]');
    if (!$elements.length) return;

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            const el = entry.target;
            const $el = $(el);
            const delay = $el.data('delay') || 0;

            if (entry.isIntersecting) {
                setTimeout(function () {
                    $el.addClass('is-visible');
                }, delay);
            } else {
                $el.removeClass('is-visible');
            }
        });
    }, {
        threshold: .25
    });

    $elements.each(function () {
        observer.observe(this);
    });

});

$('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    const target = $($(this).attr('href'));
    if (!target.length) return;

    const OFFSET = 180;
    const SPEED = 1; // px per ms (1 = 1000px/detik)

    const start = $(window).scrollTop();
    const end = Math.max(target.offset().top - OFFSET, 0);
    const distance = Math.abs(end - start);

    const duration = distance / SPEED;

    $('html, body').animate(
        { scrollTop: end },
        duration,
        'swing'
    );
});
