var breaking_sistem = 400;
var element_loaded = {};
function wpdevart_comment_animated_element(animation, element_id) {
  if (jQuery("#" + element_id + " iframe").length) {
    jQuery("#" + element_id + " iframe").load(function () {
      element_loaded[element_id] = 1;
      if (
        !jQuery(jQuery("#" + element_id)).hasClass("animated") &&
        wpdevart_comment_isScrolledIntoView(jQuery("#" + element_id))
      ) {
        jQuery(jQuery("#" + element_id)).css("visibility", "visible");
        jQuery(jQuery("#" + element_id)).addClass("animated");
        jQuery(jQuery("#" + element_id)).addClass(animation);
      }
    });
    if (
      !jQuery(jQuery("#" + element_id)).hasClass("animated") &&
      wpdevart_comment_isScrolledIntoView(jQuery("#" + element_id)) &&
      typeof element_loaded[element_id] != "undefined"
    ) {
      jQuery(jQuery("#" + element_id)).css("visibility", "visible");
      jQuery(jQuery("#" + element_id)).addClass("animated");
      jQuery(jQuery("#" + element_id)).addClass(animation);
    }
  } else {
    if (breaking_sistem > 0) {
      breaking_sistem--;
      setTimeout(function () {
        wpdevart_comment_animated_element(animation, element_id);
      }, "24");
    } else {
      breaking_sistem = 400;
    }
  }
}
function wpdevart_comment_isScrolledIntoView(elem) {
  var $elem = jQuery(elem);
  if (($elem.length = 0)) return true;
  var $window = jQuery(window);
  var docViewTop = $window.scrollTop();
  var docViewBottom = docViewTop + $window.height();
  if (typeof jQuery(elem).offset() != "undefined")
    var elemTop = jQuery(elem).offset().top;
  else var elemTop = 0;
  var elemBottom = elemTop + parseInt(jQuery(elem).css("height"));
  return (
    (docViewTop <= elemTop && elemTop <= docViewBottom) ||
    (docViewTop <= elemBottom && elemBottom <= docViewBottom)
  );
}
function wpdevart_comment_set_width_cur_element(
  element_id,
  element_initial_width
) {
  var element_id = "#" + element_id;
  var parent_width = jQuery(element_id).parent().width();
  var curent_src = jQuery(element_id).attr("src");
  var element_initial_width = Math.min(500, parseInt(element_initial_width));
  var element_initial_width = Math.max(180, parseInt(element_initial_width));
  if (parent_width <= 180) {
    curent_src = wpdevart_comment_replace_src(curent_src, 180);
    jQuery(element_id).css("width", 180);
  }
  if (parent_width >= 180) {
    curent_src = wpdevart_comment_replace_src(
      curent_src,
      Math.min(element_initial_width, parent_width)
    );
    jQuery(element_id).css(
      "width",
      Math.min(element_initial_width, parent_width)
    );
  }
}
