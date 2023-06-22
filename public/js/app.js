// $("h1").mouseover(function(){
//     $("h1").css("background-color, blue");
//     console.log("test");
//   });
// $("h1").click(function(){
//     $("h1").animate({
//         width: "-=20%", height: "toggle", fontSize: "20px"},
//         1000);
// });
// $(document).ready(function(){
//     $("h1").click(function(){
//         $("h1")
//             .animate({width: "-=20%"},2000)
//             //Cette animation se lance immédiatement
//             .animate({fontSize: "30px"},{queue:false, duration:2000})
//             .fadeTo(2000, 0.5);
//     });
// });
$(document).ready(function(){
    //Diminue la largeur de h1 de 80% sur 60 seocnde 
    $("h1").mouseover(function(){
        $("h1").animate({width:"-=20%"}, 1000);
    });

    //Fait passer la hauteurà 0 si elle n'est pas à 0 ou la rétablit
    $("h1").mouseover(function(){
        $("h1").animate({height: "toggle"});
    });
    
    //Passe la taille de police à 20px sur 6 secondes
    $("h1").mouseover(function(){
        $("h1").animate({fontSize:"30px"}, 2000);
    });
});
 