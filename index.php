<?php

require 'functions.php';

$result = true;

if (!empty($_FILES['hidefile']['tmp_name'])) {

    $result = stegHide($_FILES['maskfile'], $_FILES['hidefile']);

} else if (!empty($_FILES['maskfile']['tmp_name'])) {
    
    $result = stegRecover($_FILES['maskfile']);
}

if ($result !== true) {
    $error = "<div class='error'>".$result."</div>";
}

?>
<html>
<head>
    <title>Steganography Tool</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div class='container'>

<h1>Image steganographer</h1>
<hr>
<p>This tool allows you to hide a file within another, process known as steganography.</p>

<?=!empty($error)?$error:'';?>

<form method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <td>Image
                <label class="file" id="maskFile">
                    <span id="label-maskfile">Image file (jpg/jpeg)</span>
                    <input type="file" name="maskfile" id="maskfile" onchange="updateField()">
                </label>
            </td>
            <td>File to hide
                <label class="file" id="hideFile">
                    <span id="label-hidefile">Leave blank to decode</span>
                    <input type="file" name="hidefile" id="hidefile" onchange="updateField()">
                </label>
            </td>
        </tr>
    </table>

    <button type="submit">Conceal & Download</button>

</form>

</div>

<script type="text/javascript" src="js/updateField.js"></script>

</body>
</html>
