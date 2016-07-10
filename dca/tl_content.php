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
// Einstellungen auslesen
if (strlen($GLOBALS['TL_CONFIG']['beContentElements']) > 0) {
    // wenn Einstellung nicht leer ist
    //Kommaseparierte Liste zerlegen
    $elements = explode(',', $GLOBALS['TL_CONFIG']['beContentElements']);

    $headerfields = array();

    // Leerzeichen entfernen
    for ($i = 0; $i < count($elements); $i++) {
        if (strlen($temp = trim($elements[$i])) > 0) {
            // nur uebernehmen, wenn nicht leer
            $headerfields[] = $temp;
        }
    }

    // headerFields mit den neuen Feldern fuellen
    if (count($headerfields) > 0) {
        $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'] = &$headerfields;
    }
}

