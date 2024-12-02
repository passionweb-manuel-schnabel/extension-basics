document.addEventListener("DOMContentLoaded", function (){
    document.querySelectorAll(".btn-primary").forEach(function (button){
        button.addEventListener("click", function (ev){
            alert("Impression Uid is: " + ev.target.id)
        })
    })
})