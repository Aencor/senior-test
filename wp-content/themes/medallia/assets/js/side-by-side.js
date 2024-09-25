 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,ScrollToPlugin,TextPlugin)
  // Side by Side animation
  var sideTL = gsap.timeline();
  var textContent = '.text-content',
      imageContent = '.image-content';

  // GSAP Sets
  gsap.set(textContent, {
    y: -40, 
    autoAlpha:0
  });

  gsap.set(imageContent, {
    y: 40, 
    autoAlpha:0
  });

  var sideAnimation = 
    sideTL
    .to(textContent, {
      y: 0,
      autoAlpha: 1
    })
    .to(imageContent, {
      y: 0,
      autoAlpha: 1
    })

  // Footer animation
  ScrollTrigger.create ({
    trigger : '.side-by-side-block',
    start: 'center center',
    end : 'bottom',
    animation: footerAnimation
  });
 });