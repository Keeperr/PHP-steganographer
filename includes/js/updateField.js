/*
 *  Used to update the file input field with the name
 *  of the selected local file(s) and to set a background
 *
*/

function updateField() {

    maskfile = document.getElementById("maskfile");
    hidefile = document.getElementById("hidefile");

    labelMaskFile = document.getElementById("label-maskfile");
    labelHideFile = document.getElementById("label-hidefile");

    if (maskfile.value != "") {
        labelMaskFile.innerText = maskfile.files[0].name;
        document.getElementById("maskFile").style.background = "#ececec";
    } else {
        labelMaskFile.innerText = "Image file (jpg/jpeg)";
        document.getElementById("maskFile").style.background = "#f9f9f9";
    }

    if (hidefile.value != "") {
        labelHideFile.innerText = hidefile.files[0].name;
        document.getElementById("hideFile").style.background = "#ececec";
    } else {
        labelHideFile.innerText = "Leave blank to decode";
        document.getElementById("hideFile").style.background = "#f9f9f9";
    }
}