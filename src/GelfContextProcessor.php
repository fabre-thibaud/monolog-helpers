<?php

namespace Tfabre\Monolog\Processor;

class GelfContextProcessor
{
    public function __invoke(array $record): array
    {
        $record['context'] = [ 'context' => $record['context'] ];

        return $record;
    }
}