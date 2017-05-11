<?php

class Employee
{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    public function __construct(string $name,float $salary,string $position,string $department,string $email = null,float $age = null)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }
    public function __toString()
    {
        $salary = number_format($this->salary, 2);
        $email = $this->email == null ? "n/a" : $this->email;
        $age = $this->age == null ? -1 : $this->age;
        return $this->name . ' ' . $salary . ' ' .$email . ' ' .  $age;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
