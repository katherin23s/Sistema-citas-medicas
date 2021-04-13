jQuery(document).ready(function ($) {
  // CREATE
  $("#btn-save").click(function (e) {
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
      },
    });
    e.preventDefault();
    var formData = {
      noFolio: jQuery("#noFolio").val(),
      nombre: jQuery("#nombre").val(),
      descripcion: jQuery("#descripcion").val(),
      fecha_cita: jQuery("#idFechaCita").val(),
      horaCita: jQuery("#idHoracita").val(),
      horaFinCita: jQuery("#idHorafincita").val(),
      duracion: jQuery("#idDuracion").val(),
      tipoCita: jQuery("#idTipocita").val(),
      id_paciente: jQuery("#id_paciente").val(),
      id_medico: jQuery("#idMedico").val(),
      status: 1,
      costo: 500,
      activo: 1,
    };

    console.log(formData);

    var state = jQuery("#btn-save").val();
    var type = "POST";
    // var todo_id = jQuery("#todo_id").val();
    var ajaxurl = "citas";
    $.ajax({
      type: type,
      url: ajaxurl,
      data: formData,
      dataType: "json",
      success: function (data) {
        console.log(data);
      },
      error: function (data) {
        console.log(data);
      },
    });
  });
});
