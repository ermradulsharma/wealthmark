<style>
   
</style>



<div class="main_modal_outer" style="display:flex">
  <div class="modal_bg"></div>
  <div class="main_modal_inner">
    <div class="main_close_div">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="modal_close-icon" >
        <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
      </svg>
    </div>
    <div class="main_modal_dialog-body">
     
        <div class="modal_content_box">
          <!--@include('entity.mdal-template.entity-form'); -->
         
         
         
        </div>
      
     
    </div>
  </div>
</div>


 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>

        $(function(){
         $('#datepicker').datepicker();
        });
   
   
        $(document).ready(function () {
            $(".modal_close-icon").click(function(){
                     $(".main_modal_outer").css("display" , "none");
            });
         });
         
         
       
        $("#Office_add_diff").click(function(){
            $("#show_if_office_add_diff").css("display" , "block");
        });
      
         
</script>