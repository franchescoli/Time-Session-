/* Funcion para filtrar */
function filter(phrase, _id) {
    var words = phrase.value.toLowerCase().split(" ");
    var table = document.getElementById(_id);
    var ele;
    for (var r = 1; r < table.rows.length; r++) {
        ele = table.rows[r].innerHTML.replace(/<[^>]+>/g, "");
        var displayStyle = 'none';
        for (var i = 0; i < words.length; i++) {
            if (ele.toLowerCase().indexOf(words[i]) >= 0)
                displayStyle = '';
            else {
                displayStyle = 'none';
                break;
            }
        }
        table.rows[r].style.display = displayStyle;
    }
}

// MANTENIMIENTO// Categoría
function ir9() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/categoria.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": "#000000"});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Estado Civil
function ir10() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/estado_civil.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": "#000000"});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Marca
function ir11() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/marca.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": "#000000"});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Grado de Instrucción
function ir12() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/grado_instruccion.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": "#000000"});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Persona
function ir13() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/persona.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": "#000000"});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Producto
function ir14() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/producto.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": "#000000"});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Unidad de Medida
function ir15() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/unidad_medida.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": "#000000"});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Unidad de Venta
function ir16() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/unidad_empaque.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": "#000000"});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Sucursal
function ir17() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/sucursal.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": "#000000"});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Tipo de Comprobante
function ir18() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/tipo_comprobante.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": "#000000"});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Tipo de Movimiento
function ir19() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/tipo_movimiento.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": "#000000"});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}


// Tipo de Documento
function ir20() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/tipo_documento.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": "#000000"});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Tipo de Transacción
function ir21() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/tipo_transaccion.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": "#000000"});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

// Área
function ir22() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/area.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": "#000000"});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": ""});
        }
    });
}

function ir26() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/lote.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": "#000000"});
            $('#menu27').css({"background": ""});
        }
    });
}

function ir27() {
    $.ajax({
        type: "POST",
        url: "vistas-mantenimiento/presentacion.php",
        success: function (data) {
            $("#mantenimiento").html(data);
            $('#menu9').css({"background": ""});
            $('#menu10').css({"background": ""});
            $('#menu11').css({"background": ""});
            $('#menu12').css({"background": ""});
            $('#menu13').css({"background": ""});
            $('#menu14').css({"background": ""});
            $('#menu15').css({"background": ""});
            $('#menu16').css({"background": ""});
            $('#menu17').css({"background": ""});
            $('#menu18').css({"background": ""});
            $('#menu19').css({"background": ""});
            $('#menu20').css({"background": ""});
            $('#menu21').css({"background": ""});
            $('#menu22').css({"background": ""});
            $('#menu26').css({"background": ""});
            $('#menu27').css({"background": "#000000"});
        }
    });
}


function AgregarCategoria(){
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaCat').style.display = 'none';
    document.getElementById('agregarCat').style.display = 'block';
    document.getElementById("nombres").focus();
}

function CancelarCategoria(){
    document.getElementById("addcat").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaCat").style.display = 'block';
    document.getElementById("agregarCat").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarEstado() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaEstadoCivil').style.display = 'none';
    document.getElementById('agregarEst').style.display = 'block';
    document.getElementById("nombres").focus();
}

function CancelarEstado() {
    document.getElementById("addest").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaEstadoCivil").style.display = 'block';
    document.getElementById("agregarEst").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarMarca() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaMarca').style.display = 'none';
    document.getElementById('agregarMarca').style.display = 'block';
    document.getElementById("nombres").focus();
}

function CancelarMarca() {
    document.getElementById("addmar").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaMarca").style.display = 'block';
    document.getElementById("agregarMarca").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarGrado() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaGrado').style.display = 'none';
    document.getElementById('agregarGra').style.display = 'block';
    document.getElementById("nombres").focus();
}

function CancelarGrado() {
    document.getElementById("addgra").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaGrado").style.display = 'block';
    document.getElementById("agregarGra").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarPer() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaPer').style.display = 'none';
    document.getElementById('agregarPer').style.display = 'block';
    document.getElementById("nombre").focus();
}

function noPer() {
    document.getElementById("addper").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaPer").style.display = 'block';
    document.getElementById("agregarPer").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarProducto() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaProducto').style.display = 'none';
    document.getElementById('agregarProd').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarProducto() {
    document.getElementById("addpro").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaProducto").style.display = 'block';
    document.getElementById("agregarProd").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarUnidadMedida() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaUnMed').style.display = 'none';
    document.getElementById('agregarUnMed').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarUnidadMedida() {
    document.getElementById("addunmed").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaUnMed").style.display = 'block';
    document.getElementById("agregarUnMed").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarSucursal() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaSucursal').style.display = 'none';
    document.getElementById('agregarSucursal').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarSucursal() {
    document.getElementById("addsuc").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaSucursal").style.display = 'block';
    document.getElementById("agregarSucursal").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarTipoComprobante() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaTipComprobante').style.display = 'none';
    document.getElementById('agregarTipoComprobante').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarTipoComprobante() {
    document.getElementById("addtcom").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaTipComprobante").style.display = 'block';
    document.getElementById("agregarTipoComprobante").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarTipoMovimiento() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaTipMovimiento').style.display = 'none';
    document.getElementById('agregarTipoMovimiento').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarTipoMovimiento() {
    document.getElementById("addtmov").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaTipMovimiento").style.display = 'block';
    document.getElementById("agregarTipoMovimiento").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarTipoDocumento() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaTipoDocumento').style.display = 'none';
    document.getElementById('agregarTipoDocumento').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarTipoDocumento() {
    document.getElementById("addtdoc").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaTipoDocumento").style.display = 'block';
    document.getElementById("agregarTipoDocumento").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarTipoTransaccion() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaTipoTransaccion').style.display = 'none';
    document.getElementById('agregarTipoTransaccion').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarTipoTransaccion() {
    document.getElementById("addtrans").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaTipoTransaccion").style.display = 'block';
    document.getElementById("agregarTipoTransaccion").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarArea() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaArea').style.display = 'none';
    document.getElementById('agregarArea').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarArea() {
    document.getElementById("addarea").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaArea").style.display = 'block';
    document.getElementById("agregarArea").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarUnidadEmpaque() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaUnPaq').style.display = 'none';
    document.getElementById('agregarUnPaq').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarUnidadEmpaque() {
    document.getElementById("addunpaq").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaUnPaq").style.display = 'block';
    document.getElementById("agregarUnPaq").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarLote() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaLote').style.display = 'none';
    document.getElementById('agregarLote').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarLote() {
    document.getElementById("addlote").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaLote").style.display = 'block';
    document.getElementById("agregarLote").style.display = 'none';
    document.getElementById("buscador").focus();
}

function AgregarPresentacion() {
    document.getElementById('lista').style.display = 'none';
    document.getElementById('listaPresentacion').style.display = 'none';
    document.getElementById('agregarPresentacion').style.display = 'block';
    document.getElementById("nombre").focus();
}

function CancelarPresentacion() {
    document.getElementById("addpre").reset();
    document.getElementById("lista").style.display = 'block';
    document.getElementById("listaPresentacion").style.display = 'block';
    document.getElementById("agregarPresentacion").style.display = 'none';
    document.getElementById("buscador").focus();
}

