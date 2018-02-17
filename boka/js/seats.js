function choice(r,c){
    if(confirm("Vill du verkligen boka plats "+r+c)){
        window.location = ("seats.php?r="+r+"&c="+c);
    }else{}
}