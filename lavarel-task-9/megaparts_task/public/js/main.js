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


    
});