let j=0;
function autoColor(){
    if (j%2==0){
        var span1=document.getElementsByTagName('span')[0];
        span1.setAttribute('style','color:#CE2029');
        

        var span1=document.getElementsByTagName('span')[1];
        span1.setAttribute('style','color:#028157');
        
        
        j=j+1;
    }else if (j%2==1){
        var span1=document.getElementsByTagName('span')[0];
        span1.setAttribute('style','color:#028157');
      

        var span1=document.getElementsByTagName('span')[1];
        span1.setAttribute('style','color:#CE2029');
       

        j=j+1;
    }
}
setInterval(autoColor,1500)
var state=false;
function toggle(){
    var password=document.getElementById('inputPassword');
    var eye=document.getElementById("eye");
     if(state==true){
        password.setAttribute('type','password');
         eye.setAttribute('style','color:#7a797e;');
         state=false;
     }else{
        password.setAttribute('type','text');
       eye.setAttribute('style','color:#0a75ad;');
        state=true;
     }
}

var state2=false;
function toggle2(){
    var password=document.getElementById('pass_c');
    var eye=document.getElementById("eye2");
     if(state==true){
        password.setAttribute('type','password');
         eye.setAttribute('style','color:#7a797e;');
         state=false;
     }else{
        password.setAttribute('type','text');
       eye.setAttribute('style','color:#0a75ad;');
        state=true;
     }
}