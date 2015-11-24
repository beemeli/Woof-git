$(document).ready(function () {

    $("#adoptar").click(function () {
        var nombre_mascota = $("#mascota").val();
        if (nombre_mascota !== "") {
            $.post('recursos/servicios/registrarMascotaVirtual.php', {mascota: nombre_mascota}, function (data) {
                if (data !== "error") {
                    window.location = 'Tamagochi.php';
                } 
            });

        }else {
                    alert("Es necesario que elijas un nombre para tu mascota =)");
                }

    });
});