<?php

// Подключаем классы
require 'Employee/Employee.php';
require 'Employee/EmployeesCollection.php';

// Создаем объект коллекции сотрудников
$employeesCollection = new EmployeesCollection();


// Создаем несколько сотрудников
$employee1 = new Employee("Иван", 30, "Разработчик", 60000);
$employee2 = new Employee("Петр", 25, "Тестировщик", 40000);
$employee3 = new Employee("Александр", 29, "Менеджер", 85000);

// Добавляем сотрудников в коллекцию
$employeesCollection->addEmployee($employee1);
$employeesCollection->addEmployee($employee2);
$employeesCollection->addEmployee($employee3);

// Выводим информацию о сотрудниках до повышения зарплаты
echo "\n\nИнформация о сотрудниках до повышения зарплаты:\n";
$employeesCollection->getEmployyes();

// Повышаем зарплату всем сотрудникам на 10%
$employeesCollection->upSalaryForAllEmployees(10);

// Выводим информацию о сотрудниках после повышения зарплаты
echo "\n\nИнформация о сотрудниках после повышения зарплаты на 10%:\n";
$employeesCollection->getEmployyes();

echo "\n\nУдаление сотрудника по имени Иван:\n";
$employeesCollection->removeEmployee('Иван');
echo "\nОбновленный список сотрудников:\n";
$employeesCollection->getEmployyes();
