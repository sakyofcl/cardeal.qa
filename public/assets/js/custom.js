class SetClassElement {
    /*
    adding class to one specific element
    */

    addClass(className, elementId) {
        const eleId = document.getElementById(elementId);
        if (eleId) {
            eleId.classList.add(className)
            return true;
        }
        else {
            console.log('element not exist');
            return false;

        }
    }

    checkElementOrNor(ele) {
        if (ele.includes('#')) {
            if (document.getElementById(ele)) {
                return true
            }
            else {
                return false
            }
        }

    }

    removeClass(removeclassList, elementId) {

        if (this.checkElementOrNor(elementId)) {
            removeclassList.map((v) => {
                document.getElementById(elementId).classList.remove(v);
            })
            return true;
        }
        else {
            console.log('element not excits!')
            return false
        }



    }

}

class SetEventToElement {

    setEventToClass(className, type, eve) {
        //class must specify .name and id with #
        const allClass = document.querySelectorAll(className)
        allClass.forEach((v) => {
            v.addEventListener(type, eve);
        })

    }
}


//car-page-nav-item
$(document).ready((e) => {
    const carTabPane = new SetEventToElement();
    const filterCloseBtn=new SetEventToElement();
    const filterForm=$('#filter-form');
    //const carTabPaneClass = new SetClassElement();
    //tragetBtn

    carTabPane.setEventToClass('.car-page-nav-item', 'click', (e) => {

        const allbtn = $('#all-btn')
        const newbtn = $('#new-btn')
        const usedbtn = $('#used-btn')


        if ($(e.target).attr('name') == "new") {
            newbtn.addClass('vehica-search-v1__tab--active')

            //remove class
            allbtn.removeClass('vehica-search-v1__tab--active')
            usedbtn.removeClass('vehica-search-v1__tab--active')
        }
        else if ($(e.target).attr('name') == "used") {
            usedbtn.addClass('vehica-search-v1__tab--active')

            //remove class
            allbtn.removeClass('vehica-search-v1__tab--active')
            newbtn.removeClass('vehica-search-v1__tab--active')
        }
        else if ($(e.target).attr('name') == "all") {
            allbtn.addClass('vehica-search-v1__tab--active')

            //remove class
            newbtn.removeClass('vehica-search-v1__tab--active')
            usedbtn.removeClass('vehica-search-v1__tab--active')
        }


    })

    document.getElementById('filter-btn').addEventListener('click',(e)=>{
        //show popup
        filterForm.addClass('vehica-results__fields--mobile-open')
    })

    filterCloseBtn.setEventToClass('.filter-close-btn','click',(e)=>{
        filterForm.removeClass('vehica-results__fields--mobile-open');
    })
    


})