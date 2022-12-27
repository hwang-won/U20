<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="/fontawesome/js/all.min.js"></script>
    <title>signup</title>
  </head>

  <body>
    <!-- contents 본문 내용 -->
    <div class="container pbottom--0">
      <!-- <div class="contents something"> -->
      <div class="something ptop--40">
        <div class="mypage">
          <h3>국가 등록</h3>
          <hr />
          <form action="#" method="post" class="form">
            <div class="input_row">
              <p>국가 고유 아이디</p>
              <input
                placeholder=""
                type="text"
                name="id"
                class="input_text"
                value=""
                maxlength="16"
                required=""
              />
            </div>
            <!-- #2 PASSWORD VERIFICATION -->
            <script>
              const check = function () {
                if (
                  document.getElementById("pw").value ==
                  document.getElementById("cpassword").value
                ) {
                  document.getElementById("message").style.color = "green";
                  document.getElementById("message").innerHTML =
                    "비밀번호가 같습니다.";
                } else {
                  document.getElementById("message").style.color = "red";
                  document.getElementById("message").innerHTML =
                    "비밀번호가 다릅니다.";
                }
              };
            </script>
            <div class="input_row">
              <p>국가 코드</p>
              <input
                placeholder=""
                type="text"
                name="pw"
                id="pw"
                class="input_text"
                value=""
                minlength="4"
                maxlength="20"
                required=""
                onkeyup="check();"
              />
            </div>
            <div class="input_row">
              <p>국가 이름</p>
              <input
                placeholder=""
                type="text"
                name="gender"
                class="input_text"
                value=""
                minlength="4"
                maxlength="20"
                required=""
                onkeyup="check();"
              />
            </div>
            <div class="input_row">
              <p>국가 이름(한글)</p>
              <input
                placeholder=""
                type="text"
                name="round"
                class="input_text"
                value=""
                minlength="4"
                maxlength="20"
                required=""
                onkeyup="check();"
              />
            </div>
            <span id="message"></span>

            <div class="signup_submit">
              <button type="submit" class="btn_login" name="signup">
                <span>등록</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
