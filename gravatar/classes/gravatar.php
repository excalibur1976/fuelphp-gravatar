<?php
/**
*
* @package	Gravatar
* @version	2.0
* @author	Benjamin Butschko
* @link		https://github.com/excalibur1976/fuelphp-gravatar
* @access	public
* @param	string	
* @param	array
* @return	string
* 
*/

class Gravatar
{

	public static function forge($email, $options = null)
	{

		$config = array(
			'email'		=> md5($email),
			'rating'	=> 'G',																	// maximum allowed rating. accepts: G | PG | R | X
			'size'		=> 80,																	// size of gravatar image
			'image'		=> 'http://www.gravatar.com/avatar/00000000000000000000000000000000'	//default image
		);

		// Overwrite default config parameter
		if($options !== null)
		{
			foreach($options as $key => $value)
			{
				if(isset($config[$key]) === true)
				{
					$config[$key] = $value;
				}
			}
		}
		$settings	= (object) $config;

		// build gravatar image url
		$url		= 'http://gravatar.com/avatar.php?gravatar_id=' . $settings->email . '&amp;rating=' . $settings->rating . '&amp;size=' . $settings->size . '&amp;default=' . $settings->image;

		return $url;

	}

}

/* end of file gravatar.php */