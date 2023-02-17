<?php

namespace Everzel\ElasticsearchQueryBuilder\Queries;

class PrefixQuery implements Query
{
    /** @var string */
    protected $field;

    /** @var string|int */
    protected $query;

    public static function create(string $field, $query): self
    {
        return new self($field, $query);
    }

    public function __construct(string $field, $query)
    {
        $this->field = $field;
        $this->query = $query;
    }

    public function toArray(): array
    {
        return [
            'prefix' => [
                $this->field => [
                    'value' => $this->query,
                ],
            ],
        ];
    }
}
