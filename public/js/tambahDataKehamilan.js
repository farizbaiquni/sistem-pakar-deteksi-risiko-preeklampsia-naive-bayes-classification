    
    // document.addEventListener("DOMContentLoaded", function(){
        
    //     document.getElementById("inputKosongAnakKe").style.display = "none";
    //     document.getElementById("inputKosongTanggalAwalKehamilan").style.display = "none";
        
        
    //     document.getElementById('submitTambahDataKehamilan').addEventListener('click', function(e){
    //         let anakKe = document.getElementById('kehamilanKe').value.trim()
    //         let tanggalAwalKehamilan = document.getElementById('tanggalAwalKehamilan').value.trim()
            
    //         if(anakKe.length <= 0 || tanggalAwalKehamilan.length <= 0){
                
    //             if(anakKe.length <= 0){
    //                 document.getElementById("inputKosongAnakKe").style.display = "block";
    //             } else {
    //                 document.getElementById("inputKosongAnakKe").style.display = "none";
    //             }
    
    //             if(tanggalAwalKehamilan.length <= 0){
    //                 document.getElementById("inputKosongTanggalAwalKehamilan").style.display = "block";
    //             } else {
    //                 document.getElementById("inputKosongTanggalAwalKehamilan").style.display = "none";
    //             }
    
    //         } else {
    //             document.getElementById("formTambahDataKehamilan").submit()
    //         } 
    
    //     })
    // })





    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'
    
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('#formTambahDataKehamilan')
    
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
    
            form.classList.add('was-validated')
            }, false)
        })
    })()