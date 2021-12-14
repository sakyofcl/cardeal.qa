

$(document).ready((e) => {

    /*
    var feature = "";
    var featureEle = document.getElementById('feature');

    function handleClik(eve) {

        if (!feature.includes(eve.target.innerText)) {
            feature = feature + eve.target.innerText + ",";
            featureEle.value = feature;
            eve.target.classList.add('vehica-car-form__multi-taxonomy__term--active');
            console.log(featureEle.value);
        }


    }

    const setEventToElement = (cls, handle, eventName) => {
        const ele = document.getElementsByClassName(cls)
        for (let i = 0; i < ele.length; i++) {
            ele[ i ].addEventListener(eventName, handle);
        }

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

    setEventToElement('feature-list-item', handleClik, 'click');

    */

    let store = [];
    var featureEle = document.getElementById('feature');
    const Feature = new AddFeatureToCars();

    

    if(window.location.pathname=="/car/update"){
        //console.log($('#feature').val());
        let defaultFeature=$('#feature').val().slice(0, -1).split(',');

        $('.update-feature').each(function(index, obj){
            defaultFeature.map((v)=>{
                if(v==$(obj).text().trim().toLowerCase()){
                    store.push({
                        item:v,
                        itemId:$($(obj)).attr('dataindex')
                    });
                }
            })
            
        });

    }
    

    Feature.setEventToClassElement('feature-list-item', 'dblclick', (e) => {
        const itemName = e.target.innerText;
        const itemIndex = $(e.target).attr('dataIndex');
        if (store.length > 0) {
            let allId = store.map((v) => {
                return v.itemId
            })
            let result = allId.find((v) => {
                if (v == itemIndex) {
                    return v;
                }
            })

            if (result) {
                store = Feature.removeElementFromArray(store, itemIndex);
                Feature.removeClass('vehica-car-form__multi-taxonomy__term--active', e.target)

            }
        }
        featureEle.value = Feature.mergeArrayAsString(store, ',');
        console.log(store);
        
    })

    Feature.setEventToClassElement('feature-list-item', 'click', (e) => {

        const itemName = e.target.innerText;
        const itemIndex = $(e.target).attr('dataIndex');
        
        
        
        if (store.length > 0) {

            let allId = store.map((v) => {
                return v.itemId
            })
            let result = allId.find((v) => {
                if (v == itemIndex) {
                    return v;
                }
            })

            if (!result) {
                store.push({
                    item: itemName,
                    itemId: itemIndex
                });

                Feature.addClass('vehica-car-form__multi-taxonomy__term--active', e.target)

            }

        }
        else {
            store.push({
                item: itemName,
                itemId: itemIndex
            });
            Feature.addClass('vehica-car-form__multi-taxonomy__term--active', e.target)
        }


        featureEle.value = Feature.mergeArrayAsString(store, ',');
        console.log(store);
    })



})


class AddFeatureToCars {

    setEventToClassElement(cls, eventName, handle) {
        const ele = document.getElementsByClassName(cls)
        for (let i = 0; i < ele.length; i++) {
            ele[ i ].addEventListener(eventName, handle);
        }
    }

    removeElementFromArray(array, ele) {
        return array.filter((v) => {
            return v.itemId != ele;
        })
    }
    addClass(cls, ele) {
        $(ele).addClass(cls);
    }
    removeClass(cls, ele) {
        $(ele).removeClass(cls)
    }

    mergeArrayAsString(data, str) {
        let final = "";
        data.map((v) => {
            final += v.item.trim() + str;
        })
        return final;
    }

}