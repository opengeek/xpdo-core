<?php
$pkg_meta_map = array (
  'package' => 'sample',
  'baseClass' => 'xPDOObject',
  'platform' => 'mysql',
  'defaultEngine' => 'MyISAM',
  'version' => '1.2',
  'phpdoc-package' => '@package sample',
  'phpdoc-subpackage' => '@subpackage mysql',
);
$xpdo_meta_map = array (
  'xPDOSimpleObject' => 
  array (
    0 => 'Person',
    1 => 'Phone',
    2 => 'xPDOSample',
    3 => 'Item',
  ),
  'xPDOObject' => 
  array (
    0 => 'PersonPhone',
    1 => 'BloodType',
  ),
  'xPDOSample' => 
  array (
    0 => 'implicit.subpkg.xPDOSubSample',
  ),
);