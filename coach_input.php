<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="/fontawesome/js/all.min.js"></script>
    <title>U20</title>
</head>

<body>

    <!-- contents 본문 내용 -->
    <div class="container">
        <!-- <div class="contents something"> -->
        <div class="something_1">
            <div class="mypage">
                <h3>코치 정보 등록</h3>
                <hr />

                <div class="row">
                    <div class="text-center">
                        <img src="img/judge_image.jpg" class="image_resize" alt="avatar" />
                        <h6>새로운 이미지를 입력해주세요</h6>

                        <input type="file" class="form-control" />
                    </div>
                </div>
                <form action="#" method="post" class="form">
                    <div class="input_row">
                        <span class="input_guide">이름</span>
                        <input type="text" name="name" id="name" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">국가</span>
                        <input type="text" name="nation" id="nation" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">소속</span>
                        <input type="text" name="judge_division" id="judge_division" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">성별</span>
                        <input type="text" name="judge_gender" id="judge_gender" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">생년월일</span>
                        <input type="text" name="judge_birth" id="judge_birth" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">나이</span>
                        <input type="text" name="judge_age" id="judge_age" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">직무</span>
                        <input type="text" name="judge_role" id="judge_role" value="" class="input_text" />
                    </div>
                    <div class="input_row">
                        <span class="input_guide">참가경기</span>
                        <div class="attendent_game">
                            <form action="" method="post" name="judge_game">
                                <div class="input_row">
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="100m" />
                                            <span>100m</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="200m" />
                                            <span>200m</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="400m" />
                                            <span>400m</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="800m" />
                                            <span>800m</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="1500m" />
                                            <span>1500m</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="3000m" />
                                            <span>3000m</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="5000m" />
                                            <span>5000m</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="10000m" />
                                            <span>10000m</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="3000mSC" />
                                            <span>3000m 장애물</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="100m_hurdle" />
                                            <span>100m 허들</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="110m_hurdle" />
                                            <span>110m 허들</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="3000m" />
                                            <span>400m 허들</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="highjump" />
                                            <span>높이뛰기</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="polevault" />
                                            <span>장대 높이뛰기</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="longjump" />
                                            <span>멀리뛰기</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="triplejump" />
                                            <span>세단뛰기</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="shotput" />
                                            <span>투포환</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="discusthrow" />
                                            <span>원반던지기</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="hammerthrow" />
                                            <span>해머던지기</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="javelinthrow" />
                                            <span>창던지기</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="heptathlon" />
                                            <span>7종경기(여)</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="decathlon" />
                                            <span>10종경기(남)</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="racewalk" />
                                            <span>경보</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="4x100relay" />
                                            <span>4x100 릴레이</span>
                                        </label>
                                    </div>
                                    <div class="form_check">
                                        <label>
                                            <input type="checkbox" id="4x400relay" />
                                            <span>4x400 릴레이</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="4x400mR" />
                                            <span>4x400 믹스릴레이</span>
                                        </label>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <div class="btn_base base_mar col_right">
                        <button type="submit" class="btn_add" name="judge_edit">
                            <span class="btn_txt bold">확인</span>
                        </button>
                    </div>
                    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
                    <script src="chosen.jquery.js" type="text/javascript"></script>
                    <script src="prism.js" type="text/javascript" charset="utf-8"></script>
                    <script src="init.js" type="text/javascript" charset="utf-8"></script>
                </form>
            </div>
        </div>
    </div>

    <script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="chosen.jquery.js" type="text/javascript"></script>
    <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>