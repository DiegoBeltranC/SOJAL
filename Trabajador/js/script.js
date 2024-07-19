let modalBtn = document.getElementById('modal-report-btn')
let modalClose = document.getElementById('btnCancelarModal')

modalBtn.onclick = ()=> {
    let div = document.querySelector('.contenedor');
    document.querySelector('.contenedor').style.display = 'block';
    div.classList.add('animated'); 

}

modalClose.onclick = ()=>{
    var div = document.querySelector(".contenedor");
    div.style.display = "none";
}
