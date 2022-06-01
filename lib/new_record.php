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
            <div class="content">
                <h1>✍️</h1>
                <h1>Create a new record</h1>
            </div>
    <!-- Input Form -->
            <div class="content">
                <div class="btn-div">
                    <div class="custom-btn">
                        <h1>Create new employee</h1>
                    </div>
                    <div class="custom-btn">
                        <h1>Create new department</h1>
                    </div>
                </div>
            </div>  
        </body>
    </main>
</html>

<!-- Resources Used -->
<!-- http://php.net/manual/en/faq.installation.php#faq.installation.addtopath -->
<!-- For Issue #1 'bash: php: command not found' -->