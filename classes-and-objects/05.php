<?php

class Date
{
    private string $month;
    private string $day;
    private string $year;

    public function __construct(string $month, string $day, string $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getDay(): string
    {
        return $this->day;
    }

    /**
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $day
     */
    public function setDay(string $day): void
    {
        $this->day = $day;
    }

    /**
     * @param string $month
     */
    public function setMonth(string $month): void
    {
        $this->month = $month;
    }

    /**
     * @param string $year
     */
    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    public function DisplayDate(): string
    {
        return $this->day."/".$this->month."/".$this->year;
    }

}

$date = new Date(05,29,1989);
echo $date->DisplayDate()."\n";
$date->setYear(1999);
echo $date->getYear()."\n";
echo $date->DisplayDate()."\n";