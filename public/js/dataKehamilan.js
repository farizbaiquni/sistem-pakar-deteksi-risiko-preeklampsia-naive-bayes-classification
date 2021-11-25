    
    document.addEventListener("DOMContentLoaded", function(){

        $('.btn-tambah-kehamilan').click(function(){
            let nik_pasien = this.getAttribute('data-id-pasien')
    
            const xhttpTambahKehamilan = new XMLHttpRequest();
            xhttpTambahKehamilan.onload = function() {
                if (xhttpTambahKehamilan.readyState == 4 && xhttpTambahKehamilan.status === 200){
                    document.getElementById("container-tambah_kehamilan").innerHTML = this.responseText
                    new bootstrap.Modal(document.getElementById("modalTambahDataKehamilan"), {}).show()
                }else{
                    new bootstrap.Modal(document.getElementById("modalTambahDataKehamilan"), {}).show()
                }
                
            }
            xhttpTambahKehamilan.open("GET", `/modal-tambah-data-kehamilan/${nik_pasien}`, true);
            xhttpTambahKehamilan.send();   
        })



        $('.btn-edit-kehamilan').click(function(){
            let nik_pasien = this.getAttribute('data-id-pasien')
    
            const xhttpTambahKehamilan = new XMLHttpRequest();
            xhttpTambahKehamilan.onload = function() {
                if (xhttpTambahKehamilan.readyState == 4 && xhttpTambahKehamilan.status === 200){
                    document.getElementById("container-edit-kehamilan").innerHTML = this.responseText
                    new bootstrap.Modal(document.getElementById("modalEditDataKehamilan"), {}).show()
                }else{
                    new bootstrap.Modal(document.getElementById("modalEditDataKehamilan"), {}).show()
                }
                
            }
            xhttpTambahKehamilan.open("GET", `/modal-edit-data-kehamilan/${nik_pasien}`, true);
            xhttpTambahKehamilan.send();
            
        })


        
        $('.btn-hapus-kehamilan').click(function(){
            let nik_pasien = this.getAttribute('data-id-pasien')
    
            const xhttpTambahKehamilan = new XMLHttpRequest();
            xhttpTambahKehamilan.onload = function() {
                if (xhttpTambahKehamilan.readyState == 4 && xhttpTambahKehamilan.status === 200){
                    document.getElementById("container-hapus-kehamilan").innerHTML = this.responseText
                    new bootstrap.Modal(document.getElementById("modalHapusDataKehamilan"), {}).show()
                }else{
                    new bootstrap.Modal(document.getElementById("modalHapusDataKehamilan"), {}).show()
                }
                
            }
            xhttpTambahKehamilan.open("GET", `/modal-hapus-data-kehamilan/${nik_pasien}`, true);
            xhttpTambahKehamilan.send();
            
        })

        
    })






    document.addEventListener("DOMContentLoaded", function(e){
        
        $('#container-tambah_kehamilan').on('click', '#submitTambahDataKehamilan', function(){
            e.preventDefault();
            let anakKe = $('#container-tambah_kehamilan').find('#kehamilanKe').val().trim();
            let tanggalAwalKehamilan = $('#container-tambah_kehamilan').find('#tanggalAwalKehamilan').val().trim();
            
            if(anakKe.length <= 0){
                $('#container-tambah_kehamilan').find('#errorKehamilanKe').css('display', 'block');
            } else {
                $('#container-tambah_kehamilan').find('#errorKehamilanKe').css('display', 'none');

                if(anakKe <= 0){
                    $('#container-tambah_kehamilan').find('#error2KehamilanKe').css('display', 'block');
                } else {
                    $('#container-tambah_kehamilan').find('#error2KehamilanKe').css('display', 'none');
                }
            }

            if(tanggalAwalKehamilan.length <= 0){
                $('#container-tambah_kehamilan').find('#errorTanggalAwalKehamilan').css('display', 'block')
            } else {
                $('#container-tambah_kehamilan').find('#errorTanggalAwalKehamilan').css('display', 'none')

                var GivenDate = new Date(tanggalAwalKehamilan);
                var CurrentDate = new Date();

                if(GivenDate > CurrentDate ){
                    $('#container-tambah_kehamilan').find('#error2TanggalAwalKehamilan').css('display', 'block')
                } else {
                    $('#container-tambah_kehamilan').find('#error2TanggalAwalKehamilan').css('display', 'none')
                }
            }

            if(anakKe.length > 0 && anakKe > 0 && tanggalAwalKehamilan.length > 0){
                var GivenDate = new Date(tanggalAwalKehamilan);
                var CurrentDate = new Date();

                if(GivenDate < CurrentDate ){
                    $('#container-tambah_kehamilan').find('#formTambahDataKehamilan').submit()
                }
            }
        }) // End onClick  


        
        $('#container-edit-kehamilan').on('click', '#submitTambahDataKehamilan', function(){
            e.preventDefault();
            let anakKe = $('#container-edit-kehamilan').find('#kehamilanKe').val().trim();
            let tanggalAwalKehamilan = $('#container-edit-kehamilan').find('#tanggalAwalKehamilan').val().trim();
            
            if(anakKe.length <= 0){
                $('#container-edit-kehamilan').find('#errorKehamilanKe').css('display', 'block');
            } else {
                $('#container-edit-kehamilan').find('#errorKehamilanKe').css('display', 'none');

                if(anakKe <= 0){
                    $('#container-edit-kehamilan').find('#error2KehamilanKe').css('display', 'block');
                } else {
                    $('#container-edit-kehamilan').find('#error2KehamilanKe').css('display', 'none');
                }
            }

            if(tanggalAwalKehamilan.length <= 0){
                $('#container-edit-kehamilan').find('#errorTanggalAwalKehamilan').css('display', 'block')
            } else {
                $('#container-edit-kehamilan').find('#errorTanggalAwalKehamilan').css('display', 'none')

                var GivenDate = new Date(tanggalAwalKehamilan);
                var CurrentDate = new Date();

                if(GivenDate > CurrentDate ){
                    $('#container-edit-kehamilan').find('#error2TanggalAwalKehamilan').css('display', 'block')
                } else {
                    $('#container-edit-kehamilan').find('#error2TanggalAwalKehamilan').css('display', 'none')
                }
            }

            if(anakKe.length > 0 && anakKe > 0 && tanggalAwalKehamilan.length > 0){
                var GivenDate = new Date(tanggalAwalKehamilan);
                var CurrentDate = new Date();

                if(GivenDate < CurrentDate ){
                    $('#container-edit-kehamilan').find('#formEditDataKehamilan').submit()
                }
            }

        }) // End onClick  

    })





    
    // // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (function () {
    //     'use strict'
    
    //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //     var formsTambah = document.querySelectorAll('#formTambahDataKehamilan')
    
    //     // Loop over them and prevent submission
    //     Array.prototype.slice.call(formsTambah)
    //     .forEach(function (form) {
    //         form.addEventListener('submit', function (event) {
    //         if (!form.checkValidity()) {
    //             event.preventDefault()
    //             event.stopPropagation()
    //         }
    
    //         form.classList.add('was-validated')
    //         }, false)
    //     })


    //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //     var formsEdit = document.querySelectorAll('#formEditDataKehamilan')
    
    //     // Loop over them and prevent submission
    //     Array.prototype.slice.call(formsEdit)
    //     .forEach(function (form) {
    //         form.addEventListener('submit', function (event) {
    //         if (!form.checkValidity()) {
    //             event.preventDefault()
    //             event.stopPropagation()
    //         }
    
    //         form.classList.add('was-validated')
    //         }, false)
    //     })
    // })()