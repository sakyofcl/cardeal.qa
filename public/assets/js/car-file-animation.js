$(document).ready((e) => {
    let imageViewRoot = $('#image-preview-wrapper');
    //let singleImageRoot = $("#main_image_wrapper");
    //let singleImageTag = $("#single_image");
    let attachment = $("#attachment");
    let filePreviewRoot = $("#file-preview-root");
    let images = $('#images');
    let v = $('#view');
    let fileCloseBtn = document.getElementsByClassName("file-close-btn-event")
    let imagePreviewClose = document.getElementsByClassName('image-preview-close');
    let imageList = $('#image_list');
    let addMoreBtn = $('#add-more-btn');
    let deafultAddWrapper = $("#deafult-add-wrapper");
    let submitForm = $('#submit-form-btn');
    let allImage = [];
    let allFile = {
        file: false
    };
    let prevImgInput=false;
    let prevImgArray=[];




    


    let imageChildNode = (img, inx,imgname="",type="car-add") => {
        return (
            `
            <div class="dz-preview bg-light m-2 " id="image-preve-item-${ inx }" dataindex="${ inx }">
                <span class="image-preview-close close-btn-event" id="image-close-btn-${ inx }" dataindex="${ inx }" dt="${type}" in="${imgname}">
                    <i class="fas fa-times-circle p-0 m-0 close-btn-event" dataindex="${ inx }" dt="${type}" in="${imgname}"></i>
                </span>
                <div class="dz-image">
                    <img src="${ img }" dataIndex="${ inx }">
                </div>
            </div>
            
            `
        )
    }

    let fileImageNode = () => {
        return (
            `
            <div class="dz-preview bg-light m-2 d-block" id="file-root-none">
                <span class="image-preview-close file-close-btn-event">
                    <i class="fas fa-times-circle p-0 m-0 file-close-btn-event"></i>
                </span>
                <div class="dz-image h-100 w-100">
                    <img src="/assets/image/pdf-img.png" class="h-100 w-100">
                </div>
            </div>
            
            `
        )
    }


    function strToDom(ele) {
        return document.createRange().createContextualFragment(ele);
    }

    
    

    
   
      
    
    // it will run when current page is profile update.
    if(window.location.pathname=="/car/update"){
        prevImgInput=$("#prev_image")
        
        //explode slice method will remove last , symobol split method explode the array
        prevImgArray=prevImgInput.val().slice(0, -1).split(',');
        console.log(prevImgArray);
        //let IndexOfCurrentEle = allImage.push(e.target.files[ i ]) - 1;
        prevImgArray.map((v,i)=>{
            if(v!=""){
                imageViewRoot.append(imageChildNode("/products/"+v,'up'+i,v,'car-update'))
                $("#image-close-btn-" + 'up'+i).click(handleCancelClick);
            }
            
        })
        
    }

    images.change((e) => {

        if (e.target.files.length > 0) {

            //hide input
            //addAndRemoveClass(deafultAddWrapper, 'd-none', 'd-block');
            //show add more
            //addAndRemoveClass(addMoreBtn, 'd-block', 'd-none');


            let file = e.target.files;

            for (let i = 0; i < file.length; i++) {

                let IndexOfCurrentEle = allImage.push(e.target.files[ i ]) - 1;
                imageViewRoot.append(imageChildNode(URL.createObjectURL(allImage[ IndexOfCurrentEle ]), IndexOfCurrentEle))
                $("#image-close-btn-" + IndexOfCurrentEle).click(handleCancelClick);
                $("#image-preve-item-" + IndexOfCurrentEle).click(markedElement);

            }


            $(e.target).val('');
        }
        else {

            addAndRemoveClass(deafultAddWrapper, 'd-block', 'd-none');
            addAndRemoveClass(addMoreBtn, 'd-none', 'd-block');
        }

        if(findValueIsOrNot(allImage)){
            //hide error message
            $('#gellary-container-msg-wrapper').removeClass('d-block')

            $('#gellary-container-wrapper').addClass('border-success')
            $('#gellary-container-wrapper').removeClass('border-danger')
        }
        else{
            //show error message
            $('#gellary-container-msg-wrapper').addClass('d-block')

            $('#gellary-container-wrapper').addClass('border-danger')
            $('#gellary-container-wrapper').removeClass('border-success')
        }


    })



    if(window.location.pathname=="/car/update"){
       
        if($("#isHaveAttachment").val()=="1"){
            let fileCloseBtn=document.getElementsByClassName("file-close-btn-event")
            fileCloseBtn[0].addEventListener('click',(e)=>{
                $('#attachment').val('');
                filePreviewRoot.html("")
                $("#isHaveAttachment").val('0');
            })
        }
        
    }

    attachment.change((e) => {
        let fileCloseBtn=document.getElementsByClassName("file-close-btn-event")

        if (e.target.files.length > 0) {
            allFile.file = e.target.files[ 0 ];
        }

        if (allFile.file) {
            filePreviewRoot.html("")
            filePreviewRoot.append(fileImageNode())
            fileCloseBtn[0].addEventListener('click',(e)=>{
                $('#attachment').val('');
                filePreviewRoot.html("")
                $("#isHaveAttachment").val('0');
            })
            $("#isHaveAttachment").val('1');

        }
        else{
            $("#isHaveAttachment").val('0');
        }


    })



    function handleCancelClick(e) {

        let  currentClickDataType = $(e.target).attr('dt'); 
        let currentClickIndex = $(e.target).attr('dataindex');

        if(currentClickDataType=="car-update"){
            $("#image-preve-item-" + currentClickIndex).addClass('d-none');
            let currentClickImgName = $(e.target).attr('in');
            prevImgArray = prevImgArray.filter(function(item) {
                return item !== currentClickImgName
            })
        }
        else{
            
            if (typeof allImage[ currentClickIndex ] !== "undefined") {
    
                allImage[ currentClickIndex ] = "0";
                $("#image-preve-item-" + currentClickIndex).addClass('d-none');
    
            }
        }

        if(findValueIsOrNot(allImage)){
            //hide error message
            $('#gellary-container-msg-wrapper').removeClass('d-block')

            $('#gellary-container-wrapper').addClass('border-success')
            $('#gellary-container-wrapper').removeClass('border-danger')
        }
        else{
            //show error message
            $('#gellary-container-msg-wrapper').addClass('d-block')
            
            $('#gellary-container-wrapper').addClass('border-danger')
            $('#gellary-container-wrapper').removeClass('border-success')
        }

        
        
        
        

    }

    function addAndRemoveClass(e, a, r) {
        if (e.hasClass(r)) {
            e.removeClass(r)
            e.addClass(a)
        }
        else {
            e.addClass(a)
        }
    }

    submitForm.click((e) => {
        finalStringPrevImage=""

        allImage = allImage.filter((v) => {
            return v != "0";
        })
        let list = new DataTransfer();
        allImage.map((v) => {
            list.items.add(v)
        })

        imageList[ 0 ].files = list.files;


        if(window.location.pathname=="/car/update"){
            prevImgArray.map((v)=>{
                finalStringPrevImage+=v+",";
            })
            prevImgInput.val(finalStringPrevImage)
        }

        

    })


    function markedElement(e) {
        console.log($(e.target).attr('dataindex'))
    }

    
    function findValueIsOrNot(d){
        let v=d.filter((v)=>{
           return v!='0';
        })
        if(v.length>0){
            return true;
        }
        else{
            return false
        }

    }
    





})