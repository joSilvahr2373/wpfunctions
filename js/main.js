//Função para carregar mais posts 

jQuery(document).ready(function($){

  $('#button-que-iria-chamar-posts').click(function(e){  
      e.preventDefault(); 
      var offset = $('.class-posts').length; //o ideal é dar uma id para essa div
      $.post(
          WPaAjax.ajaxurl,
          {
              action : 'mais_produtos',
              offset : offset
          },
          function( response ) {
              $('.faixa').append( response );
          }
      );
  });

});
