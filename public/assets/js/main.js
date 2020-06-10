document.addEventListener("DOMContentLoaded", () => {


    function trocaBtn(){
        const btns = document.querySelectorAll('.product-colors > button');
        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                const img = document.querySelector('.product-pic > img');
                const texto = document.querySelector('.text-random > h1');
                const btnImg = btn.getAttribute('data-img');
                const btnText = btn.getAttribute('data-text');
                img.src = btnImg;
                texto.innerHTML = btnText;
    
            });
        });
    }
    
    trocaBtn();

});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

