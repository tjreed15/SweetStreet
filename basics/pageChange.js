$(document).ready(function() {  
      
    // Check for hash value in URL  
    var hash = window.location.hash.substr(1);  
    var href = $('a').each(function(){
        var href = $(this).attr('href'); 
        if(hash==href.substr(0,href.length-4)){
            var toLoad = hash+'.html #mainContent';  
            $('#mainContent').load(toLoad)  
        }   
    });  
      
    $('a').click(function(){  
      
    var toLoad = $(this).attr('href')+' #mainContent';  
    $('#mainContent').hide('fast',loadContent);  
    $('#load').remove();  
    $('body').append('<span id="load">LOADING...</span>');  
    $('#load').fadeIn('normal');  
    window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-4);  
    function loadContent() { 
        $('#mainContent').load(toLoad,'',showNewContent)  
    }  
    function showNewContent() {
		$.getScript("index/rotateLines.js");   
        $('#mainContent').show('normal',hideLoader());
		$.getScript("index/moveClouds.js");   
		$.getScript("index/doorHandleClick.js");   
    }  
    function hideLoader() {  
        $('#load').fadeOut('normal');  
    }  
    return false;  
      
    });  
});  