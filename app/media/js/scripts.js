

//Всплывающие подсказки jquery tooltip
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        html: true, 
        
        });
});

// получение списка ингридиентов с помощью AJAX 
function getIngridients(url){
        $.get(url, function(data){
      
      //console.log(data.ingridients.length);
       
            $('#summ').empty();
            $('#summ').append( data.summ +' грн.');
            
            if(!(data.ingridients === null) && data.ingridients.length > 0 ){
            $('#ingredients').empty();
            $.each(data.ingridients, function(){
                                
                 var ingredient = '<div class="col-md-2 col-sm-2 col-xs-2">'+     
                    '<img class="img-rounded img-responsive"'+ 
                        'src="'+ this.model.image + '"'+ 
                        'alt="' + this.model.title + '">' +                                
                    '<div class="info-grid">'+
                        this.model.title + '<br>'+
                        '<span class="label label-warning">' +
                        this.model.price + 'грн.</span>'+
                    '</div>'+
                '</div>';
                
                $('#ingredients').append(ingredient);
                 })
     
            
        }
        else {
              $('#ingredients').empty();
        }
        
        
        // дополнение до 5 вопросами           
                
           if(!(data.ingridients === null) && data.ingridients.length > 0 ){
               console.log(data.ingridients.length);
               length = 5 - data.ingridients.length;
           }
           else length = 5;
            
                for (i = 0;  i< length; i++ ){
                    
                     var ingredient = '<div class="col-md-2 col-sm-2 col-xs-2">'+     
                    '<img class="img-rounded img-responsive"'+ 
                        'src="' + data.noingr.image +'"'+ 
                         '">' +                                
                    
                    '</div>';
                
                $('#ingredients').append(ingredient);
                    
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
      
   obj = $('.images-container .cat').children('a').children('img')  ;
      obj.hover(function(){
          width = $(this).width();
     $(this).stop().animate({width: width * 1.2 + "px",height:"auto"}, 400);
    }, function(){ $(this).stop().animate({width: width + "px",height:"auto"}, 400);
        });
      
   });
  
  //скачущие картинки 
$(document).ready(function() {
 
/* =Shadow Nav
-------------------------------------------------------------------------- */
 
    // Animate buttons, shrink and fade shadow
 
    $("#nav-shadow a img").hover(function() {
    	var e = this;
        $(e).stop().animate({ marginTop: "-14px" }, 250, function() {
        	$(e).animate({ marginTop: "-10px" }, 250);
        });
        
    },function(){
    	var e = this;
        $(e).stop().animate({ marginTop: "4px" }, 250, function() {
        	$(e).animate({ marginTop: "0px" }, 250);
        });
       
    });
 
// End jQuery
 
});