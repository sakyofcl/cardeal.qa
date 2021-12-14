$(document).ready((e) => {
    const revealBtn = document.getElementsByClassName('revealBtn');
    
    for (let i = 0; i < revealBtn.length; i++) {
        revealBtn[i].addEventListener('click',(e)=>{
            document.getElementsByClassName('defaultShow')[i].classList.add('d-none');
            document.getElementsByClassName('finalshow')[i].classList.remove('d-none');
            document.getElementsByClassName('finalshow')[i].classList.add('d-block');
        })
    }
    
    if (document.getElementById('contact-msg')) {
        setTimeout((e) => {
            document.getElementById('contact-msg').classList.add('d-none');

        }, 2000)
    }



    $("#show-more").click(function () {
            if($(".text").hasClass("<i class='fas fa-chevron-down'></i> Show less")) {
                $(this).html("Show less");
            } else {
                $(this).html("Show more");
            }

            $(".text").toggleClass("show-less");
    });

})