<?php

// Register shows Post Type
$shows = new CPT('show', array(
  'supports' => array( 'title', 'thumbnail' )
));

$music = new CPT('album', array(
  'supports' => array( 'title', 'thumbnail' )
));

$shows->columns(array(
  'cb' => '<input type="checkbox" />',
  'title' => __('Title'),
  'show_date' => __('Date'),
  'venue' => __('Venue'),
  'city' => __('City'),
  'state' => __('State'),
));

$shows->populate_column('show_date', function($column, $post) {
  echo get_field('show_date');
});

$shows->populate_column('venue', function($column, $post) {
  echo get_field('show_venue');
});

$shows->populate_column('city', function($column, $post) {
  echo get_field('show_city');
});

$shows->populate_column('state', function($column, $post) {
  echo get_field('show_state');
});

$shows->sortable(array(
  'date' => array('meta_key', true)
));

?>