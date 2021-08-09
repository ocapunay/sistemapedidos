function menucategorias(){
    $.ajax({
        url: "controlador/menucategorias.php",
        type: "post",
        data: {  },
        success: function(data){
            console.log(data);
            $("#divcategorias").html(data);
        }
    });
}