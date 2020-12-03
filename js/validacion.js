function valida_busqueda(){ 
    v_no_serie = document.getElementById("num_serie").value;
    if( v_no_serie== null || v_no_serie.length == 0 || /^\s+$/.test(v_no_serie) ) {
        alert("Este campo no puede ir vacio");
        return false;
        document.getElementById("num_serie").focus();
    }
    else if( isNaN(v_no_serie) ) {
        alert("EL valor introducido debe ser numerico");
        return false;
        document.getElementById("num_serie").focus();
    }
    document.getElementById('ContactForm').submit()
    return true;
}
function valida_baja(){ 
    v_no_serie = document.getElementById("num_serie").value;
    if( v_no_serie== null || v_no_serie.length == 0 || /^\s+$/.test(v_no_serie) ) {
        alert("Este campo no puede ir vacio");
        return false;
        document.getElementById("num_serie").focus();
    }
    else if( isNaN(v_no_serie) ) {
        alert("EL valor introducido debe ser numerico");
        return false;
        document.getElementById("num_serie").focus();
    }
    document.getElementById('ContactForm').submit()
    return true;
}
function valida_reasignacion(){ 
    v_no_serie = document.getElementById("num_serie").value;
    if( v_no_serie== null || v_no_serie.length == 0 || /^\s+$/.test(v_no_serie) ) {
        alert("Este campo no puede ir vacio");
        return false;
        document.getElementById("num_serie").focus();
    }
    else if( isNaN(v_no_serie) ) {
        alert("EL valor introducido debe ser numerico");
        return false;
        document.getElementById("num_serie").focus();
    }
    document.getElementById('ContactForm').submit()
    return true;
}
function valida_alta(){ 
    no_serie = document.getElementById("no_serie").value;
    if( no_serie== null || no_serie.length == 0 || /^\s+$/.test(no_serie) ) {
        alert("Este campo no puede ir vacio");
        return false;
        document.getElementById("no_serie").focus();
    }
    else if( isNaN(no_serie) ) {
        alert("EL valor introducido debe ser numerico");
        return false;
        document.getElementById("no_serie").focus();
    }
    document.getElementById('ContactForm').submit()
    return true;
}