<?php
declare(strict_types = 1);
namespace Evoweb\StoreFinder\Domain\Model;

/**
 * This file is developed by evoweb.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

class Constraint extends Location
{
    /**
     * @var string
     */
    protected $search = '';

    /**
     * @var array
     */
    protected $category = [];

    /**
     * @var int
     */
    protected $radius = 0;

    /**
     * @var int
     */
    protected $limit = 0;

    /**
     * @var int
     */
    protected $page = 0;

    public function getSearch(): string
    {
        return $this->search;
    }

    public function setSearch(string $search)
    {
        $this->search = $search;
    }

    public function setCategory(array $category)
    {
        $this->category = (array) $category;
    }

    public function getCategory(): array
    {
        return array_filter($this->category);
    }

    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setPage(int $page)
    {
        $this->page = $page;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
