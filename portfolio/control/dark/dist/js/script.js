function GetUrlQuery(){
    let url_string=location.href;
    let url=new URL(url_string);
    let st=url.searchParams.get("status");
    console.log("kk");
    if(st=="ok"){
        swal({
            title: "Good job !",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
          });
        setTimeout(Redirect,1500);
    }
    if(st=="no"){
        swal({
            title: "Sorry !",
            text: "You clicked the button!",
            icon: "error",
            button: "Aww yiss!",
          });
        setTimeout(Redirect,1500);
    }
    function Redirect(){
        location.href=location.protocol+"//"+location.host+location.pathname;
        console.log("jdd")
    }

}
GetUrlQuery();