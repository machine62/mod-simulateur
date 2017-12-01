<?php

/**
 * @package [Mod] simulateur
 * @author Machine
 * @copyright Copyright &copy; 2017, http://ogsteam.fr/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (!defined('IN_SPYOGAME')) die("Hacking attempt");
require_once("views/page_header.php");
require_once("mod/simulateur/include/html_helper.php");
require_once("mod/simulateur/include/common.php");
$prefixType = array("a_", "d_");


?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="mod/simulateur/css/simulateur.css" rel="stylesheet">
    <script type="text/javascript" src="mod/simulateur/js/modsimulateur.js"></script>



    <div class="container-fluid">
        <div class="row">
            <?php foreach ($prefixType as $flotteType) : ?>

                <div class="col-md-4">

                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo $flotteType; ?> :</div>
                        <div class="panel-body">

                        <?php $prefixType = "a_"; ?>
                        <div class="row">
                            <fieldset class="fieldset-border">
                                <legend class="fieldset-border">Technos :</legend>

                                <div class="col-md-6"> <!-- Partie Gauche -->
                                    <div class="form-horizontal"> <!-- techno combat-->
                                        <?php foreach (getTechnoTxt() as $content) : ?>
                                            <?php echo inputNumberFormHorizontalGroup($content, $prefixType . $content, 20); ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="col-md-6"> <!-- Partie Droite -->
                                    <div class="form-horizontal"> <!-- techno vitesse-->
                                        <?php foreach (getSpeedTxt() as $content) : ?>
                                            <?php echo inputNumberFormHorizontalGroup($content, $prefixType . $content, 20); ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="row"><!-- Partie Coordonnées -->
                            <fieldset class="fieldset-border">
                                <legend class="fieldset-border">Coordonnées :</legend>

                                <div class="col-md-4">
                                    <?php echo inputNumberFormHorizontalGroup("", $prefixType . "gal", 9, 1, 1, 0); ?>
                                </div>
                                <div class="col-md-4">
                                    <?php echo inputNumberFormHorizontalGroup("", $prefixType . "sys", 499, 1, 1, 0); ?>

                                </div>
                                <div class="col-md-4">
                                    <?php echo inputNumberFormHorizontalGroup("", $prefixType . "row", 15, 1, 1, 0); ?>
                                </div>
                            </fieldset>
                        </div>


                        <div class="row"><!-- Partie Vaisseaux -->
                            <fieldset class="fieldset-border">
                                <legend class="fieldset-border">Vaisseaux :</legend>
                                <div class="row">
                                    <div class="col-md-8"><!-- Partie Gauche Vaisseaux-->
                                        <div class="form-horizontal">

                                            <?php $ships = getAlleShip(); ?>
                                            <?php for ($i = 0; $i < array_search('MI', $ships); $i++) : ?>
                                                <?php if (($flotteType == "a_" && $i > array_search('EDLM', $ships)) == false)  : ?>
                                                    <?php if ($i == array_search('LM', $ships)) {
                                                        echo "<hr />";
                                                    } ?>
                                                    <?php echo inputNumberFormHorizontalGroup("$ships[$i]", $prefixType . "$ships[$i]", 9999999, 1, 0, 6); ?>
                                                <?php endif; ?>
                                            <?php endfor; ?>

                                        </div>
                                    </div>
                                    <div class="col-md-4"><!-- Partie Droite Vaisseaux-->
                                        <fieldset disabled>
                                            <div class="form-horizontal">
                                                <?php for ($i = 0; $i < array_search('MI', $ships); $i++) : ?>
                                                    <?php if (($flotteType == "a_" && $i > array_search('EDLM', $ships)) == false)  : ?>
                                                        <?php if ($i == array_search('LM', $ships)) {
                                                            echo "<hr />";
                                                        } ?>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control " id="usr" readonly>
                                                            <?php //echo $ships[$i]; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                        </fieldset>
                                    </div>

                                </div>


                            </fieldset>
                        </div>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Simulateur</div>
                    <div class="panel-body">
                        <button type="button" class="btn btn-primary btn-lg">Simulation</button>
                        <fieldset class="fieldset-border">
                            <legend class="fieldset-border">Resultats:</legend>
                            Resultats
                        </fieldset>
                        <fieldset class="fieldset-border">
                            <legend class="fieldset-border">Options:</legend>
                            Resultats
                        </fieldset>

                    </div>
                </div>


            </div>

        </div>
    </div>
<?php
require_once("views/page_tail.php");