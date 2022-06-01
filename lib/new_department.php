<!DOCTYPE html>
<html>
    <head>
        <title>Add New Record</title>
        <link rel="icon" href="../media/globe-icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/main.css">
    </head>
<!-- Fucntion to redirect users after creating new record -->
    <script>
        function addRecord() {
            alert("✅ Record added successfully ✅");
            location.replace("./index.php");
        }
    </script>
<!-- Navigation bar -->
    <main>
        <body>
        <div class="sidenav">
            <a href="index.php">Return to Home</a>
            <a href="query1.php">Query 1</a>
            <a href="query2.php">Query 2</a>
            <a href="query3.php">Query 3</a>
        <div class="sidenavlinks">
            <a href="https://github.com/mm1089/advanced-databases-group">GitHub</a>
            <a href="guide.php">Installation Guide</a>
            <a href="https://github.com/mm1089/advanced-databases-group/blob/main/README.md#prerequisites">Read the Docs</a>
        </div>
        </div>
        <div class="header-content">
            <h1>✍️</h1>
            <h1>Create a new department</h1>
        </div>
<!-- Input Form -->
        <div class="content" style="padding-top:0px">
            <form class="form" method="POST">
                <br>
                <label class="form" for="DEPTNO">Department Number:</label>
                <input class="form" type="number" id="DEPTNO" name="DEPTNO" placeholder="Department Number" required>
                <br>
                <label class="form" for="DNAME">Department Name:</label>
                <input class="form" type="text" id="DNAME" name="DNAME" placeholder="Department Name" required>
                <br>
                <label class="form" for="Loc">Location:</label>
                <input class="form" type="text" id="LOC" name="LOC" placeholder="Location" required>
                <br>
                <input type="submit" name="submit" value="Create New Record">   
            </form>
        </div>
<!-- Insert PHP code to handle db insertion -->
        <?php
        require './db_connection.php';        
// Check form is submitted
        if(isset($_POST['submit']))
        {    
// Get form inputs
            $DEPTNO=$_POST['DEPTNO'];
            $DNAME=$_POST['DNAME'];
            $LOC=$_POST['LOC'];
            
// Preparing the query
            $sql = "INSERT INTO assignment.dept(DEPTNO, DNAME, LOC)
            VALUES ('$DEPTNO','$DNAME','$LOC')";

            // checking insert query worked
            if (mysqli_query($conn, $sql)) {
                echo "Your new record has been created successfully!";
            } else {
                $error="Error: " . $sql . ":-" . mysqli_error($conn);
                echo "$error";
            }
// Close db connection
            mysqli_close($conn);
// Call alert and redirect
            echo '<script type="text/javascript">addRecord();</script>';
        }
        ?>
        </body>
    </main>
</html>

<!-- Resources Used -->
<!-- http://php.net/manual/en/faq.installation.php#faq.installation.addtopath -->
<!-- For Issue #1 'bash: php: command not found' -->