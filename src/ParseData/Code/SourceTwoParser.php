<?php

namespace ParseData\Code;

class SourceTwoParser extends AbstractDataParser {

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
