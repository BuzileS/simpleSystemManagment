<?php

class EmployeesCollection
{
    private array $employees = [];

    public function addEmployee(Employee $createdEmployee) {
        $this->employees[] = $createdEmployee;
    }

    public function getEmployyes() {
        if ($this->isHaveEmployees()) {
            foreach($this->employees as $employee) {
                $employee->showCurrentEmployer();
            }
        } else {
            echo "Список сотрудников пуст.";
        }
    }

    public function upSalaryForAllEmployees(int $percentForUp) {
        foreach($this->employees as $employee) {
            $employee->upSalary($percentForUp);
        }
    }

    public function removeEmployee(string $name) {
        foreach ($this->employees as $key => $employee) {
            if ($employee->getName() === $name) {
                unset($this->employees[$key]);
                echo "Сотрудник $name удален из списка.\n";
                return;
            }
        }
        echo "Сотрудник с именем $name не найден.\n";
    }

    private function isHaveEmployees():bool {
        if ($this->employees == []) {
            return false;
        } else {
            return true;
        }
    }
}