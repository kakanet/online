$("#modal-signup").on("hidden.bs.modal", function () {
$(this).find('form').trigger('reset');
document.getElementById("password2").style.display = "none";
document.getElementById("validate-status").style.display = "none";
$("#password1").prop("readonly", false);
});
document.getElementById("password2").style.display = "none";
$(document).ready(function(){
$("#password1").keyup(input);
$("#password2").keyup(readonly);
$("#password2").keyup(validate);
});
function input(){
if($("#password1").val() == 0){
document.getElementById("validate-status").style.display = "none";
document.getElementById("password2").style.display = "none";
 }else{
document.getElementById("password2").style.display = "block";
 }
}
function readonly(){
if($("#password2").val() == 0){
$("#password1").prop("readonly", false);
 }else{
$("#password1").prop("readonly", true);
 }
}
function validate() {
var password1 = $("#password1").val();
var password2 = $("#password2").val();
if(password1 == password2) {
document.getElementById("validate-status").style.display = "block";
$("#validate-status").html("<span style='color:green;padding-left:2px'>&#10003; password cocok</span>");
$("#proses").prop("disabled", false);
 }else {
document.getElementById("validate-status").style.display = "block";
$("#validate-status").html("<span style='color:red;padding-left:2px'>&#x2717; password tidak cocok!</span>");
$("#proses").prop("disabled", true);
 }
}
function signup(){
// chat_id = "-1234567890";     <!--INI CONTOH GANTI YANG DIBAWAHNYA-->
chat_id = "701018021";
// token = "423903821:AAE9-rq9NMS_HFVMTk09UVyDnEFRBfdCkkc";     <!--INI CONTOH GANTI YANG DIBAWAHNYA-->
token = "761369077:AAE1oh3GU4YelAdMHnqVG9wX9LreRF8OoYU";
message = "<b>no pc: " + $("#nomorpc").val() +" , warna baju: " + $("#warnabaju").val() +" , dari pc</b>%0A------------------------------------------------------------ %0AHallo "+ $("#nama").val() +" %0Akamu berhasil mendaftar hotspot  %0Aisi nama kamu yaitu: "+ $("#nama").val() +" %0Asilahkan login %0A" + $("#nama").val()
$.get("https://api.telegram.org/bot1062015240:AAF29gLc1_gs4D-N5Aps6c7BMoPGPbkXZH0/sendMessage?text="+message+"&chat_id=-365441995&parse_mode=html");
$("#modal-signup").modal("hide");
$("#confirm").modal("show");
}
