let receptionist_info_button=document.getElementById("receptionist_info");
receptionist_info_button.addEventListener("click",function(){
window.location.href="receptionistInfo.php";
});
let patient_info_button=document.getElementById("patient_info");
patient_info_button.addEventListener("click",function(){
    window.location.href="patientInfo.php";
});
let patient_medical_button=document.getElementById("patient_medical");
patient_medical_button.addEventListener("click",function(){
    window.location.href="patientMedical.php";
});
let patient_procedure_button=document.getElementById("patient_procedure");
patient_procedure_button.addEventListener("click",function(){
    window.location.href="patientProcedure.php";
});