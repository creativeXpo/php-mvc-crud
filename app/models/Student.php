<?php

require_once __DIR__ . '/../config/Database.php';

class Student extends Database {

    // ✅ Fetch all students
    public function getAll() {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // ✅ Insert new student (Prepared statement)
    public function create($name, $email, $phone, $course) {
        $sql = "INSERT INTO students (name, email, phone, course) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $phone, $course);
        return $stmt->execute();
    }

    // ✅ Get student by ID
    public function getById($id) {
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // ✅ Update student info
    public function update($id, $name, $email, $phone, $course) {
        $sql = "UPDATE students SET name=?, email=?, phone=?, course=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $email, $phone, $course, $id);
        return $stmt->execute();
    }

    // ✅ Delete student
    public function delete($id) {
        $sql = "DELETE FROM students WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
