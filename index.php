<?php

require('lib/email_template.inc');
require('lib/table.inc');
require('nested_tables.php');

$standardTableAttributes = array('border' => "0", "width" => "100%");

$email = new EmailTemplate("New Email Template");

// Top Level Table
$topLevelTable = new Table(array("align" => "center",
          "border" => "1", "width" => "600",
          "style" => "border-collapse: collapse"), 4);

  // The BLUE area
  $row1 = $topLevelTable->addRow();
    $img_tag = '<img src="images/h1.gif" alt="Creating Email Magic" width="300" height="230" style="display: block;" />';
    $column1 = $row1->addColumn($img_tag, array('bgcolor' => "#70bbd9",
      'align' => "center", 'style' => "padding: 40px 0 30px 0;"));

  // The WHITE area
  $row2 = $topLevelTable->addRow();
    // Nest $mainContent table
    $column1 = $row2->addColumn($mainContent->generateTags(),
      array('bgcolor' => "#ffffff", "style" => "padding: 40px 30px 40px 30px;"));

  // The RED area
  $row3 = $topLevelTable->addRow();
    // Nest copyrightTable
    $column1 = $row3->addColumn($copyrightTable->generateTags(),
      array('bgcolor' => "#ee4c50", 'style' => "padding: 30px 30px 30px 30px;"));

echo $topLevelTable->generateTags();

?>