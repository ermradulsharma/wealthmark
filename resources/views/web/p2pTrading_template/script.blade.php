<script>
      $('.p2p-tabs-btn a').click(function(){
          const id = $(this).attr('id');
         $(this).addClass('active');
         $(this).siblings().removeClass('active');
         $("."+ id).removeClass('hide');
          $("."+ id).siblings().addClass('hide');
     });
     


     
$('.select-payment a').click(function(){
    $(this).addClass('selected');
    $(this).parent('.select-payment').siblings().children().removeClass('selected');
    
});


$('.lp-link-top').click(function(){
        $(this).children('.lp-link-top-block').addClass('active');
        $(this).siblings().children('.lp-link-top-block').removeClass('active');
        const divId = $(this).attr('id');
        if(divId ==="Express_section"){
            $("#load_page_here").load("<?php echo url( app()->getLocale(), 'express-page');  ?>");   
            $('#p2p-trading-section').hide();
            $('#leverage-sub-navbar').hide();
            $('#p2p-form').hide();
        }
        if(divId ==="block__section"){
             $("#load_page_here").load("<?php echo url( app()->getLocale(), 'block-Page');  ?>");   
        }
        if(divId ==="group_section"){
             $("#load_page_here").load("<?php echo url( app()->getLocale(), 'group-Page');  ?>");   
        }
        
        
})
    
    

     $(document).click(function(e)  {
      $('.anchor-btns .ul-dropdown').hide();
     });
      
      $('.anchor-btns').click(function(e)  {
        $(this).find('.ul-dropdown').slideToggle(400); 
        $('.anchor-btns .ul-dropdown').not($(this).find('.ul-dropdown')).hide();
         //e.preventDefault();
          e.stopPropagation();
          
    });
    
     $('.ul-dropdown a').click(function(e)  {
      
          e.stopPropagation();
          
    });
    

</script>