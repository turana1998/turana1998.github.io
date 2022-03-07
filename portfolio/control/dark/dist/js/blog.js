
function CurentPageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}
function Redakte(id,i){
    let elmt=document.getElementsByClassName("BlogKateqoriya")[i].getElementsByTagName("td");
    console.log(elmt);
    let ids=elmt[0].textContent;
    let ad=elmt[1].textContent;
    document.getElementById("name").value=ad;
    document.getElementById("id").value=ids;

}
function RedakteBlog(id,i){
  let elmt=document.getElementsByClassName("Blog")[i].getElementsByTagName("td");
  console.log(elmt);
  let ids=elmt[0].textContent;
  let ad=elmt[2].textContent;
  let desc=elmt[4].textContent;
  let slug=elmt[5].textContent;
  document.getElementById("name").value=ad;
  document.getElementById("id").value=ids;
  document.getElementById("desc").value=desc;
  document.getElementById("slug").value=slug;

}
function KatSil(id){
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
function BlogSil(id){
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
function KatStatus(id){
  let message="";
  $.ajax({
      url:"../settings/code/blog-status.php",
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
function BlogStatus(id){
  let message="";
  $.ajax({
      url:"../settings/code/blog-status.php",
      data:{ks:true,id:id},
      method:"POST",
      success: function(data){
          console.log(data)
          if(data){

              message='<div class="alert alert-info" role="alert">Status Dəyişdirildi</div>';
              document.getElementById("BlogStatusMessage").innerHTML=message;
              setTimeout(function(){
                  document.getElementById("BlogStatusMessage").innerHTML="";
              },2000)
          }
          else{
              message='<div class="alert alert-info" role="alert">Status Dəyişdirilmədi</div>';
              document.getElementsByClassName("BlogStatusMessage").innerHTML=message;
              setTimeout(function(){
                  document.getElementById("BlogStatusMessage").innerHTML="";
              },2000)
          }
         
         
      },
      error:function(x,sts){
          alert("error");
      }

  })
}
