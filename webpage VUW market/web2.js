const btn = document.getElementById("btn");
const table = document.getElementById('stock-table');
let imageClose = document.getElementById("close-btn");

btnbt.addEventListener('click',function(){
    post('getsubs.php').then(function(data){
        for (let i = 0; i < data.length; i++){
            let row = table.insertRow();
            let cell1 = row.insertCell(0);
            let cell2 = row.insertCell(1);
            let item = data[i];
            cell1.innerHTML = item['stockName'];
            cell2.innerHTML = item['stockNumber'];
        }
    });
});


async function post(url) {
    const respone = await fetch(url,{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
    });
    return respone.json();
}

var loadImage =function(event){
    var image2= document.getElementsByName('outputimage');
    image2.src=URL.createObjectURL(event.target.files[0]);
}

function picFunction(imgs) {
    
    var expandImg = document.getElementById("imgExpand");
   
    
    expandImg.src = imgs.src;
    
    expandImg.parentElement.style.display = "block";
  }

  imageClose.addEventListener('click',function(ev){
    this.parentElement.style.display='none';
  });

  