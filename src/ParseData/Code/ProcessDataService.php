<?php

namespace ParseData\Code;

/**
 * ProcessDataServices class 
 * source data methods 
 */
abstract class ProcessDataService {

    public function getDataStream($data) {
        $string = file_get_contents($data['url']);
        $json_array = json_decode($string, true);
        return $json_array;
    }
	
	public function parseDataSource($data) {       
        $jsonArray = $this->getDataStream($data);
        $processJsonArray = $this->processSource($jsonArray, $data['title']);
        $jsonFormat = json_encode($processJsonArray, JSON_PRETTY_PRINT);

        return $jsonFormat;
    }

}
