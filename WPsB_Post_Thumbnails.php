<?php

/**
 * Class WPsB_Post_Thumbnails
 */
class WPsB_Post_Thumbnails
{
	private $config;

	/**
	 * @param array $config
	 */
	public function __construct(array $config)
	{
		$defaults = array(
			'options' => []
		);

		$this->config = array_merge($defaults, $config);

		$this->register();
	}

	public function register()
	{
		add_action('after_setup_theme', array($this, 'after_setup_theme'), 10);
	}

	public function after_setup_theme()
	{
		if (is_array($this->config['options']) && !empty($this->config['options'])) {
			$this->add_theme_support($this->config['options']);
		} else {
			$this->add_theme_support();
		}
		$this->add_image_size($this->config['add_image_size']);
	}

	public function add_theme_support()
	{
		add_theme_support('post-thumbnails');
	}

	/**
	 * @param array $args
	 */
	public function add_image_size(array $args)
	{
		if (empty($args) || !function_exists("add_image_size")) {
			return;
		}

		foreach ($args as $arg) {
			$defaults = array(
				"width" => 0,
				"height" => 0,
				"crop" => false
			);

			$arg = array_merge($defaults, $arg);

			add_image_size($arg['name'], $arg['width'], $arg['height'], $arg['crop']);
		}
	}
}
