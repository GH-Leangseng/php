$(document).ready(function(){
      $(".box_food").click(function(){
                var get_view = parseInt($(this).find(".text p span").text());
                var id = parseInt($(this).find(".text #id").val());
        
                get_view += 1;
                $.ajax({
                        url: "update_view.php",
                        data : {
                            count1 : get_view,
                            id1 : id
                        },
                       
                        method: 'Post',
                        success : function(){
                                alert("success "+x);
                        }
                })
                        
      })

      
})