var boton=document.getElementById("boton");
function traer(){
	var dni = document.getElementById("dni").value;
	fetch(
		"https://apiperu.dev/api/dni/"+dni+"?api_token=5f472fe7758517ab99b0a3af15c12671d70e686dfbc72bf1fc185b6f46636de7"
		)
	.then((res)=>res.json())
	.then((data)=>{
		document.getElementById("doc").value=data.data.numero;
		document.getElementById("nombre").value=data.data.nombres;
		document.getElementById("apellido").value=
			data.data.apellido_paterno+" "+data.data.apellido_materno;
	});
	}
	boton.addEventListener("click",traer);