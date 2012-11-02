<?php
$pkg_meta_map = array (
  'package' => 'sample.sti',
  'baseClass' => 'xPDOObject',
  'platform' => 'sqlite',
  'version' => '1.1',
  'phpdoc-package' => '@package sample',
  'phpdoc-subpackage' => '@subpackage sti.sqlite',
);
$xpdo_meta_map = array (
  'xPDOSimpleObject' => 
  array (
    0 => 'baseClass',
    1 => 'relClassOne',
    2 => 'relClassMany',
  ),
  'baseClass' => 
  array (
    0 => 'derivedClass',
  ),
  'derivedClass' => 
  array (
    0 => 'derivedClass2',
  ),
);