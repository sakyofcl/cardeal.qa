
$(document).ready((e) => {

    if(window.location.pathname=="/car/update"){
        
        document.getElementById('car-delete-popup-btn').addEventListener('click',(e)=>{
            const cid=$(e.target).attr('cid');
            $("#car-del-btn").attr('href',"/profile/car/status-change?status=deleted&cid="+cid);
        })


        setEventToClassElement('car-status-change-popup','click',(e)=>{
            const url=$(e.target).attr('url');
            const t=$(e.target).attr('t');
            if(t=="active"){
                $('#car-status-action-type').text("active")
            }
            else{
                $('#car-status-action-type').text("sold")
            }
            $("#car-sts-btn").attr('href',url)
            console.log(url)
        })


        
    }



    function setEventToClassElement(cls, eventName, handle) {
        const ele = document.getElementsByClassName(cls)
        for (let i = 0; i < ele.length; i++) {
            ele[ i ].addEventListener(eventName, handle);
        }
    }

})