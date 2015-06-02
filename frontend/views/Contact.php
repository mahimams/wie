<html>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
            <h2> Contact Us </h2>
        </div>
    </div>
    
    <br/>

    <div class="row">
    	<div class="col-md-4"></div>
    	<div class="col-md-1">
            <img src="../frontend/assets/img/facebook.png" alt="Facebook icon" style="width: 80%;"/>
    	</div>
        <div class="col-md-3">
            <br/>
            <a href="#"> Link to Facebook page </a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-1">
            <img src="../frontend/assets/img/twitter.png" alt="Twitter icon" style="width: 80%;"/>
        </div>
        <div class="col-md-3">
            <br/>
            <a href="#"> Link to Twitter page </a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-1">
            <img src="../frontend/assets/img/Instagram.png" alt="Instagram icon" style="width: 80%;"/>
        </div>
        <div class="col-md-3">
            <br/>
            <a href="#"> Link to Instagram page </a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-1">
            <img src="../frontend/assets/img/gmail.png" alt="Gmail icon" style="width: 80%;"/>
        </div>
        <div class="col-md-3">
            <br/>
            <a href="#"> USC WIE group email ID </a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            Subscribe to our newsletter
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">

            <form method="POST" action="/wie/index.php/Contact">
                Name: <input type="text" name="Name" size="20">
                <br/>
                Email: <input type="text" name="Email" size="20">
                <br/>
                <input type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </div>
</html>
<?php

## CONFIG ##
if( !$_REQUEST['Name'] or !$_REQUEST['Email'] )
    return;

# LIST EMAIL ADDRESS
$recipient = "mahima1709@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "Contact";


$sender = $recipient;

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

?>