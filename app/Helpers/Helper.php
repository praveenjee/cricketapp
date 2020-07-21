<?php 
namespace App\Helpers;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }
	
	public static function changeDateFormate($date, $date_format)
	{
		return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
	}
   
	public static function productImagePath($image_name)
	{
		return public_path('images/products/'.$image_name);
	}
	
	public static function slugify($string)
	{
		$string = strtolower(trim($string));
		
		// replace non letter or digits by -
		//$string = preg_replace('~[^\pL\d]+~u', '-', $string);
		
		$string = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		
		// transliterate
		$string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);

		// remove unwanted characters
		$string = preg_replace('~[^-\w]+~', '', $string);

		// remove duplicate -
		$string = preg_replace('~-+~', '-', $string);
		
		if (empty($string)) {
			return 'n-a';
		}
		
		return $string;
	}
	
}

