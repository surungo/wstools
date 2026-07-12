<?php
// tests/Unit/Service/LuckyServiceTest.php
// composer require --dev symfony/test-pack
namespace App\Tests\Unit\Service;

use App\Service\LuckyService;
use PHPUnit\Framework\TestCase;

class LuckyServiceTest extends TestCase
{
    public function testGenerateNumber(): void
    {
        $luckyService = new LuckyService();

        // Test generateNumber, with default qt_chars (0)(should return 0)
        $number = $luckyService->generateNumber(0);
        $this->assertIsInt($number);
        $this->assertEquals(0, $number);

        // Test generateNumber, with default qt_chars (6)
        $number = $luckyService->generateNumber();
        $this->assertIsInt($number);
        $this->assertGreaterThanOrEqual(0, $number);
        $this->assertLessThanOrEqual(999999, $number);

        // Test generateNumber, with qt_chars = 4
        $number = $luckyService->generateNumber(4);
        $this->assertIsInt($number);
        $this->assertGreaterThanOrEqual(0, $number);
        $this->assertLessThanOrEqual(9999, $number);

        // Test generateNumber, with qt_chars = 1
        $number = $luckyService->generateNumber(1);
        $this->assertIsInt($number);
        $this->assertGreaterThanOrEqual(0, $number);
        $this->assertLessThanOrEqual(9, $number);

        // Test generateNumberChars, with qt_chars = 0 (should return 0)
        $number_chars = $luckyService->generateNumberChars(0);
        $this->assertIsString($number_chars);
        $this->assertEquals('0', $number_chars);

        // Test generateNumberChars, with qt_chars = 4 (should return a 4-digit string)
        $number_chars = $luckyService->generateNumberChars(4);
        $this->assertIsString($number_chars);
        $this->assertEquals(4, strlen($number_chars));

        // Test generateNumberChars, with qt_chars = 6 (should return a 6-digit string)
        $number_chars = $luckyService->generateNumberChars(6);
        $this->assertIsString($number_chars);
        $this->assertEquals(6, strlen($number_chars));



    }
}
