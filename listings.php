<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
        <title>Allen Properties - Listings Available</title>
        <link rel="stylesheet" type="text/css" href="main_style.css" >
    </head>
    <body>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="listings.php">Listings</a></li>
            <li><a href="tenants.php">Tenants</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="header">
            <h1>Current Listings</h1>
        </div>
        <div class="textContainer">
            <p>Below are the listings currently available for rent.  Click on any property to learn more about it.</p>
        </div>
        <table id="properties">
            <tr>
                <th>Address</th>
                <th>Bedrooms</th>
                <th>Bathrooms</th>
            </tr>
        </table>
        <script>
          // Initialize Firebase
          var config = {
            apiKey: "AIzaSyDtyJr0vYKnyAoT1cpDlzG4Lr0Evfg_dIQ",
            authDomain: "allen-properties-web.firebaseapp.com",
            databaseURL: "https://allen-properties-web.firebaseio.com",
            projectId: "allen-properties-web",
            storageBucket: "allen-properties-web.appspot.com",
            messagingSenderId: "496350504879"
          };
          firebase.initializeApp(config);
        </script>
        <script>
            $(document).ready( function() {
                firebase.database().ref('properties').once('value').then(function(snapshot) {
                    snapshot.forEach(function (snapChild) {
                            $("#properties tbody").append(
                                "<tr onclick='rowClicked(\"" + snapChild.val().id + "\")'> " +
                                    "<td> " + snapChild.val().name + "</td>" +
                                    "<td> " + snapChild.val().bed + "</td>" +
                                    "<td> " + snapChild.val().bath + "</td>" +
                                "</tr>"
                            );
                    });
                });
            });
            
            function rowClicked(propId) {
                sessionStorage.setItem("id", propId);
                window.open("propertyDetails.html");
            }
        </script>
    </body>
</html>