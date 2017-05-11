<?php
require_once "Student.php";
require_once "view.php";

if(isset($_GET['submit'])) {
    $firstName1 = $_GET['firstName1'];
    $lastName1 = $_GET['lastName1'];
    $email1 = $_GET['email1'];
    $grade1 = floatval($_GET['grade1']);
    $student1 = new Student($firstName1, $lastName1, $email1, $grade1);

    $firstName2 = $_GET['firstName2'];
    $lastName2 = $_GET['lastName2'];
    $email2 = $_GET['email2'];
    $grade2 = floatval($_GET['grade2']);
    $student2 = new Student($firstName2, $lastName2, $email2, $grade2);

    $firstName3 = $_GET['firstName3'];
    $lastName3 = $_GET['lastName3'];
    $email3 = $_GET['email3'];
    $grade3 = floatval($_GET['grade3']);
    $student3 = new Student($firstName3, $lastName3, $email3, $grade3);

    $sortCriteria = $_GET['sortCriteria'];
    $order = $_GET['order'];

    $students = [];
    $students[] = $student1;
    $students[] = $student2;
    $students[] = $student3;

    $result =  sortStudents($students,$sortCriteria,$order);
   createTable($result);
}

function sortStudents(array $students, string $criteria,$order) : array
{
    switch ($criteria) {
        case 'firstName':
            if($order == 'asc'){
                usort($students,function ($student1,$student2){return $student1->getFirstName() - $student2->getFirstName();});
            }
            usort($students,function ($student1,$student2){return $student2->getFirstName() - $student1->getFirstName();});
            break;
        case 'secondName':
            if($order == 'asc'){
                usort($students,function ($student1,$student2){return $student1->getLastName() - $student2->getLastName();});
            }
            usort($students,function ($student1,$student2){return $student2->getLastName() - $student1->getLastName();});
            break;
        case 'email':
            if($order == 'asc'){
                usort($students,function ($student1,$student2){return $student1->getEmail() - $student2->getEmail();});
            }
            usort($students,function ($student1,$student2){return $student2->getEmail() - $student1->getEmail();});
            break;
        case 'grade':
            if($order == 'asc'){
                usort($students,function ($student1,$student2){return $student1->getGrade() - $student2->getGrade();});
            }
             usort($students,function ($student1,$student2){return $student2->getGrade() - $student1->getGrade();});
            break;
    }
    return $students;
}

function createTable($students){
    $result = "<table>";
    $result .=
        "<tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Exam score</th>
        </tr>";
    $totalScore = 0;
    $count = count($students);
    foreach ($students as $student){
        $result .=
            "<tr>
                <td>{$student->getFirstName()}</td>
                <td>{$student->getLastName()}</td>
                <td>{$student->getEmail()}</td>
                <td>{$student->getGrade()}</td>
            </tr>";
        $totalScore += $student ->getGrade();
    }
    $avgScore = intval($totalScore / $count);
    $result .=
        "<tr>
            <td><b>Average Score: </b></td>
            <td>{$avgScore}</td>                
        </tr>";
    $result .= '</table>';
    echo $result;
}