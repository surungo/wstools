<?php

namespace App\Tests\Controller;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class LuckyControllerTest extends ApiTestCase
{
    protected static ?bool $alwaysBootKernel = true;
    
    public function testDefaultLuckyNumber(): void
    {
        $response = static::createClient()->request('GET', '/lucky/number');

        $this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('content-type', 'application/json');
        $this->assertJsonContains(['qt_chars' => 6]);
    }

    public function testCustomLengthLuckyNumberChars(): void
    {
        $response = static::createClient()->request('GET', '/lucky/number_chars?qt_chars=4');

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['qt_chars' => 4]);

        $data = $response->toArray();
        $this->assertEquals(4, $data['length']);
    }

    public function testInvalidLengthLuckyNumber(): void
    {
        $response = static::createClient()->request('GET', '/lucky/number?qt_chars=0');

        $this->assertResponseStatusCodeSame(400);
        $this->assertJsonContains(['error' => 'qt_chars must be between 1 and 18']);
    }

    public function testRandomness(): void
    {
        $response1 = static::createClient()->request('GET', '/lucky/number');
        $response2 = static::createClient()->request('GET', '/lucky/number');

        $data1 = $response1->toArray();
        $data2 = $response2->toArray();

        $this->assertNotEquals($data1['number'], $data2['number']);
    }
}
