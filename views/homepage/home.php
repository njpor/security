<!doctype html>
<html>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    .header {
        min-height: 100Vh;
        width: 100%;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("https://2.bp.blogspot.com/-YSRL7xmCD2Q/XQ8eHaJ9wkI/AAAAAAAAHtA/0-bVcL3HJmQ4eCCCJY8Sq9y0tGKoVw3IwCKgBGAs/w2560-h1600-c/genshin-impact-uhdpaper.com-4K-1.jpg");
        background-position: center;
        background-size: cover;
        position: relative;


    }

    nav {
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;
    }

    nav img {
        width: 150px;
    }

    .nav-links {
        flex: 1;
        text-align: right;

    }

    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }

    .nav-links ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;

    }

    .nav-links ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: #ffff;
        display: block;
        margin: auto;
        transition: 0.5s;

    }

    .nav-links ul li:hover::after {
        width: 100%;

    }

    .text-box {
        width: 90%;
        color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .text-box h1 {
        font-size: 55px;
    }

    .text-box p {
        margin: 10px 0 40px;
        font-size: 18px;
        color: #fff;
    }

    .hero-btn {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        border: 1px solid #fff;
        padding: 12px 34px;
        font-size: 13px;
        background: transparent;
        position: relative;
        cursor: pointer;

    }

    .hero-btn:hover {
        border: 1px solid #f44336;
        background: #f44336;
        transition: 1px;
    }

    nav .fa {
        display: none;
    }


    @media(max-width: 900px) {
        .text-box h1 {
            font-size: 20px;
        }

        .nav-links ul li {
            display: block;
        }

        .nav-links {
            position: absolute;
            background: #f44336;
            height: 100vh;
            width: 200px;
            top: 0;
            right: -200px;
            text-align: left;
            z-index: 2;
            transition: 1s;

        }

        nav .fa {
            display: block;
            color: #fff;
            margin: 10px;
            font-size: 22px;
            cursor: pointer;
        }

        .nav-links ul {
            padding: 30px;
        }

        .course-col {
            flex-basis: 20%;
            background-color: #F5F5F5;
            border-radius: 35px;
            margin-bottom: 5%;
            padding: 20px 5px;
            box-sizing: border-box;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
        }



    }

    /*--------course------*/
    .course {
        width: 65%;
        margin: auto;
        text-align: center;
        padding-top: 100px;
    }

    h1 {
        font-size: 36px;
        font-weight: 600;
    }

    .row {
        margin-top: 5%;
        display: flex;
        justify-content: space-between;
    }

    .course-col {
        flex-basis: 31%;
        background-color: #F5F5F5;
        border-radius: 35px;
        margin-bottom: 5%;
        padding: 20px 5px;
        box-sizing: border-box;
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
    }



    img {
        max-width: 100%;
        width: 300px;
        border-radius: 25px;

    }


    .hero-btn1 {
        display: inline-block;
        text-decoration: none;
        left: 20%;
        color: #3E86F5;
        border: 1px solid #fff;
        padding: 5px 20px;
        font-size: 13px;
        background-color: #F2F6FF;
        position: relative;
        cursor: pointer;
        border-radius: 20px;

    }

    .hero-btn1:hover {
        border: 1px solid #fff;
        background: #99CCFF;
        color: #fff;
        transition: 1px;
    }


    .hero-btn2 {
        display: inline-block;
        text-decoration: none;
        left: 0%;
        color: #fff;
        border: 1px solid #fff;
        padding: 10px 20px;
        font-size: 13px;
        background-color: 	#FF0066;
        position: relative;
        cursor: pointer;
        border-radius: 10px;

    }

    .hero-btn2:hover {
        border: 1px solid #fff;
        background: #99CCFF;
        color: #fff;
        transition: 1px;
    }




    h4 {
        display: flex;
        text-decoration: none;
        justify-content: center;
        color: #7879F1;
        border: 1px solid #fff;
        padding: 2px 2px;
        font-size: 8px;
        background-color: #F1F1FD;
        position: relative;
        cursor: pointer;
        border-radius: 20px;

    }


    h6 {
        font-size: 30px;
        font-weight: 600;

    }

    @media(max-width: 900px) {
        .row {
            flex-direction: column;
        }

        h6 {
            font-size: 20px;
            font-weight: 600;
        }

        .column-col {
            font-size: 14px;


        }
    

  

    }

    .promote {
        width: 50%;
        margin: auto;
        text-align: middle;
    }

    .promote1 {
        flex-basis: 100%;
        border-radius: 25px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }

    .column {

        flex-direction: column;
    }

    .column-col {
        flex-basis: 200%;

        margin-bottom: 5%;
        margin-left: 5%;
        padding: 20px 5px;
        box-sizing: border-box;

    }

    /*----------------review--------------*/

    .review {
        width: 40%;
        margin: auto;
        padding-top: 100px;
        text-align: center;
        font-size: 12px;
    }

    .review-col {
        flex-basis: 30%;
        border-radius: 10px;
        margin-bottom: 5%;
        text-align: center;
        background-color: #F8F8FF;
        padding: 25px;
        cursor: pointer;
        display: flex;
    }

    .review-col img {
        height: 40%;
        width: 20%;
        border-radius: 50%;
        margin-left: -60%;
        margin-top: 40%;

    }
    .text1{
        color: #CC3399;
    }
 


    /*------------------------------------*/
    
</style>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/w3.css">
    <title>Security</title>

</head>



<body>
    <section class="header">
        <nav>
            <a href="views/homepage/home.php"><img src="./images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">SHOP</a></li>
                    <li><a href="">RECHARGE</a></li>
                    <li><a href="">HELP</a></li>
                    <li><a href="">LOGIN</a></li>
                </ul>
            </div><br>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Cool Id Cool Play, Buy If You Want To Be Cool
            </h1>
            <h1>You Want To Be Cool
            </h1><br><br>
            <p>รวมไอดีเกมส์ออนไลน์ที่ดีที่สุดไว้ที่นี่</p>
            <a href="" class="hero-btn">Detail</a>

        </div>
    </section>

    <!-- --------course------ -->
    <section class="course">
        <h1>Game the mouth</h1>
        <div class="row">
            <div class="course-col">

                <img src="https://images6.alphacoders.com/116/1167243.jpg">
                <h4>pc&mobile</h4>
                <h3>Genshin Impact</h3>
                <p>700$</p><br>
                <a href="" class="hero-btn1">Buy Now</a>

            </div>
            <div class="course-col">
                <img src="https://www.pockettactics.com/wp-content/sites/pockettactics/2022/09/tower-of-fantasy-wallpaper-shirli-and-nemesis.jpg">
                <h4>pc&mobile</h4>
                <h3>Tower of Fantasy</h3>
                <p>400$</p><br>
                <a href="" class="hero-btn1">Buy Now</a>

            </div>
            <div class="course-col">
                <img src="https://images4.alphacoders.com/707/thumb-1920-707865.jpg"><br>
                <h4>pc&mobile</h4>
                <h3>Death by Daylight</h3>
                <p>340$ </p><br>
                <a href="" class="hero-btn1">Buy Now</a>

            </div>
        </div>
    </section>
    <!-- --------promote------ -->

    <section class="promote">

        <div class="row">
            <div class="promote1">
                <img src="https://i.pinimg.com/564x/db/d6/8a/dbd68adadd4f0d0a1bdcc0794c86bb44.jpg">

            </div>
            <div class="column-col">
                <div class="column">
                    <h6>Buy UID Games from</h6><br>
                    <h6>Every Corner of The</h6><br>
                    <h6>World With US</h6><br>
                    <div class="column-col1">
                        <p>KeyIdShop แหล่งรวม UID เกมส์แท้ ราคาถูก หลากหลายเกมส์</p><br>
                        <p>บริการขายยก ID มีตัวละครสุดเจ๋ง ให้คุณเลือกครอบครองมากมาย</p><br>
                        <p> รับประกันความปลอดภัย</p><br><br>
                        <p> ถ้าคุณต้องการตัวละครสุดเทพ สุดเจ๋ง อีกทั้งยังมีทรัพยากรมากมาย</p><br>
                        <p>สามารถเลือกรับชมสินค้าของเราได้เลย</p><br>
                        <a href="" class="hero-btn2">Buy Now</a>
                        
                    </div>
                </div>
                
            </div>
        </div>


    </section>

    <!-- ---------review------------ -->
    <section class="review">
        <div class="row">
            <div class="review-col">
                <div >
                    <p>เว็บนี้ดีได้มากเลยค่ะ เชื่อถือได้เเน่นอน </p>
                    <p>ยืนยันจากผู้มีประสบการณ์การใช้งานจริง</p>
                 <center>   <h3>---Harry---</h3></center>
                 <div class="text1">
                 <center>   <p>review</p></center>
                </div>
                </div>
                <img src="https://i.pinimg.com/736x/d4/1d/6f/d41d6f125f19328fe57c853d1588f049.jpg">
            </div>
            <div class="review-col">
                <div >
                    <p>มีไอดีเกมส์ให้เลือกหลากหลาย</p>
                    <p> ราคาย่อมเยาว์ น่าเชื่อถือ  </p>

                 <center>   <h3>---Ploy---</h3></center>
                 <div class="text1">
                 <center>   <p>review</p></center>
                </div>
                </div>
                <img src="https://i.pinimg.com/736x/d4/1d/6f/d41d6f125f19328fe57c853d1588f049.jpg">
            </div>
            
        </div>

        



    </section>





    <!-- --------Js---------- -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    <!-- ---------------------- -->


</body>



</html>