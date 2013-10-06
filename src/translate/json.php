<?php
/**
 * Translate - a simple PHP translation framework
 *
 * @author      Matt Wiseman <trollboy@gmail.com>
 * @copyright   2013 Matt Wiseman
 * @link        http://www.mattwiseman.net/translate 
 * @version     1.0
 * @package     Translate
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace translate; 
 
if(!defined('APP_DIR'))
{
	$path = explode('vendor', __FILE__);
	define('APP_DIR', $path[0] . DIRECTORY_SEPARATOR);
}
if(!defined('LANG_DIR'))
{
	$path = explode('vendor', __FILE__);
	define('LANG_DIR', $path[0] . '/data/languages');
}

/**
 * Json
 * @package Translate
 * @author  Matt Wiseman
 * @since   1.0.0
 */
class json
{
	private static $language = NULL; 

	public static function translate ($key, $section = "main")
	{
		echo 'Hello World';
	}

	public static function save($language, $key, $value, $section = "main")
	{
		echo 'Saving';
	}

	public static function createLang($language)
	{
		mkdir(LANG_DIR . DIRECTORY_SEPARATOR . strtolower($language));
		touch(LANG_DIR . DIRECTORY_SEPARATOR . strtolower($language) . '/main.json');
	}

	public static function createSection($section)
	{ 
		$languages = scandir(LANG_DIR);
		foreach ($languages as $eachlang) 
		{
			if(is_dir(LANG_DIR . DIRECTORY_SEPARATOR . $eachlang))
			{
				touch(LANG_DIR . DIRECTORY_SEPARATOR . $eachlang . DIRECTORY_SEPARATOR . $section . '.json');
			}
            else 
            {
                mkdir(LANG_DIR . DIRECTORY_SEPARATOR . $eachlang);
                touch(LANG_DIR . DIRECTORY_SEPARATOR . $eachlang . DIRECTORY_SEPARATOR . $section . '.json');
            }
		} 
	}
}