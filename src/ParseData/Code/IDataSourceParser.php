<?php

namespace ParseData\Code;

/**
 * IDataSourceParser interface.
 * To be implement by all data source(s) 
 */
interface IDataSourceParser {

    /**
     * getDataStream to get file contents 
     * @param array $data, URL to get file contents
     * @return array
     */
    public function getDataStream($data);

    /**
     * parseDataSource to return JSON 
     * @param array $data
     * @return JSON
     */
    public function parseDataSource($data);

    /**
     * processSource to format required JSON output
     * @param array $data, string $title
     * @return JSON
     */
    public function processSource($data, $title);
}
