// 경기 결과 숫자만 입력 및 자동 양식 스크립트
//트랙경기 포맷
function trackFinal(obj) {
  obj.value = comma(uncomma(obj.value));
  rankcal1();
}
//필드경기 포맷
function field1Format(obj) {
  obj.value = comma(uncomma(obj.value));
  fieldFinal(obj);
  rankcal();
}
//멀리뛰기,삼단뛰기 전용 포맷
function field2Format(obj) {
  obj.value = comma(uncomma(obj.value));
  fieldFinal2(obj);
  rankcal();
}
//필드 바람
function windFormat(obj) {
  obj.value = comma(uncomma1(obj.value));
}

function comma(str) {
  str = String(str);
   if (str.length < 5) {
     return str.replace(/(\B)(?=(?:\d{2})+(?!\d))/g, "$1.");
   } else {
     return str.replace(/(\d+)(\d{2})(\d{2})/g, "$1:$2.$3");
   }
}

function uncomma(str) {
  str = String(str);
  return str.replace(/[^\d]+/g, "");
}
//바람전용
function uncomma1(str) {
  str = String(str);
  return str.replace(/[^-\d]+/g, "");
}
//필드경기 최고결과
function fieldFinal(obj) {
  let top = "0";
  for (i = 3; i < 9; i++) {
    if (
      parseFloat(top) <
      parseFloat(
        obj.parentElement.parentElement.children[i].firstElementChild.value
      )
    ) {
      top = obj.parentElement.parentElement.children[i].firstElementChild.value;
    }
  }
  obj.parentElement.parentElement.children[9].firstElementChild.value = top;
}
// 멀리뛰기,삼단뛰기 경기에서 최고 기록 선정
function fieldFinal2(obj) {
  let top = "0";
  let wind = "";
  let a = obj.parentElement.parentElement;
  for (i = 3; i < 9; i++) {
    if (parseFloat(top) < parseFloat(a.children[i].firstElementChild.value)) {
      top = a.children[i].firstElementChild.value;
      wind = a.nextElementSibling.children[i - 3].firstElementChild.value;
    }
  }
  a.children[9].firstElementChild.value = top;
  a.nextElementSibling.children[6].firstElementChild.value = wind;
}
//등수 자동 배정 내림차순
function rankcal() {
  let re = document.querySelectorAll("#result"); //결과 요소 가져옴
  let ran = document.querySelectorAll("#rank"); //둥수 요소가져옴
  let arr1 = {};
  for (i = 0; i < re.length; i++) {
    let k = i;
    arr1[k] = re[i].value; //객체에 결과 저장
  }
  let keysSorted = Object.keys(arr1).sort(function (a, b) {
    return arr1[b] - arr1[a];
  }); //정렬
  for (i = 0; i < ran.length; i++) {
    ran[keysSorted[i]].value = i + 1; //등수대로 기입
  }
}
//등수 자동 배정 올림차순
function rankcal1() {
  let re = document.querySelectorAll("#result"); //결과 요소 가져옴
  let ran = document.querySelectorAll("#rank"); //둥수 요소가져옴
  let arr1 = {};
  for (i = 0; i < re.length; i++) {
    let k = i;
    arr1[k] = re[i].value; //객체에 결과 저장
  }
  let keysSorted = Object.keys(arr1).sort(function (a, b) {
    if (arr1[a] == "") {
      return true;
    }
    if (arr1[b] == "") return false;
    return uncomma(arr1[a]) - uncomma(arr1[b]);
  }); //올림차순 정렬
  for (i = 0; i < ran.length; i++) {
    ran[keysSorted[i]].value = i + 1; //등수대로 기입
  }
}
