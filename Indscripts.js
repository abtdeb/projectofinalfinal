console.log("ok");
// Formulario

const Pnombre = document.getElementById("campNom")


const apellido = document.getElementById("campApe")

const mensajeNomb = document.getElementById("mensajeNombre")
const mensajeApel = document.getElementById("mensajeApellido")

const mail = document.getElementById ("Emailform");
const expReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ 

const botonEnviar = document.getElementById("enviar")



function validarNombre() {
    if (Pnombre.value.length < 3) {
        alert("Ingrese un nombre valido");
    }
    else if (apellido.value.length < 2) {
        alert("Ingrese un apellido valido")
    } 
    else if(!expReg.test(Emailform.value)){
        alert("Ingrese un Email valido")
        return false
    }    
}

function borrar (){
    botonEnviar.innerHTML = " ";
}

botonEnviar.addEventListener("click", validarNombre);

botonEnviar.addEventListener("click", borrar);


