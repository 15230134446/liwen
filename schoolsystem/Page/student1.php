<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>学生管理系统</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            font-size: 1rem;
        }
        body{
            background-repeat: repeat;
            background-position: right;
        }
        #container{
            padding: 10px;
            margin: 0 auto;
            width: 80%;
            height: 100%;
        }
        .top{
            background-image: url(../Image/2.PNG);
            color: white;
            padding: 50px;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: right;
            background-repeat: no-repeat;
            background-size: cover;
        }
        ul{
            background-color: blueviolet;
            padding: 10px;
            display: flex;
            list-style:none;
        }
        ul li{
            flex: 1;
            text-align: center;
        }
        .conter{
            padding: 20px 7%;
            background-color: beige;
        }
        .conter_up{
            text-decoration: none;
            color: #9292ee;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 0.2rem;
            padding-bottom: 20px;
        }
        .conter_middle table{
            border: 0px solid ;
            letter-spacing: 0.1rem;
        }
        .aa{
            text-align: left;
            padding: 8px;
            font-size: 20px;
            border: 0px solid #6e6767;
        }
        .bb{
            text-align: right;
            padding:8px;
            font-size: 30px;
            border: 0px solid #6e6767;
        }
        .foot{
            background-image: url(../Image/3.PNG);
            padding: 20px;
            color: white;
            display: flex;
            justify-content: center;
        }
        #tiao{
            color:white;
            text-decoration: none;
            font-size: 1.25rem;
        }
        .sss{
            width:80%;
            transform: translateX(30%)translateY(-70%);
        }
        .cc{
            font-size: 15px;
            position: relative;
            top: -130px;
            width:75%;
            transform: translateX(30%)translateY(-30%);
        }
    </style>
</head>
<body>
<div id="container">
    <div class="top">
        欢迎进入学生管理信息平台
    </div>
    <div class="nav">
        <ul>
            <li><a href="student1.php" id="tiao">个人信息</a></li>
            <li><a href="Student2.php" id="tiao">我的课程</a></li>
            <li><a href="Student3.php" id="tiao">我的老师</a></li>
            <li><a href="Student4.php" id="tiao">我的教室</a></li>
        </ul>
    </div>
    <div class="conter">
        <div class="conter_up">
            我的信息列表
        </div>
        <div class="photo">
            <img src="../Image/4.PNG">
        </div>
        <div class="conter_middle">
            <table cellspacing="0" cellpadding="0" class="sss">
                <tr>
                    <td class="bb">姓名:</td>
                    <td class="aa">李紫文</td>
                    <td class="bb">性别:</td>
                    <td class="aa">男</td>
                </tr>
                <tr>
                    <td class="bb">出生日期:</td>
                    <td class="aa">2002年09月12日</td>
                    <td class="bb">入学日期:</td>
                    <td class="aa">2023年09月01日</td>
                </tr>
                <tr>
                    <td class="bb">学校姓名:</td>
                    <td class="aa">郑州工商学院</td>
                    <td class="bb">专业:</td>
                    <td class="aa">网络工程(专升本)</td>
                </tr>
                <tr>
                    <td class="bb">学号:</td>
                    <td class="aa">230806130426</td>
                    <td class="bb">电话:</td>
                    <td class="aa">18637220439</td>
                </tr>
                <tr>
                    <td class="bb">宿舍:</td>
                    <td class="aa">515</td>
                    <td class="bb">辅导员:</td>
                    <td class="aa">李文</td>
                </tr>
            </table>
        </div>
        <div class="cc"><h1>自我介绍：</h1><table></table><tr><td>钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱钱</td></tr></div>
    </div>
    <div class="foot">
        &copy;网络工程(专升本)2304李文版权所有
    </div>
</div>
</body>
</html>