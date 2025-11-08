<?php

require_once __DIR__ . '/../models/Student.php';

class StudentController {

    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    // 🟢 Display all students
    public function index() {
        $students = $this->student->getAll();
        include __DIR__ . '/../views/students/index.php';
    }

    // 🟢 Show create form
    public function create() {
        include __DIR__ . '/../views/students/create.php';
    }

    // 🟢 Handle form submission
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name  = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $course = $_POST['course'];

            if ($this->student->create($name, $email, $phone, $course)) {
                header('Location: index.php?action=index&msg=created');
                exit;
            } else {
                echo "Error creating student.";
            }
        }
    }

    // 🟡 Show edit form
    public function edit($id) {
        $student = $this->student->getById($id);
        include __DIR__ . '/../views/students/edit.php';
    }

    // 🟡 Update student data
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name  = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $course = $_POST['course'];

            if ($this->student->update($id, $name, $email, $phone, $course)) {
                header('Location: index.php?action=index&msg=updated');
                exit;
            } else {
                echo "Error updating student.";
            }
        }
    }

    // 🔴 Delete student
    public function delete($id) {
        if ($this->student->delete($id)) {
            header('Location: index.php?action=index&msg=deleted');
            exit;
        } else {
            echo "Error deleting student.";
        }
    }
}
