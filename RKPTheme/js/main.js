(function(){
    var burger = document.querySelector('.checkbox1'),
        header = document.querySelector('.menu-content-row');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());
