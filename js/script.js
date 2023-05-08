let scrollpos = window.scrollY

const header = document.querySelector("header")
const scrollChange = 300

const add_class_on_scroll = () => header.classList.add("header_change_main")
const remove_class_on_scroll = () => header.classList.remove("header_change_main")

window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= scrollChange) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

})

// document.querySelector('#signin').onclick = () => {
//     document.querySelector('.back_black').style.display = 'block'
//     document.querySelector('.signin').style.display = 'block'
// }
//
// document.querySelector('#signup').onclick = () => {
//     document.querySelector('.back_black').style.display = 'block'
//     document.querySelector('.signup').style.display = 'block'
// }
//
// document.querySelector('.back_black').onclick = () => {
//     document.querySelector('.back_black').style.display = 'none'
//     document.querySelector('.signin').style.display = 'none'
//     document.querySelector('.signup').style.display = 'none'
// }