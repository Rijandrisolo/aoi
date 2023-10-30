function essai(){
    let vari="33";
    return vari;
}

console.log(essai());


/////
function code(cari){
    return "Bonjour " + cari;
}
console.log(code("Marcel"));

////

function calc(a,b){
    return a*b+a+b;
}
console.log(calc(5,6));
    

/////
let tab=[];
let tab1 =[1,2,3,4,5];
let tab2 =["a",1,"e",6];

function tableaux(tableau){
    let rep="False";
    if (tableau.length>0){
         for(i=0;i<tableau.length;i++){
          
            if (typeof(tableau[i])!='number'){
                
               return rep;
            }else{
                rep="True"
            }
        }
    }
    return rep;   
}


console.log(tableaux(tab));
console.log(tableaux(tab1));
console.log(tableaux(tab2));
    




