<?php
$page['body'] = '';
if( isset( $_POST[ 'id' ] ) ) {
    $_SESSION[ 'id' ] =  $_POST[ 'id' ];
    //$page[ 'body' ] .= "Session ID set!<br /><br /><br />";
    $page[ 'body' ] .= "Session ID: {$_SESSION[ 'id' ]}<br /><br /><br />";
    $page[ 'body' ] .= "<script>window.opener.location.reload(true);</script>";
}

$page[ 'body' ] .= "
<form action=\"#\" method=\"POST\">
	<input type=\"text\" size=\"15\" name=\"id\">
	<input type=\"submit\" name=\"Submit\" value=\"Submit\">
</form>
<hr />
<br />

<button onclick=\"self.close();\">Close</button>";
echo $page['body'];