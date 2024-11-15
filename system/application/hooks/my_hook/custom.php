<?php 
function my_hook() {
 
  $ci =& get_instance();
 
  $ci->template->add_js('system/application/hooks/my_hook/vendors/lity/dist/lity.min.js');
  $ci->template->add_css('system/application/hooks/my_hook/vendors/lity/dist/lity.min.css');
 
}
?>