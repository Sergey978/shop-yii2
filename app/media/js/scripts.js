$(function(){
    console.log('Hello world!');
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        html: true, 
        placement: "auto"
        });
});

function getIngridients(url){
    
    $.get(url, function(data){
      
        console.log(data.ingridients[0].slug);
     
            
       
            
       
});
    
};
     
     
     
     
$(document).ready(function(){
    $("div.ingridient  a").click(function(){
        getIngridients(this.href);
        return false;
    });
});         