<?php namespace Craft;


class CacheClearPlugin extends BasePlugin {

	/**
	 * Get the plugin's name.
	 *
	 * @return mixed
	 */
	public function getName()
	{
		return Craft::t('Cache Clear');
	}

	/**
	 * Get the plugin's version.
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '1.0.1';
	}

	/**
	 * Get the plugin's developer.
	 *
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Jason McCallister';
	}

	/**
	 * Get the plugin developer's URL.
	 *
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://jasonmccallister.co';
	}

	/**
	 * Define the plugin's settings.
	 *
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'key' => array(
				AttributeType::String,
				'required' => true
			),
		);
	}

	/**
	 * Get the plugin's settings template.
	 *
	 * @return mixed
	 */
	public function getSettingsHtml()
	{
		return craft()->templates->render('cacheclear/_settings', array(
			'settings' => $this->getSettings()
		));
	}
}
