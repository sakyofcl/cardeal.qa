$(document).ready((e)=>{
    const mobileNavBtn=document.getElementById('mobile-nav-icon');
    const mobileNavCloseBtn=document.getElementById('mobile-nav-close-icon');
    const mobileNavContainer=document.getElementById('mobile-nav-container');

    mobileNavBtn.addEventListener('click',(e)=>{
        mobileNavContainer.classList.add('vehica-active');
    })
    mobileNavCloseBtn.addEventListener('click',(e)=>{
        mobileNavContainer.classList.remove('vehica-active');
    })

})