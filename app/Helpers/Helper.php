<?php
namespace App\Helpers;
 
class Helper {
    /**
     * @param string $url youtube link
     * 
     * @return string
     */
    public static function parseYoutube($url)
	{
		$rx = '~^(?:https?://)?(?:www[.])?(?:youtube[.]com/watch[?]v=|youtu[.]be/)([^&]{11})~x';

		$has_match = preg_match($rx, $url, $matches);
		if ($has_match && $matches[1]) {
			$data['value'] = $matches[1];
			$image = 'https://img.youtube.com/vi/'.$matches[1].'/hqdefault.jpg';
		}else{
			return false;
		}
		
		return $image;
	}
}