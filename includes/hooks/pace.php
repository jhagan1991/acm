<?php

add_hook('ClientAreaHeadOutput', 1, function($vars) {
    $template = $vars['template'];
    return <<<HTML
    <link href="acm/pace/pace.css" rel="stylesheet" type="text/css" />
    <script src="acm/pace/pace.js"></script>
HTML;

});