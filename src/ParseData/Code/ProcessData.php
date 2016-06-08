<?php

namespace ParseData\Code;

/**
 * ProcessData class 
 * To process data source.
 */
class ProcessData {

    private $dataSource;

    public function __construct(IDataSource $source) {
        $this->dataSource = $source;
    }

    public function processSource($sourceUrl) {
        return $this->dataSource->parseData($sourceUrl);
    }

}
