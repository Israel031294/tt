$(document).ready(function() {
    $('#formEntrar').validetta({
        bubblePosition: 'bottom',
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid : function( event ) {
          event.preventDefault(); 
          $("button[type='submit']").prop("disabled",true);
            $.ajax({
                method:"post",
                // peticion ajax 
                url:"./pages/login_AX.php",
                data:$("#formEntrar").serialize(),
                cache:false,
                //proceso de respuesta
                success:function(respAX){
                
                    //traduce el json a lo que nteinda javascript (objetis)
                    var respJson = JSON.parse(respAX);
                    var color = (respJson.status == 1) ? "green" : "red"; 
                    $.alert({
                        title:"<h3 align='center'> Evaluación Financiera</h3>",
                        //mensaje desde el servidor
                        content:respJson.mensaje,
                        theme: "supervan",
                        type:color,
                        icon: "fas fa-money-bill-alt fa-2x",
                        //bootstrap, se inabilita para poder usarlo
                        boxWidth: "100%",
                        
                        useBootstrap: false,
                        //callback para tomar deciones, recargar pagina
                        onDestroy:function(){
                            if(respJson.status == 1 && respJson.tipoU == "AD"){
                               document.location.href = "./pages/tweb20192.php";    
                            }
                            else if(respJson.status == 1 && respJson.tipoU == "AL"){
                                document.location.href = "./evaluacion/inicio/index.php";
                                //document.location.href = "./pages/tweb20192.php"
                                 
                            }
                            else{
                                document.location.reload(true);
                            }
                        }
                    });
                }
            });
        }
       
      });
    
});

/*
$(document).ready(function(){
    $('.NavLateral-DropDown').on('click', function(e){
        e.preventDefault();
        var DropMenu=$(this).next('ul');
        var CaretDown=$(this).children('i.NavLateral-CaretDown');
        DropMenu.slideToggle('fast');
        if(CaretDown.hasClass('NavLateral-CaretDownRotate')){
            CaretDown.removeClass('NavLateral-CaretDownRotate');    
        }else{
            CaretDown.addClass('NavLateral-CaretDownRotate');    
        }
         
    });
    $('.tooltipped').tooltip({delay: 50});
    $('.ShowHideMenu').on('click', function(){
        var MobileMenu=$('.NavLateral');
        if(MobileMenu.css('opacity')==="0"){
            MobileMenu.addClass('Show-menu');   
        }else{
            MobileMenu.removeClass('Show-menu'); 
        }   
    }); 
    $('.btn-ExitSystem').on('click', function(e){
        e.preventDefault();
        swal({ 
            title: "You want out of the system?",   
            text: "The current session will be closed and will leave the system",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes",
            animation: "slide-from-top",   
            closeOnConfirm: false,
            cancelButtonText: "Cancel"
        }, function(){   
            window.location='index.html'; 
        });
    }); 
    $('.btn-Search').on('click', function(e){
        e.preventDefault();
        swal({   
            title: "What are you looking for?",   
            text: "Write what you want",   
            type: "input",   
            showCancelButton: true,   
            closeOnConfirm: false,   
            animation: "slide-from-top",   
            inputPlaceholder: "Write here",
            confirmButtonText: "Search",
            cancelButtonText: "Cancel" 
        }, function(inputValue){   
            if (inputValue === false) return false;      
            if (inputValue === "") {     swal.showInputError("You must write something");     
            return false   
            }      
            swal("Nice!", "You wrote: " + inputValue, "success"); 
        });    
    });
    $('.btn-Notification').on('click', function(){
        var NotificationArea=$('.NotificationArea');
        if(NotificationArea.hasClass('NotificationArea-show')){
            NotificationArea.removeClass('NotificationArea-show');
        }else{
            NotificationArea.addClass('NotificationArea-show');
        }
    });     
});
(function($){
    $(window).load(function(){
        $(".NavLateral-content").mCustomScrollbar({
            theme:"light-thin",
            scrollbarPosition: "inside",
            autoHideScrollbar: true,
            scrollButtons:{ enable: true }
        });
        $(".ContentPage, .NotificationArea").mCustomScrollbar({
            theme:"dark-thin",
            scrollbarPosition: "inside",
            autoHideScrollbar: true,
            scrollButtons:{ enable: true }
        });
    });
})(jQuery);
*/
