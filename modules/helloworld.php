<?php
function mymodule_menu() {
    $items = array();
    $items['my_module/hello_world'] = array(
        'title' => 'Hello World Test',
        'page callback' => 'say_hello_world',
        'access arguments' => array('access content'),
        'type' => MENU_CALLBACK,
     );
    return $items;
}
function say_hello_world() {
    $vars = array();
    $vars['type']="ul";
    $vars['title'] = "";
    $vars['attributes']=array("");
    $vars['items'][0]="This is a simple proof of concept module";
    return theme_item_list($vars);
}
