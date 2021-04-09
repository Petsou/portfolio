var carte = document.getElementsByClassName('card');
console.log(carte);

for(var element of carte){
    element.addEventListener("mouseover",function(){
        if(this.style.transform == "scale(1.1)"){
            this.style.transition = "transform .2s"
            this.style.transform = "none"
        }else{
            this.style.transition = "transform .2s"
            this.style.transform = "scale(1.1)"
        }
    })
}