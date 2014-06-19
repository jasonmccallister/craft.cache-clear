<?php
namespace Craft;


class CacheClearPlugin extends BasePlugin {

    public function getName()
    {
        return Craft::t('Cache Clear');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Jason McCallister';
    }

    public function getDeveloperUrl()
    {
        return 'http://themccallister.com';
    }

    protected function defineSettings()
    {
        return array(
            'key' => array(
                AttributeType::String,
                'required' => true
            ),
        );
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('cacheclear/_settings', array(
            'settings' => $this->getSettings()
        ));
    }
}
