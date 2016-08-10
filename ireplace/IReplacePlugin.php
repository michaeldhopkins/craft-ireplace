<?php

namespace Craft;

class IReplacePlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('IReplace');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Michael Hopkins';
	}

	public function getDeveloperUrl()
	{
		return '';
	}

	public function getPluginUrl()
	{
		return '';
	}
	
	public function addTwigExtension()
	{
		Craft::import('plugins.ireplace.twigextensions.IReplaceTwigExtension');
		return new IReplaceTwigExtension();
	}
}
