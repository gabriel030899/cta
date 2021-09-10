function openUniverse(){
    document.querySelector('#trilha').style.display = "none";
    if(document.querySelector('#trilha').style.display == "none"){
        document.querySelector('#trilha').style.display = "flex";
        document.querySelector('#foguete').style.display = "flex";
    }
}

var rocket = document.querySelector('#foguete');
var buttonUp = document.querySelector('#buttonup');
var buttonDown = document.querySelector('#buttondown');

buttonUp.addEventListener("click", moveUp);
buttonDown.addEventListener("click", moveDown);

var i = 1;
function moveUp(){
    i = i+1;
    if(i > 7){
        i = 7;
    }    
    document.location.href=`#passo${i}`;
}
function moveDown(){
    i = i-1;
    if(i <= 0){
        i = 1;
    }
    document.location.href=`#passo${i}`;
}


