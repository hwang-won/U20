//테이플 정렬 함수
function sortTable(n) {
  var table,
    rows,
    switching,
    o,
    x,
    y,
    shouldswitch,
    dir,
    switchcount = 0;
  table = document.querySelector(".team_table");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");

    for (o = 1; o < rows.length - 1; o++) {
      shouldswitch = false;
      x = rows[o].getElementsByTagName("TD")[n];
      y = rows[o + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldswitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldswitch = true;
          break;
        }
      }
    }

    if (shouldswitch) {
      rows[o].parentNode.insertBefore(rows[o + 1], rows[o]);
      switching = true;
      switchcount++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
//성별에 따른 종목 리스트 변경
function changesport(e){
  let c=document.querySelector("#sport");
  let d=c.children
  for(i=0;i<d.length;i++){
    if(e.value==2){
      if(d[i].value== 8|| d[i].value== 11||d[i].value== 22){
        d[i].style.display="none"
        d[i-1].style.display="block"
      }
    }else if(e.value==1){
      if(d[i].value== 7|| d[i].value== 10||d[i].value== 21){
        d[i].style.display="none"
        d[i+1].style.display="block"
      }
    }  
  }
}
function changesport2(){
  let a=document.querySelector("#sex");
  let b=document.querySelector("#recordtype");
  let c=document.querySelector("#sport");
  let d=c.children
  if(a.value==1){
    if(b.value==1){
      for(i=0;i<d.length;i++){
        if(d[i].value== 7|| d[i].value== 10||d[i].value== 21||(d[i].value>12 && d[i].value<21)){
          d[i].style.display="none"
          continue
        }
          d[i].style.display="block"
      }
    }else if(b.value==2){
      for(i=0;i<d.length;i++){
        if(d[i].value== 7|| d[i].value== 10||d[i].value== 21||(d[i].value>0 && d[i].value<13) || d[i].value> 22){
          d[i].style.display="none"
          continue
        }
          d[i].style.display="block"
      }
    }else{
      for(i=0;i<d.length;i++){
        if(d[i].value== 7|| d[i].value== 10||d[i].value== 21){
          d[i].style.display="none"
          continue
        }
          d[i].style.display="block"
      }
    }
  }else if(a.value==2){
    if(b.value==1){

    }else if(b.value==2){

    }else{

    }
  }else{
    if(b.value==1){

    }else if(b.value==2){

    }else{

    }
  }
}