function PortStatus(id){
    let message="";
    $.ajax({
        url:"../settings/code/portfolio_kat.php",
        data:{ks:true,id:id},
        method:"POST",
        success: function(data){
            console.log(data)
            if(data){

                message='<div class="alert alert-info" role="alert">Status Dəyişdirildi</div>';
                document.getElementById("PortStatusMessage").innerHTML=message;
                setTimeout(function(){
                    document.getElementById("PortStatusMessage").innerHTML="";
                },2000)
            }
            else{
                message='<div class="alert alert-info" role="alert">Status Dəyişdirilmədi</div>';
                document.getElementsByClassName("PortStatusMessage").innerHTML=message;
                setTimeout(function(){
                    document.getElementById("PortStatusMessage").innerHTML="";
                },2000)
            }
           
           
        },
        error:function(x,sts){
            alert("error");
        }

    })
}

function CurentPageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}