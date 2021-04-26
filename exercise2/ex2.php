<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $score = 0;
    
    if(isset($_POST["q1"]) && !empty($_POST['q1'])){
        $q1 = $_POST["q1"];
    } else {
        $q1 = "No Answer";
    }
    if(isset($_POST["q2"]) && !empty($_POST['q2'])){
        $q2 = $_POST["q2"];
    } else {
        $q2 = "No Answer";
    }
    if(isset($_POST["q3"]) && !empty($_POST['q3'])){
        $q3 = $_POST["q3"];
    } else {
        $q3 = "No Answer";
    }
    if(isset($_POST["q4"]) && !empty($_POST['q4'])){
        $q4 = $_POST["q4"];
    } else {
        $q4 = "No Answer";
    }
    if(isset($_POST["q5"]) && !empty($_POST['q5'])){
        $q5 = $_POST["q5"];
    } else {
        $q5 = "No Answer";
    }

    if($q1 == "Season 12"){
        $score++;
    }
    if($q2 == "Griffin Peterson"){
        $score++;
    }
    if($q3 == "Mexico"){
        $score++;
    }
    if($q4 == "The Fonz"){
        $score++;
    }
    if($q5 == "Bill Clinton"){
        $score++;
    }

    echo "<h1>Family Guy Quiz Results</h1>";

    echo "<h2>Which Season Did Brian The Dog Die In?</h2>";
    echo "<p>Your answer: " . $q1 . "<br>";
    echo "<p>Correct answer: Season 12<br>";

    echo "<h2>Who founded the city of Quahog?</h2>";
    echo "<p>Your answer: " . $q2 . "<br>";
    echo "<p>Correct answer: Griffin Peterson<br>";

    echo "<h2>Where was Peter born?</h2>";
    echo "<p>Your answer: " . $q3 . "<br>";
    echo "<p>Correct answer: Mexico<br>";

    echo "<h2>Who is Peter's spiritual guide?</h2>";
    echo "<p>Your answer: " . $q4 . "<br>";
    echo "<p>Correct answer: The Fonz<br>";

    echo "<h2>Who is the mascot of the Denver Nuggets?</h2>";
    echo "<p>Your answer: " . $q5 . "<br>";
    echo "<p>Correct answer: Bill Clinton<br>";

    echo "<h2>You correctly answered " . $score . " questions.</h2>";
    echo "<h2>Score: " . ($score*20) . "%";
	if($score==5){
		echo "<p>You're Peter! Nyhehehehe</p>";
	}
	if($score==4){
		echo "<p>You're Quagmire</p>";
	}
	if($score==3){
		echo "<p>You're Joe</p>";
	}
	if($score==2){
		echo "<p>You're Clevland</p>";
	}
	if($score==1){
		echo "<p>You're Brian</p>";
	}
	if($score==0){
		echo "<p>You're Meg</p>";
	}
?>