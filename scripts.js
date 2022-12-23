console.log("Ticketera ok");
// Fotmulario de Tickets

const nombre = document.getElementById("Nombreform");
const apellido = document.getElementById("Apellidoform");
const mail = document.getElementById ("Emailform");
const cantidad = document.getElementById("Cantticket");
const botonResumen = document.getElementById("resum");
const botonBorrar = document.getElementById("borrar");
const expReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ 

const CantidadI = document.getElementById("Cantticket");
const CategSelec = document.getElementById("inputCateg");
const totalp = document.getElementById("totalp");

function validarT(){
    if (nombre.value.length < 2) {
        alert("Ingrese un nombre valido");
        return false
    }
    else if (apellido.value.length < 2) {
        alert("Ingrese un apellido valido")
        return false
    }
    else if(!expReg.test(Emailform.value)){
        alert("Ingrese un Email valido")
        return false
    }
    else if(cantidad.value == 0){
        alert("Ingrese la cantidad de Tickets")
        return false
    }
    else{
        return true
    }

}

function TotalPago(){
    let total = 0
    var valido = validarT();
    if (valido == true){
        
        switch(parseInt(CategSelec.value)){
            case 1:
                total= CantidadI.value * 200;
                totalp.innerHTML = "Total a Pagar $ " + total;
             
                break

            case 2:
                total = CantidadI.value * (200-(200*(80/100)));
                totalp.innerHTML = "Total a Pagar $ " + total;
                break

            case 3:
                total = CantidadI.value * (200-(200*(50/100)));
                totalp.innerHTML = "Total a Pagar $ " + total;
                break
            
            case 4:
              total = CantidadI * (200-(200*(15/100)));
                    totalp.innerHTML = "Total a Pagar $ " + total;
                    break

            
        }
    }
}

function borrar(){
   
    totalp.innerHTML = "Total a Pagar $";
}

botonResumen.addEventListener("click", TotalPago);
botonBorrar.addEventListener("click", borrar);
