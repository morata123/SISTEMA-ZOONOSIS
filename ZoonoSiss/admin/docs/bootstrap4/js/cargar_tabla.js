function cargar_tabla() {

    var select = document.getElementById("requisito"), //El <select>
        value = select.value, //El valor seleccionado
        elemento = select.options[select.selectedIndex].innerText; //El texto de la opción seleccionada


    
    alert(elemento);
        // Obtener la referencia del elemento body
        var body = document.getElementById("tabla");

        // Crea un elemento <table> y un elemento <tbody>
        var tabla   = document.createElement("table");
        var tblBody = document.createElement("tbody");
        tblBody.setAttribute("class","table");

        // Crea las celdas

            // Crea las hileras de la tabla
            var hilera = document.createElement("tr");


                // Crea un elemento <td> y un nodo de texto, haz que el nodo de
                // texto sea el contenido de <td>, ubica el elemento <td> al final
                // de la hilera de la tabla
                var celda = document.createElement("td");
                var textoCelda = document.createTextNode(elemento);
                celda.appendChild(textoCelda);
                hilera.appendChild(celda);


            // agrega la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(hilera);

        // posiciona el <tbody> debajo del elemento <table>
        tabla.appendChild(tblBody);
        // appends <table> into <body>
        body.appendChild(tabla);
        // modifica el atributo "border" de la tabla y lo fija a "2";
        tabla.setAttribute("border", "2");
    }

