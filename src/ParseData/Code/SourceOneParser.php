<?php

namespace ParseData\Code;

class SourceOneParser extends AbstractDataParser {

    public function processSource($data, $title) {
        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($data));
        $dataArray['provider'] = $title;
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
