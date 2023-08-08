$(function(){

	var mayuscula = new RegExp("^(?=.*[A-Z])");
	var cantidad = new RegExp("^(?=.{8,})");
	var numeros = new RegExp("^(?=.*[0-9])");

	$(".clave").on("keyup", function(){

		var clave = $(".clave").val();
		if(mayuscula.test(clave) && cantidad.test(clave) && numeros.test(clave) ){


			$("#mensaje_seguridad").text("nivel: Segura").css("color","rgb(129, 255, 97)").css("background-color","#003366").css("padding","10px").css("margin-left","195px")


		}else if(cantidad.test(clave) && numeros.test(clave) ){

			$("#mensaje_seguridad").text("nivel: Media").css("color","#ffc400").css("background-color","#003366").css("padding","10px").css("margin-left","195px")
		}else{

			$("#mensaje_seguridad").text("nivel: Insegura").css("color","rgb(235, 126, 93)").css("background-color","#003366").css("padding","10px").css("margin-left","195px")

		}

	})

})

const clave = document.querySelectorAll('.pwd');
const texto_aparecer = document.querySelectorAll('#comparacion')

clave.forEach((element,index)=> {

element.addEventListener('keyup',e =>{

	if(clave[0].value !== clave[1].value){

	}
})


}

)