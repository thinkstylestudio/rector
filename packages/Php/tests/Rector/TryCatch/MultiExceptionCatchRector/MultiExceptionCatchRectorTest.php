<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\TryCatch\MultiExceptionCatchRector;

use Rector\Php\Rector\TryCatch\MultiExceptionCatchRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class MultiExceptionCatchRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function getRectorClass(): string
    {
        return MultiExceptionCatchRector::class;
    }

    /**
     * @return string[]
     */
    public function provideDataForTest(): iterable
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
    }
}
