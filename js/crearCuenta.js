$(document).ready(function() {
    $('#formRegistro').validetta({
        bubblePosition: 'bottom',
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid : function( event ) {
          event.preventDefault(); // Detiene el submit
          $.ajax({
            method:"post",
            // peticion ajax 
            url:"./pages/crearCuenta_AX.php",
            data:$("#formRegistro").serialize(),
            cache:false,
            //proceso de respuesta
            success:function(respAX){
            
                //traduce el json a lo que nteinda javascript (objetis)
                var respJson = JSON.parse(respAX);
                var color = (respJson.codigo == 1) ? "blue" : "red"; 
                $.alert({
                    title:"<h3 align='center'> Evaluación Financiera</h3>",
                    //mensaje desde el servidor
                    content:respJson.msj,
                    theme: "supervan",
                    type:color,
                    icon: "fas fa-address-card fa-2x",
                    //bootstrap, se inabilita para poder usarlo
                    boxWidth: "100%",
                    useBootstrap: false,
                    //callback para tomar deciones, recargar pagina
                    onDestroy:function(){
                        if(respJson.status == 0){
                            document.location.reload(true);
                        }else{
                            document.location.href = "./../inicio/login.html";
                        }
                    }
                });
            }
        });
        }
      });
});