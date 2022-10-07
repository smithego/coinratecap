<?php

include 'admin/connect.php';
include 'header.php';

$msg='';
?>
<?php 
//inserting code to dispaly message that to logged user

if (isset($_SESSION['message'])): 
?>
<div class="message-alert">

<div  style = " bottom:20px; margin:20px;" class ="alert alert-info alert-dismissible " style=" text-align: center;">
<a href='#' class='close' data-dismiss = "alert" aria-label = "close">&times;</a>
<strong ><?php echo strtoupper($msg,) . ' ' . $_SESSION['message']; ?> </strong>
</div>

<?php 
   unset($_SESSION['message']);
?>

</div>

<?php endif; ?>
    
<main>
  <!---   site title-->
  <div class="crypto-price">
  <div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box;
   border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; 
   font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:
   1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;">
   <iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" 
   height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style=
   "border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; 
   font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, 
   Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF;
    text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by COINRATECAP.NET</div></div>

</div>

<div class="crypto-price">

  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> COINRATECAP</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": "100%",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>

  <!----  blog carousel-->
 <section >

 <!----  trending coins starts-->
 <b>Trending Coins</b><i class="fas fa-fire-alt" style="color: red;"></i>
            <div class="exchanges">
            <table>
            <thead>
            <tr>
              <th>#</th>
              <th>coin</th>
          
            </tr>
            </thead>
            <tbody >
            <?php
            $select="SELECT * FROM trending_coins LIMIT 10";
            $query=mysqli_query($con,$select);
            $count=mysqli_num_rows($query);
            if($count>0){
              while($row=mysqli_fetch_array($query)){
                $news_id=$row["id"];
                $image=$row["image"];
                $title=$row["title"];
                $content=$row["content"];
                $date=$row["date"];
             ?>
            <tr>
              
              <td><?php echo $title;?></td>
              <td><?php echo $content;?><img  style="width:20px;height:20px;border-radius:50%;" src='admin/uploads/<?php echo $image;?>'></td>
              
        
            <?php 
             }
              }
              
            ?>
            </tbody>
          </table>
            </div>

            <!----  trending coins  ends-->
 
  <div class="blog">
    <b class="latest">Latest news</b>
    <br>
    <i class="fas fa-arrow-left" style="color: red;"></i><i class="fas fa-arrow-right" style="color: red;"></i>

   
    <div class="container">


   
      <div class="owl-carousel owl-theme">

      <?php
//note we first selected from database it works with added in database...and this is where we started.
//we created a database known as added for our news           
$select="SELECT * FROM added limit 10";
            $query=mysqli_query($con,$select);
            $count=mysqli_num_rows($query);
            if($count>0){
              while($row=mysqli_fetch_array($query)){
                $news_id=$row["id"];
                $image=$row["image"];
                $title=$row["title"];
                $content=$row["content"];
                $date=$row["date"];
             ?>
       <div class="cor"><div class="item">
       

       <img src='admin/uploads/<?php echo $image;?>'class="img-news"><h4>s<?php echo $title;?></h4>
        <a href="readindexnew.php?n_id=<?php echo $news_id;?>"><button class="btins">Read More</button></a></div></div>

        
       
        <?php 
             }
              }
              
            ?>
    </div>
    <i class="fas fa-arrow-right" style="color: red;"></i>
    </div>
    
  </div>
  <!----  blog carousel ends-->

