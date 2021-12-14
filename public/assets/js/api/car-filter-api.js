$(document).ready((e) => {

    const BrandItemRooot = $("#brand");
    const ModelItemRoot = document.getElementById('model');

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


    BrandItemRooot.on('change', (e) => {
        if (e.target.name == 'brand') {
            if (e.target.value) {
                let url = "/api/car/model?id=";
                //reset dom
                ModelItemRoot.innerHTML = ""

                axios.get(url + e.target.value).then((response) => {
                    const data = response.data.model;
                    ModelItemRoot.appendChild(strToDom("<option value='' selected disabled>Model</option>"));
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
})