
//Collapsible Riwayat
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight - 10 + "px";
    } 
  });
}


//CLICK BUTTON TO OPEN MODAL
$('.btn-riwayat-pemeriksaan').click(function(){
  let nik_pasien = this.getAttribute('data-id-pasien')

  const xhttpTambahKehamilan = new XMLHttpRequest();
  xhttpTambahKehamilan.onload = function() {
      if (xhttpTambahKehamilan.readyState == 4 && xhttpTambahKehamilan.status === 200){
          document.getElementById("container-riwayat-pemeriksaan").innerHTML = this.responseText
          new bootstrap.Modal(document.getElementById("modalRiwayatPemeriksaan"), {}).show()
      }else{
          new bootstrap.Modal(document.getElementById("modalRiwayatPemeriksaan"), {}).show()
      }
      
  }
  xhttpTambahKehamilan.open("GET", `/modal-riwayat-pemeriksaan/${nik_pasien}`, true);
  xhttpTambahKehamilan.send();   
})