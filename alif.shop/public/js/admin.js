
function searchUser(){
    let xhr = new XMLHttpRequest();
    var input = document.getElementById("search").value;
    xhr.open("GET", "http://localhost/myshop/admin/searchUser/?name=" + input, true);
    xhr.onload = function(){
        if(xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("show").style.display = 'none'
            let users = JSON.parse(xhr.responseText);
          
            for(var user of users){
               document.getElementById('searched').innerHTML += "<tr> <td> <img width='50' height='50' id='avatar' src='asd'> </td> <td>" + user.name +"</td>  <td>" +user.lname +"</td><td>"+ user.email +"</td> </tr>"
            }
        }
    }
    xhr.send();
   
}
