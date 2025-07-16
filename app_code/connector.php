
<?php

class connector {

    function post($url = null, $data = null, $returntype = null) {
        $ctx = stream_context_create(array('http' => array('method' => 'POST', 'header' => "User-agent: Connector\r\nContent-Type: application/x-www-form-urlencoded", 'content' => $data,)));
        $response = file_get_contents($url, false, $ctx);
        if ($returntype == 'xml') {
            $response = simplexml_load_string($response);
        } else if ($returntype == 'json') {
            $response = json_decode($response);
        } else if ($returntype == 'xmlcdata') {
            $response = simplexml_load_string($response, null, LIBXML_NOCDATA);
        }
        return $response;
    }

    function post_json($url = null, $data = null, $returntype = null) {
        $ctx = stream_context_create(array('http' => array('method' => 'POST', 'header' => "User-agent: Connector\r\nContent-Type: application/json", 'content' => $data, "timeout" => 6000)));
        $response = @file_get_contents($url, false, $ctx);
        if ($returntype == 'xml') {
            $response = simplexml_load_string($response);
        } else if ($returntype == 'json') {
            $response = json_decode($response);
        } else if ($returntype == 'xmlcdata') {
            $response = simplexml_load_string($response, null, LIBXML_NOCDATA);
        }
        return $response;
    }

    function get($url = null, $data = null, $returntype = null) {
        $response = @file_get_contents($url . '?' . $data);
        if ($returntype == 'xml') {
            $response = simplexml_load_string($response);
        } else if ($returntype == 'json') {
            $response = json_decode($response);
        } else if ($returntype == 'xmlcdata') {
            $response = simplexml_load_string($response, null, LIBXML_NOCDATA);
        }
        return $response;
    }

}

?>