<?php

namespace Luba\Helpers;

class Header
{
	public static function location($loc)
	{
		header("Location: $loc");
	}

	public static function contentType($type)
	{
		header("Content-Type: $type");
	}

	public static function contentEncoding($encoding)
	{
		header("Content-Encoding: $encoding");
	}

	public static function contentLength($length)
	{
		header("Content-Length: $length");
	}

	public static function contentDisposition($disp)
	{
		header("Content-Disposition: $disp");
	}

	public static function contentTransferEncoding($enc)
	{
		header("Content-Transfer-Encoding: $enc");
	}
}