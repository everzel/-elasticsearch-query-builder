<?php

namespace Everzel\ElasticsearchQueryBuilder\Queries;

interface Query
{
    public function toArray(): array;
}
