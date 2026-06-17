<?php

declare(strict_types=1);

namespace A\Http;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class Cache
{
    protected(set) array $vary = [];

    public function __construct(string ...$vary)
    {
        $this->vary = $vary;
    }

    public function handle(callable $next, Request $request) : Response
    {
        return $next($request);
    }
}
