<?php
    
    $tenantName = $_POST["tenantName"];
    $propertyName = $_POST["propertyName"];
    $description = $_POST["description"];
    $urgent = false;
    if(isset($_POST["isUrgent"]) && $_POST["isUrgent"] == "urgent")
        $urgent = true;

    $urgentString = "";
    if($urgent)
        $urgentString ="The tenant has marked this issue as urgent.";
    $to = "shellyja@mchsi.com";
    $subject = "Work Order Submitted: ".$propertyName;
    $msg = "Hello Brian, \n\n Your tenant ".$tenantName." has submitted a work order.  Here the details of it: \n".
        "Property Name: ".$propertyName.
        "\nDescription: ".$description.
        "\n".$urgentString.
        "\nThanks, and good luck!".
        "\n\nWork Order Bot";
    $headers = "From: noreplay@allenpropertiescomo.com" . "\r\n" .
"CC: jackykrabs@gmail.com";
    mail($to, $subject, $msg, $headers);
    header("Location: tenants.php");
?>