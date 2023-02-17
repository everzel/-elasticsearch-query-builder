<?php

namespace Everzel\ElasticsearchQueryBuilder\Queries;

class WildcardQuery implements Query
{
    /** @var string */
    protected $field;
    /** @var string */
    protected $value;

    public static function create(string $field, string $value): self
    {
        return new self($field, $value);
    }

    public function __construct(string $field, string $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function toArray(): array
    {
        return [
            'wildcard' => [
                $this->field => [
                    'value' => $this->value,
                ],
            ],
        ];
    }
}
