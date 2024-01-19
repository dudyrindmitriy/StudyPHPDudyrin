<?php
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}
class Programmer extends Employee
{
    private $langs;

    public function setLangs($langs)
    {
        $this->langs = $langs;
    }
    public function getLangs()
    {
        return $this->langs;
    }
}
