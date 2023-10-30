/*let fruit ="orange";
switch (fruit){
    case "orange":{
        let prix=2;
        console.log(`Le prix de l' ${fruit} est ${prix}`)
        break
    }
    case "poire":{
        console.log(`On n'a pas le prix de la ${fruit}  `)
        break
    }

}
if (fruit=="orange"){
    let prix=2;
    console.log(`Le prix de  l' ${fruit} est ${prix}`)

}else if(fruit=="poire"){
    console.log(`On n'a pas le prix de la ${fruit}  `)

}
for(let i=10;i>0;i--){
    console.log(i);
    console.log(`Le carré est ${i*i}`);
   
}*/
console.log('affichage suivant')
for(let i=0;i<=10;i++){
    console.log(i);
}
///
console.log('calcul somme')
let p=0;
for(let i=0;i<=10;i++){
   p=p+i;
    
}
console.log(`La somme de i est ${p}`);

///
console.log('affichange inverse')

let array = [1, 15, -3, 0, 8, 7, 4, -2, 28, 7, -1, 17, 2, 3, 0, 14, -4]; 
for(i=0;i<array.length;i++){
console.log(array[i])

}
console.log('tableau inversé') 
for(i=array.length-1;i>=0;i--){
    console.log(array[i])
    
    }
////
console.log('inversion contenu')
let array1 = [1, 15, -3, 0, 8, 7, 4, -2, 28, 7, -1, 17, 2, 3, 0, 14, -4]; 
let array2 = []; 
for(i=array1.length-1;i>=0;i--){
    array2.push(array1[i]);
}    
for(i=0;i<array2.length;i++){
    console.log(array2[i])
}

////
console.log('affichage partiel')
let array3 = [1, 15, -3, 0, 8, 7, 4, -2, 28, 7, -1, 17, 2, 3, 0, 14, -4]; 

for(i=0;i<array3.length;i++){
    if((array3[i]>3) && (array3[i]%2 == 0)){
    console.log(array3[i])
    }
} 
////
console.log('affichage max et mini')
let array4 = [1, 15, -3, 0, 8, 7, 4, -2, 28, 7, -1, 17, 2, 3, 0, 14, -4]; 
let maxi=0; 
let mini=0;
for(i=0;i<array4.length;i++){
   if (maxi<array4[i]){
    maxi = array4[i];

   }
   if (mini>array4[i]){
    mini = array4[i];
   }

} 

//console.log(`Le plus grand nombre est ${Math.max(...array3)}`);
//console.log(`Le plus petit nombre est ${Math.min(...array3)}`);
console.log(`Le plus grand nombre est ${maxi}`);
console.log(`Le plus petit nombre est ${mini}`);

////
console.log('affichage Calcul moyenne')
let array5 = [1, 15, -3, 0, 8, 7, 4, -2, 28, 7, -1, 17, 2, 3, 0, 14, -4]; 
let moy=0; 

for(i=0;i<array4.length;i++){
  
   moy = moy + array5[i];
} 
console.log(`La somme des éléments est ${moy}`);
moy = moy/array5.length;
console.log(`Le nombre des éléments est ${array5.length}`);
console.log(`La moyenne est ${moy}`);

////
console.log('affichage somme des deux tableaux')
let array6 = [1, 15, -3, 0, 8, 7, 4, -2, 28, 7, -1, 17, 2, 3, 0, 14, -4]; 
let array7 =  [-1, 12, 17, 14, 5, -9, 0, 18] ; 
let tab = [];
let s6 = 0;
let s7 = 0;

for(i=0;i<array6.length;i++){
  s6=s6+array6[i];
} 
for(i=0;i<array7.length;i++){
    s7=s7+array7[i];
  } 
  tab.push(s6,s7);


//console.log(`Le plus grand nombre est ${Math.max(...array3)}`);
//console.log(`Le plus petit nombre est ${Math.min(...array3)}`);
console.log(`Le nouveau tableau est ${tab}`);

//////

console.log('COMPARAISON TABLEAU');
let tab1 = [1, 15, -3, 8, 7, 4, -2, 28, -1, 17, 2, 3, 0, 14, -4] ;
let tab2 = [3, -8, 17, 5, -1, 4, 0, 6, 2, 11, -5, -4, 8] ;
let nbr=0;
let chf=0;
for(i=0;i<tab1.length;i++){
    nbr=tab1[i];
    for(i=0;i<tab1.length;i++){
        if(nbr=tab1[i]){
            for(j=0;j<tab2.length;j++){
                
                if(nbr==tab2[j]){
                    chf=chf+1;
                }
            } 
        }
    } 
  } 
console.log(` Il y a ${chf} éléménts en commun`);


//////
console.log('Booléen');
let tab3 = [1, -8, 17, 5, -1, 4, 0, 6, 2, 11, -5, -4, 6] ;
/*
o   elle vaut true si le tableau a au moins 1 élément et si le premier élément ou le
    dernier élément vaut 6.
o   elle vaut false dans les autres cas*/
if(tab3.length>0 && (tab3[0] == 6 || tab3[tab3.length-1] == 6)){
    console.log("Vrai");
   
}else{
    console.log("Faux");
}
////////////
console.log('Rotation');

let tab4 =[0,1,2,3];
let ch=0;
let ch1=0;
for (let i=0;i<tab4.length;i++){
  ch=tab4[i];


}
////////////
console.log('Multiplication');


let chr=3;
for (let i=1;i<=10;i++){
    console.log(`${chr} * ${i} = ${chr*i}`)
}





