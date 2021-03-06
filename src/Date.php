<?php

namespace Pasoonate;

class Date
{
    public $year;
    public $month;
    public $day;

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     */
    public function __construct($year = 0, $month = 0, $day = 0)
    {
        $this->year = intval($year);
        $this->month = intval($month);
        $this->day = intval($day);
    }
}