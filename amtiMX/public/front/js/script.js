
function menu(){
    document.getElementById('menu').style.display = 'block';
    document.getElementById('header').style.display = 'none';
    
}
function cerrar(){
    document.getElementById('header').style.display = 'block';
    document.getElementById('menu').style.display = 'none';
}

function GDL(){
    document.getElementById('GDL').style.display = 'block';
    document.getElementById('MTY').style.display = 'none';
    document.getElementById('CDMX').style.display = 'none';
}
function MTY(){
    document.getElementById('GDL').style.display = 'none';
    document.getElementById('MTY').style.display = 'block';
    document.getElementById('CDMX').style.display = 'none';
}
function CDMX(){
    document.getElementById('GDL').style.display = 'none';
    document.getElementById('MTY').style.display = 'none';
    document.getElementById('CDMX').style.display = 'block';
}