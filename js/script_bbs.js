// BUSCA BOTOES PARA SUBIR PROGRESSÃO
btnSpeak1.addEventListener("click", growProgressBar1);
btnSpeak2.addEventListener("click", growProgressBar2);
btnSpeak3.addEventListener("click", growProgressBar3);
btnSpeak4.addEventListener("click", growProgressBar4);
btnSpeak5.addEventListener("click", growProgressBar5);
btnSpeak6.addEventListener("click", growProgressBar6);
btnSpeak7.addEventListener("click", growProgressBar7);
btnSpeak8.addEventListener("click", growProgressBar8);
btnSpeak9.addEventListener("click", growProgressBar9);
btnSpeak10.addEventListener("click", growProgressBar10);
btnSpeak11.addEventListener("click", growProgressBar11);
btnSpeak12.addEventListener("click", growProgressBar12);
bbs_model_button.addEventListener("click", growProgressBar13);

// FUNÇÕES PARA SUBIR PROGRESSAO
function growProgressBar1(){
    document.querySelector('.progress_bar').style.animation = "progress_animation1 1s";
    document.querySelector('.progress_bar').style.height = "7%";
    document.querySelector('.progress_bar').innerHTML = "<p>7%</p>";
}
function growProgressBar2(){
    document.querySelector('.progress_bar').style.animation = "progress_animation2 1s";
    document.querySelector('.progress_bar').style.height = "14%";
    document.querySelector('.progress_bar').innerHTML = "<p>14%</p>";
}
function growProgressBar3(){
    document.querySelector('.progress_bar').style.animation = "progress_animation3 1s";
    document.querySelector('.progress_bar').style.height = "21%";
    document.querySelector('.progress_bar').innerHTML = "<p>21%</p>";
}
function growProgressBar4(){
    document.querySelector('.progress_bar').style.animation = "progress_animation4 1s";
    document.querySelector('.progress_bar').style.height = "28%";
    document.querySelector('.progress_bar').innerHTML = "<p>28%</p>";
}
function growProgressBar5(){
    document.querySelector('.progress_bar').style.animation = "progress_animation5 1s";
    document.querySelector('.progress_bar').style.height = "35%";
    document.querySelector('.progress_bar').innerHTML = "<p>35%</p>";
}
function growProgressBar6(){
    document.querySelector('.progress_bar').style.animation = "progress_animation6 1s";
    document.querySelector('.progress_bar').style.height = "42%";
    document.querySelector('.progress_bar').innerHTML = "<p>42%</p>";
}
function growProgressBar7(){
    document.querySelector('.progress_bar').style.animation = "progress_animation7 1s";
    document.querySelector('.progress_bar').style.height = "49%";
    document.querySelector('.progress_bar').innerHTML = "<p>49%</p>";
}
function growProgressBar8(){
    document.querySelector('.progress_bar').style.animation = "progress_animation8 1s";
    document.querySelector('.progress_bar').style.height = "56%";
    document.querySelector('.progress_bar').innerHTML = "<p>56%</p>";
}
function growProgressBar9(){
    document.querySelector('.progress_bar').style.animation = "progress_animation9 1s";
    document.querySelector('.progress_bar').style.height = "63%";
    document.querySelector('.progress_bar').innerHTML = "<p>63%</p>";
}
function growProgressBar10(){
    document.querySelector('.progress_bar').style.animation = "progress_animation10 1s";
    document.querySelector('.progress_bar').style.height = "70%";
    document.querySelector('.progress_bar').innerHTML = "<p>70%</p>";
}
function growProgressBar11(){
    document.querySelector('.progress_bar').style.animation = "progress_animation11 1s";
    document.querySelector('.progress_bar').style.height = "77%";
    document.querySelector('.progress_bar').innerHTML = "<p>77%</p>";
}
function growProgressBar12(){
    document.querySelector('.progress_bar').style.animation = "progress_animation12 1s";
    document.querySelector('.progress_bar').style.height = "84%";
    document.querySelector('.progress_bar').innerHTML = "<p>84%</p>";
}
function growProgressBar13(){
    document.querySelector('.progress_bar').style.animation = "progress_animation13 1s";
    document.querySelector('.progress_bar').style.height = "100%";
    document.querySelector('.progress_bar').innerHTML = "<p>100%</p>";
}

// BUSCAR BOTAO DE CONCLUSÃO PARA ABRIR MODAL
conc_button.addEventListener("click", openConcModal);
close_modal_button.addEventListener("click", closeConcModal);
// ABRIR MODAL DE CONCLUSÃO
function openConcModal(){
    document.querySelector('.modal_background').style.display = "flex";
}
// FECHAR MODAL DE CONCLUSÃO
function closeConcModal(){
    document.querySelector('.modal_background').style.display = "none";
}