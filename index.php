<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./style/style.css" />
  <title>Student Management</title>
</head>

<body>

  <div class="container">
    <nav class="top-nav rounded">
      <a href="#" class="nav-link active">Home</a>
      <a href="#" class="nav-link">About</a>
      <a href="#" class="nav-link">Contact</a>
      <a href="#" class="nav-link">Features</a>
    </nav>
    <h4 class="heading container center bg-black white rounded">
      Student Management Section
    </h4>
    <section class="middle-students-records rounded">
      <div class="admin-panel">
        <form class="admin-panel rounded" action="./index.php" method="post">
          <label for="roll-number">Roll Number</label>
          <input class="admin-panel" type="number" name="roll_number" id="" required />
          <label for="roll-number">Enrollment Number</label>
          <input class="admin-panel" type="text" name="enrollment_number" id="" required />
          <label for="roll-number">Department</label>
          <select class="admin-panel" name="department" id="">
            <option value="branch">Branch</option>
            <option value="cse">CSE</option>
            <option value="civil">Civil</option>
            <option value="mechanical">Mechanical</option>
            <option value="eee">EEE</option>
            <option value="et">ET&T</option>
          </select>
          <label for="student-name">Student Name</label>
          <input class="admin-panel" type="text" name="student_name" id="" />
          <label for="student-name">Mobile Number</label>
          <input class="admin-panel" type="number" name="student_mobile" id="" />
          <label for="student-name">DOB</label>
          <input class="admin-panel" type="date" name="student_dob" id="" />
          <label for="student-name">Address</label>
          <input class="admin-panel" type="text" name="student_address" id="" />

          <button type="submit" name="insert" class="admin-panel white bg-crimson">
            Insert / Update Record
          </button>
          <button name="delete" class=" admin-panel white bg-crimson">Delete Record</button>
          <p>
            Note:<br />
            1. Enter full details to insert or update.<br />
            2. Roll number and Enrollment number to delete.
          </p>
        </form>
      </div>
      <div class="students-records rounded">
        <section class="search-students-records bg-crimson p-1">
          <form action="./index.php" class="search-students-records" method="post">
            <span class="white m-1">Search by :</span>
            <select name="search-by" id="" class="search-students-records" style="width: 30%">
              <option value="roll_number">Student Roll number</option>
              <option value="enrollment_number">Student enrollment no.</option>
              <option value="name">Student name</option>
              <option value="department">Department</option>
              <option value="semester">Semester</option>
              <option value="mobile">Student mobile no.</option>
              <option value="address">Student Address</option>
            </select>
            <input class="search-students-records" type="search" name="search-student" id="" placeholder="Enter details to search" style="width: 30%" />
            <button class="search-students-records crimson bg-grey" type="submit" style="width: 20%">
              Search Student
            </button>
          </form>
        </section>

        <table class="students-records rounded ">
          <tr class="table-heading">
            <th class="students-records">Roll No.</th>
            <th class="students-records">Enrollment</th>
            <th class="students-records">Name</th>
            <th class="students-records">Department</th>
            <th class="students-records">Mobile</th>
            <th class="students-records">DOB</th>
            <th class="students-records">Address</th>
          </tr>

          <?php
          include 'connection.php';
          include 'search_students_records.php';
          include 'students_records.php';
          ?>
        </table>
      </div>
    </section>
  </div>

  
</body>

</html>