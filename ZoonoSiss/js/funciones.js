function validar_clave(){
	var clave=document.getElementById("clave").value;
	var clave2=document.getElementById("clave2").value;
	/*alert(clave);
		alert(clave2);*/
	if(clave==clave2){
		
		document.getElementById("msj_verificacion").style.display="none";
	     document.getElementById("crear_user").disabled= false;
	}else{
		document.getElementById("msj_verificacion").style.display="block";
		/*document.getElementById("clave2").value="";
		document.getElementById("clave2").focus();*/
	}

}
function ocultar(){
	document.getElementById("msj_verificacion").style.display="none";
}