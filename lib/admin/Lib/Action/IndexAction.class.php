<?php
class IndexAction extends Action {
    
    public function index(){//清除cookie并显示
        cookie('name',null);
        cookie('pwd',null);
        cookie('uid',null);
        $this->display();
    }

    public function welcome(){
        if (!IS_POST) _404('页面不存在',U('index'));//如果不是通过post访问该界面，报错返回
        //取出管理员信息
        $name = I('username');
        $pwd = I('password');
        $con = mysql_connect("localhost","root","");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("lib", $con);
        $sql = "SELECT * FROM lib_user where username ='$name' and password ='$pwd' ";
        // dump($sql);
        $result = mysql_query($sql);
        $admin = mysql_fetch_array($result);
        //如果信息不存在报告提示他不是管理员或密码错误
        //如果是管理员创建cookie
        if (!$admin) $this->error('您并不是管理者或密码错误',U('index'));
        else {
            cookie('name',$name,3600);
            cookie('pwd',$pwd,3600);
            cookie('uid',$admin['uid'],3600);
        }
        // dump($_COOKIE);
        $this->assign('name',$_COOKIE['name']);
        $this->assign('pwd',$_COOKIE['pwd']);
        $this->display();
    }

    public function enroll(){
        // dump($_COOKIE);
        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        //dump($admin);
        if (!$admin) $this->error('登陆超时',U('index'));
        else{
            $this->assign('name',$_COOKIE['name']);
            $this->assign('pwd',$_COOKIE['pwd']);
            $this->display();
        }       

    }

    public function return_book(){
        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        else{
            $this->assign('name',$_COOKIE['name']);
            $this->assign('pwd',$_COOKIE['pwd']);
            $this->display();
        }   
        
    }
    public function search(){
        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        else{
            $this->assign('name',$_COOKIE['name']);
            $this->assign('pwd',$_COOKIE['pwd']);
            $this->display();
        }               
    }

    public function manage(){
        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        else{
            $this->assign('name',$_COOKIE['name']);
            $this->assign('pwd',$_COOKIE['pwd']);
            $this->display();
        }       
        
    }
    public function borrow(){
        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        else{
            $this->assign('name',$_COOKIE['name']);
            $this->assign('pwd',$_COOKIE['pwd']);
            $this->display();
        }       
    }

