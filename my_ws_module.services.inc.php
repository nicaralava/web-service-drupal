<?php
function my_ws_module_services_resource() {
    $api = array(
        'my-section' => array(
            'actions' => array(
                'articles' => array(
                    'help' => 'Text info.',
                    'callback' => 'my_ws_module_services_resource_retrieve',
                    'args' => array(
                        array(
                            'name' => 'param1',
                            'type' => 'int',
                            'description' => '...',
                            'source' => array('data' => 'param1'),
                            'optional' => FALSE,
                        ),
                        array(
                            'name' => 'param2',
                            'type' => 'string',
                            'description' => '...',
                            'source' => array('data' => 'param2'),
                            'optional' => FALSE,
                        ),                        
                    ),
                    'access callback' => 'my_ws_module_resource_access',
                    'access arguments' => array('retrieve'),
                    'access arguments append' => TRUE,
                ),
            ),
        ),
    );
    return $api;
}

function my_ws_module_services_resource_retrieve($param1,$param2){
  /** ....... your_condition ......... **/
  return your_result;
}

// Access callback.
function my_ws_module_resource_access() {
  return TRUE;
}

/**
 * Implements hook_services_resources().
 */
function krug_restful_services_resources()
{
  $resources =  my_ws_module_services_resource();
  return $resources; 
}