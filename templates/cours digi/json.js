let societe ={
    "nom":"Google",
     "siege" : "Googleplex",
    "adresse" : "Mountain view California, United States",
    "fondateurs": [
            {"nom" : "Larry Page",
              "dateNaissance" : "26/03/1973",
              "lieuNaissance" : "East Lansing, Michigan"  
            },
            {"nom" : "Sergey Brin",
            "dateNaissance" : "21/08/1973",
            "lieuNaissance" : "Moscou, Union soviétique"  
            }],
    "Chiffres":[

        {
            "date " :"2008",
            "chiffre":"16.49",
        },
        {
            "date " :"2012",
            "chiffre":"37.97",
        },
        {
            "date " :"2016",
            "chiffre":"89.46",
        },
        {
            "date " :"2018",
            "chiffre":"136.2",
        }

    ]
}
console.log(societe.nom);
for (let i=0;i<societe.fondateurs.length;i++){

    console.log(societe.fondateurs[i])


}
for (let i=0;i<societe.Chiffres.length;i++){

    console.log(societe.Chiffres[i])


}