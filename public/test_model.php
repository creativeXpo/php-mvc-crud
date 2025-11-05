<?php

require_once __DIR__ . '/../app/models/Student.php';

$student = new Student();

// ✅ Test 1: Insert new student
// $student->create("Golam Kibria", "golam@example.com", "01700000000", "Web Development");

// ✅ Test 2: Get all students
$data = $student->getAll();
echo "<pre>";
print_r($data);

// ✅ Test 3: Get by ID
// $single = $student->getById(9);
// print_r($single);

// ✅ Test 4: Update
// $student->update(9, "Updated Name", "updated@example.com", "01600000000", "PHP");

// ✅ Test 5: Delete
// $student->delete(9);
