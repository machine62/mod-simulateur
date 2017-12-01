<?php

/**
 * @package [Mod] simulateur
 * @author Machine
 * @copyright Copyright &copy; 2017, http://ogsteam.fr/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */


function getTechnoTxt()
{
    return array("arm", "bouc", "coq");
}

function getSpeedTxt()
{
    return array("comb", "imp", "hyp");
}

function getAlleShip()
{
    $retour = array();
    $retour[0] = "PT";
    $retour[1] = "GT";
    $retour[2] = "CL";
    $retour[3] = "CLO";
    $retour[4] = "CR";
    $retour[5] = "VB";
    $retour[6] = "VC";
    $retour[7] = "RC";
    $retour[8] = "SE";
    $retour[9] = "SS";
    $retour[10] = "BB";
    $retour[11] = "DEST" ;
    $retour[12] = "TR";
    $retour[13] = "EDLM";
    $retour[14] ="LM" ;
    $retour[15] = "ALL";
    $retour[16] = "ALO";
    $retour[17] = "AI" ;
    $retour[18] = "CG";
    $retour[19] = "LP";
    $retour[20] = "PB" ;
    $retour[21] =  "GB";
    $retour[22] ="MI" ;
    $retour[23] = "MIP";
return $retour;



}