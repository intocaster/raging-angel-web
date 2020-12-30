let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click', function(){
    modal.style.display = 'block';
});

cerrar.addEventListener('click', function(){
    modal.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex){
        modal.style.display = 'none';
    }
});
let modal1 = document.getElementById('miModal1');
let flex1 = document.getElementById('flex1');
let abrir1 = document.getElementById('abrir1');
let cerrar1 = document.getElementById('close1');

abrir1.addEventListener('click', function(){
    modal1.style.display = 'block';
});

cerrar1.addEventListener('click', function(){
    modal1.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex1){
        modal1.style.display = 'none';
    }
});
let modal2 = document.getElementById('miModal2');
let flex2 = document.getElementById('flex2');
let abrir2 = document.getElementById('abrir2');
let cerrar2 = document.getElementById('close2');

abrir2.addEventListener('click', function(){
    modal2.style.display = 'block';
});

cerrar2.addEventListener('click', function(){
    modal2.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex2){
        modal1.style.display = 'none';
    }
});
let modal3 = document.getElementById('miModal3');
let flex3 = document.getElementById('flex3');
let abrir3 = document.getElementById('abrir3');
let cerrar3 = document.getElementById('close3');

abrir3.addEventListener('click', function(){
    modal3.style.display = 'block';
});

cerrar3.addEventListener('click', function(){
    modal3.style.display = 'none';
});

window.addEventListener('click', function(e){
    console.log(e.target);
    if(e.target == flex3){
        modal1.style.display = 'none';
    }
});


