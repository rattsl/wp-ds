jQuery(function(){
  jQuery(".menu").on("click",function(){
    jQuery(".sp-menu").slideToggle();
    jQuery(".icon-menu").toggle();
    jQuery(".icon-close").toggle();
    return false;
  })
})