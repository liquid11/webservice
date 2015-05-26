<?php
include ('GetImage.php');

header("Content-Type:application/json");

if(!empty($_GET['getimage']))
{
$ImageContainer = getImage();

    if(!empty($ImageContainer))
    {

deliver_response(200,"image found",$ImageContainer);
    }

}
else
{

}

function deliver_response($status,$status_message,$data){

    header("HTTP.1.1 $status $status_message");

    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    $json_response = json_encode($response);

    echo $json_response;

}

?>