
function showInp() {
    let str = document.getElementById('search').value;
    let xhr = new XMLHttpRequest();
    xhr.open('GET', "main/search/?search="+str, true);

    xhr.onload = function() {
        if(xhr.status == 200 && xhr.readyState == 4){
            a = document.getElementsByClassName('container-product')[0];
            a.style.display='none';
            let   demo = document.getElementsByClassName('container-product')[1];
             demo.style.display='grid';
             demo.style.gridTemplateColumns = '240px 240px 240px 240px';
             let obj =this.responseText 
             obj = JSON.parse(obj);
            var outputs = '';
             for(var i in obj){
                 if(obj.hasOwnProperty('massege')){
                    demo.innerHTML = "<h1>"+ obj.massege +"</h1>";
                    return;
                 }else{
                  var output = 
            '<div class="main-p"> <a href="catalog/phone/?name='+ obj[i].cat_name +'&id_prod='+ obj[i].id_prod +' id="img-order" > ' +
           ' <div><img id="img" src="http://localhost/myshop/public/imges/product/'+ obj[i].photo +'" width="150" height="220" alt="" srcset=""></div>' +
           '<div class="about-p">' +
           ' <span><a href="">'+ obj[i].name +'</a></span> ' +
           ' <span>Цена: <b style="color: black"> '+ obj[i].price +' C </b> <span style="margin-left: 4px">12мес.</span></span>' +
           '<a name onclick="showOrder()" id="btn-bay">Bay now</a>' +
           ' </div> </a></div>'
                outputs += output;
                 }
             }

             demo.innerHTML = outputs;

           
            }
    }
    xhr.send();
}


let add = document.querySelector("#pilus");
let min = document.querySelector("#minus");
add.addEventListener('click', plus);
min.addEventListener('click', minus);

function plus(){
    let a  = document.getElementsByName('orderNum')[0];
    return a.value = +a.value + 1;
}
function minus(){
    let a  = document.getElementsByName('orderNum')[0];
    return a.value = +a.value - 1;
}


 function showOrder(a){
    let div = document.getElementById('order-div');
    let img =  document.getElementById('img-order')
    let name = document.getElementById('name-ord')
    let year =  document.getElementById('year-ord')
    let price = document.getElementById('price-ord')

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(this.status == 200 &&  this.readyState == 4) {
         var prod = this.responseText;
         let obj = JSON.parse(prod);
        
            img.src = 'public/imges/product/' + obj.photo;
            name.innerHTML = 'Name: '+obj.name;
            year.innerHTML = 'Year: '+obj.year;
            price.innerHTML = obj.price + 'C';
            name.setAttribute('data', obj.cat_name + "/" +obj.id_prod);
        } 
    }
    xhr.open('GET', "http://localhost/myshop/main/order/"+a, true)
    xhr.send()
    let orddiv = document.getElementById('order');
    orddiv.style.transform = 'translateY(0px)';
  

}


document.getElementById('x').onclick = function(){
    let orddiv = document.getElementById('order');
    orddiv.style.transform = 'translateY(-600px)';
}




document.getElementById('addToCard').onclick = function(){
    
    let name = document.getElementById('name-ord').getAttribute('data');

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
            if(this.status == 200 && this.readyState == 4) {
                alert(1)
            }
    }
    xhr.open("GET", "http://localhost/myshop/main/carzina/" + name, true);
    xhr.send()
}
