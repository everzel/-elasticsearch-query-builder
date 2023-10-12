<?php

namespace Everzel\ElasticsearchQueryBuilder;

use Everzel\ElasticsearchQueryBuilder\Sorts\SortInterface as Sort;

class SortCollection
{
    /** @var Sort[] */
    protected $sorts;

    public function __construct(Sort ...$sorts)
    {
        $this->sorts = $sorts;
    }

    public function add(Sort $sort): self
    {
        $this->sorts[] = $sort;

        return $this;
    }

    public function isEmpty(): bool
    {
        return empty($this->sorts);
    }

    public function toArray(): array
    {
        $sorts = [];

        foreach ($this->sorts as $sort) {
            $sorts[] = $sort->toArray();
        }

        return $sorts;
    }
}
