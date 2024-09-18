
function validar(){   
    if (validarNombre(document.getElementById("nombre")) && 
        validarNombre(document.getElementById("apellido")) && 
        validarFecha() && 
        validarEmail() && 
        validarObra())
    {
            document.getElementById("cartel").style.display = "none";
            alert("Los datos ingresados son correctos.");
            return true;
    }else{
        document.getElementById("cartel").style.display = "flex";
        return false;
    }     
}

//***************************************************** */
//Validar email
/****************************************************** */
function validarEmail(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(obj2).val())){
        val_positiva(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/check-circle.svg"></img>');
       return true;
    }else{
        val_negativa(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/exclamation-triangle.svg"></img>');
        return false;
    }   
}

//***************************************************** */


//***************************************************** */
//Validar nombre y apellido
/****************************************************** */
function validarNombre(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    if ($(obj2).val() != "" && validarSoloLetra($(obj2).val())){
        val_positiva(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/check-circle.svg"></img>');
       return true;
    }else{
        val_negativa(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/exclamation-triangle.svg"></img>');
        return false;
    }   
}

//***************************************************** */

//***************************************************** */
//Validar nombre de usuario
/****************************************************** */
function validarUsuario(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    if ($(obj2).val() != "" && validarLetraNum($(obj2).val())){
        val_positiva(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/person-check.svg"></img>');
       return true;
    }else{
        val_negativa(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/person-exclamation.svg"></img>');
        return false;
    }   
}
//***************************************************** */

//***************************************************** */
//Validar contraseña
/****************************************************** */
function validarContrasenia(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    var cadena = $(obj2).val();
    if (cadena != "" && validarLetraNum(cadena) && cadena.length > 8){
        val_positiva(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/eye-slash.svg"></img>');
       return true;
    }else{
        val_negativa(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/eye-slash-fill.svg"></img>');
        return false;
    }   
}
//***************************************************** */

//***************************************************** */
//Contraseña visible
/****************************************************** */
function contraseniaVisible(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    var cadena = $(obj2).attr("type");
    if (cadena == "password"){
        $(obj2).attr("type", "text"); 
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/eye.svg"></img>');
       return true;
    }else{
        $(obj2).attr("type", "password");
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/eye-slash.svg"></img>');
        return false;
    }   
}
//***************************************************** */

//***************************************************** */
//Validar numero de dni entre 1M y 99M 
/****************************************************** */
function validarDni(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    var cadena = $(obj2).val();
    
    if (cadena != "" && esNumero(cadena) && cadena.length > 6 && cadena<99999999 && cadena>1000000){ 
        val_positiva(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/pass.svg"></img>');
       return true;
    }else{
        val_negativa(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/pass-fill.svg"></img>');
        return false;
    }  
}
//***************************************************** */
//Validar numero telefono minimo de 8 digitos
/****************************************************** */
function validarDni(obj){
    var obj1 = obj.find(".input-group");
    var obj2 = obj1.find("input");
    var obj3 = obj1.find("span");
    var obj4 = obj.find(".subtitulo");
    var cadena = $(obj2).val();
    
    if (cadena != "" && esNumero(cadena) && cadena.length > 8 && cadena.length<15){ 
        val_positiva(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/telephone.svg"></img>');
       return true;
    }else{
        val_negativa(obj1, obj3, obj4);
        $(obj3).html('<img src="../../Librerias/node_modules/bootstrap-icons/icons/exclamation-triangle.svg"></img>');
        return false;
    }  
}

function val_positiva(obj1, obj3, obj4){ 
    $(obj1).removeClass();
    $(obj1).addClass("input-valido input-group mb-3");
    $(obj3).css({"background-color": "rgb(183, 243, 183"});
    $(obj4).css({"color": "green"});
    $(obj4).html("OK!");
}
function val_negativa(obj1, obj3, obj4){
    $(obj1).removeClass();
    $(obj1).addClass("input-novalido input-group mb-3");
    $(obj3).css({"background-color": "rgb(249, 188, 188)"});
    $(obj4).css({"color": "red"});
    $(obj4).html("Datos inválidos!");
}
//***************************************************** */
//Validar numero
/****************************************************** */
function esNumero(cadena){
    var i = 0; 
    while (i < cadena.length){
        if (!(/[0-9]/.test(cadena.at(i)))) {return false;}
        i++;
    }
    return true;
}
//***************************************************** */
//Validar fechas
/****************************************************** */
function esPositivo(obj){
    var valor = parseInt(obj.value);
    var cadena = obj.value;
    var i = 0; 
	
    while (i < cadena.length){
        if (!(/[0-9]/.test(cadena.at(i)))) {return 0;}
        i++;
    }
    return valor;
}

//Valida que la fecha sea válida, respetando los años biciestos y 
//que la fecha sea menor al día actual
function validarFecha (){
    var v_anio = false;
    var v_mes = false;
    var v_dia = false;
    var anio = esPositivo(document.getElementById("anio"));
    var mes = esPositivo(document.getElementById("mes"));
    var dia = esPositivo(document.getElementById("dia"));
    const fechaActual = new Date();

    if (((anio <= fechaActual.getFullYear()) && (anio >= 1910)) ){
        v_anio = true;
        document.getElementById("anio").style.borderColor="green";
    }else{
        document.getElementById("anio").style.borderColor="red";
    }
    if ((mes <= 12 && mes > 0) && !((anio == fechaActual.getFullYear()) && (mes > fechaActual.getMonth()+1))){
        v_mes = true
        document.getElementById("mes").style.borderColor="green";
    }else{
        document.getElementById("mes").style.borderColor="red";
    }
    if(validarDia(dia, mes, anio)){// && !(anio == fechaActual.getFullYear() && (mes >= (fechaActual.getMonth()+1)) && (dia > fechaActual.getDate()-1))){
        v_dia =true;
        document.getElementById("dia").style.borderColor="green";
    }else{
        document.getElementById("dia").style.borderColor="red";
    }
    if (v_anio && v_mes && v_dia){
        return true;
    }else{
        return false;
    }    
}

// valida el dia
function validarDia (dia, mes, anio){
    var meses = [31, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    if(((dia<=meses[mes]) && dia>0)|| ((mes==2) && (dia == 29) && (anio%4 == 0))){
        return true;
    }
    return false;
}
//************************************************************************ */

//Validar la ciudad

function validarCiudad(){
    var obj = document.getElementById("ciudad")
    if (obj.value != ""){
        obj.style.borderColor="green";
        return true;
    }else{
        obj.style.borderColor="red";
        return false;
    }
}

//Validar cadena por formato
function validarSoloLetra(cadena){
    var i = 0; 
	
    while (i < cadena.length){
        if (!(/[A-z ñÑ'áéíóúüÁÉÍÓÚ]/.test(cadena.at(i)))) {return false;}
        i++;
    }
    return true;
}
//Validar cadena por formato
function validarLetraNum(cadena){
    var i = 0; 
	
    while (i < cadena.length){
        if (!(/[A-z 0-9 ñÑ'áéíóúüÁÉÍÓÚ]/.test(cadena.at(i)))) {return false;}
        i++;
    }
    return true;
}