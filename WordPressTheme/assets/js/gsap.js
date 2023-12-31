"use strict";

jQuery(document).ready(function ($) {
  const mm = gsap.matchMedia();
  mm.add("(min-width:769px)", function () {
    let opening = gsap.timeline();
    opening.to(".js-loader-line", {
      delay: 0.2,
      xPercent: 100,
      autoAlpha: 0,
      ease: Power1.easeOut,
      stagger: {
        each: 0.05,
        from: "center",
      },
    });
    opening.to(".js-loader", {
      display: "none",
      duration: 0.1,
    });

    gsap.fromTo(
      ".js-title",
      {
        opacity: 0,
        y: "20%",
      },
      {
        opacity: 1,
        y: 0,
        delay: 0.5,
        duration: 1.5,
      }
    );

    let fadeIns = document.querySelectorAll(".js-fadeIns");
    fadeIns.forEach((fadeIn) => {
      gsap.fromTo(
        fadeIn.querySelectorAll(".js-fadeIns-child"),
        {
          autoAlpha: 0,
          y: 30,
        },
        {
          autoAlpha: 1,
          y: 0,
          duration: 1,
          ease: Power3.easeOut,
          scrollTrigger: {
            trigger: fadeIn,
            start: "top 90%",
          },
          stagger: 0.2,
        }
      );
    });


    let maskImgs=document.querySelectorAll('.js-maskImg');
    maskImgs.forEach((maskImg)=>{
      gsap.fromTo(
        maskImg,
        {
        },
        {
          scrollTrigger:{
            trigger:maskImg,
            start:"top bottom",
            once:true,
            toggleClass:{
              targets:maskImg,
              className:"is-open"
            }
          }
        }
      );
    });

// aboutus
    gsap.fromTo(
      ".js-aboutus-leftImg",
      {
        opacity: 0,
        x: "-20%",
      },
      {
        x: 0,
        opacity: 1,
        duration: 2,
        scrollTrigger: {
          trigger: ".js-aboutus",
          start: "top 80%",
        },
      }
    );

    gsap.fromTo(
      ".js-aboutus-rightImg",
      {
        opacity: 0,
        x: "20%",
      },
      {
        x: 0,
        opacity: 1,
        duration: 2,
        scrollTrigger: {
          trigger: ".js-aboutus",
          start: "top 80%",
        },
      }
    );

    //contact
    gsap.fromTo(
      ".js-contact",
      {
        opacity: 0,
        y: "20%",
      },
      {
        y: 0,
        opacity: 1,
        duration: 2,
        scrollTrigger: {
          trigger: ".js-contact",
          start: "top 80%",
        },
      }
    );

  });
});
