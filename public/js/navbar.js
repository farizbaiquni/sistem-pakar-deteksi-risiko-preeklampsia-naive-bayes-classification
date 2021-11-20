document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll(".nav-item a").forEach(list => {
        list.addEventListener("click", function() {
            if (this.getAttribute('data-topik') == "tambah") {
                document.getElementById("nav-container").style.backgroundColor = "white"
            } else {
                document.getElementById("nav-container").style.backgroundColor = "#ced4da"
            } 
        });
    })
})