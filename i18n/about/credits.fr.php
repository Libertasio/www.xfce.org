<?php
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>Crédits</h1>
<p></p>

<h2 id="lead">Direction du projet</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Développeurs principaux</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>Contributeur</h3></th>
        <th width="60%" align="left"><h3>Projet(s)</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">Serveurs et site Web</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Contributor</h3></th>
        <th align="left"><h3>Contribution</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">Contributeurs</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>Les personnes suivantes sont des contributeurs fréquents de patchs, idées, correction de bogues et nouveau code :</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Contributeurs en activité</h3></th>
    </tr>
<?php credits_contributors_active ($credits['contributors-active'], $credits['contributors-active-i18n']); ?>
    <tr>
        <th colspan="2"><h3>Contributeurs précédents</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">Goodies</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Supervision des Goodies</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Traducteurs</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Supervision des traductions</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>Langue</h3></th>
        <th width="80%" align="left"><h3>Contributeur(s)</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
