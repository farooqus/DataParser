<?php

namespace ParseData\Code;

/**
 * IDataSourceParser interface.
 * To be implement by all data source(s) 
 */
interface IDataSourceParser {

    public function getDataStream($data);
    
    public function parseDataSource($data);

    public function processSource($data, $title);
}
