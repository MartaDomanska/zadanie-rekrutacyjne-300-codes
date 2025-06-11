<?php
add_action('rest_api_init', function () {
  register_rest_route('custom/v1', '/stats', [
    'methods' => 'GET',
    'callback' => 'get_stats_data',
  ]);
});

function get_stats_data() {
  return [
    [
      'icon' => '/wp-content/uploads/HeadCircuit.svg',
      'value' => 200,
      'description' => 'Lorem ipsum dolor sit amet',
    ],
    [
      'icon' => '/wp-content/uploads/UsersThree.svg',
      'value' => 120,
      'description' => 'Lorem ipsum dolor sit amet',
    ],
    [
      'icon' => '/wp-content/uploads/Star.svg',
      'value' => 10,
      'description' => 'Lorem ipsum dolor sit amet',
    ],
  ];
}
