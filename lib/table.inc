<?php

require('lib/table_row.inc');

class Table {
  
  public $attributes = array();
  public $rows = array();
  public $indent = 0;

  function __construct($args = array(), $indent = 0) {
    $this->indent = $indent;
    foreach ($args as $attribute => $value) {
      $this->attributes[$attribute] = $value;
    }
  }

  function generateTags() {
    $tags = $this->generateTableTag();
    foreach ($this->rows as $row) {
      $tags .= $row->generateTags($this->indent());
    }
    $tags .= $this->indent() . "</table>\n";
    return $tags;
  }

  function generateTableTag() {
    $tags = "\n" . $this->indent() . "<table cellpadding=\"0\" cellspacing=\"0\"";
    foreach ($this->attributes as $key => $value) {
      $tags .= " $key=\"$value\" ";
    }
    $tags .= ">\n";
    return $tags;    
  }

  function addRow() {
    $this->rows[] = new TableRow();
    return end($this->rows);
  }

  function indent() {
    $x = "";
    for ($i = 0; $i < $this->indent; $i++) {
      $x .= " ";
    }
    return $x;
  }

}

?>