
if(CurentPageName()=="portfolio-kat.php")
{
    // PotKatSira();
    PotKatSira2();
}

function PotKatSira2(){
    let opt=`<option value="" disabled="disabled" selected="selected">Sec</option>`;
    let PKS=[];

    $.ajax({
        url:"../settings/code/portfolio_kat.php",
        data:{pks:true},
        method:"POST",

        success: function(data){
            PKS=JSON.parse(data);
            console.log(data)
            console.log(PKS)
            for(let i=1;i<=20;i++){
               if(PKS.indexOf(i) == -1)
                opt+=`<option value="${i}">${i}</option>`
               
               else
                opt+=`<option disabled="disabled" value="${i}">${i}</option>`
               
            }
            document.getElementById("sira").innerHTML=opt;
  
        }
    })
}

function KatStatus(id){
    let message="";
    $.ajax({
        url:"../settings/code/portfolio_kat.php",
        data:{ks:true,id:id},
        method:"POST",
        success: function(data){
            console.log(data)
            if(data){

                message='<div class="alert alert-info" role="alert">Status Dəyişdirildi</div>';
                document.getElementById("StatusMessage").innerHTML=message;
                setTimeout(function(){
                    document.getElementById("StatusMessage").innerHTML="";
                },2000)
            }
            else{
                message='<div class="alert alert-info" role="alert">Status Dəyişdirilmədi</div>';
                document.getElementsByClassName("StatusMessage").innerHTML=message;
                setTimeout(function(){
                    document.getElementById("StatusMessage").innerHTML="";
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