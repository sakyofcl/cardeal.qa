
$(document).ready((e)=>{
    var forms = document.getElementsByClassName('add-car-form');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {

            if($("#image_list").val()){
                //hide error message
                $('#gellary-container-msg-wrapper').removeClass('d-block')

                $('#gellary-container-wrapper').addClass('border-success')
                $('#gellary-container-wrapper').removeClass('border-danger')
            }
            else{
                $('#gellary-container-msg-wrapper').addClass('d-block')

                $('#gellary-container-wrapper').addClass('border-danger')
                $('#gellary-container-wrapper').removeClass('border-success')
            }

            

            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();

                const ele=['name','brand','model','fuel_type','transmission','body_type','contact','location','gellary-container-msg-wrapper'];
                for (let i = 0; i < ele.length; i++) {
                    if( !document.getElementById(ele[i]).value){
                        window.scrollTo({
                            top:$(document.getElementById(ele[i])).offset().top-110,
                            behavior:'smooth'
                        });
                        break;
                    }
                } 
                
                
                
            }
            
        
        
        
        form.classList.add('was-validated');
      }, false);
    });


})