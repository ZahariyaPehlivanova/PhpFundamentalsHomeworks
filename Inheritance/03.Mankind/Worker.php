<?php

namespace Mankind;

class Worker extends Human{
    private $weekSalary;
    private $workHours;

    public function __construct($firstName, $lastName,float $weekSalary,$workHours)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHours($workHours);
    }

    public function setLastName($lastName)
    {
        if(strlen($lastName) < 3){
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        parent::setLastName($lastName);
    }

    public function setWeekSalary(float $weekSalary)
    {
        if($weekSalary < 10){
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->weekSalary = $weekSalary;
    }

    public function setWorkHours(int $workHours)
    {
        if($workHours < 1 || $workHours > 12){
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }

        $this->workHours = $workHours;
    }

    public function calculateMoney(): float{
        return ($this->weekSalary / $this->workHours) / 7;
    }

    public function __toString()
    {
        $weekSalary = number_format($this->weekSalary,2,"." , "");
        $hoursPerDay = number_format($this->workHours,2,"." , "");
        $salary = number_format($this->calculateMoney(),2, "." , "");
        return parent::__toString() . "Week Salary: {$weekSalary}\nHours per day: {$hoursPerDay}\nSalary per hour: {$salary}";
    }
}