document.querySelector('#signin').onclick = () => {
    document.querySelector('.back_black').style.display = 'block'
    document.querySelector('.signin').style.display = 'block'
}

document.querySelector('#signup').onclick = () => {
    document.querySelector('.back_black').style.display = 'block'
    document.querySelector('.signup').style.display = 'block'
}

document.querySelector('.back_black').onclick = () => {
    document.querySelector('.back_black').style.display = 'none'
    document.querySelector('.signin').style.display = 'none'
    document.querySelector('.signup').style.display = 'none'
}
