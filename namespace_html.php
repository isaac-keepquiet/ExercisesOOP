<?php
    namespace Html;
    class Table{
        public $title = "";
        public $numRows = 0;
        public function message(){
            echo "<p>Table '{$this->title}' has {$this->numRows} row.</p>";
        }
    }

    Class Row{
        public $numCell = 0;
        public function message(){
            echo "<p>The row has {$this->numCell} cell.</P>";
        }
    }
    // $table = new Table();
    // $table->title = "My table";
    // $table->numRows = 5;
?>

<!-- <!DOCTYPE html>
<html>
    <body>
        <?php
            $table->message();
        ?>
    </body>
</html> -->