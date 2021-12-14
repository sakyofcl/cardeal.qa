var nxtico = "<i class='fas fa-chevron-right'></i>";
var prvico = "<i class='fas fa-chevron-left'></i>";

$('#car-info-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    navText: [ prvico, nxtico ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

$('#car-related-slider').owlCarousel({
    loop: false,
    margin: 40,
    nav: false,
    dots: false,
    navText: [ prvico, nxtico ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        1000: {
            items: 4
        }
    }
})

