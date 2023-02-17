<?php

namespace Everzel\ElasticsearchQueryBuilder\Aggregations\Concerns;

use Everzel\ElasticsearchQueryBuilder\AggregationCollection;
use Everzel\ElasticsearchQueryBuilder\Aggregations\Aggregation;

trait WithAggregations
{
    /** @var AggregationCollection */
    protected $aggregations;

    public function aggregation(Aggregation $aggregation): self
    {
        $this->aggregations->add($aggregation);

        return $this;
    }
}
