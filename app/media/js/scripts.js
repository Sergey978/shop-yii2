$(function(){
    console.log('Hello world!');
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        html: true, 
        placement: "auto"
        });
});