
function CurentPageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}

function SliderSil(id){
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
