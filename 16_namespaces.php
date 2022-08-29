<?php
/* namespaces*/

namespace html;

class Table{
    public $title;
    public $numRows;

    public function message() {
        echo "<p>Table: '{$this->title}' has {$this->numRows} rows</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 4;

?>

<!doctype html>
<html>
<body>
<?php
$table->message();
?>
</body>
</html>

