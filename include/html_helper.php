<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 10/11/2017
 * Time: 17:36
 */

function inputNumberFormHorizontalGroup($label,$id,$max,$min = 0,$default=0,$gridsizing = 6)
{
    $retour = "";
    $retour .= "<div class=\"form-group\">";
    $retour .= "   <label class=\"col-md-".$gridsizing." control-label \">".$label."</label>";
    $retour .= "   <div class=\"col-md-".(int)(12 -$gridsizing)."\">";
    $retour .= "      <input type=\"number\" id=\"$id\" class=\"form-control\" value=\"".$default."\" max=\"".$max."\" min=\"".$min."\">";
    $retour .= "   </div>";
    $retour .= "</div>";

    return $retour;


}





?>
