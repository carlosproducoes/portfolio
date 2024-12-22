var btnMobile = document.querySelector('#btn-mobile')
var header = document.querySelector('header')
var menuLinks = document.querySelectorAll('#menu a')

btnMobile.addEventListener('click', function () {
    header.classList.toggle('active')
})

menuLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
        header.classList.remove('active')
    })
})