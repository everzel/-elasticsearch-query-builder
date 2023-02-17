<?php

namespace Everzel\ElasticsearchQueryBuilder\Queries;

class NestedQuery implements Query
{
    /** @var string */
    protected $path;

    /** @var Query */
    protected $query;

    public static function create(string $path, Query $query): self
    {
        return new self($path, $query);
    }

    public function __construct(string $path, Query $query)
    {
        $this->path = $path;
        $this->query = $query;
    }

    public function toArray(): array
    {
        return [
            'nested' => [
                'path' => $this->path,
                'query' => $this->query->toArray(),
            ],
        ];
    }
}