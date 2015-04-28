  <?php
session_start();
  if((isset($_SESSION["name"]))&&(isset($_SESSION["cid"]))&&(isset($_SESSION["status"])))
  {
  require("db_connect.php");
$regno=$_SESSION['name'];
$status=$_SESSION['status'];
$club_id=$_SESSION['cid'];
$id2=$_GET['id'];
?>

              
       <div  class="form center">
      <form  name="form">
          <div>
            <legend align="left"><strong><span style="color:#8a6d3b;">Details of Task</strong></span></legend>
            <div class="col-lg-10" style="margin-top:10px">
              <label>
            </div>
            <div class="col-lg-10">
 <div id="errorBox" style="color:red" ></div> 
    <select name="regno" id="regno" >
        <option  value=""><b> Click here to choose a club member </B></option>
          <?php
 $mysql_tb = 'club_'.$club_id.'_members';
 $sql = "SELECT * FROM `" . $mysql_tb . "` where status='active'";
    $res = mysqli_query($con,$sql);

    while($rows=mysqli_fetch_array($res))//selecting the events
    {
        
$name=$rows['name'];
$id=$rows['id'];
       echo" <option  value='$id'>$name</option>";
       }
       ?>
    </select>
  </label>
<br><br>
          <p  style="margin-top:10px"class="contact"><label for="t_name">Name of Task :</label></p> 
          <input id="name" name="t_name" placeholder="Name / Subject of task" required="" tabindex="1" type="text"> 
           
          <p class="contact"><label for="desc">Description :</label></p> 
          <input id="desc" name="desc" placeholder="Brief description of task" type="text"> 
                
               
           
             
 <input id="group" name="group"  type="hidden" value="<?php echo"$id2"; ?>"> 
                
             
        
    <div class="col-lg-12" style="margin-top:10px">
              <label>Task assignment date :</label>
            </div>
            <div class="col-lg-2">
              <select  id="ddob" class="form-control"  name="ddob" required="Day" required >
                <option value="">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17"> 17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="col-lg-3">
              <select  id="mdob" class="form-control" name="mdob" required>
                <option value="">Month</option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">Aug</option>
                <option value="09">Sept</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
              </select>
            </div>
            <div  class="col-lg-2">
              <select  id="ydob" class="form-control" name="ydob" required>
                <option value="">Year</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
                <option value="2041">2041</option>
                <option value="2042">2042</option>
                <option value="2043">2043</option>
                <option value="2044">2044</option>
                <option value="2045">2045</option>
              </select>
            </div>
            <br>
             <div class="col-lg-12" style="margin-top:10px">
              <label>Completion date :</label>
            </div>
            <div class="col-lg-2">
              <select   id="ddob1"class="form-control" name="ddob1" required="Day" required >
                <option value="">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17"> 17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="col-lg-3">
              <select  id="mdob1" class="form-control" name="mdob1" required>
                <option value="">Month</option>
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">Aug</option>
                <option value="09">Sept</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
              </select>
            </div>
            <div class="col-lg-2">
              <select  id="ydob1" class="form-control" name="ydob1" required>
                <option value="">Year</option>
               <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
                <option value="2041">2041</option>
                <option value="2042">2042</option>
                <option value="2043">2043</option>
                <option value="2044">2044</option>
                <option value="2045">2045</option>
              </select>
            </div> <br>
            <br>

           
             <br><br><br>
             
 
                  
           
             <input class="buttom" onclick="store_task2()"  tabindex="5" value="Add Task" type="button" style="margin-top:50px;margin-right:150px;"></div>
   </div>
 </form> 
</div>     
<?php

  }
  else
  {
    session_unset();
    session_destroy();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Location:signin.php");
  }
?> 