    public function card_manage(){
        if (!IS_POST) _404('页面不存',U('index'));

        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        
        $cno = $_POST['cno'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $type = $_POST['type'];
        $c = $_POST['button'];
        $con = mysql_connect("localhost","root","");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("lib", $con);

        if ($c == "删除"){
            if (!$cno || !$name || !$department || !$type){
                $this->error("请完善删除信息！！！");
            }else {
                $sql = "SELECT * FROM lib_card where ";
                if ($cno) $sql = $sql."cno = '$cno' AND ";
                if ($name) $sql = $sql."name = '$name' AND ";
                if ($department) $sql = $sql."department = '$department' AND ";
                if ($type) $sql = $sql."type = '$type' AND ";
                $sql = $sql."1 order by cno";
                //dump($sql);
                $result = mysql_query($sql);
                echo "<b>"."姓名"."</b>" . "  " ."借书证号" . "  " . "部门"."  " . "类别"." ";
                echo "<hr />";
                while($card = mysql_fetch_array($result))
                {
                    echo "<b>".$card['name']."</b>" . "  " .$card['cno'] . "  " . $card['department']."  " . $card['type']." ";
                    echo "<br />";
                }
                $sql = "DELETE FROM lib_card where ";           
                if ($cno) $sql = $sql."cno = '$cno' AND ";
                if ($name) $sql = $sql."name = '$name' AND ";
                if ($department) $sql = $sql."department = '$department' AND ";
                if ($type) $sql = $sql."type = '$type' AND ";
                $sql = $sql."1";
                //dump($sql);
                $result = mysql_query($sql);
                //dump($result);
                if ($result) {
                    $this->success("删除成功!!!");
                }
                else {
                    $this->error("删除失败，请核对信息！！！");
                }

            }
        }
        else if ($c == "查询"){
            $sql = "SELECT * FROM lib_card where ";
            if ($cno) $sql = $sql."cno = '$cno' AND ";
            if ($name) $sql = $sql."name = '$name' AND ";
            if ($department) $sql = $sql."department = '$department' AND ";
            if ($type) $sql = $sql."type = '$type' AND ";
            $sql = $sql."1 order by cno";
            //dump($sql);
            $result = mysql_query($sql);
            echo "<b>"."姓名"."</b>" . "  " ."借书证号" . "  " . "部门"."  " . "类别"." ";
            echo "<hr />";
            while($card = mysql_fetch_array($result))
            {
                echo "<b>".$card['name']."</b>" . "  " .$card['cno'] . "  " . $card['department']."  " . $card['type']." ";
                echo "<br />";
            }
        }
        else if ($cno && $name && $type && $department){
            $sql = "INSERT into lib_card values(";
            $sql = $sql."'$cno',";
            $sql = $sql."'$name', ";
            $sql = $sql."'$department', ";
            $sql = $sql."'$type'";
            $sql = $sql.")";
            //dump($sql);
            $result = mysql_query($sql);
            //dump($result);
            if ($result) {
                $this->success("添加成功!!!");
                echo "请记住您的借书证号：<b>".$cno."</b>";
            }
        }
        else {
            $this->error("请完善注册信息！！！");
        }

        mysql_close($con);  
       
        $this->assign('name',$_COOKIE['name']);
        $this->assign('pwd',$_COOKIE['pwd']);
        $this->display();      
    }

    public function book_enroll(){
        if (!IS_POST) _404('页面不存在',U('index'));

        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        
        $con = mysql_connect("localhost","root","");
        if (!$con){
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("lib", $con);
        //dump($_POST);
        //dump($_FILES['file']);

        if ($_POST['button'] == "添加"){
            if (!$_POST['bno'] || !$_POST['title'] ||!$_POST['class']|| !$_POST['press'] ||!$_POST['author']|| !$_POST['year']||!$_POST['price']){
                $this->error('请完善图书信息！！！');
            }
            $bno = $_POST['bno'];
            $title = $_POST['title'];
            $class = $_POST['class'];
            $press = $_POST['press'];
            $author = $_POST['author'];
            $year = $_POST['year'];
            $price = $_POST['price'];
            $sql = "SELECT * from lib_book where bno = '$bno' and title = '$title' and category = '$class' and press = '$press' and year = $year and price = $price and author = '$author' ";
            $result = mysql_query($sql);
            $result_row = mysql_fetch_array($result);
            //dump($result_row);
            if ($result_row){
                $sql = "UPDATE lib_book set stock = stock+1,total = total+1 where bno = '$bno' and title = '$title' and category = '$class' and press = '$press' and year = $year and price = $price and author = '$author' ";
                $update = mysql_query($sql);
                $this->success("原有图书数量增加1！");
                echo "<br>";
                echo "<br>";
            }
            else{
                $sql = "INSERT INTO lib_book values('$bno','$class','$title','$press',$year,'$author',$price,1,1)";
                //dump($sql);
                $insert = mysql_query($sql);
                //dump($insert);
                $this->success("新图书增添成功！");
                echo "<br>";
            }
            echo "<b>图书信息显示</b>";
            echo "<hr>";
            $sql = "SELECT * from lib_book where bno = '$bno' and title = '$title' and category = '$class' and press = '$press' and year = $year and price = $price and author = '$author' ";
            $result = mysql_query($sql);
            echo "<b>"."书名"."</b>" . "  " ."类别" . "  " . "出版商"."  " . "时间"." ";
            echo "作者" . "  " ."价格" . "  " . "总量"."  " . "库存量";
            echo "<br />";
            echo "<br />";
            while($row = mysql_fetch_array($result)){
                echo "<b>".$row['title']."</b>"  . "  " .$row['category'] . "  " . $row['press']."  " . $row['year'];
                echo $row['author'] . "  " .$row['price'] . "  " . $row['total']."  " . $row['stock'];
                echo "<br />";
            }
            
        }
        else {
            //-----------文件上传--------------批量处理模块--------------
            if ((($_FILES["file"]["type"] == "text/plain"))&& ($_FILES["file"]["size"] < 20000)){
                if ($_FILES["file"]["error"] > 0){
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                }
                else{
                    echo "文件名称: " . $_FILES["file"]["name"] . "<br>";
                    echo "文件格式: " . $_FILES["file"]["type"] . "<br>";
                    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
                    echo "<hr>";
                    move_uploaded_file($_FILES["file"]["tmp_name"],"E:\\wamp\\www\\lib\\upload\\" . $_FILES["file"]["name"]);
             //------------------进行文件内容操作---------------------------------
                    if (file_exists("E:\\wamp\\www\\lib\\upload\\" . $_FILES["file"]["name"])){
                        $filename = "E:\\wamp\\www\\lib\\upload\\" . $_FILES["file"]["name"];
                        $file = fopen($filename, "r") or exit ("unable to open<br>");
                        while (!feof($file)){
                            $line = fgets($file);
                            $lt = trim($line);
                            $lt = trim($lt,'( ');
                            $lt = trim($lt,')');
                            list ($bno,$category,$title,$press,$year,$author,$price,$num) = split(", ", $lt);
                            $sql = "SELECT * from lib_book where bno = '$bno' and title = '$title' and category = '$category' and press = '$press' and year = $year and price = $price and author = '$author' ";
                            $result = mysql_query($sql);
                            $book_get = mysql_fetch_array($result); 
                            if ($book_get){
                                $sql = "UPDATE lib_book set stock = stock+$num,total = total+$num where bno = '$bno' and title = '$title' and category = '$class' and press = '$press' and year = $year and price = $price and author = '$author' ";
                                //dump($sql);
                                $update = mysql_query($sql);
                                echo "图书名称：$title  :";
                                echo "原有图书数量增加！";
                                echo "<br>";
                                echo "<br>";
                            }
                            else{
                                $sql = "INSERT INTO lib_book values('$bno','$category','$title','$press',$year,'$author',$price,$num,$num)";
                                //dump($sql);
                                $insert = mysql_query($sql);
                                //dump($insert);
                                echo "图书名称：$title  :";
                                echo "新图书增添成功！";
                                echo "<br>";
                            }

                        }
                        fclose($file);

                    }    
                }
            }
            else{
                $this->error('请上传txt文件');
            }  
        }
        mysql_close($con);

            $this->assign('name',$_COOKIE['name']);
            $this->assign('pwd',$_COOKIE['pwd']);
            $this->display();
       
    }

    public function book_search(){
        if (!IS_POST) _404('页面不存',U('index'));

        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        
        $con = mysql_connect("localhost","root","");
             if (!$con)
             {
                 die('Could not connect: ' . mysql_error());
             }
        mysql_select_db("lib", $con);
        $sql = "SELECT * FROM lib_book WHERE ";
        echo "<b>查询结果:</b>";
        echo "<hr>";
        if ($_POST['title']) $sql = $sql."title = '".$_POST['title']."' and ";
        if ($_POST['class']) $sql = $sql."category = '".$_POST['class']."' and ";
        if ($_POST['press']) $sql = $sql."press = '".$_POST['press']."' and ";
        if ($_POST['author']) $sql = $sql."author = '".$_POST['author']."' and ";
        if ($_POST['year1']) $sql = $sql."year >= ".$_POST['year1']." and ";
        if ($_POST['year2']) $sql = $sql."year <= ".$_POST['year2']." and ";
        if ($_POST['price1']) $sql = $sql."price >= ".$_POST['price1']." and ";
        if ($_POST['price2']) $sql = $sql."price <= ".$_POST['price2']." and ";
        $sql = $sql." 1 ";
        $sql = $sql."order by ".$_POST['sort']." ,bno ";
        $result = mysql_query($sql);
        echo "<b>"."书名"."</b>" . "  " ."类别" . "  " . "出版商"."  " . "时间 " . "  "." 作者 " . "  " ." 价格 " . "  " . "总量"."  " . "库存量";
        echo "<br />";
        echo "<br />";
        while($row = mysql_fetch_array($result)){        
            echo "<b>".$row['title']."</b>"  . "  " .$row['category'] . "  " . $row['press']."  " . $row['year'];
            echo $row['author'] . "  " .$row['price'] . "  " . $row['total']."  " . $row['stock'];
            echo "<br />";
        }
        mysql_close($con);  

        $this->assign('name',$_COOKIE['name']);
        $this->assign('pwd',$_COOKIE['pwd']);
        $this->display();
               
    }

    public function book_borrow(){
        if (!IS_POST) _404('页面不存',U('index'));

        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        
        $uid = I('uid');
        $bid = I('bid');
        $name = I('bname');
        if (!$uid && !$bid && !$name) $this->error('请输入信息');
        $con = mysql_connect("localhost","root","");
             if (!$con)
             {
                 die('Could not connect: ' . mysql_error());
             }
        mysql_select_db("lib", $con);
        //得到用户
        $sql = "SELECT * FROM lib_card where cno = '$uid'";
        $user_real = mysql_query($sql);
        $user = mysql_fetch_array($user_real);
        if ($user['cno']) {
             echo "欢迎"."     <b>".$user['name']."</b>    借书证号：".$user['cno'];
             echo "<hr />";
             echo "<b>借书记录：</b>";
             echo "<br />";
        }
        else{
             if ($uid) $this->error('借书证不存在');
        }
        //列出用户的信息
        if ($user['cno']){
            $sql = "SELECT * FROM lib_borrow,lib_book WHERE lib_book.bno = lib_borrow.bno AND lib_borrow.cno = $uid order by lib_book.bno";
            $result = mysql_query($sql);
             
            if ($result){
                echo "图书编号    图书名称      "."    借书时间        归还时间";
                echo "<br />";
                while($row = mysql_fetch_array($result)){
                    echo $row['bno'] . " " .$row['title'] . " " . $row['borrow_date']." " . $row['return_date'];
                    echo "<br />";
                }
            }
            
        }
        //借书或者列出所借书的信息
        if ($bid || $name){
            $sql = "SELECT * FROM lib_book where";
            if ($bid) $sql = $sql." lib_book.bno = $bid";else if ($name) $sql = $sql." lib_book.title = '$name'";
            $result = mysql_query($sql);
            $book = mysql_fetch_array($result);
            $bno = $book['bno'];
            if ($bno){
                //-----------显示图书信息-------------------
                echo "<hr />";
                echo "<b>所借书：《".$book['title'] ."》 的信息：</b>";
                echo "<br />";
                $ans_num = $book['stock'];
                echo "还剩余 ".$book['stock']." 本";
                echo "<br />";
                //借书
                if ($user['cno'] && $ans_num > 0){
                     $sql = "UPDATE lib_book  SET stock = (stock - 1) WHERE lib_book.bno = '$bno'";
                     $result = mysql_query($sql);
                     //dump($result);
                     //if ($result) echo "借出";
                     $time = date('Y-m-d');
                     $sql = "INSERT INTO lib_borrow values ('$uid','$bno','$time',NULL,".$_COOKIE['uid'].")";
                     //dump($sql);
                     $result = mysql_query($sql);
                     if ($result) $this->success('成功借出！！！');
                     echo "<br/>";
                     echo "还剩余 ".($ans_num-1)." 本";
                }

                else if ($ans_num > 0){
                    $this->error('请输入您的借书证号');
                }
                else{
                     $sql = "SELECT * FROM lib_borrow,lib_book WHERE lib_book.bno = lib_borrow.bno and  lib_book.bno = '$bno'";
                     $sql = $sql."order by borrow_date desc ";
                     $result = mysql_query($sql);
                     if ($result){
                        $row = mysql_fetch_array($result);
                        $bdate = strtotime($row['borrow_date']);
                        echo "最近归还时间:    ".date('Y-m-d',$bdate+30*24*60*60);$row['borrow_time']." " . $row['return_time'];
                        echo "<br />";
                    }

                }

            }
            else{
                $this->error('您要的书不存在');
            }
            
        }
        $this->assign('name',$_COOKIE['name']);
        $this->assign('pwd',$_COOKIE['pwd']);
        $this->display();
    }

    public function book_return(){
        if (!IS_POST) _404('页面不存',U('index'));

        $condition['username']=$_COOKIE['name'];
        $condition['password']=$_COOKIE['pwd'];
        $result = M('user')->where($condition)->select();
        $admin = $result['0'];
        if (!$admin) $this->error('登陆超时',U('index'));
        
        $uid = I('uid');
        $bid = I('bid');
        $name = I('bname');
        if (!$uid && !$bid && !$name) $this->error('请输入信息');
        $con = mysql_connect("localhost","root","");
             if (!$con)
             {
                 die('Could not connect: ' . mysql_error());
             }
        mysql_select_db("lib", $con);
        //得到用户
        $sql = "SELECT * FROM lib_card where cno = '$uid'";
        $user_real = mysql_query($sql);
        $user = mysql_fetch_array($user_real);
        $cno = $user['cno'];
        if ($cno) {
             echo "欢迎"."     <b>".$user['name']."</b>    借书证号：".$user['cno'];
             echo "<hr />";
             echo "<b>借书记录：</b>";
             echo "<br />";
        }
        else{
             if ($uid) $this->error('借书证不存在');
        }
        //列出用户的信息
        if ($cno){
             $sql = "SELECT * FROM lib_borrow,lib_book WHERE lib_book.bno = lib_borrow.bno AND lib_borrow.cno = $uid order by lib_book.bno,lib_borrow.return_date";
             $result = mysql_query($sql);
             if ($result){
                echo "图书编号    图书名称      "."    借书时间        归还时间";
                echo "<br>";
                while($row = mysql_fetch_array($result)){
                    echo $row['bno'] . " " .$row['title'] . " " . $row['borrow_date']." " . $row['return_date'];
                    echo "<br />";                     
                }
            }
            //借书或者列出所借书的信息
            if ($bid || $name){
                $sql = "SELECT * FROM lib_book where";
                if ($bid) $sql = $sql." lib_book.bno = $bid";else if ($name) $sql = $sql." lib_book.title = '$name'";
                $result = mysql_query($sql);
                $book = mysql_fetch_array($result);
                $bno = $book['bno'];
                if ($bno){
                    echo "<hr>";
                    echo "所要还的书为<b>《".$book['title']."》</b>";
                    echo "<br>";
                    echo "<br>";
                    $sql = "SELECT * from lib_borrow where bno = '$bno' and cno = '$cno' order by return_date limit 1";
                    $record = mysql_query($sql);
                    $re_in = mysql_fetch_array($record);
                    $in = $re_in['return_date'];
                    $out = $re_in['borrow_date'];
                    //dump($re_in);
                    //dump($re_in);
                     //还书
                    if ($in==NULL && $out){
                         $sql = "UPDATE lib_book  SET stock = (stock + 1) WHERE lib_book.bno = '$bno'";
                         $result = mysql_query($sql);
                         //dump($result);
                         $time = date('Y-m-d');
                         $sql = "UPDATE lib_borrow  SET return_date = '$time' WHERE bno = '$bno' and cno = '$cno' order by return_date limit 1";
                         //dump($sql);
                         $result = mysql_query($sql);
                         if ($result) $this->success('成功还书');
                         echo "<br/>";
                    }
                    else{
                        $this->error('你并没有成功借过这本书或已经还过这本书！');
                    }

                }
                else {
                    $this->error('这本书你并未成功借到');
                }
            }
        }
        else {
             $this->error('请输入您的借书证号');
        }
        mysql_close($con);  

        $this->assign('name',$_COOKIE['name']);
        $this->assign('pwd',$_COOKIE['pwd']);
        $this->display();
         
    }
}