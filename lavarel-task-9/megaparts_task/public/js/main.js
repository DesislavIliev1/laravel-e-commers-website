$(document).ready(function () {

    // gsap.fromTo(".carousel-1", {
        
    //     x: 100,
    //     ease: "linear",
    //     duration: 1
    //   },
    //     {
          
    //       x: 0,
    
    
    //       scrollTrigger: {
    //         trigger: ".product-slider-1",
    //         start: "top 40%",
    //         // toggleActions:"play restart restart reverse"
    //       }
    
    //     });

    
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        breakpoints: {
            1040: {
                slidesPerView: 3
            },
            600:{
                slidesPerView:2
            }},
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });

    var swip2 = new Swiper(".mySwiper-2",{
        slidesPerView: 1,
        spaceBetween: 30,
       
        
        autoplay: {
          delay: 1500,
          disableOnInteraction: false,
        }, 
        breakpoints: {
            1040: {
                slidesPerView:3
            },
            600:{
                slidesPerView:2
            }},

    });

    



  


    gsap.registerPlugin(ScrollTrigger);

    let tl = gsap.timeline();

    tl.from("#rect-2", {
        x: 2000,
        duration: 1.5,
        ease: "elastic.out(1, 1)",
    });
    tl.from("#srch", {
        opacity: 0
    }, 0.25);
    tl.from("#srch-bar", {
        x: 2000,
        duration: 1.5,
        ease: "elastic.out(1, 1)",
    }, "<");

    bodyWeight = parseFloat($("#body").css('width'));

    const $parts_box_1 = $("#parts-box-1");
    const $parts_box_2 = $("#parts-box-2");
    const $serc_1 = $("#serv-1");
    const $serv_2 = $("#serv-2");

    let tl_3 = gsap.timeline({
        paused: true,
        defaults: {
            opacity: 0,
            duration: 0.5,
            x: -500,
            ease: "elastic.out(1 , 0.75)",
        }
    });

    let tl_4 = gsap.timeline({
        paused: true,
        defaults: {
            opacity: 0,
            duration: 0.5,
            x: -500,
            ease: "elastic.out(1 , 0.75)",
        }
    });

    if(bodyWeight <= 768){
        tl.from("#hgl-1", {
            x: -100,
            opacity: 0,
            duration: 1.5,
            ease: "elastic.out(1.5, 1)"
        }, "<1");
        tl.from("#hgl-2", {
            x: 100,
            opacity: 0,
            duration: 1.5,
            ease: "elastic.out(1.5, 1)"
        }, "<");
        tl.from("#hgl-3", {
            x: -100,
            opacity: 0,
            duration: 1.5,
            ease: "elastic.out(1.5, 1)"
        }, "<");
        tl.from("#hgl-4", {
            x: 100,
            opacity: 0,
            duration: 1.5,
            ease: "elastic.out(1.5, 1)"
        }, "<");

        gsap.from("#blue-box",{
            opacity: 0,
            x: -500,
            scrollTrigger: {
                trigger: "#parts-box-1",
                start: "0 bottom",
                // markers: true,
            }
        });

        gsap.from("#ul-box",{
            opacity: 0,
            x: 500,
            scrollTrigger: {
                trigger: "#ul-box",
                start: "0 bottom",
                // markers: true,
            }
        });
        
        gsap.from("#green-box", {
            opacity: 0,
            x: 500,
            scrollTrigger: {
                trigger: "#green-box",
                start: "0 bottom",
                // markers: true,
            }
        });
        gsap.from("#ul-box-2", {
            opacity: 0,
            x: -500,
            scrollTrigger: {
                trigger: "#ul-box-2",
                start: "0 bottom",
                // markers: true,
            }
        });


        tl_3.from("#s-box-1", {
        }, "<");
        tl_3.from("#s-box-3", {
        }, "<");
        tl_3.from("#s-box-2", {
            x: 500,
        }, "<");
        tl_3.from("#s-box-4", {
            x: 500,
        }, "<");
        ScrollTrigger.create({
            trigger: "#serv-1",
            start: "-250 bottom",
            // markers: true,
            onEnter: () => tl_3.play()
        });

        tl_4.from("#s-2-box-1", {
        }, "<");
        tl_4.from("#s-2-box-3", {
        }, "<");
        tl_4.from("#s-2-box-2", {
            x: 500,
        }, "<");
        tl_4.from("#s-2-box-4", {
            x: 500,
        }, "<");
        ScrollTrigger.create({
            trigger: "#serv-2",
            start: "-250 bottom",
            // markers: true,
            onEnter: () => tl_4.play()
        });


    }else{
        tl.from("#hgl-1", {
            y: -50,
            opacity: 0,
            ease: "power4.out"
        }, "<1");
        tl.from("#hgl-2", {
            y: -50,
            opacity: 0,
            ease: "power4.out"
        }, "<0.35");
        tl.from("#hgl-3", {
            y: -50,
            opacity: 0,
            ease: "power4.out"
        }, "<0.35");
        tl.from("#hgl-4", {
            y: -50,
            opacity: 0,
            ease: "power4.out"
        }, "<0.35");

        let blue_1_box_1 = gsap.from("#blue-box", {
            paused: true,
            opacity: 0,
            x: -500
        });
        let ul_2_box_1 = gsap.from("#ul-box", {
            paused: true,
            opacity: 0,
            x: 500
        });
        $parts_box_1.mouseenter(function(){
            blue_1_box_1.play();
            ul_2_box_1.play();
        });

        let green_3_box_2 = gsap.from("#green-box", {
        paused: true,
        opacity: 0,
        x: 500
        });
        let ul_4_box_2 = gsap.from("#ul-box-2", {
            paused: true,
            opacity: 0,
            x: -500
        });
        $parts_box_2.mouseenter(function(){
            green_3_box_2.play();
            ul_4_box_2.play();
        });

        tl_3.from("#s-box-1", {
        }, "<");
        tl_3.from("#s-box-2", {
        }, "<");
        tl_3.from("#s-box-3", {
            x: 500,
        }, "<");
        tl_3.from("#s-box-4", {
            x: 500,
        }, "<");
        $serc_1.mouseenter(function(){
            tl_3.play();
        });

        tl_4.from("#s-2-box-1", {
        }, "<");
        tl_4.from("#s-2-box-2", {
        }, "<");
        tl_4.from("#s-2-box-3", {
            x: 500,
        }, "<");
        tl_4.from("#s-2-box-4", {
            x: 500,
        }, "<");    
        $serv_2.mouseenter(function(){
            tl_4.play();
        })
    }

