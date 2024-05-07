<?php
session_start();
if($_SESSION['name_of_user'] == ""){
    header("Location: http://localhost:4000/session_expired.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
  
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="user.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="General.html">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

</head>
<body>


    <abbr class="More" style="height:400px !important; width:100% !important; overflow:hidden;">
        <a href="http://localhost:4000/connection_establish.php">
            <img src="menu-list-icon-app-navigation-option-page-interface-dropdown-three-lines-button-dots-sign-symbol-black-artwork-graphic-illustration-clipart-eps-vector.jpg"width=50/>
        </a>
    </abbr>


    
        <div class="row" style="height:400px">
            <div class="col-md-3 d-none d-md-block">
                <div class="container-fluid nav sidebar flex-column">
                    <a href="http://localhost:4000/test.php" class="nav-link active mt-auto"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAABBUlEQVQ4T62UAQ3CMBBFmQKQgAOYAjYHSAAFIAEngAJAAeAAHIADUAD/JevSde12IVxyyba7vvt3a5sN/mhZB6tQ7GOs9VTeIwW7KDgzgkh7yfMULKXoqkVT+TBSqLTC3lpM2zf5SH6MKDfD9lq88NTM9XwI1NUwqk3k96r/sE0U5d5iwNsUjBbO8lLO8GMz2+g7CpkZIAT4ViuzwIK1rVczjL+4kz8qBDNb/aJsWYFCKbTLSNw26VV2UjIqUrao5ke8F0ZlPGVjBQCaYB2cViipzJdvAfKDCnecCr34+8wCaOWEsLUy2O195k5KI8/BGCSQ2G0QA7uTEoXxESBuMQpzhzXsC2DlQ/TKIf9UAAAAAElFTkSuQmCC"/>&nbsp;Profile</a>
                   <div class="notifications">
                       <a href="#" class="nav-link"><i class="far fa-bel"></i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAx0lEQVQ4T2NkoCJgpKJZDOQaJgB0hD/UIRuB9AcQG92wAiRF2BwdCBXcD6QNoOwLQNoRZCCyYSCD+vF4+yFQTgGIsalLBIovQDasAShQD7XlAB5DqWoYKLxAlulDLbwIpB3QvUmsy0BmgAwMgBq2AWQQiE2ON9FDAGQwVQx7ADQIhEHepNhl/4FmHBw1DJw18CVa5NgkGGagFA7Kb8QAkKVYIwCUCNcTYwKamkIgfwJ60gDxQQbCSgNizAWlsQUwheSWZ1gtAgBVIToUEJmHxQAAAABJRU5ErkJggg=="/>&nbsp;Notifications
                           <span class="badge">3</span>
                       </a>

                   </div>
                    <a href="http://localhost:4000/General.php" class="nav-link"></i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAABZklEQVQ4T7WU4U3DQAyF2wmACQgTwAaEDWACygYwAWEC2IAwAWxAugFMQJiAMgG8L3qW3GtQ+qNYsnzns5/zzr7MZzuU+RZYlWIOHfcp2/+VMwVWK/G1SD7TvhsDnAJrlHQrvXHyveydFP+GlGAnTn6Thd7CGUe2H7at6RIPOPGzDLavPcHYkKW/orOj9v40xay0ptgqg1HtUnqRAPEhgPxIAUcWtgA9S5/wZTCqHxuMNQINgivve58PtCS1z99ZZzCqPTroQJaqJEO7sR/7JYUWftbIlbQtG9DKCVX8VGUs6ORDAqO7MR5QHyhy/m9goI/R3DNNaF1Lv6XVFM1OAWMNeJE/P6dz7XMDOGe/1oC4rxiNuA+ug/tDKIjAgnO+cnQ0oNFLoRVCMhMeIIDSgAAnLmivDS0HzFUjjedEZ5HyOdFBCuf4jW6mjxqWAPMlXDzCiGz90Esw6OzsFwR4ZWUNNXRUfgGCJF8UKSD7mgAAAABJRU5ErkJggg=="/>&nbsp;General</a>
                    <a href="http://localhost:4000/index.php" class="nav-link mb-auto"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAA20lEQVQ4T62UAQ3CMBBFNwdYQAE4gDnAAUgABczBkAAKJoHhAAlIAAf8l6xJ2dZdadrkkrW3vbt/11tZZFxlRlYRA9sp4MoI+pC/s2CA2sjslxasFugsO8meAeha542sioVVyAjAtjq/z8EWcr5lLrNkGJGOMurFM3aVvf7NDAj66Q6QmDWSiSwgh/5rJIYKzit+QyZhF72072EfA4YCF2wEc3KyyPRrQyS/ARvtbykNcNBsV8PPstaGCUi+Z1Mwv+DD68I40TxznLIOOlkAJPrc6uQ0f0EG49f9BbR3NVTPZcPyAAAAAElFTkSuQmCC"/>&nbsp;Logout</a>
                </div>
            </div> 
       
            
            <span class="profile">
                <!-- NORMAL EFFECT -->
                <div>
                    <br>
                    <h1 class="profile" style="margin-left: 1cm;"><b>Profile Settings</b></h1>
                    <br>
                </div>
                
                <!-- TYPE WRITER EFFECT -->
                <!-- <div class="typewriter">
                    <h1>Profile Settings</h1>
                </div> -->
  
                
                    <div class="row" style="height:100%">
                        
                        <div class="col-md-3">
                            
                            <!-- <div><br>
                                <p class="pl-2 mt-2"><a href="#" class="btn" style="color:#787d94;font-weight:600">
                                <input type="file" accept="image/png, image/gif, image/jpeg">Edit Picture</a></p></div>
                            <img src="148186212.jpeg" width=130px style="margin: 1px;">                 
                             -->

                             <img src="profile-icon-design-free-vector.jpg" id="img" style='height:150px;'>

                             
                             <script>
                                 function readURL(input) {
                                     if (input.files && input.files[0]) {
                                         
                                         var reader = new FileReader();
                                         reader.onload = function (e) { 
                                             document.querySelector("#img").setAttribute("src",e.target.result);
                                            };
                                            
                                            reader.readAsDataURL(input.files[0]); 
                                        }
                                    }
                                </script>
                                <p class="pl-2 mt-2"><a class="btn" style="color:#787d94;font-weight:600">
                                    <input type="file" accept="image/*" onchange="readURL(this)">Edit Picture</a></p>
                        </div>
                        
                        <div class="col-md-9">
                            
                            <div class="container">
                                
                                <form>
                                    
                                    <div class="fullName">
                                        
                                        <label for=fullName>First Name</label>
                                        <span id="fullName"><?php echo $_SESSION['name_of_user']; ?>
                                        <br>
                                    </div>
                                    <div class="email">
                                        
                                        <label for=email>Last Name</label>
                                        <span id="email"><?php echo $_SESSION['lname_of_user']; ?>
                                        <br>
                                    </div>
                                    <div class="birthday">
                                        
                                        <label for=birthday>Email ID</label>
                                        <span id="birthday"><?php echo $_SESSION['email_of_user']; ?>
                                        
                                    </div>
                                    
                                    <!-- <div class="row mt-5">
                                        
                                        <div class="col">
                                            
                                            <button type="button" class="btn btn-primary btn-block">Save Changes</button>
                                            
                                        </div>
                                        
                                        <div class="col">
                                            
                                            <button type="button" class="btn btn-default btn-block">Cancel</button>
                                            
                                        </div>
                                        
                                    </div> -->
                                </form>
                        
                            </div>
                        </div>
                    </div>
            </span>
        </div>
</body>