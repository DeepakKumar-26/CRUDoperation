<?php
if (isset($_POST['roll_number'])) {
  $roll_number = $_POST['roll_number'];
  $enrollment_number = $_POST['enrollment_number'];
  $department = $_POST['department'];
  $student_name = $_POST['student_name'];
  $student_mobile = $_POST['student_mobile'];
  $student_dob = $_POST['student_dob'];
  $student_address = $_POST['student_address'];

  $roll_number_exist = 0;

  $q = "SELECT * FROM `students`";
  $result = mysqli_query($conn, $q);

  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['roll_number'] == $roll_number) {
      $roll_number_exist = 1;
      break;
    }
  }

  if (isset($_POST['insert'])) {
    if ($roll_number_exist == 1) {
      $q1 = "UPDATE `students` SET `enrollment_number` = '$enrollment_number', `department` = '$department', `name` = '$student_name', `mobile` = '$student_mobile', `dob` = '$student_dob', `address` = '$student_address' 
      WHERE `students`.`roll_number` = $roll_number";
      $result = mysqli_query($conn, $q1);
      echo '<p class="center white bg-crimson" style="margin:0px">Updation Successful...</p>';
    } else {
      $q1 = "INSERT INTO `students` (`sn`, `roll_number`, `enrollment_number`,`department`, `name`, `mobile`, `dob`, `address`)
       VALUES (NULL, '$roll_number', '$enrollment_number','$department', '$student_name', '$student_mobile', '$student_dob', '$student_address')";
      $result = mysqli_query($conn, $q1);
      echo '<p class="center white bg-crimson" style="margin:0px">Insertion Successful...</p>';
    }
  }

  if (isset($_POST['delete'])) {
    if ($roll_number_exist == 1) {
      $q1 = "DELETE FROM `students` WHERE `students`.`roll_number` = $roll_number";
      $result = mysqli_query($conn, $q1);
      echo '<p class="center white bg-crimson" style="margin:0px">Deletion Successful...</p>';
    } else {
      echo '<p class="center white bg-crimson" style="margin:0px">Student with roll number ' . $roll_number . ' does not exist...</p>';
    }
  }
}

$q2 = "SELECT * FROM `students` ORDER BY sn DESC;";
$result = mysqli_query($conn, $q2);

while ($row = mysqli_fetch_assoc($result)) {
  echo '
                    <tr>
                        <td>' . $row['roll_number'] . '</td>
                        <td>' . $row['enrollment_number'] . '</td>
                        <td>' . ucwords($row['name']) . '</td>
                        <td>' . ucwords($row['department']) . '</td>
                        <td>' . $row['mobile'] . '</td>
                        <td>' . $row['dob'] . '</td>
                        <td>' . ucwords($row['address']) . '</td>
                        
                    </tr> 
                 ';
}
