
   function cancelDelete(id){
                          //  alert(id);
                         $("#delete_box_modal"+"_"+id).css({"display":"none"});
                        }

   
                     
       function cancelDeleteExt(id){
                          //  alert(id);
                        // $("#delete_box_modal_extr"+"_"+id).css({"display":"none"});
                        $("#delete_box_modal_extr"+"_"+id).hide();
                        }


                
                     
       function extradirectorCancel(that){
                  
                    $(that).parent().parent().parent().parent().hide();
                  
            }
            
    $(".extraAddDirtor").click(function(e){
         
         
         const companyName = $("#companyName").val();
           const companyRegNum = $("#companyRegNum").val();
            const countryIncorp = $("#countryIncorp").val();
             const atr = $(this).attr("data-modal");
           
            // alert(atr);
            
            
         if(companyName === "" ){
             $(".comperror").html("Company name can't be blank!");
            
             setInterval(function () {
                 $(".comperror").html("");
                 
             }, 3000);
         }
         
        
          
           if(companyRegNum === ""){
             $(".compRegerror").html("Company register no. can't be blank!");
               setInterval(function () {
                 $(".compRegerror").html("");
                 
             }, 3000);
         }
         
         
          
           
        if(document.getElementById('countryIncorp').selectedIndex < 0 ){
             $(".compIncopCntry").html("Please select country!");
               setInterval(function () {
                 $(".compIncopCntry").html("");
                 
             }, 3000);
         }
         
   
          if(companyName === "" || companyRegNum === "" || countryIncorp === ""){
               $("#" + atr).removeClass("modal");
               $("#" + atr).addClass("displaynone");
             }
     
         if(companyName.length > 0 &&  companyRegNum.length > 0 && countryIncorp.length > 0){
              
                           if($("#"+atr).hasClass( "modal" ) === false){
                               $("#" + atr).addClass("modal");
                                 $("#" + atr).removeClass("displaynone");
                                    }
          }
         
    
     });


      
      //........
              $("#directorFormCancel").click(function(){
                  
                    $("#Add-Director").hide();
                    
                          
                });
                
  
  
                 
      


 
  
            
    

