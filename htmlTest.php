<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AmazingApp</title>

    <!-- Our stylesheet -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>

<div id="content">
    <div id="wdw-sidebar">
        <div id="wdw-hello"><h4>Welcome <?php echo $user; ?></h4></div>
        <div id="wdw-view-list">
            <a href=""><h5>All Events</h5></a>
            <a href=""><h5>All Partners</h5></a>
            <a href=""><h5>All Users</h5></a>
        </div>
        <div id="wdw-add-functions">
            <a href=""><h5>Add Event</h5></a>
            <a href=""><h5>Add User</h5></a>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>