// // 심판 엑셀 입력

// $(document).on("click", ".table tbody tr td .btn-success", function () {
//   var html = "";
//   html += "<tr><td class='txtcode'> </td>";
//   html += "<td class='txtdesc'></td>";
//   html += "<td class='txtprice'></td>";
//   html += "<td class='txtqty' ></td>";
//   html +=
//     "<td><button type='button' class='btn btn-success'>Add</button> <button class='btn btn-danger' type='button'>Remove</button> </td>";
//   html += "</tr>";

//   $(this).parent().parent().after(html);
// });

// $(document).on("click", ".table tbody tr td .btn-danger", function () {
//   $(this).parent().parent().remove();
// });

// var ExcelToJSON = function () {
//   this.parseExcel = function (file) {
//     var reader = new FileReader();

//     reader.onload = function (e) {
//       var data = e.target.result;
//       var workbook = XLSX.read(data, {
//         type: "binary",
//       });
//       workbook.SheetNames.forEach(function (sheetName) {
//         // Here is your object
//         var XL_row_object = XLSX.utils.sheet_to_row_object_array(
//           workbook.Sheets[sheetName]
//         );
//         var json_object = JSON.stringify(XL_row_object);
//         productList = JSON.parse(json_object);

//         var rows = $(".table tbody tr");
//         console.log(productList);
//         for (i = 0; i < productList.length; i++) {
//           var columns = Object.values(productList[i]);
//           rows.eq(i).find("td.judge_no").text(columns[0]);
//           rows.eq(i).find("td.judge_name").text(columns[1]);
//           rows.eq(i).find("td.judge_nation").text(columns[2]);
//           rows.eq(i).find("td.judge_division").text(columns[3]);
//           rows.eq(i).find("td.judge_gender").text(columns[4]);
//           rows.eq(i).find("td.judge_birth").text(columns[5]);
//           rows.eq(i).find("td.judge_age").text(columns[6]);
//           rows.eq(i).find("td.judge_role").text(columns[7]);
//           rows.eq(i).find("td.judge_attendent_game").text(columns[8]);
//         }
//       });
//     };
//     reader.onerror = function (ex) {
//       console.log(ex);
//     };

//     reader.readAsBinaryString(file);
//   };
// };

// function handleFileSelect(evt) {
//   var files = evt.target.files; // FileList object
//   var xl2json = new ExcelToJSON();
//   xl2json.parseExcel(files[0]);
// }

// document
//   .getElementById("upload_judge")
//   .addEventListener("change", handleFileSelect, false);