<!----  top exchanges starts-->
  <b>Top 20 Exchanges</b>
            <div class="exchanges">
            <table class="ex">
              <tr>
                  <td>#</td>
                  <td>Exchange</td>
                  <td>Trust %</td>
                  <td>Coins</td>
                  
              </tr>
              <tr>
                  <td>1</td>
                  <td>Binance</td>
                  <td>97</td>
                  <td>365</td>
                  
              </tr>
              <tr>
                  <td>2</td>
                  <td>FTX</td>
                  <td>95</td>
                  <td>333</td>
                
              </tr>
              <tr>
                  <td>3</td>
                  <td>Coinbase</td>
                  <td>94</td>
                  <td>199</td>
                  
              </tr>
              <tr>
                  <td>4</td>
                  <td>Kucoin</td>
                  <td>94</td>
                  <td>700</td>
                  
              </tr>
              <tr>
                  <td>5</td>
                  <td>Huobi Global</td>
                  <td>93</td>
                  <td>577</td>
                 
              </tr>
              <tr>
                  <td>6</td>
                  <td>OKX</td>
                  <td>93</td>
                  <td>358</td>
                 
              </tr>
              <tr>
                  <td>7</td>
                  <td>Gate.io</td>
                  <td>92</td>
                  <td>1411</td>
                  
              </tr>
              <tr>
                  <td>8</td>
                  <td>Kraken</td>
                  <td>92</td>
                  <td>183</td>
                  
              </tr>
              <tr>
                  <td>9</td>
                  <td>Crypto.com</td>
                  <td>92</td>
                  <td>217</td>
                 
              </tr>
              <tr>
                  <td>10</td>
                  <td>Bybit</td>
                  <td>91</td>
                  <td>207</td>
                 
              </tr>
              <tr>
                  <td>11</td>
                  <td>Binance US</td>
                  <td>90</td>
                  <td>117</td>
                
              </tr>
              <tr>
                  <td>12</td>
                  <td>FTX US</td>
                  <td>89</td>
                  <td>26</td>
                  
              </tr>
              <tr>
                  <td>13</td>
                  <td>Gemini</td>
                  <td>89</td>
                  <td>96</td>
                 
              <tr>
                  <td>14</td>
                  <td>MEXC Global</td>
                  <td>88</td>
                  <td>1481</td>
                 
              </tr>
              <tr>
                  <td>15</td>
                  <td>Bitmart</td>
                  <td>88</td>
                  <td>608</td>
                  
              </tr>
              <tr>
                  <td>16</td>
                  <td>BigONE</td>
                  <td>86</td>
                  <td>145</td>
                  
              </tr>
              <tr>
                  <td>17</td>
                  <td>Hotbit</td>
                  <td>86</td>
                  <td>1977</td>
                 
              </tr>
              <tr>
                  <td>18</td>
                  <td>Bitfinex</td>
                  <td>85</td>
                  <td>184</td>
               
              </tr>
              <tr>
                  <td>19</td>
                  <td>OKCOIN</td>
                  <td>85</td>
                  <td>77</td>
                  
              </tr>
              <tr>
                  <td>20</td>
                  <td>Bittrex</td>
                  <td>84</td>
                  <td>496</td>
               
              </tr>
            </table>
            </div>

            <!----  top exchanges starts ends-->

        <!----  btc halving starts-->
        <div class="blog">
          <b class="latest">Btc Halving </b>
          <br>
          <i class="fas fa-arrow-left" style="color: red;"></i><i class="fas fa-arrow-right" style="color: red;"></i>
          <div class="container">
            <div class="owl-carousel owl-theme">
             <div class="cor"><div class="item"><img class="an" ><h4>shiba inu becomes the best coin in the world</h4>
              <a href="nft.php"><button class="btins">Nfts</button></a></div></div>
             
             <div class="cor"><div class="item"><img src="half.PNG" class="img-news"><h4>jude2</h4>
              <a href="btc halving.php"><button class="btins"> Btc Halving</button></a></div></div>
             
             <div class="cor"><div class="item"><img src="marketsecond.png" class="img-news"><h4>jude2</h4>
              <a href="crypto_price.php"><button class="btins">Crypto Price</button></a></div></div>
              
          </div>
          <i class="fas fa-arrow-right" style="color: red;"></i>
          </div>
        </div>

            <!----  btc halving starts ends-->



            <div class="site-content">
              <div class="post">
                <div class="post-content">
                <?php
//note we first selected from database it works with added in database...and this is where we started.
//we created a database known as added for our news           
$select="SELECT * FROM indexnews limit 5";
            $query=mysqli_query($con,$select);
            $count=mysqli_num_rows($query);
            if($count>0){
              while($row=mysqli_fetch_array($query)){
                $news_id=$row["id"];
                $image=$row["image"];
                $title=$row["title"];
                $content=$row["content"];
                $date=$row["date"];
             ?>


                  <div class="post-image">
                    <div>
                      <img src='admin/uploads/<?php echo $image;?>' alt="blog1" class="img">
                    </div>
                    <div class="post-info">
                      <span><i class="fas fa-user"></i>&nbsp;&nbsp;Admin</span>
                      <span><i class="fas fa-calendar"></i>&nbsp;&nbsp;<?php echo $date?></span>
                    
                    </div>
                  </div>
                  <div class="post-title">
                    
                    <p class="latest-link"><a class="latest-link" href="readindexnews.php?n_id=<?php echo $news_id; ?>"><?php echo $title?></a>
                    </p>
                    <a href="readindexnews.php?n_id=<?php echo $news_id;?>"><button class=" post-btn">Read More <i class="fas fa-arrow-right"></i></button></a>
                  </div>


                  <?php 
             }
              }
              
            ?>
                </div>
              
                <hr>
                
                
        
                
        
                
              <div class="pagi">
                <a href="latest_news.php"><i class="fas fa-chevron-left"></i></a>
                <a href="latest_news.php" class="pages">1</a>
                <a href="latest_news2.php" class="pages">2</a>
                <a href="latest_news3.php" class="pages">3</a>
                <a href="latest_news3.php"><i class="fas fa-chevron-right"></i></a>
              </div>
              </div>
              <aside class="sidebar">
                <div class="popular-post">
                <h2>Popular Post</h2>

                <?php
