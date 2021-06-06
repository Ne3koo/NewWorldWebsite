let buton = document.querySelector('#btn')
let html = document.querySelector('html')

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        buton.style.display = "block";
    } else {
        buton.style.display = "none";
    }
}

bouton.addEventListener('click', () => {
    document.documentElement.scrollTop = 0;
});
