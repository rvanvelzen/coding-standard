<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\TokenRunner\ValueObject;

final class BlockInfo
{
    public function __construct(
        private readonly int $start,
        private readonly int $end
    ) {
    }

    public function getStart(): int
    {
        return $this->start;
    }

    public function getEnd(): int
    {
        return $this->end;
    }
}
