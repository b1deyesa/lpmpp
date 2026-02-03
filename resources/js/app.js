import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {

    window.ckeditors = window.ckeditors || {};

    const toolbarPresets = {
        basic: [
            'bold', 'italic', 'link',
            'bulletedList', 'numberedList',
            'blockQuote'
        ],
        full: [
            'undo', 'redo', '|',
            'bold', 'italic', 'link', '|',
            'bulletedList', 'numberedList', '|',
            'fontFamily', 'fontSize',
            'fontColor', 'fontBackgroundColor', '|',
            'insertTable', '|',
            'uploadImage'
        ],
        table: [
            'undo', 'redo', '|',
            'insertTable'
        ]
    };

    function initEditors() {

        document.querySelectorAll('.editor-input').forEach(el => {

            if (el.dataset.initialized) return;
            el.dataset.initialized = true;

            const toolbarType = el.dataset.toolbar || 'basic';

            CKEDITOR.ClassicEditor.create(el, {
                licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NzAzMzU5OTksImp0aSI6IjA2NWY5OTkwLTg4Y2UtNGM5Zi05ZTEwLTMzMDA1YzZlZDk3MSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjIxY2E4NWJlIn0.JWnrCEU9BpDYH2cJA-Tf1i6Rar_QuQdcGBguEv6sMzi-VSihOLYhvukDPQhyWVcYxf8l13ve2Y0qD6HtCG9BHw',

                plugins: [
                    CKEDITOR.Essentials,
                    CKEDITOR.Paragraph,
                    CKEDITOR.Bold,
                    CKEDITOR.Italic,
                    CKEDITOR.Link,
                    CKEDITOR.Font,
                    CKEDITOR.BlockQuote,

                    CKEDITOR.List,
                    CKEDITOR.Table,
                    CKEDITOR.TableToolbar,
                    CKEDITOR.TableProperties,

                    CKEDITOR.Image,
                    CKEDITOR.ImageToolbar,
                    CKEDITOR.ImageCaption,
                    CKEDITOR.ImageStyle,
                    CKEDITOR.ImageResize,
                    CKEDITOR.ImageUpload,

                    CKEDITOR.SimpleUploadAdapter
                ],

                toolbar: toolbarPresets[toolbarType],

                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells',
                        'tableProperties'
                    ]
                },

                image: {
                    toolbar: [
                        'imageStyle:inline',
                        'imageStyle:block',
                        'imageStyle:side',
                        '|',
                        'toggleImageCaption',
                        'imageTextAlternative'
                    ]
                },

                simpleUpload: {
                    uploadUrl: '/ckeditor/upload',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                }

            }).then(editor => {

                window.ckeditors[el.id] = editor;

                // 🔑 SYNC CKEDITOR → LIVEWIRE
                editor.model.document.on('change:data', () => {

                    const wireRoot = el.closest('[wire\\:id]');
                    if (!wireRoot) return;

                    const wireId = wireRoot.getAttribute('wire:id');
                    const property = el.getAttribute('name');

                    if (!wireId || !property) return;

                    Livewire.find(wireId)
                        ?.set(property, editor.getData());
                });

            }).catch(error => {
                console.error('CKEditor init error:', error);
            });
        });
    }

    // INIT FIRST LOAD
    initEditors();

    // LIVEWIRE 3 RE-INIT AFTER DOM MORPH
    document.addEventListener('livewire:init', () => {
        Livewire.hook('commit', ({ succeed }) => {
            succeed(() => initEditors());
        });
    });

});

window.addEventListener('load', function () {
    const loader = document.getElementById('loading');

    setTimeout(function () {
        loader.classList.add('hide');

        setTimeout(function () {
            loader.remove();
        }, 400);
    }, 1000);
});

$(function () {
    const $alert = $('.alert');

    if ($alert.length) {
        $alert.addClass('show');

        setTimeout(function () {
            $alert.removeClass('show');

            setTimeout(function () {
                $alert.remove();
            }, 400);
        }, 3000);
    }
});

new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 2000, // 2 detik
        disableOnInteraction: false
    },
});

