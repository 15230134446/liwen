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
            padding: 30px;
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
            border: 1px solid ;
            text-align: center;
            width: 100%;
            font-size: 1.5rem;
            letter-spacing: 0.1rem;
            border: 2px solid black;
        }
        .conter_middle td,th{
            border: 1px solid #6e6767;
            height: 45px;
        }
        .conter_middle a{
            text-decoration: none;
            font-weight: bold;
        }
        .conter_down{
            display: flex;
            justify-content: flex-end;
            padding: 20px;
        }
        .conter_down>*{
            margin-right: 8px;
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
        <div class="conter_middle">
            <table cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>姓名</th>
                    <th>密码</th>
                    <th>昵称</th>
                    <th>年龄</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>李紫文</td>
                    <td>admin</td>
                    <td>李文</td>
                    <td>20</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>李紫文</td>
                    <td>admin</td>
                    <td>李文</td>
                    <td>20</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>李紫文</td>
                    <td>admin</td>
                    <td>李文</td>
                    <td>20</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>李紫文</td>
                    <td>admin</td>
                    <td>李文</td>
                    <td>20</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>李紫文</td>
                    <td>admin</td>
                    <td>李文</td>
                    <td>20</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>李紫文</td>
                    <td>admin</td>
                    <td>李文</td>
                    <td>20</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="conter_down">
            <span>共5页</span>
            <input type="button" name="" id="" value="上一页" />
            <select name="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="button" name="" id="" value="下一页" />
        </div>
    </div>
    <div class="foot">
        &copy;网络工程(专升本)2304李文版权所有
    </div>
</div>
</body>
</html>