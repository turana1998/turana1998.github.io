function CurentPageName(){
   let path=location.pathname;
   let page=path.split("/").pop();
   return page;
}
function SifreQur() {
    var result= '';
    var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!#@$%^&*()_+';
    var charactersLength = characters.length;
    for ( var i = 0; i < 8; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
        charactersLength));
   }
   document.getElementById("sifre").value=result;
}
var mesaj= document.getElementsByClassName("sifremesaj")[0];
function BtnDisabled(){
   let pass1=document.getElementById("yenisifre").value;
   let pass2=document.getElementById("tekrarsifre").value;
   if(pass1!=undefined || pass1!=null || pass2!=undefined || pass2!=null )
   {
      document.getElementsByClassName("pass")[0].disabled = false;
   }
}
function SifreYoxla(){
   let pass1=document.getElementById("yenisifre").value;
   let pass2=document.getElementById("tekrarsifre").value;
   BtnDisabled();
  let cls='';
  let msg='';


  if(pass1===pass2){
     console.log(pass1)
     msg="Eynidir";
     cls="secondary";
  }
  else{
     msg="Eyni deyil";
     cls="danger"
  }
    mesaj.innerHTML=`<div class="alert alert-${cls}" role="alert">${msg}</div>`
}
function SifreGucu(){
   let pass1=document.getElementById("yenisifre");
   BtnDisabled();
   if (pass1.value.match(/^(?=(?:.*[A-Z]))(?=(?:.*[a-z]))(?=(?:.*[0-9]))(?=(?:.*[@$!%*#?&]))\S{8,}$/)) {
      mesaj.innerHTML=`<div class="alert alert-success" role="alert">Guclu dur</div>`;
   }
   else{
      mesaj.innerHTML=`<div class="alert alert-danger" role="alert">Guclu deyil</div>`
   }


}
function AdminSil(id){
   swal({
       title: "Are you sure?",
       text: "Once deleted, you will not be able to recover this imaginary file!",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         location.href=CurentPageName()+`?id=${id}&sil=ok`;
         console.log(CurentPageName());
       } else {
         swal("Your imaginary file is safe!");
       }
     });
}

function KohneParol(sifre,email){
   BtnDisabled();
   let message="";
   $.ajax({
       url:"../settings/code/istifadeci-ajax.php",
       data:{ksifre:true,sifre:sifre,email:email},
       method:"POST",
       success: function(data){
           console.log(data);
           if(data==0){
            mesaj.innerHTML=`<div class="alert alert-danger" role="alert">Sifre sehvdir</div>`
           }
           else{
            mesaj.innerHTML=`<div class="alert alert-success" role="alert">Sifre duzgundur</div>`
           }
       },
       error:function(x,sts){
           alert("error");
       }
 
   })
 }