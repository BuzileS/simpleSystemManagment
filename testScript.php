<?php

require 'Employee/Employee.php';
require 'Employee/EmployeesCollection.php';

$employeesCollection = new EmployeesCollection();


// Создание сотрудников
$employee1 = new Employee("Иван", 30, "Разработчик", 60000);
$employee2 = new Employee("Петр", 25, "Тестировщик", 40000);
$employee3 = new Employee("Александр", 29, "Менеджер", 85000);

// Добавление сотрудников в коллекцию
$employeesCollection->addEmployee($employee1);
$employeesCollection->addEmployee($employee2);
$employeesCollection->addEmployee($employee3);

// Вывод информации о сотрудниках до повышения зарплаты
echo "\n\nИнформация о сотрудниках до повышения зарплаты:\n";
$employeesCollection->getEmployyes();

// Повышаем зарплату всем сотрудникам на 10% и вывод обновленного списка
$employeesCollection->upSalaryForAllEmployees(10);
echo "\n\nИнформация о сотрудниках после повышения зарплаты на 10%:\n";
$employeesCollection->getEmployyes();

// Удение сотрудника и вывод обновленного списка
echo "\n\nУдаление сотрудника по имени Иван:\n";
$employeesCollection->removeEmployee('Иван');
echo "\nОбновленный список сотрудников:\n";
$employeesCollection->getEmployyes();
