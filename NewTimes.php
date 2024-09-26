<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Times - Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

      

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
                    }

        .logo img {
            max-width: 400px;
            margin-left: 550px;

        }
        .logo h5{
            margin-left: 670px;
            font-family: sans-serif;
        }

        .Subscribe button {
            max-width: 300px;
            padding: 7px;
            margin-top: 50px;
            background-color: #000;
            color: #fff;
            border: none;
            margin-right:70px ;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: center;
            background-color: #fff;
            padding: 10px;
            border-bottom: 2px solid #ddd;
        }

        nav a {
            margin: 0 15px;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
            transition: 0.6sec;
        }

        nav a:hover {
            color:orangered;
        }
        nav a:text-decoration {
            margin-top: 100px;
        }

        .search{
            float: right;
            margin-top: -30.5px;
            margin-right: 70px;
        }
        .search input{
            border: none;
            font-size: 16px;
            margin: -1px -70px;
                    }


        /* Main Section */
        .main-content {
            display: flex;
            margin: 20px;
        }

        .first {
            flex: 3;
            padding: 20px;
            background-color: white;
            margin-right: 20px;
            
        }

        .first img {
            max-width: 70%;
            height: 500px;

        }

        .sidebar {
            flex: 1;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
        }

        .sidebar img {
            max-width: 100%;
            margin-bottom: 10px;
        }

        /* News Section */
        .last {
            display: flex;
            justify-content: space-between;
            margin: 20px;
            margin-top: 200px;
        }

        .news-card {
            width: 23%;
            background-color: white;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .news-card img {
            max-width: 100%;
            height: auto;
        }

        .news-card h4 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .news-card p {
            font-size: 14px;
            color: #777;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background-color: #333;
            color: white;
            margin-top: 20px;
        }
        .sportlight{
            margin-left: 800px;
            color: darkorange;
        }
        .sportlight hr{
            background-color: darkorange;
        }

    </style>
</head>
<body>

    
    <header class="header">
        <div class="logo">
            <img src="logo.jpg" alt="The New Times Logo">
            <h5>friday,August 23,2024</h5>
        </div>
        <div class="Subscribe">
         <button>Subscribe Now</button>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#">News</a>
        <a href="#" >Opinions</a>
        <a href="#">Sports</a>
        <a href="#">Entertainment</a>
        <a href="">Videos</a>
        <a href="#">Jobs & Tenders</a>
        <a href="#">Epaper</a>
    </nav>
    
     <div class="search">
         <input type="text" name="search" placeholder="Search...">
     </div>
    <div class="main-content">
       
        <div class="first">
            <img src="c7.jpg" >
            <div style=" margin-left: 740px;margin-top: -500px;">
                
                <a href="#" >sport</a><br>
                <p>City of Kigali announces interim solution for Pelé Stadium lighting issues</p>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <img src="c2.jpg" alt="Featured Story" style="height: 150px;"><br>
                <a href="#">Environment</a><br>
                <p>REMA reassures public over Lake Kivu methane gas safety</p>
            </div>
        </div>
       
    </div>
 <div class="sportlight">
            <label >Sportlight</label><br>
            <hr><br>
            <div style="width: 250px;">
                <p style="color: #000;">Beyond gorillas, what else can tourists enjoy in Kinigi</p>
            </div>
            <div style="width: 250px;margin-left: 250px;margin-top: -50px;">
                <p style="color: #000;">‘Rwanda Shima Imana’ returns after five-year hiatus</p>
            </div>
             <div style="width: 250px;margin-left: 550px;margin-top: -50px;">
                <p style="color: #000;">REMA reassures public over Lake Kivu methane gas safety</p>
            </div>
        </div>
   
    <div class="last">
        <div class="news-card">
            <img src="c3.jpeg" alt="News 1">
            <h4>After Kenya, Israel Mbonyi heads to Uganda for two major concerts,</h4>
            <p>Friday, August 23, 2024</p>
        </div>
        <div class="news-card">
            <img src="c4.jpg" alt="News 2">
            <h4>Muhakwa to focus on value for money after re-election as PA</h4>
            <p>Friday, August 23, 2024</p>
        </div>
        <div class="news-card">
            <img src="c1.jpg" alt="News 3">
            <h4>Beyond gorillas, what else can tourists enjoy in Kinigi?</h4>
              <p>Friday, August 23, 2024</p>
       
        </div>
        <div class="news-card">
            <img src="c6.jpg" alt="News 4">

            <h4>Govt bans over 40 religious sects they are disscusing about it</h4>
              <p>Friday, August 23, 2024</p>
            
        </div>
    </div>


</body>
</html>