<?php
/**
* Title: Gallery Image
* Post Type: post
*/
piklist('field', array(
    'type' => 'select',
    'field' => 'choose_gallery_type',
    'label' => 'Select Gallery Type',
    'choices' => array(
      'carousel' => 'Carousel Gallery',
      'justify' => 'Justify Gallery',
    ),
    'value'     => 'carousel'
));
piklist('field', array(
    'type'      => 'file',
    'field'     => 'verum_gallery_image',
    'label'     => __('Post Gallery', 'verum'),
    'options' => array(
        'modal_title' => 'Add File(s)',
        'button' => 'Add Gallery Image'
      )
));
