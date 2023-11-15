<?php


class Request
{
	/**
	 * Get the uri of a request.
	 * @return string
	 */
	public static function uri()
	{
		$uri = preg_replace("/^" . App::get('root') . "/", '', $_SERVER['REQUEST_URI']);
		$uri = trim(
			parse_url($uri, PHP_URL_PATH),
			'/'
		);
		// echo $uri;
		return $uri;
	}

	/**
	 * Get the request method.
	 *
	 * @return string
	 */
	public static function method()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		return $method;
	}
}