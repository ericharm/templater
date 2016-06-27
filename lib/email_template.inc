<?php

class EmailTemplate {

  public $title = "";

  function __construct($title) {
    $this->title = $title;
    echo $this->writeOpeningTags($title);
  }

  function __destruct() {
    echo $this->writeClosingTags();
  }

  function addHeading($content) {
    echo "<h1>$content</h1>";
  }

  private function writeOpeningTags(&$title) {
    $headMarkup = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>$title</title>
</head>
<body style="margin: 0; padding: 0;">

 <table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
   <td>

HTML;
    return $headMarkup;    
  }

  private function writeClosingTags() {
    $footMarkup = <<<HTML
   </td>
  </tr>
 </table>

</body>
</html>
HTML;
    return $footMarkup;
  }

}

?>