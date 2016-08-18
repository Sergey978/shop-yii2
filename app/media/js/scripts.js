$(function(){
    console.log('Hello world!');
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        html: true, 
        
        });
});

function getIngridients(url){
        $.get(url, function(data){
      console.log(data);
            $('#summ').empty();
            $('#summ').append('Общая цена '+ data.summ +' грн.');
            
            if(!(data.ingridients === null) && data.ingridients.length > 0 ){
            $('#ingridients').empty();
            
            
            $.each(data.ingridients, function(){
                var ingridient = '<p>'+ 
                        '<img class="img-rounded" width="60" height="auto" alt="' + 
                        this.model.title + '" src="'+ this.model.image + '">'+
                        this.model.title + '<br>' +
                        '<span class="label label-warning">'+ this.model.price +'грн.</span>'+
                        '</p>';
                
                $('#ingridients').append(ingridient);
                
            
            })
               
            
        }
        else {
              $('#ingridients').empty();
        }
      
});
    
};
     
     
     
     
$(document).ready(function(){
    $("div.ingridient  a").click(function(){
        getIngridients(this.href);
        return false;
    });
}); 


$(document).ready(function(){
    $('.images-container .cat a').hover(function(){
        console.log('hi');
     $(this).children('img').stop().animate({width:"300px",height:"300px"}, 400);
    }, function(){ $(this).children('img').stop().animate({width:"150px",height:"150px"}, 400); });
  });