//note we first selected from database it works with added in database...and this is where we started.
//we created a database known as added for our news           
$select="SELECT * FROM sideindex limit 7";
            $query=mysqli_query($con,$select);
            $count=mysqli_num_rows($query);
            if($count>0){
              while($row=mysqli_fetch_array($query)){
                $news_id=$row["id"];
                $image=$row["image"];
                $title=$row["title"];
                $content=$row["content"];
                $date=$row["date"];
             ?>

                
                  <div class="post-content">
                  <div class="post-align">
                    <div class="post-image">
                      <div>
                        <img src='admin/uploads/<?php echo $image;?>' alt="blog1" class="imgs">
                      </div>
                    
                    </div>
                    <div class="post-title">
                      <a href="readsideindex.php?n_id=<?php echo $news_id; ?>"><?php echo $title?></a>
                    </div>
               </div>
                  </div>
        
           
           <?php 
             }
              }
              
            ?>
               
        
                </div>
              </aside>
            </div>
      </div>

             <!----  contact form-->
             <div class="hero">
             
              <form class="contact-form"action="send_email.php" method="post"> >
                <h2>Contact Us</h2>
                <br>
                <div class="input-group">
                    <aside><label for="name"><i class="fas fa-user"></i> Name</label></aside>
                <input type="text" id="name" name="name" class="contact-input">
        
                </div>
                <div class="input-group">
               <aside> <label for="phone NO"><i class="fas fa-calendar"></i> Phone NO</label></aside>
            
                <input type="text" id="phone NO"  class="contact-input" name="number">
        
                </div>
                <div class="input-group">
                  <aside> <label for="email"> <i class="fas fa-envelope" style="color: red;"></i> Email</label></aside>
                
                <input type="email" id="email" class="contact-input" name="email">
        
                </div>
                <div class="input-group">
                 <aside><label for="message"> <i class="fas fa-comments" style="color: red;"></i> Message</label></aside>
              <textarea id="message" rows="10" cols="40"  class="contact-text" name="message"></textarea>
              <br>
              <button type="submit" class="contact-submit" name="submit">  <i class="fas fa-paper-plane" style="color: red;"></i> Submit</button>
        
                </div>
                
              </form>
            </div>
             <!----  contact form ends-->
 </section>


<!---footer-->
<section class="sect">
        <div class="contain">  
        <div class="row">  
        <div class="col-md-12">    
        <footer class="footer">  
        <div class="container">  
        <div class="row">  
        <div class="col-md-3 m-b-30">  
        <div class="footer-title m-t-5 m-b-20 p-b-8">  
        About Us 
        </div>  
        <div class="footer-links"> 
        <a href="about.php">
        <p class="white-text">  
        About 
        </p> 
      </a> 
      </div>
        </div>  
        <div class="col-md-3 m-b-30">  
        <div class="footer-title m-t-5 m-b-20 p-b-8">  
        Accounts 
        </div>  
        <div class="footer-links">  
        <a href="log_in.php">  
        Log In
        </a>  
        <a href="create_account.php">  
        Create Account
        </a>  
         
        </div>  
        </div>  
        <div class="col-md-3 m-b-30">  
        <div class="footer-title m-t-5 m-b-20 p-b-8">  
        Quick Links  
        </div>  
        <div class="footer-links">  
        <a href="index.php">  
        Home  
        </a>  
        <a href="latest_news.php">  
        Latest News
        </a>  
        <a href="crypto_price.php">  
       Crypto Price  
        </a>  
        <a href="nft.html">  
        Nfts
        </a>  
        <a href="btc halving.php">  
         BTC Halving countdown
          </a> 
        </div>  
        </div>  
        <div class="col-md-3 m-b-30">  
        <div class="footer-title m-t-5 m-b-20 p-b-8">  
        Support  
        </div>  
        <div class="footer-links">  
        <a href="advertise.php">  
        Advertise With Us  
        </a>   
        <a href="support.php">  
        Support forum  
        </a>  
        </div>  
        <div class="footer-social-links m-t-30">  
        <li> <a href="#">  
        <i class="fa fa-facebook" aria-hidden="true"> </i> </a>  
        <a href="#"> <i class="fa fa-twitter" aria-hidden="true"> </i> </a>  
        <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"> </i> </a>  
        <a href="#"> <i class="fa fa-youtube" aria-hidden="true"> </i> </a>  
        </li>  
        </div>  
        </div>  
        </div>  
        </div>  
        </footer>  
        <div class="footer-bottom">  
        Copyright ? 2022, All Rights Reserved  
        </div>  
        </div>  
        </div>  
        </div> 
        </section> 
      <!---footer ends--> 

 


</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>   

       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>


     <!--custom javascript files-->
    <script src="./js/main.js"></script>
    <!-- owl carizor js linking-->
  <script src="./owl.carousel.min.js"></script>

    </script>
     </div>
</body>
</html>
