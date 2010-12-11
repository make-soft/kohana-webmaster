<?php defined('SYSPATH') or die('No direct script access.');

class Webmaster_Core 
{
	protected static $instance;
	protected $config;
    const CRLF = "\r\n";
    
	public static function instance()
	{
		if ( ! isset(Webmaster::$instance))
		{
			// Load the configuration for this type
			$config = Kohana::config('webmaster');
			
			// Create a new session instance
			Webmaster::$instance = new Webmaster($config);
		}
		return Webmaster::$instance;
	}

	public function __construct($config = array())
	{
		// Save the config in the object
		$this->config = $config;
	}
    
    public function render()
    {
        return View::factory('webmaster')
            ->set('config', $this->config);
    }
    
    public static function meta($key, $value)
    {
        if ($value === FALSE)
            return '';
        return '<meta '.HTML::attributes(array('name' => $key, 'content' => $value)).' />'.Webmaster::CRLF;
    }
	
}