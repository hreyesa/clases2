

    function validaContrasena(){

        contrasena = document.getElementById('contrasena');
        contrasena2 = document.getElementById('contrasena2');
        rut = document.getElementById('rut');
        


        if(contrasena.value.length < 8){

            alert("contraseña debe tener minimo 8 caracteres");

            return false;

        }else{

            if(contrasena.value != contrasena2.value){

                alert("contraseña deben ser iguales");
                return false;

            }else {

                        mayuscula = false;
                        numero = false;
                        for(var i = 0; i<contrasena.value.length; i++){

                                if(contrasena.value.charCodeAt(i) >= 65 && contrasena.value.charCodeAt(i) <= 90){
                                
                                    mayuscula = true;

                                }else if(contrasena.value.charCodeAt(i) >= 48 && contrasena.value.charCodeAt(i) <= 57){

                                    numero = true;

                                }


                        }                
            
                    if (!mayuscula || !numero){

                        alert("Debe ingresar al menos una mayuscula y un numero");
                        return false;
                    }  else if (validaRut(rut.value))               
                    {

                            return true;

                    }  else {

                        
                        alert("RUT no es valido");
                        return false;
                    

                    }

                }

        }

    }

function validaRut(rut){
    if (rut.toString().trim() != '' && rut.toString().indexOf('-') > 0) {
        var caracteres = new Array();
        var serie = new Array(2, 3, 4, 5, 6, 7);
        var dig = rut.toString().substr(rut.toString().length - 1, 1);
        rut = rut.toString().substr(0, rut.toString().length - 2);

        for (var i = 0; i < rut.length; i++) {
            caracteres[i] = parseInt(rut.charAt((rut.length - (i + 1))));
        }

        var sumatoria = 0;
        var k = 0;
        var resto = 0;

        for (var j = 0; j < caracteres.length; j++) {
            if (k == 6) {
                k = 0;
            }
            sumatoria += parseInt(caracteres[j]) * parseInt(serie[k]);
            k++;
        }

        resto = sumatoria % 11;
        dv = 11 - resto;

        if (dv == 10) {
            dv = "K";
        }
        else if (dv == 11) {
            dv = 0;
        }

        if (dv.toString().trim().toUpperCase() == dig.toString().trim().toUpperCase())
            return true;
        else
            return false;
    }
    else {
        return false;
    }

}


