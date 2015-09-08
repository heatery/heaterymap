<?php
if(!$_POST){?>
<h4><div class="alert alert-success" role="alert">&nbsp;&nbsp;Enter city or address&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;here to get started.</div></h4>

<?php
}else{
    $data_arr=geocode($_POST['address']);
    if($data_arr){
        $latitude=$data_arr[0];
        $longitude=$data_arr[1];
        $city=$data_arr[2];
    }
}
function geocode($address){
    $address = urlencode($address);
    $url="https://maps.google.com/maps/api/geocode/json?sensor=false&address={$address}";
    $resp_json = file_get_contents($url);
    $resp = json_decode($resp_json, true);
    if($resp['status']='OK'){
        $lati=$resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $city = $resp['results'][0]['address_components'][0]['long_name'];
        if($lati && $longi && $city){
            $data_arr = array();
            array_push($data_arr, $lati, $longi, $city);
            return $data_arr;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
?>

