<?php

declare(strict_types=1);

namespace Skiru\Xdebug;

final class Calculator
{
    public function add(int ...$i): int
    {
        $sum = 0;
        foreach ($i as $element) {
            $sum += $element;
        }

        return $sum;
    }
}
