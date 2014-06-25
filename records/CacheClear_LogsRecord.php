<?php
namespace Craft;

class CacheClear_LogsRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'cacheclear_logs';
    }

    protected function defineAttributes()
    {
        return array(
            'remoteIpAddress' => array(
                AttributeType::Varchar,
                'required' => true
            )
        );
    }

    public function defineIndexes()
    {
        return array(
            array(
                'columns' => array(
                    'remoteIpAddress'
                    ),
                'unique' => true
            ),
        );
    }

}
