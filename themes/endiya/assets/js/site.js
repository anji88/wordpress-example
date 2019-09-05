(function(){
  var sm_breakpoint = 1024;
  var matchHeightChildren = document.getElementsByClassName('match-height-child');

  function matchHeights(item){
    var maxHeight = 0;
    var children = item.getElementsByClassName('match-height-child');
    function resetHeight(i){
      children[i].style.height = 'auto';
    }
    function setHeight(i,newHeight){
      children[i].style.height = newHeight + 'px';
    }
    // Find tallest element
    for(var c = 0; c < children.length; c++){
      resetHeight(c);
      var thisHeight = children[c].offsetHeight;
      if(thisHeight > maxHeight){
        maxHeight = thisHeight;
      }
    }
    // Set all children to tallest element
    for(var c = 0; c < children.length; c++){
      setHeight(c,maxHeight);
    }
  }

  function getMatchHeightElements(){
    if(window.innerWidth >= sm_breakpoint) {
      var matchParents = document.getElementsByClassName("match-height-parent");
      for(var i = 0; i < matchParents.length; i++)
      {
        matchHeights(matchParents.item(i));
      }
    }
  }

  getMatchHeightElements();

  window.addEventListener('resize', function(){ getMatchHeightElements(); }, true);

})();

/**
 * IE 11 needs 1X pictures in it where as for other browsers 2X is needed so to change the images respective to
 * the browser this function is executed
 */
$(document).ready(function () {
    (function browserSpecificImage() {
        var isIE = false || !!document.documentMode;
        var img_element = $(".browserSpecificImage");
        if(isIE && baseUrl){
            $(".browserSpecificImage").first().attr('src', null);
            $(".browserSpecificImage").last().attr('src', null);
            $(".browserSpecificImage").first().attr('src', baseUrl+"/assets/images/help-deskie.png");
            $(".browserSpecificImage").last().attr('src', baseUrl+"/assets/images/Inventoryie.png");
            $(".browserSpecificImage").first().attr('data-src', baseUrl+"/assets/images/help-deskie.png");
            $(".browserSpecificImage").last().attr('data-src', baseUrl+"/assets/images/Inventoryie.png");
        }
    })()
})