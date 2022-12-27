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
    <script type="text/javascript" src="js/sorting.js"></script>
    <title>U20</title>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>

    <!-- sidebar -->
    <?php include 'sidebar.php' ?>


    <div class="container">
        <div class="something contents">
            <h2 class="country_h2">국가별 순위보기</h2>
            <div class="table_wrap">
                <div class="btn_base base_mar" style="float: left;">
                    <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력">
                </div>
                <div class="selectArea float_r">
                    <div class="search" style="width: 260px; ">
                        <input type="text" id="search_coach" class="word" name="search_coach" placeholder="검색어를 입력해주세요"
                            maxlength="30" style="width: 260px;
                        height: 40px;
                        padding-left: 20px;
                        font-size: var(--font-small);">
                        <button type="submit" class="btn_search" title="검색"></a>
                    </div>
                </div>
            </div>
            <!-- select 선택에 따른 종목 결과 나열 -->
            <div class="tbl_area">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-hover team_table kk">
                    <colgroup>
                        <col style="width: 50%" />
                        <col style="width: 10%" />
                        <col style="width: 10%" />
                        <col style="width: 10%" />
                        <col style="width: 10%" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">국가</th>
                            <th onclick="sortTable(1)">금</th>
                            <th onclick="sortTable(2)">은</th>
                            <th onclick="sortTable(3)">동</th>
                            <th onclick="sortTable(4)">합계</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>대한민국</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>이란</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>일본</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>카자하스탄</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>몽골</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>인도</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>대한민국</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>대한민국</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>대한민국</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>대한민국</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>24</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="page_wrap">
                <div class="page_nation">
                    <a class="arrow pprev" href="#"></a>
                    <a class="arrow prev" href="#"></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                    <a href="#">9</a>
                    <a href="#">10</a>
                    <a class="arrow next" href="#"></a>
                    <a class="arrow nnext" href="#"></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <?php include 'footer.php'; ?>
    <script src="js/main.js"></script>
</body>

</html>