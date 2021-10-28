<?php
    include "namespace_html.php";
    $table = new namespace_html\Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new namespace_html\Row();
    $row->numCell = 3;
?>

<html>
    <body>
        <?php $table->message(); ?>
        <?php $row->message(); ?>
    </body>
</html>