<?php

namespace ParseData\Code;

/**
 * IDataSource interface.
 * To be implement by all data source(s) 
 */
interface IDataSource {

    public function parseData($data);

    public function processSource($data, $title);
}
