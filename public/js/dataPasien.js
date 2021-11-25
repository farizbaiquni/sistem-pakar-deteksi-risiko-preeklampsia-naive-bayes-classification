// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#formEditPasien')

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

document.addEventListener("DOMContentLoaded", function(){
    $('.button_detail_pasien').click(function(){
        let nik_pasien = this.getAttribute('data-id-pasien')

        const xhttpDetailPasien = new XMLHttpRequest();
        xhttpDetailPasien.onload = function() {
            if (xhttpDetailPasien.readyState == 4 && xhttpDetailPasien.status === 200){
                document.getElementById("modalDetailPasien").innerHTML = this.responseText
                new bootstrap.Modal(document.getElementById("modalDetailPasien"), {}).show()
            }else{
                new bootstrap.Modal(document.getElementById("modalDetailPasien"), {}).show()
            }
            
        }
        xhttpDetailPasien.open("GET", `/modal-detail-pasien/${nik_pasien}`, true);
        xhttpDetailPasien.send();

        // $.ajax({
        //     url: `/modal-detail-pasien/${nik_pasien}`,
        //     type: 'get',
        //     success: function(response){
        //         $('#modalDetailPasien').find('#modal-body-detail').html(response)
        //         $('#modalDetailPasien').modal('show')
        //     }
        // })
    })


    $('.button_edit_pasien').click(function(){
        let nik_pasien = this.getAttribute('data-id-pasien')
        
        const xhttpEditPasien = new XMLHttpRequest();
        xhttpEditPasien.onload = function() {
            if (xhttpEditPasien.readyState == 4 && xhttpEditPasien.status === 200){ 
                document.getElementById("containerModalEditPasien").innerHTML = this.responseText
                new bootstrap.Modal(document.getElementById("modalEditPasien"), {}).show()
            } else {
                new bootstrap.Modal(document.getElementById("modalEditPasien"), {}).show()
            }
        }
        xhttpEditPasien.open("GET", `/modal-edit-pasien/${nik_pasien}`, true);
        xhttpEditPasien.send();

        // $.ajax({
        //     url: `/modal-edit-pasien/${nik_pasien}`,
        //     type: 'get',
        //     success: function(response){
        //         $('#containerModalEditPasien').html(response)
        //         $('#modalEditPasien').modal('show')
        //     }
        // })
    })

    $('.button_hapus_pasien').click(function(){
        let nik_pasien = this.getAttribute('data-id-pasien')

        const xhttpHapusPasien = new XMLHttpRequest();
        xhttpHapusPasien.onload = function() {
            if (xhttpHapusPasien.readyState == 4 && xhttpHapusPasien.status === 200){
                document.getElementById("containerModalHapusPasien").innerHTML = this.responseText
                new bootstrap.Modal(document.getElementById("modalHapusPasien"), {}).show()
            }else{
                new bootstrap.Modal(document.getElementById("modalHapusPasien"), {}).show()
            } 
        }
        xhttpHapusPasien.open("GET", `/modal-hapus-pasien/${nik_pasien}`, true);
        xhttpHapusPasien.send();

        // $.ajax({
        //     url: `/modal-hapus-pasien/${nik_pasien}`,
        //     type: 'get',
        //     success: function(response){
        //         $('#containerModalHapusPasien').html(response)
        //         $('#modalHapusPasien').modal('show')
        //     }
        // })
    })
});