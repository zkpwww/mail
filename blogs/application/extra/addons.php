<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'testhook' => 
    array (
      0 => 'markdown',
    ),
  ),
  'route' => 
  array (
    '/example$' => 'example/index/index',
    '/example/d/[:name]' => 'example/demo/index',
    '/example/d1/[:name]' => 'example/demo/demo1',
    '/example/d2/[:name]' => 'example/demo/demo2',
  ),
);