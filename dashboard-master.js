
// data close link part
let getshow1=document.getElementById("show1");
let getshow2=document.getElementById("show2");
let getclass=document.getElementById('link-nav');

// fuction definition 

getshow1.addEventListener('click',function(){
    getclass.style.width='0px'; 

});

// close


getshow2.addEventListener('click',function(){
   
    getclass.style.width="300px";
    getclass.style.display="block";


});

// this x-mark in madol

let div2xmark=document.getElementById("div2x");
let madolissue=document.getElementById("modal");

// div2xmark.addEventListener('click',function(){
   
//     madolissue.style.display="none";
// });

// Export Data To PDF

function ExportPdf() {
    var data = Number(prompt("Enter Start ID:"));
    if (!data) {
        alert("Please No data Entered!");
    }
    // Ajax Requests To ExportPdf.php
           location.href ="./export.php?data="+data;

}



// sider bar show btn in res ponsive
let siderbarshow=document.getElementById('sider-bar');
let showbtnsiderbar = document.getElementsByClassName("fa-solid fa-grip-vertical")[0];




// showbtnsiderbar.addEventListener('click',function(){
//     alert("me")
//     // siderbarshow.style.width="50%";display="block"; 
// })



//Add Book Request To Server
var form = document.getElementById('form');
form.onsubmit = (e)=>{
    e.preventDefault();
}
var text = document.getElementsByClassName('text');
function AddBook() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST","./automate.php",true);
    xhr.onload = ()=>{
        if (xhr.status == 200 && xhr.readyState == 4) {
            var data = xhr.responseText;
            alert(data);

            for (let k = 0; k < text.length; k++) {
                var input = text[k].getElementsByTagName('input')[0];
                input.value = "";
                
            }
        }
    }
    var formdata = new FormData(form);
    xhr.send(formdata);
}
