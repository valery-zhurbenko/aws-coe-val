<?php
     require 'aws/aws-autoloader.php';
     use Aws\Common\Enum\Region;
     use Aws\DynamoDb\Enum\Type;

     $bucket='user-profile-bucket';  #Replace with your Bucket name 
     $tableName = "usr_reg"; #Replace with your Database table name
     $config = array(
        'key'    => $PARAM1,
        'secret' => $PARAM2,
        'profile' => 'default',
        'region' => Region::US_EAST_1 #replace with your desired region     
        );
?>
