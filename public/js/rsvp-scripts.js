$(document).ready(function(){
 $('#datepicker').datepicker({
  uiLibrary: 'bootstrap4',
  format: "yy-mm-dd",
  language: 'es',
  autoclose: true

 });
 $('#datepicker2').datepicker({
  uiLibrary: 'bootstrap4',
  format: "yy-mm-dd",
  language: 'es',
  autoclose: true

 });
 // init controller
  var controller = new ScrollMagic.Controller();
  
  var menuTl = new TimelineMax()
  .from('#nav-logo',1,{height:'70px'})
  .to('#rsvp-navbar',1,{backgroundColor:'#fff'});
  
  //Parallax Scene Newsletter
  // var parallaxScene = new ScrollMagic.Scene({
  //  triggerElement: '#newsletterContainer',
  //  triggerHook: .30,
  //  duration:$(window).height()/2,
  // })
  // .setTween(TweenMax.to('#newsletterParallax',1,{y:'60%', ease:Power0.easeNone}))
  // //.addIndicators()
  // .addTo(controller);
  

  //Parallax Scene Newsletter
  var parallaxSceneIndexNav = new ScrollMagic.Scene({
    triggerElement: '#indexNav',
    triggerHook: .60,
    duration:$(window).height()/1.5,
   })
   .setTween(TweenMax.from('#indexNav .row .col-lg-8',1,{y:'-25%', ease:Power0.easeNone}))
   //.addIndicators()
   .addTo(controller);

  //Menu
  var menuScene = new ScrollMagic.Scene({
   triggerHook: .05,
   duration:'15%'
  })
  .setTween(menuTl)
  .addTo(controller);
});
