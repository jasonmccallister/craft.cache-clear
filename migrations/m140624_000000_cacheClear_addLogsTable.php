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

        // this is a foreach loop, enough said
        foreach ($newColumns as $columnName => $columnType)
        {
            // check if the column does NOT exist
            if (!craft()->db->columnExists($tableName, $columnName))
            {
                // add the column to the table
                $this->addColumn($tableName, $columnName, array(
                        'column' => $columnType,
                        'required' => false)
                );

                // log that we created the new column
                SproutSeoPlugin::log("Created the `$columnName` in the `$tableName` table.", LogLevel::Info, true);
            }

            // if the column already exists in the table
            else {

                // tell craft that we couldn't create the column as it alredy exists.
                SproutSeoPlugin::log("Column `$columnName` already exists in the `$tableName` table.", LogLevel::Info, true);

            }
        }

        // return true and let craft know its done
        return true;
    }
}
