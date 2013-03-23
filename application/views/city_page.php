<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>揭露22K - <?=$city_name;?></title>
    <meta name="keywords" content="22K,勞資不平等,薪水問題,<?=$city_name;?>" />
    <meta name="description" content="讓我們一起揭露那些不公不義的22K薪水" />
    <?$this->load->helper('url');?>
    <base href="<?php echo base_url();?>"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "9b1fecf5-98a3-45f9-9426-3cb7fd9b8ca6"});</script>
  </head>
  <body>
  <div class="container">
  <div class="page-header">
    <h1><a href="/">揭露22K</a></h1>
    <small>22KOpenData.org</small>
  </div>
  
  <p style="text-align: center; font-size: 18pt; margin-top: 20px;"><?=$city_name;?></p>
    
    <div>
        <p align="center">
            <span class='st_fblike_hcount' displayText='Facebook Like'></span>
            <span class='st_facebook_hcount' displayText='Facebook'></span>
            <span class='st_twitter_hcount' displayText='Tweet'></span>
            <span class='st_googleplus_hcount' displayText='Google +'></span>
            <span class='st_email_hcount' displayText='Email'></span>
            <span class='st_evernote_hcount' displayText='Evernote'></span>
        </p>
    </div>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>公司名稱</th>
          <th>地址</th>
          <th>職位名稱</th>
          <th>薪資</th>
          <th>相關資料</th>
        </tr>
      </thead>
      
      <?php echo $table_html;?>
    </table>
    
    <?=$city_links;?>
    
    <div class="hero-unit">
    <h1>揭露22K，需要你的支持！</h1>
    <p>讓那些只願意付<span class="label label-inverse">22K</span>左右或以下的薪資，卻要員工十八般武藝樣樣精通的雇主/公司見光吧！如果你只願意付<span class="label label-inverse">22K</span>給勞工，認為他們只值這個錢，並還認為這是對的事情，就別怕大家說！</p>
    <p>只要你在網路上看到有公司應徵技術人才，卻明目張膽的貼著<span class="label label-inverse">22K</span>徵人，或是你是領著<span class="label label-inverse">22K</span>的技術人才，都歡迎你將相關網站網址、截圖、薪資條照片寄給我們。</p>
    <p>來信請寄到open22k@email.com</p>
    </div>
    
    <div class="alert alert-error">
    爆料人保護措施：<br />
    ※「揭露22K」會在您傳送資料後的12-24小時內，將該筆資料公布於本網站。<br />
    ※「揭露22K」不會留下您的任何個人資訊與連線記錄，請安心爆料。<br />
    ※「揭露22K」將會仔細檢查您的附件，將您的個人資料完全移除。<br />
    </div>
    

    <address>
    雇主訴願專案信箱：iamnot22k@job4u.com<br />
    網站贊助： <a href="http://www.digicity.ws" target="_blank">Digicity Internet Services</a><br />
    頁面產生時間：<?php echo $this->benchmark->elapsed_time();?>s.
    </address>
  </div>
    
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-38027310-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
  </body>
</html>