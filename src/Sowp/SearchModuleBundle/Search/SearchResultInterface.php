<?php

namespace Sowp\SearchModuleBundle\Search;

interface SearchResultInterface
{
    public function search($query);
    public function getResultObject();
}