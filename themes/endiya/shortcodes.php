<?php /* SHORTCODES */
// SHORTCODES & CUSTOM FUNCTIONS
function vidyard_lighbox_shortcode($atts){
  $v = shortcode_atts(array(
      'embed' => false,
      'button' => false
    ), $atts);
  $output = '';
  if($v['embed'] === false){
    $output .= '<p style="padding:30px 0;color:red;"><strong>Please include "embed" string</strong></p>';
  } else {
    $output .= '<script type=\'text/javascript\' id=\'vidyard_embed_code_'.$v['embed'].'\' src=\'//play.vidyard.com/'.$v['embed'].'.js?v=3.1.1&type=lightbox\'></script>';
    $output .= '<div class=\'outer_vidyard_wrapper\'><div class=\'vidyard_wrapper\' onclick=\'fn_vidyard_'.$v['embed'].'();\'>';
    if(!$v['button']){
      $output .= '<img width="360" src="//play.vidyard.com/'.$v['embed'].'.jpg?" alt="Spiceworks Video"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div>';
    } else {
      $output .= '<a class="button orange hollow" href="javascript:void(0);">' . esc_attr($v['button']) . ' <i class="fa fa-play-circle" aria-hidden="true"></i></a>';
    }
    $output .= '</div></div>';
  }
  return $output;
}
add_shortcode( 'vidyard', 'vidyard_lighbox_shortcode' );

function product_quote_shortcode( $atts, $content = null ) {
  $q = shortcode_atts(array(
    'by' => '',
    'company' => ''
  ), $atts);

  $output = '<div class="product_quote"><p class="product_quote-text">' . do_shortcode($content) . '</p>';
  if( strlen($q['by']) > 1 ){
    $output .= '<p class="product_quote-by">' . $q['by'] . '</p>';
  }
  if( strlen($q['company']) > 1 ){
    $output .= '<p class="product_quote-company">' . $q['company'] . '</p>';
  }
  $output .= '</div>';
  return $output;
}
add_shortcode( 'quote', 'product_quote_shortcode' );

function product_download_alert( $atts, $content = null) {
  $a = shortcode_atts(array(
    'color' => 'green'
  ), $atts);
  $output = '<div class="alert ' . esc_attr($a['color']) . '" data-closable>';
  $output .= do_shortcode($content);
  $output .= '<button class="close-button" aria-label="Dismiss alert" type="button" data-close><span aria-hidden="true">&times;</span></button></div>';
  return $output;
}
add_shortcode( 'download-alert', 'product_download_alert' );

function watson_insert_template_partial( $atts ) {
  $w = shortcode_atts(array(
    'name' => ''
  ), $atts);

  $output = '';

  $partialsList = array(
    'app-cloud-help-desk',
    'app-inventory',
    'manage-help-desk-tickets',
    'spiceworks-is-free',
    'spiceworks-community',
    'app-connectivity-dashboard',
    'app-network-monitor',
    'app-help-desk-mobile'
  );

  $part = esc_attr($w['name']);
  if( in_array($part, $partialsList) ):
    ob_start();
    require 'template-parts/' . $part . '.php';
    $output = ob_get_contents();
    ob_end_clean();
  endif;

  return $output;
}
add_shortcode('partial', 'watson_insert_template_partial');

function spiceworks_automatic_download_shortcode($atts){
  $d = shortcode_atts(array(
    'from' => false
  ), $atts);

  $output = '';
  if($d['from']){
    $output .= '<iframe width="1" height="1" frameborder="0" style="display:none;" src="' . $d['from'] . '"></iframe>';
  }
  return $output;
}
add_shortcode('auto-download', 'spiceworks_automatic_download_shortcode');

function sw_youtube_embed_shortcode($atts) {
  $y = shortcode_atts(array(
    'id' => '',
    'width' => '560',
    'height' => '360'
  ), $atts);

  $output = '<div class="iframe-container"><iframe src="https://www.youtube.com/embed/' . esc_attr($y['id']) . '?wmode=opaque" width="' . esc_attr($y['width']) . '" height="' . esc_attr($y['height']) . '" frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>';
  return $output;
}
add_shortcode('youtube-embed', 'sw_youtube_embed_shortcode');
?>
