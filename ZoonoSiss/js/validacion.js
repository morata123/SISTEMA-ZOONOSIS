function sololetras(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras=" abcdefghijklmnñopqrstuvwxyz";
    var especiales = "8-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}

function dni(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras="abcdefghijklmnñopqrstuvwxyz1234567890";
    var especiales = "8-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}

function login1(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras="abcdefghijklmnñopqrstuvwxyz1234567890";
    var especiales = "8-13-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}

function letras(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras="abcdefghijklmnñopqrstuvwxyz";
    var especiales = "8-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}

function correo(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras="abcdefghijklmnñopqrstuvwxyz@.1234567890";
    var especiales = "8-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}

function login(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras="abcdefghijklmnñopqrstuvwxyz@.1234567890";
    var especiales = "8-13-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}


function dirreccion(e)
{
    var key=e.keyCode || e.which;
    var teclado= String.fromCharCode(key).toLowerCase();
    var letras=" abcdefghijklmnñopqrstuvwxyz#.123456789";
    var especiales = "8-37-38-46-164";
    var teclado_especiales=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            tecla_especiales=true;
            break;
        }
    }
    if (letras.indexOf(teclado)== -1 && !teclado_especiales)
    {
        return false;
    }

}

function mostrarclave() {
    var x = document.getElementById("clave");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
/*function cad_nombre(){

    var texto=document.getElementById("nombre").value;
//alert(texto);
console.log(texto);
texto=texto.trim();

//var rcad=texto.replace(/ /gi,'-');
//alert(rcad);
//console.log(rcad);
    var aCad=texto.split("");

    //var cad_re=rcad.replace(//gi,'-');
    var lon=aCad.length;
    for (var i = 0; i <lon; i++) {
         if (aCad[i]==a) {

             if(aCad[i+1]!="a"){ nCad+=" ";}
         }else{
            var nCad=nCad+aCad[i];
         }

           // var cad=aCad[i].trim();
          // var nCad=nCad+cad+" "; 
 console.log("la posicion"+i +" del arreglo es  "+ aCad[i]);
        }
        //alert(nCad);i

       
        console.log("la nueva cadena es "+nCad);
    //}

     // document.getElementById("nombre1").value = nCad;
}*/

/*function validar(e) {
 if (e.target.value.trim() == "")
  alert("debe ingresar un valor en el campo");
 else
  alert("ingreso "+e.target.value.trim()+", es correcto!");
}*/

function solonumeros(e)
{
    key=e.keyCode || e.which;
    teclado= String.fromCharCode(key);
    numeros="0123456789";
    especiales="8-37-38-46";

    teclado_especial=false;
    for (var i in especiales)
    {
        if (key==especiales[i])
        {
            teclado_especial=true;
        }
    }
    if (numeros.indexOf(teclado)==-1 && !teclado_especial)
    {
        return false;
    }
}

function caracteresCorreoValido(email, div){
    console.log(email);
    var email = $(email).val();
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if (caract.test(email) == false){
        $(div).hide().removeClass('hide').slideDown('fast');

        return false;
    }else{
        $(div).hide().addClass('hide').slideDown('slow');
        return true;
    }
}


function validar_clave(){
    var clave1=document.getElementById("1clave").value;
    var clave2=document.getElementById("2clave").value;
    /*alert(clave);
        alert(clave2);*/
    if(clave1==clave2){
        
        document.getElementById("msj_verificacion").style.display="none";
         document.getElementById("agregar").disabled= false;
    }else{
        document.getElementById("msj_verificacion").style.display="block";
        /*document.getElementById("clave2").value="";
        document.getElementById("clave2").focus();*/
    }

}
function ocultar(){
    document.getElementById("msj_verificacion").style.display="none";
}

