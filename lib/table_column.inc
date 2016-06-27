<?php

class TableColumn {

  public $content = "";
  public $attributes = array();

  function __construct($content, $args = array()) {
    $this->content = $content;
    foreach ($args as $attribute => $value) {
      $this->attributes[$attribute] = $value;
    }
  }

  function generateTags($indent) {
    $tags = "$indent  <td";
    foreach ($this->attributes as $key => $value) {
      $tags .= " $key=\"$value\" ";
    }
    $content = $this->content;
    $tags .= ">\n$indent   $content\n";
    $tags .= "$indent  </td>\n";
    return $tags;
  }

}

?>