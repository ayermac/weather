<?php
namespace Ayermac\Weather\Tests;

use Ayermac\Weather\Weather;
use Ayermac\Weather\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{
    public function testGetWeather()
    {
    }
    public function testGetHttpClient()
    {
    }
    public function testSetGuzzleOptions()
    {
    }

    public function testGetWeatherWithInvalidType()
    {
        $w = new Weather('key');

        // 断言会抛出此异常类
        $this->expectException(InvalidArgumentException::class);

        $this->expectExceptionMessage('Invalid type value(base/all):foo');

        $w->getWeather('深圳', 'foo');

        $this->fail('Failed to assert getWeather throw exception');
    }
}