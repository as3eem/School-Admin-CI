<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 12/4/18
 * Time: 7:48 PM
 */
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    fieldset.for-panel {
        background-color: #fcfcfc;
        border: 1px solid #999;
        border-radius: 4px;
        padding:15px 10px;
        background-color: #d9edf7;
        border-color: #bce8f1;
        background-color: #f9fdfd;
        margin-bottom:12px;
    }
    fieldset.for-panel legend {
        background-color: #fafafa;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #4381ba;
        font-size: 14px;
        font-weight: bold;
        line-height: 10px;
        margin: inherit;
        padding: 7px;
        width: auto;
        background-color: #d9edf7;
        margin-bottom: 0;
    }
</style>
</head>
<div class="container">
    <div class="row">
        <h2>Student Details</h2>
    </div>
    <div class="row">
        <fieldset class="for-panel">
            <legend>Indian Public School</legend>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-horizontal">
                        <label class="col-xs-5 control-label">Student Name:</label>
                        <p class="form-control-static"><?= $NAME ?></p>
                        <label class="col-xs-5 control-label">Roll Number: </label>
                        <p class="form-control-static" id="rollnumb"><?= $ROLL ?></p>
                        <label class="col-xs-5 control-label">Class: </label>
                        <p class="form-control-static"><?= $CLASS ?></p>
                        <label class="col-xs-5 control-label">Contact: </label>
                        <p class="form-control-static"><?= $CONTACT ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-horizontal">
                        <label class="col-xs-4 control-label">Father's Name:</label>
                        <p class="form-control-static"> <?= $FNAME ?> </p>
                        <label class="col-xs-4 control-label">Address: </label>
                        <p class="form-control-static"><?= $ADDRESS ?></p>
                        <label class="col-xs-4 control-label">Academic Fee: </label>
                        <p class="form-control-static" id="acadfee"><?= $ACADFEE ?></p>
                        <label class="col-xs-4 control-label">Conveyance Fee: </label>
                        <p class="form-control-static" id="convfee"><?= $CONVFEE ?></p>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <button type="button" id="btn" onclick="show()" class="btn btn-primary" style="width: 20%">Update Fee</button>

    <form style="display: none" action="<?=base_url('index.php/Student/updateFee')?>" method="post" id="months">
        <h3>Select months to update Academic fee</h3>
        <input name="rollno" type="hidden" id="hidden" value="">
    <div class="checkbox">
        <label><input name="jan" type="checkbox" value="1">January</label>
    </div>
    <div class="checkbox">
        <label><input name="feb" type="checkbox" value="2">February</label>
    </div>
    <div class="checkbox">
        <label><input name="mar" type="checkbox" value="3">March</label>
    </div>
    <div class="checkbox">
        <label><input name="apr" type="checkbox" value="4">April</label>
    </div>
    <div class="checkbox">
        <label><input name="may" type="checkbox" value="4">May</label>
    </div>
    <div class="checkbox">
        <label><input name="june"type="checkbox" value="5">June</label>
    </div>
    <div class="checkbox">
        <label><input name="july" type="checkbox" value="7">July</label>
    </div>
    <div class="checkbox">
        <label><input name="aug" type="checkbox" value="8">August</label>
    </div>
    <div class="checkbox">
        <label><input name="sep" type="checkbox" value="9">September</label>
    </div>
    <div class="checkbox">
        <label><input name="oct" type="checkbox" value="10">October</label>
    </div>
    <div class="checkbox">
        <label><input name="nov" type="checkbox" value="11">November</label>
    </div>
    <div class="checkbox">
        <label><input name="dec" type="checkbox" value="12">December</label>
    </div>
        <input name="submit" type="submit" class="btn btn-primary" value="Submit" style="width: 20%"/>
    </form>
</div>
<script type="text/javascript">
    var acad=document.getElementById("acadfee").innerHTML;
    if(acad ==="-1"){
        document.getElementById("acadfee").innerHTML="No fee submitted yet";
    }
    var conv=document.getElementById("convfee").innerHTML;
    if(acad ==="-1"){
        document.getElementById("convfee").innerHTML="No fee submitted yet";
    }
    function show() {
        var x=document.getElementById("btn");
        x.style.display = "none";
        var y=document.getElementById("months");
        y.style.display = "";
        var z=document.getElementById("hidden");
        z.value = document.getElementById("rollnumb").innerHTML;
    }
</script>