This is a library to allow HTML Email Template designers to code email templates with PHP.

You can define the structure of the table, along with the contents and attributes of its cells.  Then you can embed the table within a cell of an outer table by passing
$innerTable->generateTags()
as the content of the containing cell.  This allows your indenting to remain modest.  Table objects also accept an $indent parameter, which will make for better looking output.

In the sample project (based on the tutorial at http://webdesign.tutsplus.com/articles/build-an-html-email-template-from-scratch--webdesign-12770) I put the top-level table and its row and column definitions in one file, and more deeply-nested tables in another file.  It is handy to look at each table in the template as its own component, and could help avoid confusion as well as ensure valid markup.

Since tables and table columns accept an optional array of attributes, it is useful to create a variable which references a reusable array containing a set of common attributes, e.g.
$standardTableAttributes = array('border' => "0", "width" => "100%");
then simply pass that array to a table or column object to easily declare those attributes on the table element.