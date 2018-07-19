<?php
translater::value();
class translater
{   
    const ENGLISH=1;
    const BENGALI=2;

	static function value()
	{
		echo self::BENGALI;
	}
}
?>