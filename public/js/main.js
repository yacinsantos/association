/* Ajax show categorie */

document.getElementById('add_formation').addEventListener('click',loadFormFormation);

function loadFormFormation(){
    //console.log('show button clicked');
    //Create XHR Object
    
    let xhr = new XMLHttpRequest();
    //console.log(xhr);
    //OPEN -type , url/file, async

    xhr.open('GET','/admin/formations',true);

    xhr.onload = function () {
        if(this.status == 200){
            
            document.getElementById('ajax-form').innerHTML = this.responseText;
        }        
    }
    xhr.onerror = function () {
        console.log('Request Error...');
        
    }
    //Send the request
    xhr.send();
    
}