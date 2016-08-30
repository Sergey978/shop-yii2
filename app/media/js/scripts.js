$(function(){
    console.log('Hello world!');
});


//Всплывающие подсказки jquery tooltip
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        html: true, 
        
        });
});

// получение списка ингридиентов с помощью AJAX 
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
     
     
     
// при клике на ссылку ингридиента      
$(document).ready(function(){
    $("div.ingridient  a").click(function(){
        getIngridients(this.href);
        return false;
    });
}); 

//увеличение размеров картинок на выборе категории
$(document).ready(function(){
    $('.images-container .cat ').hover(function(){
      
       
     $(this).children('a').children('img').stop().animate({width:"200px",height:"200px"}, 400);
     $(this).children('h4').css({'font-size':'22px'});
    }, function(){ $(this).children('a').children('img').stop().animate({width:"174px",height:"174px"}, 400);
    $(this).children('h4').css({'font-size':'18px'});
});
  });