jQuery( document ).ready(function($) {

  /*
       ========================
       share button
       ========================

  */
  $(".share-this-btn").click(function(){
      $(".social.twitter").toggleClass("clicked");
      $(".social.facebook").toggleClass("clicked");
      $(".social.google").toggleClass("clicked");
  });








  /*
       ========================
       loadmore btn
       ========================
*/
  $(".loadmore-function").click(function(){

    var that = $(this);
    var page = that.data('page');
    var newPage = page + 1;
    var ajaxurl = that.data('url');
    console.log();
    $.ajax({
      url: ajaxurl,
      type:'post',
      data:{
        page:page,
        action:'load_more'
      },
      error:function(response){
        console.log(response);
      },
      success:function(response){
        if(response==0){
          $(".loadmore-container").append("<h3 class='end-bottom' style='padding-top:6%;'>--End--</h3>");
          that.slideUp(320);
        }else{
          that.data('page',newPage);
          //debugger
          $(".main-gallery").append(response);
          //$(".main-gallery").masonry( 'appended', response);

        }
      }
    });
  });

  /*
       ========================
       like btn
       ========================
  */
  $(".like-button").click(function(){

     var likeid = $(this).data('id');


     $.ajax({
       url:likeinfo.site_url+'/wp-json/likebtn/v2/project/'+likeid,
       type:'post',
       success: function(){
         console.log('works!');
       },
       error:function(){
         console.log('failed!');
       }
     });



     var updated_likes = parseInt($('.like-number').html())+1;
     $('.like-number').html(updated_likes);
     $(this).attr('disabled',true).addClass('animate-like');
  });





});
