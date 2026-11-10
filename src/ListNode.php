<?php

declare(strict_types=1);

namespace Homework;

final class ListNode
{
    public function __construct(
        public int $value,
        public ?self $next = null,
    ) {
    }
}
