<?php

if (!defined('TL_ROOT')) {
  die('You cannot access this file directly!');
}

/**
 * Extension for Contao Open Source CMS
 *
 * PHP version 5
 * @copyright  µaTh 2016 
 * @author     µaTh
 * @package    be_content
 * @license    GNU
 * @filesource https://github.com/mathContao/be_content
 */


/**
 * Add to palette
 */


$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{be_content_legend:hide},beContentElements;';

$GLOBALS['TL_DCA']['tl_settings']['fields']['beContentElements'] = array
    (
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['be_content']['beContentElements'],
    'inputType' => 'text',
    'exclude' => true,
    'eval' => array('mandatory' => false, 'tl_class' => 'long')
);

