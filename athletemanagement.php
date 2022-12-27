<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="/fontawesome/js/all.min.js"></script>
    <title>U20</title>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>

    <!-- sidebar -->
    <?php include 'sidebar.php' ?>
    
    <!-- contents 본문 내용 -->
    <div class="container">
        <div class="contents main-table">
            <div class="country_table space">
                <div class="team_tabs-content tab">
                    <table class="table table-hover team_table">
                        <h2 class="country_h2">선수 목록</h2>
                        <div class="selectArea float_l">
                            <div class="btn_base base_mar col_left">
                                <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력" />
                            </div>
                        </div>
                        <div class="selectArea float_r">
                            <div class="select_box mr10">
                                <select class="d_select" title="이름" style="width: 140px;">
                                    <option value="1">이름</option>
                                    <option value="2">천효민</option>
                                    <option value="3">이은비</option>
                                </select>
                            </div>

                            <div class="select_box mr10">
                                <select class="d_select" title="성별" style="width: 90px;">
                                    <option value="" hidden="">성별</option>
                                    <option value="1">m</option>
                                    <option value="2">f</option>
                                </select>
                            </div>

                            <div class="select_box mr10">
                                <select class="d_select" title="소속" style="width: 122px;">
                                    <option value="" hidden="">소속</option>
                                    <option value="1">붉은악마</option>
                                </select>
                            </div>

                            <div class="select_box mr10">
                                <select class="d_select" title="구분" style="width: 172.667px;">
                                    <option value="" hidden="">참가 경기</option>
                                    <option value="" disabled="">단거리달리기</option>
                                    <option value="1">100M</option>
                                    <option value="2">200M</option>
                                    <option value="3">400M</option>
                                    <option value="" disabled="">중/장거리</option>
                                    <option value="4">800M</option>
                                    <option value="5">1500M</option>
                                    <option value="6">5000M</option>
                                    <option value="7">10000M</option>
                                    <option value="8">3000M 장애물</option>
                                    <option value="" disabled="">허들달리기</option>
                                    <option value="9">110M 허들</option>
                                    <option value="10">400M 허들</option>
                                    <option value="" disabled="">점프경기</option>
                                    <option value="11">높이뛰기</option>
                                    <option value="12">장대높이뛰기</option>
                                    <option value="13">멀리뛰기</option>
                                    <option value="14">삼단뛰기</option>
                                    <option value="" disabled="">던지기</option>
                                    <option value="15">투포환</option>
                                    <option value="16">원반던지기</option>
                                    <option value="17">해머던지기</option>
                                    <option value="18">창던지기</option>
                                    <option value="" disabled="">종합</option>
                                    <option value="19">10종 경기</option>
                                    <option value="" disabled="">경보</option>
                                    <option value="20">10000M 경보</option>
                                    <option value="" disabled="">릴레이</option>
                                    <option value="21">4x100M 릴레이</option>
                                    <option value="22">4x400M 릴레이</option>
                                    <option value="23">4x400M 혼성</option>
                                </select>
                            </div>

                            <div class="search" style="width: 50px;">
                                <button type="submit" class="btn_search" title="검색">
                                </button>
                            </div>
                        </div>

                        <colgroup>
                            <col width="auto" />
                            <col width="auto" />
                            <col width="auto" />
                            <col width="auto" />
                            <col width="auto" />
                            <col width="auto" />
                        </colgroup>
                </div>
            </div>
            <colgroup>
                <col width="auto" />
                <col width="auto" />
                <col width="auto" />
                <col width="auto" />
                <col width="auto" />
                <col width="auto" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">구분</th>
                    <th colspan="3" scope="col">이름</th>
                    <th colspan="2" scope="col">국가</th>
                    <th colspan="2" scope="col">지역</th>
                    <th colspan="3" scope="col">소속</th>
                    <th colspan="2" scope="col">
                        성별
                    </th>
                    <th colspan="4" scope="col">
                        생년월일
                    </th>
                    <th colspan="2" scope="col">나이</th>
                    <th colspan="3" scope="col">
                        프로필사진
                    </th>
                    <th colspan="4" scope="col">
                        참가 경기
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">0</td>
                    <td colspan="3" scope="col">천효민</td>
                    <td colspan="2" scope="col">Korea</td>
                    <td colspan="2" scope="col">서울</td>
                    <td colspan="3" scope="col">붉은 악마</td>
                    <td colspan="2" scope="col">m</td>
                    <td colspan="4" scope="col">2001-04-04</td>
                    <td colspan="2" scope="col">23</td>
                    <td colspan="3" scope="col">X</td>
                    <td colspan="4" scope="col">
                        선수 참가 경기
                    </td>
				</tr>
                <tr>
                    <td scope="col">1</td>
                    <td colspan="3" scope="col">
                        이은비
                    </td>
                    <td colspan="2" scope="col">
                        Korea
                    </td>
                    <td colspan="2" scope="col">
                        서울
                    </td>
                    <td colspan="3" scope="col">
                        붉은 악마
                    </td>
                    <td colspan="2" scope="col">f</td>
                    <td colspan="4" scope="col">
                        2001-01-01
                    </td>
                    <td colspan="2" scope="col">23</td>
                    <td colspan="3" scope="col">X</td>
                    <td colspan="4" scope="col">
                        선수 참가 경기
                    </td>
                </tr>
			</tbody>
            </table>
            <div class="selectArea float_r">
                <div class="btn_base base_mar col_right">
                    <input class="btn_add btn_txt bold" type="button"
                        onclick="window.open('newalthete.php','창 이름','width=900,height=512,location=no,status=no,scrollbars=yes')"
                        value="등록" class="btn_view">
                </div>
                <colgroup>
                    <col width="auto" />
                    <col width="auto" />
                    <col width="auto" />
                    <col width="auto" />
                    <col width="auto" />
                    <col width="auto" />
                </colgroup>
            </div>
        </div>
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