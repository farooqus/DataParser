<?php

namespace ParseData\Code;

/**
 * SourceOne class implements IDataSource
 */
class SourceOne implements IDataSource {

    public function parseData($data) {
        $ProcessDataServices = new ProcessDataServices();
        $jsonArray = $ProcessDataServices->getDataStream($data);
        $processJsonArray = $this->processSource($jsonArray, $data['title']);
        $jsonFormat = json_encode($processJsonArray, JSON_PRETTY_PRINT);

        return $jsonFormat;
    }

    public function processSource($data, $title) {
        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($data));
        $dataArray['provider'] = $title;
        ;
        foreach ($iterator as $key => $value) {
            $dataArrayVal;
            if (is_int($key) == false) {
                $deptName = $value;
            }
            if (is_int($key) == true) {
                $key = $deptName;
                $dataArrayVal = Array('name' => $value, 'department' => $key);
                $dataArray['employees'][] = $dataArrayVal;
            }
        }
        return $dataArray;
    }

}
