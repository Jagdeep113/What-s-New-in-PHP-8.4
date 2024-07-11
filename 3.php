<?php 

$status='rejected';

$result = match($status){
    'approved' => 'Approved',
    'pending' => 'Pending',
    'rejected' => 'Rejected',
    'cancelled' => 'Cancelled',
    'completed' => 'Completed',
    default=>'Not Found'

};
echo $result;

?>