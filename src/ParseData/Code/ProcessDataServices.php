<?php

namespace ParseData\Code;

/**
 * ProcessDataServices class 
 * facilitates source data methods 
 */
class ProcessDataServices {

    public function getDataStream($data) {
        $string = file_get_contents($data['url']);
        $json_array = json_decode($string, true);
        return $json_array;
    }

}
