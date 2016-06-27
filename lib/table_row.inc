<?php

require('lib/table_column.inc');

class TableRow {

  public $columns = array();

  function generateTags($indent) {
    $tags = "$indent <tr>\n";
    foreach ($this->columns as $column) {
      $tags .= $column->generateTags($indent);
    }
    $tags .= "$indent </tr>\n";
    return $tags;
  }

  function addColumn($content = "", $args = array()) {
    $this->columns[] = new TableColumn($content, $args);
  }

}

?>