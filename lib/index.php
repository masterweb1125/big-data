<!DOCTYPE html>
<!-- Stylesheet and Assets -->
<html>
    <head>
      <title>PHP Assignment</title>
      <link rel="icon" href="../media/globe-icon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/main.css">
      <style>
      table, th, td {
          border: 2px solid black;
          background-color: white;
          padding: 2px;
      }
      </style>
    </head>
<!-- Navigation bar -->
    <main>
          <div class="sidenav">
            <a href="#">Home</a>
            <a href="query1.php">Query 1</a>
            <a href="query2.php">Query 2</a>
            <a href="query3.php">Query 3</a>
          </div>
          <div class="sidenavlinks">
            <a href="https://github.com/mm1089/advanced-databases-group">GitHub</a>
            <a href="guide.php">Installation Guide</a>
            <a href="https://github.com/mm1089/advanced-databases-group/blob/main/README.md">Read the Docs</a>
          </div>
          <div class="content">
            <h1>📋</h1>
            <h1>View Tables</h1>
            <br>
            <h3>Employees</h3>
            <br/>
            <a href="new_employee.php"><button class="btn btn-success" style="margin-bottom:10px">Add New</button></a>
            
            <div class="php">
             
              <?php
                // Connect to db
                require './db_connection.php';
                // Prepping sql query
                $sql = "SELECT EMPNO, ENAME, JOB, MGR, HIREDATE, SAL, COMM, DEPTNO FROM EMP";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table border='2' width='1000' cellspacing='0' ><tr bgcolor='grey'><th>EMPNO</th><th>Name</th><th>Job</th><th>Mgr</th><th>Hire Date</th><th>Salary</th><th>Commision</th><th>Department number</th></tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr bgcolor='cadetblue'><td>" . $row["EMPNO"]. "</td><td>" . $row["ENAME"]. "</td><td>" . $row["JOB"]. 
                        "</td><td>" . $row["MGR"]. "</td><td>" . $row["HIREDATE"]. "</td><td>" . $row["SAL"]. "</td><td>" 
                        . $row["COMM"]. "</td><td>" . $row["DEPTNO"]. "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
              ?>
            </div>
            <br>
            <h3>Department</h3>
            <br>
            <a href="new_department.php"><button class="btn btn-success" style="margin-bottom:10px">Add New</button></a>
            <div class="php">
              <?php
                  // Connect to db
                  require './db_connection.php';
                  // Prepping sql query
                  $sql = "SELECT DEPTNO, DNAME, LOC FROM DEPT";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      echo "<table border='2' width='1000' cellspacing='0'><tr bgcolor='grey'><th>DEPTNO</th><th>Name</th><th>LOCATION</th></tr>";
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                          echo "<tr bgcolor='cadetblue'><td>" . $row["DEPTNO"]. "</td><td>" . $row["DNAME"]. "</td><td>" . $row["LOC"]. "</td></tr>";
                      }
                      echo "</table>";
                  } else {
                      echo "0 results";
                  }
                  $conn->close();
                ?>
            </div>
    </main>
</html>
<!-- Resources Used -->
<!-- http://php.net/manual/en/faq.installation.php#faq.installation.addtopath -->
<!-- For Issue #1 'bash: php: command not found' -->