<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\ForbiddenNewOutsideFactoryServiceRule\Fixture;

final class NotAFactoryClassNonStar
{
    public function create()
	{
		return new Foo();
	}
}
