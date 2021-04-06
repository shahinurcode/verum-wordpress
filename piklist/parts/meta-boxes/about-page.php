<?php 
/**
* Title: About Page Data
* Post Type: page
* Template: page-templates/about
*/
?>

<?php
piklist('field', array(
    'type' => 'group',
    'field' => 'address_group', // removing this parameter saves all fields as separate meta
    'label' => __('Address (Grouped)', 'piklist-demo'),
    'list' => false,
    'description' => __('A grouped field with the field parameter set.', 'piklist-demo'),
    'fields' => array(
      array(
        'type' => 'text',
        'field' => 'address_1',
        'label' => __('Street Address', 'piklist-demo'),
        'required' => true,
        'columns' => 12,
        'attributes' => array(
          'placeholder' => 'Street Address',
        )
      )

    )
  ));