//     let carousel = document.getElementById("carousel");
// let carouselBackBtn = document.getElementById("carouselBack");
// let carouselForwardBtn = document.getElementById("carouselForward");
// let carouselPage = 0;
 
// function updateCarouselPage() {
//   carousel.style.transform = `translateX(-${carouselPage * 10}%)`;
// if(carouselPage==0){
//     carouselBackBtn.style.opacity=0;
//     carouselForwardBtn.style.opacity=1;
 
 
// }else{
//     carouselForwardBtn.style.opacity=0;
//     carouselBackBtn.style.opacity=1;
// }
// }
 
// carouselBackBtn.addEventListener("click", () => {
//   carouselPage = Math.max(carouselPage - 1, 0);
//   updateCarouselPage();
 
// });
 
// carouselForwardBtn.addEventListener("click", () => {
//   //Max pages=1
//   carouselPage = Math.min(carouselPage + 1, 1);
//   updateCarouselPage();
// });


var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  const rightArrow = document.querySelector(".right-a");
  const leftArrow = document.querySelector(".left-a");
  const tabList = document.querySelector(".frame-2-2");
  const leftArrowCont = document.querySelector(".but-2");
  const rightArrowCont = document.querySelector(".btn-1");

  const manageIcons = () => {
    if(tabList.scrollLeft >= 20){
        leftArrowCont.classList.add("active");
    }else{
        leftArrowCont.classList.remove("active");
    }

    let maxScrollValue = tabList.scrollWidth - tabList.clientWidth - 20;
  if(tabList.scrollLeft >= maxScrollValue){
    rightArrowCont.classList.remove("active");
  }else{
    rightArrowCont.classList.add("active");
  }
  }

  

  rightArrow.addEventListener("click", ()=>{
    tabList.scrollLeft +=200;
    manageIcons();
  })

  tabList.addEventListener("scroll", manageIcons);

  leftArrow.addEventListener("click", ()=>{
    tabList.scrollLeft -=200;
    manageIcons();
  })


    
});