<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>board_list.php</title>
    </head>
    <body>
        <h1 class="display-4">게시글 리스트 페이지</h1> <!-- 게시글 리스트 페이지 -->
        <?php
        // DB 연결 가져오기.
        require '../auth/conn.php';

        // idx를 이용하여 하나만 검색하는 SQL 쿼리문
        $sql = 'SELECT * FROM sujin_board';

        // DB 실행
        $result = mysqli_query($conn, $sql);

        // DB 결과, 이중 배열로 I X 3크기임 [I][0] -> idx, [I][1] -> title, [I][2] -> memo
        $row = mysqli_fetch_all($result);
        ?>
        <table>
            <tr>
                <td>idx</td>
                <td>title</td>
            </tr>
            <!-- For문을 이용한 리스트 순회 -->
            <?php for ($i = 0; $i < count($row); $i++) { ?>
                <tr>
                    <td>
                        <!-- idx -->
                        <?php echo $row[$i][0]; ?>
                    </td>
                    <td>
                        <!-- title, idx를 이용한 a Tag 생성, ?idx = $row[$i][0]으로 URL Parameter로 idx 전달 -->
                        <?php
                        echo "<a href='/today/back/board/find.php?idx=" .
                            $row[$i][0] .
                            "'>";
                        echo $row[$i][1];
                        echo '</a>';
                        ?>
                    </td>
                </tr>
                <?php }; ?>


                <?php 
                $num = mysqli_num_rows($result);
                /* paging : 한 페이지 당 데이터 개수 */
                $list_num = 5;

                /* paging : 한 블럭 당 페이지 수 */
                $page_num = 7;

                /* paging : 현재 페이지 */
                $page = isset($_GET["page"])? $_GET["page"] : 1;

                /* paging : 전체 페이지 수 = 전체 데이터 / 페이지당 데이터 개수, ceil : 올림값, floor : 내림값, round : 반올림 */
                $total_page = ceil($num / $list_num);
                // echo "전체 페이지 수 : ".$total_page;

                /* paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수 */
                $total_block = ceil($total_page / $page_num);

                /* paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수 */
                $now_block = ceil($page / $page_num);

                /* paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭번호 - 1) * 블럭당 페이지 수 + 1 */
                $s_pageNum = ($now_block - 1) * $page_num + 1;
                // 데이터가 0개인 경우
                if($s_pageNum <= 0){
                    $s_pageNum = 1;
                };

                /* paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수 */
                $e_pageNum = $now_block * $page_num;
                // 마지막 번호가 전체 페이지 수를 넘지 않도록
                if($e_pageNum > $total_page){
                    $e_pageNum = $total_page;
                }; 


                /* paging : 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 데이터 수 */
                $start = ($page - 1) * $list_num;

                /* paging : 쿼리 작성 - limit 몇번부터, 몇개 */
                $sql = "select * from sujin_board limit $start, $list_num;";

                /* paging : 쿼리 전송 */
                $result = mysqli_query($conn, $sql);

                /* paging : 글번호 */
                $cnt = $start + 1;
                ?>

            <p class="pager">

            <?php
            /* paging : 이전 페이지 */
            if($page <= 1){
            ?>
            <a href="findAll.php?page=1">이전</a>
            <?php } else{ ?>
            <a href="findAll.php?page=<?php echo ($page-1); ?>">이전</a>
            <?php };?>

            <?php
            /* pager : 페이지 번호 출력 */
            for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
            ?>
            <a href="findAll.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php };?>

            <?php
            /* paging : 다음 페이지 */
            if($page >= $total_page){
            ?>
            <a href="findAll.php?page=<?php echo $total_page; ?>">다음</a>
            <?php } else{ ?>
            <a href="findAll.php?page=<?php echo ($page+1); ?>">다음</a>
            <?php };?>

            </p>

        </table>
    </body>
</html>

<?php
// require "../auth/conn.php";

// $sql  = "select * from sujin_board_dev";
// $result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_all($result);

// print_r($row[0]);
// print_r($row[0][0]);
// print_r($row[0][1]);

// for($i = 0; $i < count($row); $i++){
    // $idx = 0;
    // echo "<a href='/today/back/board/find/<?=$row[$i][$]' >";
    // echo "제목 : ";
    // print_r($row[$i][1]);
    // echo "    ";
    // echo "내용1: ";
    // print_r($row[$i][2]);
    // echo "<br/>";
    // echo "</a>";
    // echo "</a>";
// }
?>