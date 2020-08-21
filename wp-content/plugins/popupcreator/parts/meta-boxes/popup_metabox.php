<?php
/*
Title:Popup Settings
Post Type:popup
*/
piklist('field', array(
  'type' => 'text'
  ,'field' => 'display_after'
  ,'label' => __('Display Popup After','popupcreator')
  ,'description' => 'Field Description'
  ,'value' => '0',
  'help'=>__('in seconds','popupcreator')

));
piklist('field', array(
  'type' => 'text'
  ,'field' => 'url'
  ,'label' => __('URL','popupcreator')
 ));
piklist('field', array(
  'type' => 'checkbox'
  ,'field' => 'auto-hide'
  ,'label' => __('Auto Hide','popupcreator')
  ,'value'=>1
  ,'choices'=>array(
    1=>__('Don\'t Hide','popupcreator')
  )
 ));

piklist('field', array(
  'type' => 'checkbox'
  ,'field' => 'auto-hide'
  ,'label' => __('Display On Exit','popupcreator')
  ,'value'=>1
  ,'choices'=>array(
    0=>__('Display On Exit','popupcreator')
  )
 ));


piklist('field', array(
  'type' => 'select'
  ,'field' => 'on_exit'
  ,'label' => __('Popup Size','popupcreator')
  ,'value'=>1
  ,'choices'=>array(
    'landscape'=>__('Landscape','popupcreator')
    ,'square'=>__('Square','popupcreator')
  )
 ));




















