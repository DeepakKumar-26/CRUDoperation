<?php
if (isset($_POST['search-student'])) {
  include  'connection.php';
  $search_by = $_POST['search-by'];
  $search_value = $_POST['search-student'];

  $q = "SELECT * FROM `students`ORDER BY roll_number ASC;";
  $result = mysqli_query($conn, $q);

  while ($row = mysqli_fetch_assoc($result)) {
    $student_details_contains = strtoupper($row[$search_by]);
    $search_value = strtoupper($search_value);

    if (str_contains($student_details_contains, $search_value)) {
      echo '
        <tr class="table-heading white" style="background-color:black">
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
  }
}
