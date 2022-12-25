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
