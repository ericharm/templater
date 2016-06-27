<?php

$standardTableAttributes = array('border' => "0", "width" => "100%");

// This table ends up as content nested into the White area (left side)
$leftImageTable = new Table($standardTableAttributes, 13);
  $row1 = $leftImageTable->addRow();
    $column1 = $row1->addColumn('<img src="images/left.gif" alt="" width="100%" height="140" style="display: block;" />');
  $row2 = $leftImageTable->addRow();
    $columnContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.";
    $column1 = $row2->addColumn($columnContent, array('style'=>"padding: 25px 0 0 0;"));

// This table ends up as content nested into the White area (right side)
$rightImageTable = new Table($standardTableAttributes, 13);
  $row1 = $rightImageTable->addRow();
    $column1 = $row1->addColumn('<img src="images/right.gif" alt="" width="100%" height="140" style="display: block;" />');
  $row2 = $rightImageTable->addRow();
    $columnContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.";
    $column1 = $row2->addColumn($columnContent, array('style'=>"padding: 25px 0 0 0;"));

// Table which contains the two image tables defined above
$images_table = new Table($standardTableAttributes, 10);
  $row1 = $images_table->AddRow();
    // Nest leftImageTable
    $col1 = $row1->addColumn($leftImageTable->generateTags(),
      array('width' => "260", 'valign' => "top"));
    $_col = $row1->addColumn("&nbsp;",
      array('style' => "font-size: 0; line-height: 0;", 'width'=> "20"));
    // Nest rightImageTable
    $col3 = $row1->addColumn($rightImageTable->generateTags(),
      array('width' => "260", 'valign' => "top"));

// This table contains all content in the White area, including the image table defined above
$mainContent = new Table($standardTableAttributes, 7);
  $row1 = $mainContent->addRow();
    $column = $row1->addColumn("Lorem ipsum dolor sit amet!");
  $row_2 = $mainContent->addRow();
    $row_2_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.";
    $column = $row_2->addColumn($row_2_content, array('style'=>"padding: 20px 0 30px 0;"));
  $row3 = $mainContent->addRow();
    // Nest images table
    $column = $row3->addColumn($images_table->generateTags());

// Social media icons table (Red area)
$socialIndent = "             ";
$twitter_content = <<<TWIT
<a href="http://www.twitter.com/">
$socialIndent <img src="images/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
$socialIndent</a>
TWIT;
$fb_content = <<<FB
<a href="http://www.facebook.com/">
$socialIndent <img src="images/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
$socialIndent</a>
FB;
$socialTable = new Table(array('border' => '0'), 10);
  $row1 = $socialTable->addRow();
    $twitter = $row1->addColumn($twitter_content);
    $_col = $row1->addColumn("&nbsp;",
     array('style' => "font-size: 0; line-height: 0;", 'width' => '20'));
    $fb = $row1->addColumn($fb_content);

// Table to house the split content sections in footer
$copyrightTable = new Table($standardTableAttributes, 7);
  $row1 = $copyrightTable->addRow();
    $column1 = $row1->addColumn(' &reg; Someone, somewhere 2013<br/>' . "\n" .
      '           <a href="#">Unsubscribe</a> to this newsletter instantly');
    // Nest social table
    $column2 = $row1->addColumn($socialTable->generateTags(),
      array('align'=>'right'));

?>