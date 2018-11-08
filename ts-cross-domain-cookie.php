<?php
/**
 * @package TSCrossDomainCookie
 */
/*
Plugin Name: TS Cross Domain Cookie
Plugin URI: https://github.com/thomson-safaris/CrossDomainCookies.git
Description: Remember google/bing PPC across sub-domains
Version: 1.0.2
Author: Jim Chapman - Thomson Safaris
License: GPLv2 or later
Text Domain: tscrossdomaincookie
*/
$settings = htmlentities(json_encode($_GET));
?>
<div id="crossDomainCookie" style="display:none;">
    <img src="https://basecamp.thomsonsafaris.com/basecamp/api/v1/cdcookie/<?= $settings ?>" style="display:none; height:0px !important;"/>
</div>
<script>
$(document).ready(function(){
    $('#crossDomainCookie').hide();
})
</script>