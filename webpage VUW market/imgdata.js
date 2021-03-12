window.onload = function() {
    post('imgDatabase.php').then(function(data){
        document.getElementById("image-1").src = data[0]['imgPathName'];
        document.getElementById("image-2").src = data[1]['imgPathName'];
        document.getElementById("image-3").src = data[2]['imgPathName'];
    });
};

async function post(url) {
    const respone = await fetch(url,{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
    });
    return respone.json();
}

