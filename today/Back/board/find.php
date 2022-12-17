<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>detail.php</title>
    </head>
    <body>
        <h1>게시글 상세 페이지<h1> <!-- 게시글 상세 페이지 -->
        <?php
        // DB 연결 가져오기.
        require '../auth/conn.php';

        // idx를 URL Parameter로 전달 받아, 추출
        $idx = $_GET['idx'];

        // idx를 이용하여 하나만 검색하는 SQL 쿼리문
        $sql = "SELECT * FROM sujin_board WHERE idx = '" . $idx . "'";

        // DB 실행
        $result = mysqli_query($conn, $sql);

        // DB 결과, 이중 배열로 1 X 3크기임 [0][0] -> idx, [0][1] -> title, [0][2] -> memo
        $row = mysqli_fetch_all($result);
        ?>
        <h3>
            <?php echo $row[0][1]; ?>
        </h3>
        <p>
            <?php echo $row[0][2]; ?>
        </p>
    </td>
        </table>
    </body>
</html>