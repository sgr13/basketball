<?php

namespace BasketballBundle\Entity;

class Calendar
{
    private $day;
    private $month;
    private $year;
    private $firstDayInMonth;
    private $daysInMonth;
    private $numberOfWeeksInMonth;

    public function __construct()
    {
        $date = strtotime(date("Y-m-d"));
        $this->day = date('d', $date);
        $this->month = date('m', $date);
        $this->year = date('Y', $date);
        $this->firstDayInMonth = '';
        $this->daysInMonth = '';
        $this->numberOfWeeksInMonth = '';
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getFirstDayInMonth()
    {
        return $this->firstDayInMonth;
    }

    /**
     * @param string $firstDayInMonth
     */
    public function setFirstDayInMonth($firstDayInMonth)
    {
        $this->firstDayInMonth = $firstDayInMonth;
    }

    /**
     * @return string
     */
    public function getDaysInMonth()
    {
        return $this->daysInMonth;
    }

    /**
     * @param string $daysInMonth
     */
    public function setDaysInMonth($daysInMonth)
    {
        $this->daysInMonth = $daysInMonth;
    }

    /**
     * @return string
     */
    public function getNumberOfWeeksInMonth()
    {
        return $this->numberOfWeeksInMonth;
    }

    /**
     * @param string $numberOfWeeksInMonth
     */
    public function setNumberOfWeeksInMonth($numberOfWeeksInMonth)
    {
        $this->numberOfWeeksInMonth = $numberOfWeeksInMonth;
    }


    public function showCalendar()
    {
        $firstDay = mktime(0, 0, 0, $this->month, 1, $this->year);
        $this->firstDayInMonth = date('N', $firstDay);
        $this->daysInMonth = cal_days_in_month(0, $this->month, $this->year);
        self::getNumberOfWeeks();
    }

    public function getNumberOfWeeks()
    {
        if ($this->daysInMonth == 28 && $this->firstDayInMonth == 1) {
            $this->numberOfWeeksInMonth = 4;
        } else if (($this->daysInMonth == 31 && $this->firstDayInMonth > 5) || $this->daysInMonth == 30 && $this->firstDayInMonth > 6) {
            $this->numberOfWeeksInMonth = 6;
        } else {
            $this->numberOfWeeksInMonth = 5;
        }
    }
}