$(function () {

    const $body = $('body.guest');

    if (!$body.find('section.home').length) return;

    const $navbar = $('.navigation.guest');
    const trigger = 0;

    $navbar.css({
        position: 'fixed',
        top: 0,
        left: 0,
        width: '100%',
        zIndex: 999
    });

    if ($(window).scrollTop() <= trigger) {
        $navbar.addClass('transparent');
    } else {
        $navbar.removeClass('transparent');
    }

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > trigger) {
            $navbar.removeClass('transparent');
        } else {
            $navbar.addClass('transparent');
        }
    });

});

$(function () {

    const $bg = $('.jumbotron__background');
    const el = document.querySelector('.jumbotron');

    if (!el) return;

    let active = false;

    const observer = new IntersectionObserver(
        ([entry]) => active = entry.isIntersecting,
        { threshold: 0 }
    );

    observer.observe(el);

    window.addEventListener('scroll', () => {
        if (!active) return;

        requestAnimationFrame(() => {
            const rect = el.getBoundingClientRect();
            const y = -rect.top * 0.25;
            $bg.css('transform', `translate3d(0, ${y}px, 0)`);
        });
    }, { passive: true });

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

$(function () {

    function isInViewport($el) {
        const elementTop    = $el.offset().top;
        const elementBottom = elementTop + $el.outerHeight();

        const viewportTop    = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    function animateCount($el) {
        const target = parseInt($el.data('animate-count'), 10) || 0;

        $el.data('animated', true);

        $({ count: 0 }).animate(
            { count: target },
            {
                duration: 2500,
                easing: 'swing',
                step: function (now) {
                    $el.text(Math.floor(now));
                },
                complete: function () {
                    $el.text(target);
                }
            }
        );
    }

    function resetCount($el) {
        $el.text(0);
        $el.data('animated', false);
    }

    $(window).on('scroll load', function () {
        $('[data-animate-count]').each(function () {
            const $el = $(this);

            if (isInViewport($el)) {
                if (!$el.data('animated')) {
                    animateCount($el);
                }
            } else {
                resetCount($el);
            }
        });
    });

});

$(function () {

    $(document).on('change', '[data-image-preview]', function () {
        const input = this;
        const file  = input.files[0];

        if (!file) return;

        // validasi file image
        if (!file.type.startsWith('image/')) {
            alert('File harus berupa gambar');
            input.value = '';
            return;
        }

        const reader = new FileReader();

        const $container = $(input).closest('.image');
        const $preview   = $container.find('.image__preview');
        const $img       = $preview.find('.image__value');
        const $empty     = $preview.find('.image__empty');

        reader.onload = function (e) {
            $img
                .attr('src', e.target.result)
                .fadeIn(200);

            $empty.hide();
        };

        reader.readAsDataURL(file);
    });

});

$(function () {

    $('.navigation.dashboard .menu__dropdown').each(function () {

        const $dropdown = $(this);
        const $menu     = $dropdown.find('.dropdown__menu');
        const $label    = $dropdown.find('.dropdown__label');
        const $icon     = $label.find('.menu__icon__dropdown');

        const hasActive = $menu.find('.menu__item.active').length > 0;

        if (hasActive) {
            $menu.show();
            $label.css('color', 'white');
            $label.css('font-weight', 'bold');
            $icon.css('transform', 'rotate(180deg)');
            $label.data('locked', true);
        } else {
            $label.data('locked', false);
            $label.data('open', false);
        }
    });

    $('.navigation.dashboard .dropdown__label').on('click', function () {

        const $label = $(this);

        if ($label.data('locked')) return;

        const $menu = $label.next('.dropdown__menu');
        const $icon = $label.find('.menu__icon__dropdown');
        const isOpen = $label.data('open') === true;

        if (isOpen) {
            $menu.slideUp(200);
            $label.css('color', '#FFFFFFCC');
            $label.css('font-weight', 'normal');
            $icon.css('transform', 'rotate(0deg)');
            $label.data('open', false);
        } else {
            $menu.slideDown(200);
            $label.css('color', 'white');
            $label.css('font-weight', 'bold');
            $icon.css('transform', 'rotate(180deg)');
            $label.data('open', true);
        }
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
