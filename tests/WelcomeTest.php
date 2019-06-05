<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class WelcomeTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'Welcome',
            App\Http\Welcome::sayHelloWorld()
        );
    }
}
