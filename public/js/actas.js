$(window).on('load', init);
function init() {
	$('#reunion').on('change', getUsuarios);
	$(".asistentes").select2({
	  tags: true
	});
}

function getUsuarios(e) {
	alert('prueba');
}