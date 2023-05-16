<?php

namespace Src\Shared\Domain\ValueObject;

abstract class IntValueObject
{
    public function __construct(public int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }

    public function isBiggerThan(IntValueObject $other): bool
    {
        return $this->value() > $other->value();
    }
}
