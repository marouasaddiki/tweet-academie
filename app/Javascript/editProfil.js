const edit = document.getElementsByClassName('btn-edit');
const modalEdit = document.getElementsByClassName('modal');
const btnSave = document.getElementsByClassName('btn-save');
const btnClose = document.getElementsByClassName('btn-close');

// Set img Avatar && img Cover
     $("#userBanner").click(function(e) {
          if (window.getComputedStyle(document.getElementById("myModal"), null)["display"] == "block"){
          $(".inputFile").click();
          }
     });

     $(".user_image--lg").click(function(e) {
          if (window.getComputedStyle(document.getElementById("myModal"), null)["display"] == "block"){
               $(".inputFile2").click();
          }
               
     });
     function fasterPreview( uploader ) {
          if ( uploader.files && uploader.files[0] ){
               $('.user__banner').attr('src', 
               window.URL.createObjectURL(uploader.files[0]) );
          }
     }
     function fasterPreview2( uploader ) {
          if ( uploader.files && uploader.files[0] ){
               $('.user_image--lg').attr('src', 
               window.URL.createObjectURL(uploader.files[0]) );
          }
     }
     
     $(".inputFile").change(function(){
          fasterPreview( this );
     });

     $(".inputFile2").change(function(){
          fasterPreview2( this );
     })
