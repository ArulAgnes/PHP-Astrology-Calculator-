
<?php
  if($_POST)
  {
    $a1=$_POST['d1'];
   
    $a = "$a1";
    $a = str_replace("-", "", $a);
    
    
      $total=0;
      $tot1=0;
      while($a>0)
      {
        $b=$a%10;
        $total=$total+$b;
        $a=$a/10;
      } 
     
      
            if($total>9)
      {
        while($total>0)
        {
            $c=$total%10;
            $tot1=$tot1+$c;
            $total=$total/10;
        }
        $output=$tot1;
      }
      else{
        echo $total;
        $output=$total;
      }
      echo "";
    }
  
    else{
        echo "";
    }
    
        ?>
<html>
    <head><title>astro</title>
        <script lang="JAVASCRIPT">
           
        </script> </head>
    <style>
     body
     {
        background: url(11.jpg);
    background-size:cover;
     }
     .f2{
        color: solid orange;
        font-size: x-large;
        top: 15%;
        left: 15%;
    
        border-radius: 20px;
        border:2px solid rgba(255,255,255,0.5);
                width:25%;
        padding:28px;
        text-align: center;
        backdrop-filter: blur(18px);
            background-color:transparent;
            position: relative;
            width: 25%;
            padding-top: 1%;
            padding-bottom: 1%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          
     }
    
     input[type="date"] {
       width: 50%;
        padding: 12px;
        margin-bottom: 20px;
        border:1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
      background-color:;
    }
      input[type="submit"] {
        background-color: #8B4000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
        background-color: darkorange;
    }
  .hea{
            background-color:transparent;
            color:white;
            padding:1px;
        
        }
       
    </style>
   
        
        <body class="fr">
            <div class="hea">
            <h1 style="color:#658BAD"><center><u>Nemerology Calculator</u></center></h1>
    </div>
            <div class="f2">
              <marquee><span style="color:red;">Hello&#128075; Guys&#128522;!!</span><span style="color:red;"> Check Your Lucky Numbers Here </span>&#128071;</marquee>
              <br>
            <form name="f1" action="" method="post"><br>
              <div class="labels">
            <label for="forms" style="color:darkorange;"><strong>Enter Your Data Of Birth</strong></label><br><br></div>
            <div class="d1">
            <input type="date" id="d1" name="d1" required><br></div>
            <input type="submit" value="Click Here">
            
        </form>
        <?php if(!empty($output)) { ?>
    <div style="color:darkorange; font-size:110%" >
       <?php echo ""."<style='font-weight:bold;'><u>Your Lucky Number Is&#127775;:</style></u>" . $output; ?>

    </div>
      <?php } ?>
      <div class="out1" style="color:white; font-size:110%" font-weight:bold; >
      <?php 
       ?>
      </div>
    </div>
    
        </body>

    </html>