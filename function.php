<?php
$liste = array("1" =>"un" ,  "2" => "deux", "3" => "trois");

echo '<ul>';
foreach ($liste as $element)

{
  echo '<li>' .$element. '</li>';

}
echo '</ul>';

?>