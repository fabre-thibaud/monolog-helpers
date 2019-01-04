<?php

namespace TFabre\Monolog\Processor;

class GelfContextProcessor
{
	
	private $channel;
	
	public function __construct(int $channel = 23)
	{
		$this->channel = $channel;
	}
	
    public function __invoke(array $record): array
    {
        $record['context'] = [ 'context' => $record['context'] ];
        $record['extra'] = [ 'extra_json' => array_merge(['channel' => $record['channel']], $record['extra'])];

        $record['channel'] = $this->channel;

        return $record;
    }
}