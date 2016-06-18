<?php

namespace ParseData\Code;

/**
 * ProcessData class 
 * To process data source.
 */
class ProcessData {

    private $dataSource;

    public function __construct(IDataSourceParser $source) {
        $this->dataSource = $source;
    }

    public function processSource($sourceUrl) {
        return $this->dataSource->parseDataSource($sourceUrl);
    }

}
