let scrollpos = window.scrollY

const header = document.querySelector(".header_main")
const scrollChange = 300

const add_class_on_scroll = () => header.classList.add("header_change_main")
const remove_class_on_scroll = () => header.classList.remove("header_change_main")

window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= scrollChange) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

})

document.addEventListener('DOMContentLoaded', () => {
    new ResizeObserver(() => {
        if (window.matchMedia('screen and (max-width: 767px)').matches) {
            document.querySelectorAll('.run-on-mobile').forEach((el) => {
                el.querySelectorAll('.itc-slider-btn').forEach((el) => {
                    el.style.removeProperty('display');
                });
                ItcSlider.getOrCreateInstance(el, {
                    loop: true,
                    autoplay: true
                });
            });
        } else {
            document.querySelectorAll('.run-on-mobile').forEach((el) => {
                const slider = ItcSlider.getOrCreateInstance(el);
                slider.dispose();
                el.querySelectorAll('.itc-slider-btn').forEach((el) => {
                    el.style.display = 'none';
                });
            });
        }
    }).observe(document.body);
});