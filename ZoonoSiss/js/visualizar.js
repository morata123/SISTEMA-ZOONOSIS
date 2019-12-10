function visualizar() {
    $re=document.getElementById('numero').value;
    switch ($re){
        case '1':
            document.getElementById("cont").value=$re;
        document.getElementById("uno").style.backgroundColor = "blue";
        break;
        case '2':
            document.getElementById("cont").value=$re;
            document.getElementById("dos").style.backgroundColor = "blue";
            break;
        case '3':
            document.getElementById("cont").value=$re;
            document.getElementById("tres").style.backgroundColor = "blue";
            break;
        case '4':
            document.getElementById("cont").value=$re;
            document.getElementById("cuatro").style.backgroundColor = "blue";
            break;
        case '5':
            document.getElementById("cont").value=$re;
            document.getElementById("cinco").style.backgroundColor = "blue";
            break;
        case '6':
            document.getElementById("cont").value=$re;
            document.getElementById("seis").style.backgroundColor = "blue";
            break;
        case '7':
            document.getElementById("cont").value=$re;
            document.getElementById("siete").style.backgroundColor = "blue";
            break;
}
    }