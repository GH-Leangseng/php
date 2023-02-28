$(document).ready(function(){

        // $(".slide").click(function(){
        //      $(this).find("ul").slideToggle();
        // })  
        
        //hide reupdate
        $(".add_btn").click(function(){
                $(".btn_reupdate").hide();
                $(".submit").show();
                //set value with defualt " ";
                $("#username").val("");
                $("#Password").val("");
                $("#Email").val("");
                $("#problem").val("");
                $("#comment").val("");
        })
        //hide submit
        $(".update").click(function(){
               $(".btn_reupdate").show();
                $(".submit").hide();
        })

        // get values to form
        var id = "";
        var name1 = "";
        var password = "";
        var problem = "";
        var email = "";
        var comment = "";
        $(".c-update").click(function(){
                problem = $(this).parents("tr").find("td").eq(1).text();
                name1 = $(this).parents("tr").find("td").eq(2).text();
                password = $(this).parents("tr").find("td").eq(3).text();
                email = $(this).parents("tr").find("td").eq(4).text();
                comment = $(this).parents("tr").find("td").eq(5).text();
                $("#username").val(name1);
                $("#Password").val(password);
                $("#Email").val(email);
                $("#problem").val(problem);
                $("#comment").val(comment);
                //hide sumbit 
                $(".submit").hide();
                $(".btn_reupdate").show();
        })

        $(".search").click(function(){
                $(".result_auto").hide();
        })

        
        

    
})
