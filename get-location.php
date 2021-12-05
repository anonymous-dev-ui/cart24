<?php
 
$query = @unserialize(file_get_contents('http://ip-api.com/php/'));
if($query && $query['status'] == 'success'){
$city = $query['region'];
$zip = $query['zip'];
}

?>
