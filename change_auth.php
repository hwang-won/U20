<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="/fontawesome/js/all.min.js"></script>
    <title>change_auth</title>
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
                <h3>권한 변경</h3>
                <hr />
                <div class="mypage_notice">
                    <h5>권한을 변경해 주세요.</h5>
                    <p>- authEntrys : 참가자 관리</p>
                    <p>- authAthletes : 선수 관리</p>
                    <p>- authSchedules : 경기 관리</p>
                    <p>- authRecords : 기록 관리</p>
                    <p>- authStatics : 통계 관리</p>
                </div>

                <form action="#" method="post" class="form">
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
                            <span>변경하기</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?> 
</body>

</html>