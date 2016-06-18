<?php

namespace ParseData\Code;

/**
 * GetData class 
 * To get, select and process data source.
 */
class DataParser {

    public function dataParser() {
        $sourceUrlArray = $this->getSourceUrl();
        $sourceType = $this->getCompanyId($sourceUrlArray);

        if (isset($sourceType)) {

            if (is_string($sourceType)) {
                echo $sourceType;
                return false;
            }

            $source = $sourceUrlArray[$sourceType];

            switch ($source['classTitle']) {
                case 'SourceOne':
                    $datasource = new SourceOneParser();
                    break;

                case 'SourceTwo':
                    $datasource = new SourceTwoParser();
                    break;
            }

            $component = new ProcessData($datasource);
            return $component->processSource($source);
        }
        return false;
    }

    public function getCompanyId($sourceUrlArray) {

        if (isset($_GET['companyId'])) {
            $sourceType = $_GET['companyId'];
            if (array_key_exists($sourceType, $sourceUrlArray)) {
                $sourceType = (int) $sourceType;
                return $sourceType;
            }
        }
        $errorMessage = "Please provide valid Company Id, Thank you";
        return $errorMessage;
    }

    public function getSourceUrl() {
        $sourceUrlArray = array(
            1 => array('title' => 'Company Name 1', 'url' => 'http://testing.moacreative.com/job_interview/php2/company1_data.php', 'classTitle' => 'SourceOne'),
            2 => array('title' => 'Company Name 2', 'url' => 'http://testing.moacreative.com/job_interview/php2/company2_data.php', 'classTitle' => 'SourceTwo')
        );

        return $sourceUrlArray;
    }

}
