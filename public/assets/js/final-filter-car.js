

$(document).ready((e) => {
    let filterForm = document.getElementById('filter-form');
    let inputFeild = [ 'brand-input', 'model-input', 'type-input', 'min-input', 'max-input', 'fule-type-input', 'mileage-input', 'drive-type-input' ];


    filterForm.addEventListener('click', (e) => {
        inputFeild.map((v) => {
            let element = $("#" + v);
            let data = $("#" + v).attr('placeholder');
            element.val(data)

        })
    })




})