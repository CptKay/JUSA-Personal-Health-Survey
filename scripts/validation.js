/* validate slider: */

function validateRange() {
    if (!sliderHasChanged()) {
        alert("Please use slider!");
        return false;
    }
    else return true;
}

function sliderChanged() {
    // Get hidden element
    let hiddenInputElement = document.getElementById("RS_changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("RS_changed");
    if (hiddenInputElement.value === "1") return true;
    else return false;
}


