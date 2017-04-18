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

// SEGURIDAD
// Usuario
function ir23() {
    $.ajax({
        type: "POST",
        url: "vistas-seguridad/usuario.php",
        success: function (data) {
            $("#seguridad").html(data);
            $('#menu23').css({"background": "#000000"});
            $('#menu24').css({"background": ""});
            $('#menu25').css({"background": ""});
            $('#menu26').css({"background": ""});
        }
    });
}

// opciones
function ir24() {
    $.ajax({
        type: "POST",
        url: "vistas-seguridad/opciones.php",
        success: function (data) {
            $("#seguridad").html(data);
            $('#menu23').css({"background": ""});
            $('#menu24').css({"background": "#000000"});
            $('#menu25').css({"background": ""});
            $('#menu26').css({"background": ""});
        }
    });
}

// Perfil
function ir25() {
    $.ajax({
        type: "POST",
        url: "vistas-seguridad/perfil.php",
        success: function (data) {
            $("#seguridad").html(data);
            $('#menu23').css({"background": ""});
            $('#menu24').css({"background": ""});
            $('#menu25').css({"background": "#000000"});
            $('#menu26').css({"background": ""});
        }
    });
}

