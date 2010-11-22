<?php	
header("Content-Type: application/x-ysnippet+xml");    // Make sure we set the right content type
header("Cache-Control: no-cache");                      // Make sure the page isn't cached

?>
<page>
  <content>
    <module>
      <block><?php echo "Hello world!"; ?></block>
    </module>
  </content>
</page>