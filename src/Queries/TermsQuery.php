<?php

namespace Everzel\ElasticsearchQueryBuilder\Queries;

class TermsQuery implements Query
{
    /** @var string */
    protected $field;

    /** @var array */
    protected $value;

    public static function create(string $field, array $value): self
    {
        return new self($field, $value);
    }

    public function __construct(string $field, array $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function toArray(): array
    {
        return [
            'terms' => [
                $this->field => $this->value,
            ],
        ];
    }
}
