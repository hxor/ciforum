<?php 

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */
 
if (! function_exists('time_convert'))
{
	function time_convert($timestamp, $timezone = 'UTC')
	{
		$datetime = new DateTime($timestamp, new DateTimeZone($timezone));
    	return $datetime->format('Y/m/d H:i');
	}
}
