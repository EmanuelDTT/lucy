
var btn = document.getElementById('enviar');
var btnAC= document.getElementById('actu');
var existente = false;
btn.disabled = true;

let caja1 = false;
let caja2 = false;
let caja3 = false;
let caja4 = false;
let caja5 = false;

function habilitar (){

	 if (caja1==true && caja2== true && caja3==true && caja4==true && caja5==true)  {
		btn.disabled=false;
	 }else{
		btn.disabled=true;
		
	 }
}



const error= document.getElementById('error');
const formulario = document.getElementById('formRe');
const entrada = document.querySelectorAll('#formRe input');




const valida = {
	texto : /^[a-zA-Z\u00C0-\u017F\s]+$/,
	numero: /^[0-9]+$/,
	
	correo:  /(\W|^)[\w.\-]{0,25}@(outlook|icloud|gmail)\.com(\W|$)/,

// 	La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
// Puede tener otros símbolos.
	
}


$(document).ready(function () {
	$('#contra').keyup(function () {
		$('#strengthMessage').html(checkStrength($('#contra').val()))
	})

	function checkStrength(password) {
		var strength = 0
		if (password.length < 6) {
			$('#strengthMessage').removeClass()
			$('#strengthMessage').addClass('Short')
			$('#contra').css('border','solid 1px red')
			caja4=false;
			return 'Muy debil'
		}
		if (password.length > 7) strength += 1
	
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
	
		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
	
		if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
	
		if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
	
		if (strength < 2) {
			$('#strengthMessage').removeClass()
			$('#strengthMessage').addClass('Weak')
			$('#contra').css('border','solid 1px #ffc107')
			caja4=true;
			habilitar();
			
			return 'Regular'
		} else if (strength == 2) {
			$('#strengthMessage').removeClass()
			$('#strengthMessage').addClass('Good')
			$('#contra').css('border','solid 1px #28a745 ')
			caja4=true;
			habilitar();
			
			return 'aun falta  parase aceptable'
		} else {
			$('#strengthMessage').removeClass()
			$('#strengthMessage').addClass('Strong')
			$('#contra').css('border','solid 1px  #006315')
			caja4=true;
			habilitar();
			
			return 'Es segura'
		}

		
	}
});



	const validar = (e)=>{

		switch (e.target.name){
			case "nombre":
				
					if(valida.texto.test(e.target.value)){

						document.getElementById('name').style.border="green solid 1px";
						caja1=true;
						

					}else{
						
						document.getElementById('name').style.border="solid 1px red";
						caja1=false;
					}

					habilitar();
				break;
			case "numero":

				if(valida.numero.test(e.target.value)){

					document.getElementById("telefono").style.border="green solid 1px";
					caja2=true;
					

				}else{

					document.getElementById("telefono").style.border="solid 1px red";
					
					caja2=false;
				}
					habilitar();
				break;

			case "email":
				if(valida.correo.test(e.target.value)){

					document.getElementById("email").style.border="green solid 1px";
					caja3=true;
					console.log(caja3);
					

				}else{

					document.getElementById("email").style.border="solid 1px red";
					caja3=false;
				}
				habilitar();
				break;

			
		
		}

	}

	
	

	entrada.forEach((input)=>{
		input.addEventListener('keyup',validar);
	//	input.addEventListener('blur',validar);

	})



	$("#email").keyup(function(){
	
	let email= $("#email").val();
		

	$.ajax({
        url : 'http://localhost/Lucy/public/validar', //ruta del archivo donte estara la consulta a la bd
        type : 'POST',
        cache : false,
        data:{
			'email':email
		},
        success: function(resultado){
            if(resultado==1){
				
				$(".errorMSG").css('display', 'block');
				console.log("Correo existente")
				$('#email').css('border','solid 1px  red')
				caja5=false;
				existente = true;
				habilitar();
			}else{
				$(".errorMSG").css('display', 'none');
				caja5=true;
			}
        }
    })
});















