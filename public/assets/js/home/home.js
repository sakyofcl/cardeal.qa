//find car optn btn
window.onload = (e) => {
    const carFilterOptionSelect = document.getElementsByClassName('car-filter-option-list');
    const allCar = document.getElementById('all-car');
    const newCar = document.getElementById('new-car');
    const usedCar = document.getElementById('used-car');

    //list new car old car
    const carListOptionBtn = document.getElementsByClassName('carListOptionBtn');
    const newCarList = document.getElementById('newCarList');
    const usedCarList = document.getElementById('usedCarList');


    // set event all class
    setEventToAllClass(carFilterOptionSelect, 'click', handleClickFilterOption);
    setEventToAllClass(carListOptionBtn, 'click', handleClickCarListOptionBtn);


    function handleClickFilterOption(eve) {
        if (eve.target.id == "all-car") {
            allCar.classList.add('vehica-radio--active');
            removeClassList([ newCar, usedCar ], [ 'vehica-radio--active' ]);
        }
        else if (eve.target.id == "new-car") {
            newCar.classList.add('vehica-radio--active');
            removeClassList([ allCar, usedCar ], [ 'vehica-radio--active' ]);


        } else if (eve.target.id == "used-car") {
            usedCar.classList.add('vehica-radio--active');
            removeClassList([ allCar, newCar ], [ 'vehica-radio--active' ]);
        }
    }

    function handleClickCarListOptionBtn(eve) {
        if (eve.target.id == "newCarList") {
            newCarList.classList.add('vehica-tab--active');
            removeClassList([ usedCarList ], [ 'vehica-tab--active' ]);
        }
        else if (eve.target.id == "usedCarList") {
            usedCarList.classList.add('vehica-tab--active');
            removeClassList([ newCarList ], [ 'vehica-tab--active' ]);
        }
    }

    function removeClassList(rmId, rmClass) {
        rmId.map((v) => {
            rmClass.map((r) => {
                v.classList.remove(r);
            })

        })
    }

    function setEventToAllClass(ele, type, eve) {
        for (var i = 0; i < ele.length; i++) {
            ele[ i ].addEventListener(type, eve);
        }
    }
}

