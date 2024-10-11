



//Aqui adicionamos umm evento de escutar o click do Mouse sobre o ícone de Hamburguer.
hamburguerButton.addEventListener("click", function() {
    mobileMenu.classList.add("flex");
    //Criamos uma função que a ouvir o click do Mouse, ele adicione uma Class, que está fazendo nossa caixa (Div) aparecer,ou seja, ficar visivel.
});

//Criamos uma função que a ouvir o click do mouse, ele REMOVA uma Class, que está fazendo nossa caixa (Div) desaparecer, ou seja, ficar invisivel.
closeButton.addEventListener("click", function() {
    mobileMenu.classList.remove("flex");
});