<?php
namespace Craft;

/**
* The class name is the UTC timestamp in the format of mYYMMDD_HHMMSS_pluginHandle_migrationName
*/
class m160624_000000_cacheClear_addLogsTable extends BaseMigration
{
    /**
    * Any migration code in here is wrapped inside of a transaction.
    *
    * @return bool
    */
    public function safeUp()
    {
        // specify the table name here
        $tableName = 'cacheclear_logs';

        // specify columns and AttributeType
        $newColumns = array (
            'remoteIpAddress' => ColumnType::Varchar,
        );

        // check if the table exists
        if (!craft()->db->tableExists($tableName))
        {
            // create the table and add columns
            $this->createTable($tableName, array(
                'remoteIpAddress' => array(
                    'column' => ColumnType::Varchar,
                    ),
                )
            );

            // create the index
            $this->createIndex($tableName, 'remoteIpAddress', true);
        }

        // return true and let craft know its done
        return true;
    }
}
