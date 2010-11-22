<?php
/*
 * index.php
 * by David Calhoun
 * 
 * Yahoo! Blueprint
 * Hello World example
 * 
 * Copyright 2010 Yahoo! Inc. All rights reserved.
 * 
 * This code is part of the Yahoo! Mobile Widget SDK, governed by
 * the Yahoo! Mobile Widget Developer Terms of Use at:
 * http://info.yahoo.com/legal/us/yahoo/mobilewidgetdvlpr/mobilewidgetdvlpr-2070.html
*/
	
//header("Content-Type: application/x-blueprint+xml");    // Make sure we set the right content type
header("Cache-Control: no-cache");                      // Make sure the page isn't cached

?>
<page>
  <content>
    <module>
      <block><?php echo "Hello world!"; ?></block>
    </module>
  </content>
</page>