<?php
/**
 * This class will permitt to set all global variables of the module
 * @Author : Gilles Hemmerlé <gilles.h@iabsis.com>
 */

namespace Igestis\Modules\PhpExcel;

require_once __DIR__ . "/../bin/PHPExcel.php";

define("IGESTIS_PHPEXCEL_VERSION", "0.1-1");
define("IGESTIS_PHPEXCEL_MODULE_NAME", "PhpExcel");
define("IGESTIS_PHPEXCEL_TEXTDOMAIN", IGESTIS_PHPEXCEL_MODULE_NAME .  IGESTIS_PHPEXCEL_VERSION);
/**
 * Configuration of the module
 *
 * @author Gilles Hemmerlé
 */
class ConfigModuleVars {

    /**
     * @var String Numéro de version du module
     */
    const version = IGESTIS_PHPEXCEL_VERSION;
    /**
     *
     * @var String Name of the module (used only on the source code) 
     */
    const moduleName = IGESTIS_PHPEXCEL_MODULE_NAME;
    
    /**
     *
     * @var String Name of the menu showed to the user (blank if it is a simple service)
     */
    const moduleShowedName = "PHP Excel library";
    
    /**
     *
     * @var String textdomain used for this module
     */
    const textDomain = IGESTIS_PHPEXCEL_TEXTDOMAIN;    
    
    
}
