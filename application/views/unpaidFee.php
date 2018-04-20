<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 13/4/18
 * Time: 3:40 AM
 */
?>
<head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="container">
<!--<div class="btn-toolbar">-->
<!--    <button class="btn btn-primary">New User</button>-->
<!--    <button class="btn">Import</button>-->
<!--    <button class="btn">Export</button>-->
<!--</div>-->
<div class="well">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Contact</th>
            <th>CLASS</th>
            <th>ACADFEE</th>
            <th>CONVFEE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;

        foreach ($return->result() as $row)
        {
        $i++;
        ?>

            <tr>
                <td><?=$i?></td>
                <td><?=$row->NAME?></td>
                <td><?=$row->FNAME?></td>
                <td><?=$row->CONTACT?></td>
                <td><?=$row->CLASS?></td>
                <td><?=$row->ACADFEE?></td>
                <td><?=$row->CONVFEE?></td>
            </tr>
        <?php
        }
        ?>

        <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Tompson</td>
            <td>the_mark7</td>
            <td>the_mark7</td>
            <td>the_mark7</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>
</div>