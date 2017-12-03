<?php
include 'api.php';
?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
    </head>
    <body>
     
        <nav class="navbar sticky-top navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Sign up form</a>
        </nav>
        
        <div class="container-fluid">
            <form onsubmit="return false;">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Registration</legend>
                    <div class="form-group row">
                        <label for="first-name" class="col-sm-3 col-form-label">First Name:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="first-name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last-name" class="col-sm-3 col-form-label">Last Name:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="last-name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-sm-3 col-form-label">Phone Number:</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zip" class="col-sm-3 col-form-label">Zip Code:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="zip" onchange="getCityInfo()"><span id="zip-error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">City:</div>
                        <div class="col-sm-6"><span id="city"></span></div>
                    </div>
                   <div class="form-group row">
                        <div class="col-sm-3">Latitude:</div>
                        <div class="col-sm-6"><span id="lat"></span></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">Longitude:</div>
                        <div class="col-sm-6"><span id="lon"></span></div>
                    </div>
                    <div class="form-group row">
                        <label for="stateList" class="col-sm-3 col-form-label">State:</label>
                        <div class="col-sm-6">
                            <select class="custom-select" onchange="getCountyInfo();" id="stateList" name="stateList">
                                <option value="ca">California</option>
                                <option value="nv">Nevada</option>
                                <option value="wa">Washington</option>
                                <option value="or">Oregon</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="county-list" class="col-sm-3 col-form-label">Select a County:</label>
                        <div class="col-sm-6">
                            <select class="custom-select" id="county-list"></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username:</label>
                        <div class="col-sm-6">
                            <input class="form-control" onchange="validateUsername();" id='username' type="text"><span id='username-valid'></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-origin" class="col-sm-3 col-form-label">Password:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="password" id="password-origin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-check" class="col-sm-3 col-form-label">Password again:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="password" id="password-check"><span id='password-valid'></span>
                        </div>
                    </div>
                    <input class="btn btn-dark" type="submit" value="Enter">
                </fieldset>
            </form>
        </div>
        <script type="text/javascript" src="scripts.js"></script>
    </body>
</html>