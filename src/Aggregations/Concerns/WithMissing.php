<?php

namespace Everzel\ElasticsearchQueryBuilder\Aggregations\Concerns;

trait WithMissing
{
    /** @var string|null */
    protected $missing = null;

    public function missing(string $missingValue): self
    {
        $this->missing = $missingValue;

        return $this;
    }
}
