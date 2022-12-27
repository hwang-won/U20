<!DOCTYPE html>
<html lang="en">

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
    <!-- header -->
    <?php include 'header.php' ?>

    <!-- sidebar -->
    <?php include 'sidebar.php' ?>

    <!-- contents 본문 내용 -->
    <div class="container">
        <div class="contents something ptop--40">
            <div class="mypage">
                <h3>계정 생성</h3>
                <hr />
                <div class="mypage_notice">
                    <h5>새로운 계정의 정보를 입력해 주세요.</h5>
                    <p>- 비밀번호는 4 ~ 20 자로 설정해 주세요.</p>
                </div>
                <form action="#" method="post" class="form">
                    <div class="input_row">
                        <input placeholder="아이디" type="text" name="id" class="input_text" value="" maxlength="16"
                            required="" />
                    </div>
                    <!-- #2 PASSWORD VERIFICATION -->
                    <script>
                        const check = function () {
                            if (
                                document.getElementById("pw").value ==
                                document.getElementById("cpassword").value
                            ) {
                                document.getElementById(
                                    "message"
                                ).style.color = "green";
                                document.getElementById(
                                    "message"
                                ).innerHTML = "비밀번호가 같습니다.";
                            } else {
                                document.getElementById(
                                    "message"
                                ).style.color = "red";
                                document.getElementById(
                                    "message"
                                ).innerHTML = "비밀번호가 다릅니다.";
                            }
                        };
                    </script>
                    <div class="input_row">
                        <input placeholder="비밀번호" type="password" name="pw" id="pw" class="input_text" value=""
                            minlength="4" maxlength="20" required="" onkeyup="check();" />
                    </div>
                    <div class="input_row">
                        <input placeholder="비밀번호 재확인" type="password" name="cpassword" id="cpassword" class="input_text"
                            value="" minlength="4" maxlength="20" required="" onkeyup="check();" />
                    </div>
                    <span id="message"></span>

                    <div class="input_row">
                        <input placeholder="이름" type="text" name="name" class="input_text" value="" maxlength="50"
                            required="" />
                    </div>

                    <h3>권한 설정</h3>
                    <div class="input_row">
                        <div class="form_check">
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" required />
                                <span>authEntrys</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>읽기</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>수정/삭제/등록</span>
                            </label>
                        </div>

                        <div class="form_check">
                            <label>
                                <input type="checkbox" name="auth" value="2" id="authAthletes" class="" />
                                <span>authAthletes</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>읽기</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>수정/삭제/등록</span>
                            </label>
                        </div>

                        <div class="form_check">
                            <label>
                                <input type="checkbox" name="auth" value="3" id="authSchedules" class="" />
                                <span>authSchedules</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>읽기</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>수정/삭제/등록</span>
                            </label>
                        </div>

                        <div class="form_check">
                            <label>
                                <input type="checkbox" name="auth" value="4" id="authRecords" class="" />
                                <span>authRecords</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>읽기</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>수정/삭제/등록</span>
                            </label>
                        </div>

                        <div class="form_check">
                            <label>
                                <input type="checkbox" name="auth" value="5" id="authStatics" class="" />
                                <span>authStatics</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>읽기</span>
                            </label>
                            <label>
                                <input type="checkbox" name="auth" value="1" id="authEntrys" class="" />
                                <span>수정/삭제/등록</span>
                            </label>
                        </div>
                    </div>

                    <div class="signup_submit">
                        <button type="submit" class="btn_login" name="signup">
                            <span>확인</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>

</html>