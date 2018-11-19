<?php

namespace app\module\api\controllers;

use yii\rest\Controller;
use Yii;

/**
 * Default controller for the `api` module
 */
class MapsController extends Controller
{   
    public static $MAPS_KEY = 'key=AIzaSyBXh_b8YFbLsGvHenxWSum_S1Tkgqvd90g';

    public function actionGetCoordinates($lat, $long, $metros)
    {
        $url_test = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.
            $lat.','.$long.'&radius='.$metros.'&key=AIzaSyBXh_b8YFbLsGvHenxWSum_S1Tkgqvd90g';

        return self::curlExec($url_test);
    }

    public function curlExec($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        
        return $response;
    }
}
