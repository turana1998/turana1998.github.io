
function CurentPageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}

function Redakte(id,i){
    let elmt=document.getElementsByClassName("PortKateqoriya")[i].getElementsByTagName("td");
    console.log(elmt);
    let ids=elmt[0].textContent;
    let ad=elmt[1].textContent;
    document.getElementById("name").value=ad;
    document.getElementById("id").value=ids;

}
function Redakte_port(id,i){
  let elmt=document.getElementsByClassName("PortfolioSiyahi")[i].getElementsByTagName("td");
  console.log(elmt);
  let ids=elmt[0].textContent;
  let ad=elmt[2].textContent;
  let link=elmt[4].textContent;
  document.getElementById("name").value=ad;
  document.getElementById("id").value=ids;
  document.getElementById("link").value=link;

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
function PortSil(id){
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