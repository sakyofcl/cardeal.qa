$(document).ready((e) => {
    const BrandItemRooot = $("#brand");
    const BrandAll = $('.brand');
    const ModelItemRoot = document.getElementById('model');
    const carFilterOptionList = $('.car-filter-option-list');


    const strToDom = (e) => {
        return document.createRange().createContextualFragment(e);
    }
    const modelItemChildEle = (id, text) => {
        return (
            `
            <option value="${ id }">${ text }</option>

            `
        )
    }
    /*
    
        BrandItemRooot.on('change', (e) => {
            if (e.target.name == 'brand') {
                if (e.target.value) {
                    let url = "/api/car/model?id=";
                    //reset dom
                    ModelItemRoot.innerHTML = ""
    
                    axios.get(url + e.target.value).then((response) => {
                        const data = response.data.model;
                        ModelItemRoot.appendChild(strToDom("<option value='0'>All Model</option>"));
                        data.map((v) => {
                            ModelItemRoot.appendChild(strToDom(modelItemChildEle(v.model_id, v.model_name)));
                        })
                    }).catch((er) => {
                        console.log(er);
                    })
    
                } else {
                    console.log(e.target.value)
                }
            }
        })
    */

    for (let i = 0; i < BrandAll.length; i++) {


        $(BrandAll[ i ]).change((e) => {
            if (e.target.name == 'brand') {
                if (e.target.value) {
                    let url = "/api/car/model?id=";
                    //reset dom
                    let modelTargetRoot = $("#" + $(e.target).attr('target'))
                    modelTargetRoot.html("")
                    //$("#" + $(e.target).attr('target')).html("")
                    //ModelItemRoot.innerHTML = ""


                    axios.get(url + e.target.value).then((response) => {
                        const data = response.data.model;
                        modelTargetRoot.append("<option value='0'>All Model</option>");
                        //ModelItemRoot.appendChild(strToDom("<option value='0'>All Model</option>"));
                        data.map((v) => {
                            modelTargetRoot.append(modelItemChildEle(v.model_id, v.model_name));
                            //ModelItemRoot.appendChild(strToDom(modelItemChildEle(v.model_id, v.model_name)));
                        })
                    }).catch((er) => {
                        console.log(er);
                    })

                } else {
                    console.log(e.target.value)
                }
            }

        })

    }


})