<?php
namespace Craft;


/**
 * Class DeployController
 * @package Craft
 */
class CacheClearController extends BaseController {

    /**
     * @var array
     */
    protected $allowAnonymous = array('actionClear');

    public function actionClear()
    {
        // check if plugin is installed
        if (!$plugin = craft()->plugins->getPlugin('cacheClear'))
        {
            die('Could not find the plugin');
        }

        // get settings
        $settings = $plugin->getSettings();

        // get key
        $key = craft()->request->getParam('key');

        // verify key
        if (!$settings->key OR $key != $settings->key)
        {
            die('Unauthorized key');
        }

        // delete all caches
        craft()->templateCache->deleteAllCaches();

        // check if a redirect was posted
        if (craft()->request->getPost('redirect'))
        {
            $this->redirectToPostedUrl();
        }

        die('Your cache cleared successfully!');
    }
}
