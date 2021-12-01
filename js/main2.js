var puesto_actual;
var id_actual;
var id_boton;
var reservas;
var hora_actual;
var horario;
var colores = [];
var fondo;
var hora;
window.onload = init;

function init()
{
	hora = localStorage.getItem("hora");
	nombre = localStorage.getItem("usuario");
	document.getElementById("saludo").innerHTML=("¡Hola, aporta tu creatividad!");
	fondo = document.getElementById('fondo_reserva');
	//pintarCuadricula();
	cerrar.addEventListener("click",cerrarVentana);
	hora_actual = localStorage.getItem("hora");
	iniciarColores();
	fondo.style.backgroundColor = cambiarColor();
	cargarReserva();
	iniciarHoras();
	salir();
}

function iniciarColores(){
	colores["1"] = "#D8C6AB";
	colores["2"] = "#DFD7CB";
	colores["3"] = "#C2B29B";
	colores["4"] = "#ABA094";
	colores["5"] = "#B8A6A3";
	colores["6"] = "#867864";
	colores["7"] = "#545454";
	colores["8"] = "#919191";
}

function cambiarColor()
{
	return colores[hora_actual];
}

function iniciarHoras(){
	horas["5"] = "<h2>5:00 am/h2>";
	horas["6"] = "<h2>6:00 am/h2>";
	horas["7"] = "<h2>7:00 am/h2>";
	horas["8"] = "<h2>8:00 am/h2>";
	horas["9"] = "<h2>9:00 am/h2>";
	horas["16"] = "<h2>16:00 pm/h2>";
	horas["18"] = "<h2>18:00 pm/h2>";
	horas["20"] = "<h2>20:00 pm/h2>";
}

function cambiarHora()
{
	return horas[hora_actual];
	
}


function cargarReserva(){
	var puesto, usuario;
	reservas = [];

	if(localStorage.getItem("horario")!=null)
	{
		horario = JSON.parse(localStorage.getItem("horario"));
		reservas = (horario[hora_actual]==null)?[]:horario[hora_actual];

		if(reservas!=null)
		{
			for(var i=1;i<=9;i++)//i = i + 1
			{
				if(reservas[i]!=null)
				{
					puesto = document.getElementById("puesto_"+i);			
					usuario = reservas[i];
					actualizarEstado(puesto,usuario);
				}
			}
		}
	}
	else{
		horario = [];
	}
}

function cerrarVentana(){
  ventana.className = "ligthbox hidden";
}

function mostrarVentana(datos)
{
	id_actual = "puesto_"+datos.numero;
	id_boton = datos.numero;
	puesto_actual = document.getElementById(id_actual);
	ventana.className = "ligthbox";
	input_name.value = datos.nombre?datos.nombre:"";
}

function crearReserva(numero){
	mostrarVentana({nombre:"",numero:numero});
}

function actualizarReserva(usuario){
	actualizarEstado(puesto_actual,usuario);
	reservas[id_boton] = usuario;
	horario[hora_actual] = reservas;
	localStorage.setItem("horario",JSON.stringify(horario));
}

function editarReserva(numero){
	mostrarVentana({nombre:reservas[numero].nombre,numero:numero});	
}

function eliminarReserva(numero){
	var entrada = confirm("¿Seguro que quiere borrar el comentario "+numero+"?")
	if(entrada)
	{
		id_boton = numero;
		actualizarReserva(null);
	}
}

function actualizarEstado(puesto,usuario)
{
	var temp;
	if(usuario!=null)
	{
		puesto.className = "reservado";
		temp = "<h2>...</h2>"+usuario.nombre;
		temp += '<img class="btn_editar" onClick="editarReserva('+usuario.id+');" src="https://img.icons8.com/pastel-glyph/2x/ffffff/edit--v2.png" alt="">';
		temp += '<img src="https://img.icons8.com/carbon-copy/2x/ffffff/delete-forever.png" onClick="eliminarReserva('+usuario.id+');" class="btn_eliminar" alt="">';
	}
	else{
		puesto = document.getElementById("puesto_"+id_boton);
		puesto.className = "disponible";
		temp = "<h2>Escribe aquí</h2>";
		temp += '<img class="btn_agregar" onClick="crearReserva('+id_boton+');" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt="">';
	}
	puesto.innerHTML = temp;
}


function reservar(){
	var usuario;
	if(input_name.value!="")
	{
		usuario = {nombre:input_name.value,id:id_boton};
		actualizarReserva(usuario);
		cerrarVentana();
	}
	else
	{
		alert("Error, introduzca el comentario");
	}
}
function salir(){
	var confirmar =window.confirm("¿Seguro de que quieres salir?")
	if (confirmar == true){
	location.href = "index.html";
	}
}

