<?php

class Employee
{
    private string $name;
    private int $age;
    private string $position;
    private int $salary;

    public function __construct(string $name, int $age, string $position, int $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function showCurrentEmployer() {
        echo "Имя сотрудника: $this->name; Возраст: $this->age; Должность: $this->position; Заработная плата: $this->salary.\n";
    }

    public function upSalary(int $percentForUp) {
        $percentForSalary = $this->salary / 100 * $percentForUp;
        $this->salary += $percentForSalary;
    }

    public function getName() {
        return $this->name;
    }
}