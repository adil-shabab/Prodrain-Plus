// feature carousel
$(document).ready(function(){
    $('.feature-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:false,
        navText: ["<i class='fa-solid fa-circle-arrow-left'></i>", "<i class='fa-solid fa-circle-arrow-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1300:{
                items:2
            },
            1500:{
                items:3
            }
        }
      })
});




// Products carousel
$(document).ready(function(){
    $('.otherProducts').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay:true,
        navText: ["<i class='fa-solid fa-circle-arrow-left'></i>", "<i class='fa-solid fa-circle-arrow-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1.5
            },
            1300:{
                items:2.2
            },
            1500:{
                items:2.5
            }
        }
      })
});







// color variant carousel
// $(document).ready(function(){
//     $('.colorVariantCarousel').owlCarousel({
//         loop:true,
//         margin:10,
//         nav:false,
//         autoplay:false,
//         center:true,
//         navText: ["<i class='fa-solid fa-circle-arrow-left'></i>", "<i class='fa-solid fa-circle-arrow-right'></i>"],
//         responsive:{
//             0:{
//                 items:1
//             },
//             600:{
//                 items:1
//             },
//             1300:{
//                 items:3
//             },
//             1500:{
//                 items:3
//             }
//         }
//       })
// });
