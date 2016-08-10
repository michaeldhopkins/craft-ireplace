<?php

namespace Craft;

class IReplaceTwigExtension extends \Twig_Extension
{
	protected $env;

	public function getName()
	{
		return 'IReplace';
	}

	public function getFilters()
	{
		return array('ireplace' => new \Twig_Filter_Method($this, 'ireplace', array('is_safe' => array('html'))));
	}
	
	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function ireplace($str, $search, $replace)
	{
		return str_ireplace($search, $replace, $str);
	}
}