<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="/fontawesome/js/all.min.js"></script>
    <!--Data Tables-->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="useDataTables.js"></script>
    <script>
        // 경기 결과 숫자만 입력 및 자동 양식 스크립트
        function inputNumberFormat(obj) {
            obj.style.textAlign = "right";
            obj.style.width = "35px";
            if (obj.value.length == 0) {
                obj.style.textAlign = "left";
                obj.style.width = "auto";
            }

            if (obj.value.length == obj.maxLength) {
                obj.nextElementSibling.nextElementSibling.focus();
                //   console.log(obj.nextElementSibling)
            } else {
                obj.value = comma(uncomma(obj.value));
            }
        }
        function inputNumberFormat2(obj) {
            if (obj.value.length > 0) {
                obj.style.textAlign = "right";
                obj.style.width = "35px";
            } else {
                obj.style.textAlign = "left";
                obj.style.width = "auto";
            }
            obj.value = comma(uncomma(obj.value));
        }
        function comma(str) {
            str = String(str);
            return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, "$1.");
        }

        function uncomma(str) {
            str = String(str);
            return str.replace(/[^\d]+/g, "");
        }
    </script>
    <title>U20</title>
</head>

<body>

    <!-- contents 본문 내용 -->
    <div class="container">
        <!-- class="contents something" -->
        <div class="something" style="padding: 100px 60px 60px 60px">
            <form action="#" method="post" class="form">
                <div class="input_row">
                    <input placeholder="경기 이름" type="text" name="gamename" class="input_text" value="원반던지기 1차"
                        maxlength="16" required="" />
                </div>
                <div class="input_row">
                    <input placeholder="심판 이름" type="text" name="refereename" class="input_text" value="권 산"
                        maxlength="30" required="" />
                </div>
                <div class="input_row">
                    <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="" maxlength="30"
                        required="" />
                </div>
                <div class="input_row">
                    <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value="" maxlength="50"
                        required="" />
                </div>
                <div class="input_row">
                    <input placeholder="경기 등수" type="number" name="emdtn" class="input_text" value="" min="1" max="12"
                        required="" />
                </div>
                <div class="input_row">
                    <input placeholder="경기 결과" type="text" name="gameresult" class="input_text" value="" maxlength="3"
                        required="" onkeyup="inputNumberFormat(this)" style="
                                float: left;
                                width: 200px;
                                padding-right: 5px;
                            " />
                    <div style="float: left">.</div>
                    <input placeholder="" type="text" name="gameresult" class="input_text" value="" maxlength="3"
                        required="" onkeyup="inputNumberFormat2(this)" style="
                                width: auto;
                                padding-left: 5px;
                                float: left;
                                margin-right: 5px;
                            " />
                    <div style="float: left; width: auto">m</div>
                </div>
                <h3>신기록 여부</h3>
                <div class="input_row">
                    <label>
                        <input type="radio" name="new" value="1" id="nope" class="radiobox" required="" />
                        <span>해당없음</span>
                    </label>
                    <label>
                        <input type="radio" name="new" value="2" id="competitonRecord" class="radiobox" required="" />
                        <span>대회신기록</span>
                    </label>
                    <label>
                        <input type="radio" name="new" value="3" id="asiaRecord" class="radiobox" required="" />
                        <span>아시아신기록</span>
                    </label>
                    <label>
                        <input type="radio" name="new" value="4" id="worldRecord" class="radiobox" required="" />
                        <span>세계신기록</span>
                    </label>
                </div>
                <div class="input_row">
                    <input placeholder="비고" type="text" name="gamepass" class="input_text" value="" maxlength="100" />
                </div>
                <div class="signup_submit">
                    <button type="submit" class="btn_login" name="addresult">
                        <span>확인</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>

</html>