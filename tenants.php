<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main_style.css" >
        <title>Allen Properties - Tenant Portal</title>
    </head>
    <body>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>
            <li><a class="active" href="tenants.php">Tenants</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="header">
            <h1>Tenant Portal</h1>
        </div>
        <div class="textContainer">
            <p>Here, tenants can file work orders, as well as other things.</p>
        </div>
        <div class="header">
            <h1>Work Order Form</h1>
        </div>
        <div id="workOrderForm">
            <form method="post" action="processWorkOrder.php">
                <label for="tenantName">Name: </label>
                <input type="text" name="tenantName"><br>
                <label for="propertyName">Property Address and Unit: </label>
                <input type="text" name="propertyName"><br>
                <textarea name="description" form="workOrderForm" rows=5 cols=60 placeholder="Please enter description of problem here (the more specific, the better)"></textarea><br>
                <label for="isUrgent">Please check this box if the problem is urgent (for emergencies, please call instead): </label>
                <input type="checkbox" name="isUrgent" value="urgent"><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>