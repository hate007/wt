<?php
// Create student.xml file
$students = [
    [
        'rollNo' => '39',
        'name' => 'Arpita Kharhar',
        'address' => 'Nashik Road',
        'college' => 'KKW',
        'course' => 'Computer Science',
    ],
    [
        'rollNo' => '07',
        'name' => 'Vashnavi Aringale',
        'address' => 'Camp',
        'college' => 'Sandip',
        'course' => 'Engineering',
    ],
    [
        'rollNo' => '01',
        'name' => 'Ishika Abbad',
        'address' => 'College Road',
        'college' => 'K.T.H.M',
        'course' => 'Computer Science',
    ],
];

$xml = new SimpleXMLElement('<students></students>');
foreach ($students as $student) {
    $studentElement = $xml->addChild('student');
    $studentElement->addChild('rollNo', $student['rollNo']);
    $studentElement->addChild('name', $student['name']);
    $studentElement->addChild('address', $student['address']);
    $studentElement->addChild('college', $student['college']);
    $studentElement->addChild('course', $student['course']);
}

$xml->asXML('student.xml');

// Print student details of a specific course
if (isset($_GET['course'])) {
    $courseToSearch = $_GET['course'];
    $studentsWithCourse = [];

    foreach ($students as $student) {
        if (strcasecmp($student['course'], $courseToSearch) === 0) {
            $studentsWithCourse[] = $student;
        }
    }

    if (!empty($studentsWithCourse)) {
        echo "<table border='1'>
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>College</th>
                    <th>Course</th>
                </tr>";

        foreach ($studentsWithCourse as $student) {
            echo "<tr>
                    <td>{$student['rollNo']}</td>
                    <td>{$student['name']}</td>
                    <td>{$student['address']}</td>
                    <td>{$student['college']}</td>
                    <td>{$student['course']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No students found for the specified course.";
    }
}
?>
