<?php

namespace ParseData\Code;

/**
 * SourceTwo class implements IDataSource
 */
class SourceTwo implements IDataSource {

    public function parseData($data) {
        $ProcessDataServices = new ProcessDataServices();
        $jsonArray = $ProcessDataServices->getDataStream($data);
        $processJsonArray = $this->processSource($jsonArray, $data['title']);
        $jsonFormat = json_encode($processJsonArray, JSON_PRETTY_PRINT);

        return $jsonFormat;
    }

    public function processSource($data, $title) {
        $dataArray['provider'] = $title;
        foreach ($data['departments'] as $value) {

            foreach ($data['employees'] as $value1) {
                $id = isset($value1['department-id']) ? $value1['department-id'] : $value1['department'];
                if ($value['id'] == $id) {
                    $dataArrayVal = Array('name' => $value1['name'], 'department' => $value['name']);
                    $dataArray['employees'][] = $dataArrayVal;
                }
            }
        }
        return $dataArray;
    }

}
