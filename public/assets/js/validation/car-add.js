
var state = {
    'name': true,
    'price': true,
    'mileage': true,
    'engine_size': true,
    'contact': true,
    'fuel_capacity':true,
    'brand':true,
    'model':true,
    'images':true
}

function condtion(e, s) {
    if (e.target.value) {
        s[e.target.name] = false;
        $(`#${e.target.id}`).addClass('noerror');
        $(`#${e.target.id}`).removeClass('error');

    } else {
        $(`#${e.target.id}`).removeClass('noerror');
        $(`#${e.target.id}`).addClass('error');
        s[e.target.name] = true;
    }

    
}


$(document).ready(() => {

        let ele=['name','price',"mileage",'engine_size','contact','fuel_capacity'];
        let eleChange=['brand','model','location'];
       

        function handleKeyUp(e){
            if (e.target.name == 'name') {
                condtion(e, state);
            }
            if (e.target.name == 'price') {
                condtion(e, state);
            }
            if (e.target.name == 'mileage') {
                if (e.target.value) {
                    const regx = /^[1-9]\d*(\.\d+)?$/;
                    let input = e.target.value;
                    if (regx.test(input)) {
                        state[e.target.name] = false;
                        $(`#${e.target.id}`).addClass('noerror');
                        $(`#${e.target.id}`).removeClass('error');
                    } else {
                        state[e.target.name] = true;
                        $(`#${e.target.id}`).addClass('error');
                        $(`#${e.target.id}`).removeClass('noerror');
                    }
                }
                else{
                    condtion(e, state);
                }
                
                
            }
            if(e.target.name=="fuel_capacity"){
                if (e.target.value) {
                    const regx = /^[1-9]\d*(\.\d+)?$/;
                    let input = e.target.value;
                    if (regx.test(input)) {
                        state[e.target.name] = false;
                        $(`#${e.target.id}`).addClass('noerror');
                        $(`#${e.target.id}`).removeClass('error');
                    } else {
                        state[e.target.name] = true;
                        $(`#${e.target.id}`).addClass('error');
                        $(`#${e.target.id}`).removeClass('noerror');
                    }
                }
                else{
                    condtion(e, state);
                }
            }
            if (e.target.name == 'engine_size') {
                if (e.target.value) {
                    const regx = /^[1-9]\d*(\.\d+)?$/;
                    let input = e.target.value;
                    if (regx.test(input)) {
                        state[e.target.name] = false;
                        $(`#${e.target.id}`).addClass('noerror');
                        $(`#${e.target.id}`).removeClass('error');
                    } else {
                        state[e.target.name] = true;
                        $(`#${e.target.id}`).addClass('error');
                        $(`#${e.target.id}`).removeClass('noerror');
                    }
                }
                else{
                    condtion(e, state);
                }
            }

            if (e.target.name == 'contact') {
                if (e.target.value) {
                    const regx = /^[0]?[0]\d{9}$/;
                    let input = e.target.value;
                    if (regx.test(input)) {
                        state[e.target.name] = false;
                        $(`#${e.target.id}`).addClass('noerror');
                        $(`#${e.target.id}`).removeClass('error');
                    } else {
                        state[e.target.name] = true;
                        $(`#${e.target.id}`).addClass('error');
                        $(`#${e.target.id}`).removeClass('noerror');
                    }
                }
                else{
                    condtion(e, state);
                }
                
            }

            
            if (state['name'] || state['contact'] || state['brand'] || state['model'] || state['images']) {
                $("#submit-form-btn").prop("disabled",true);
            }
            else{
                $("#submit-form-btn").prop("disabled",false);
                
            }
            



        }


        function handleChange(e){
            condtion(e,state)
        }
        ele.map((v)=>{
            let e=document.getElementById(v);
            e.addEventListener('keyup',handleKeyUp);
        })
        eleChange.map((v)=>{
            let e=document.getElementById(v);
            e.addEventListener('change',handleChange);
        })

        
        document.getElementById('images').addEventListener('change',(e)=>{
            if(e.returnValue){
                state['images'] = false;
                $('#multiple_image_upload_btn').removeClass('border-dot-erro');
                $('#multiple_image_upload_btn').addClass('border-dot-ok');
            }
            else{
                console.log(e)
                state['images'] = true;
                $('#multiple_image_upload_btn').removeClass('border-dot-ok');
                $('#multiple_image_upload_btn').addClass('border-dot-erro');
            }
            
            

            if (state['name'] || state['contact'] || state['brand'] || state['model'] || state['images']) {
                $("#submit-form-btn").prop("disabled",true);
            }
            else{
                $("#submit-form-btn").prop("disabled",false);
                
            }
            
        })
        
        
        
})

