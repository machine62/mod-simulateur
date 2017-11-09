<?php

/**
 * @package [Mod] simulateur
 * @author Machine
 * @copyright Copyright &copy; 2017, http://ogsteam.fr/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (!defined('IN_SPYOGAME'))
    die("Hacking attempt");

$security = false;
$mod_folder = "simulateur";
$security = install_mod($mod_folder);
if ($security == true) {
    // nothing
   
}



