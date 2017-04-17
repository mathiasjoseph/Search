<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 18/12/16
 * Time: 12:29
 */

namespace Miky\Component\Search\Model;


class SearchResult
{
    /**
     * @var array|SearchResultItem[]
     */
    protected $items;

    /**
     * @return SearchResultItem[]|array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param SearchResultItem[]|array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }


}