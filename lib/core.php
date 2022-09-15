<?php
function safe($param) {
    return addslashes($param);
}

function render($file, $data = null)
{
    $layout_file = VIEW_DIR.'/layouts/layout.php';
    ob_start();
    include_once($file);
    $content = ob_get_clean();
    include_once($layout_file);
}



 ?>