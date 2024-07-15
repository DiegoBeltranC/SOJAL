let detailButton = document.getElementById("detail-button");
let dashboarNotification = document.getElementById("dashboard-notifications");
let form = document.getElementById("form-container-notification");
let closeIconForm = document.getElementById("close-icon-form");

detailButton.onclick = function (){
    dashboarNotification.style.display = "none";
    form.style.display = "block";
}

closeIconForm.onclick = function(){
    form.style.display = "none";
    dashboarNotification.style.display = "block";
}