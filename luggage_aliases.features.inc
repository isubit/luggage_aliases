<?php
/**
 * @file
 * luggage_aliases.features.inc
 */

/**
 * Implements hook_views_api().
 */
function luggage_aliases_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function luggage_aliases_image_default_styles() {
  $styles = array();

  // Exported image style: aliases_avatar.
  $styles['aliases_avatar'] = array(
    'label' => 'Aliases Avatar',
    'effects' => array(
      4 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 120,
          'height' => 120,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
