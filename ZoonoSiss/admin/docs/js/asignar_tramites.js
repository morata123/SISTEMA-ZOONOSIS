function agregar_requisito () {
    const select = document.getElementById("req").value;
    const padre = document.getElementById("requisito_asignado");
    //aquí agregamos el componente de tipo input
    const input = document.createElement("INPUT");
    const button = document.createElement("INPUT");
    const div = document.createElement("DIV");
    //aquí indicamos que es un input de tipo text
    div.className='form-group row';
        input.type = 'text';
        input.style='text-align: center;';
        input.disabled ='true';
        input.className='col-md-10';
        input.value=select;
        button.type='text';
        button.className='btn btn-danger col-md-12';
        div.setAttribute('onclick','borrar(this)');
        button.setAttribute('value',select);
         button.setAttribute('name',select);
        button.textContent=select+' '+'Presione para eliminar';

        //y por ultimo agreamos el componente creado al padre
    div.appendChild(button);
    padre.appendChild(div);


}
function borrar (v) {
    v.parentNode.removeChild(v);
}
function mostrar() {
    var select = document.getElementById("req");
    var result = [];
    var options = select.options;
    var opt;
    var iLen=options.length;
    for (var i=0; i<iLen; i++) {
        opt = options[i];
        if (opt.selected) {
            result.push(opt.value || opt.text);
        }
    }
    alert(result);
}