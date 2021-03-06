<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoReferenceRule\Fixture;

final class ReferenceArgument
{
    public function go($argument)
    {
        $this->run([&$argument]);
    }

    private function run(array $array)
    {
    }
}
