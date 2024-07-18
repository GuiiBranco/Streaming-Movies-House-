const menulateral = document.querySelector("nav");
const abrirmenu = document.querySelector(".menu img");
const fecharmenu = document.querySelector("#fecharmenu");

abrirmenu.addEventListener("click", ()=>{
    menulateral.classList.remove("fechado");
    menulateral.classList.add("aberto");
});

fecharmenu.addEventListener("click", ()=>{
    menulateral.classList.remove("aberto");
    menulateral.classList.add("fechado");
});