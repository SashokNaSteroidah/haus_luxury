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

const images = document.querySelectorAll('.slider img');
let currentIndex = 0;

function showImage(index) {
    images[currentIndex].classList.remove('active');
    images[index].classList.add('active');
    currentIndex = index;
}

document.onclick = event => {
    if (event.target.classList.contains('prev')) {
        let index = currentIndex - 1;
        if (index < 0) {
            index = images.length - 1;
        }
        showImage(index);
    } else if (event.target.classList.contains('next')) {
        let index = currentIndex + 1;
        if (index >= images.length) {
            index = 0;
        }
        showImage(index);
    }
};

showImage(currentIndex);