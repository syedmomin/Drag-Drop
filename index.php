<?php
$conn = mysqli_connect('localhost','u874471053_syedmomin','8:Y]|NI+d','u874471053_game');
 session_start();
 if(!isset($_SESSION['nam'])){
   header("location:index.php");
   die();  
 }

 if(isset($_POST['sid'])){
  mysqli_query($conn, "UPDATE login set timr2 = '".$_POST['sid']."' where mal = '".$_SESSION['nam']."'");
}

if(isset($_POST['fin'])){
  mysqli_query($conn, "UPDATE login set status2 = '".$_POST['fin']."'  where mal = '".$_SESSION['nam']."'");
}

if(isset($_POST['div1'])){
  mysqli_query($conn, "INSERT INTO  drag(ur_id,ur_name,div1,div2) value ('".$_SESSION['id']."','".$_SESSION['nam']."','".$_POST['div1']."','".$_POST['div2']."')");
}

if(isset($_POST['div2'])){
  mysqli_query($conn, "INSERT INTO  drag(ur_id,ur_name,div1,div2) value ('".$_SESSION['id']."','".$_SESSION['nam']."','','".$_POST['div2']."')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Game Words</title>
</head> 
<body>
      <?php
     $stt = mysqli_query($conn,"SELECT * FROM login where mal = '".$_SESSION['nam']."'");
     $fis  = mysqli_fetch_array($stt);  
    if($fis['status2'] == "successful"){
    ?>
     <h1 class="text-center" style="color: #1c2754;margin-top:10%">Application Submitted</h1>
<?php 
    }else{ ?>
          <div class="container" style="background-color:white">
          <!-- <h3>Correct  <a id="clicks">0</a></h3>
             <h3>Wrong <a id="clickss">0</a></h3> -->
           <center><img src="../logo.png" height="120px"/></center>
              <h2 id="hd2">CONTROL AWARENESS DRIVE</h2>
              <h2 id="hd1">RISK & CONTROL</h2>
              <div class="count d-flex justify-content-center">
              <?php
              if(!empty($_SESSION['nam'])){
                $sqq = mysqli_query($conn,"SELECT * FROM login where mal = '".$_SESSION['nam']."'");
                $upp  = mysqli_fetch_array($sqq); 
                $timer = explode(':', $upp['timr2']);
                ?>
             <p id="deep"><label id="minutes" class="counttxt"><?php echo @$timer[0] ?></label>:<label id="seconds" class="counttxt"><?php echo @$timer[1]  ?></label></p>
             <?php
              }else{ 
                  ?>
              <p id="deep"><label id="minutes" class="counttxt">00</label>:<label id="seconds" class="counttxt">00</label></p>
              <?php
              }?>
              </div>
              <center><p>Click and drag your answers in the box.</p></center>
         <div class="container-fluid" > 
           <div class="row">
            <div  class="col-sm-12 col-md-12 col-lg-1 overflow-auto" style="height: 450px;">
            </div>
             <div  class="col-sm-12 col-md-12 col-lg-5   overflow-auto" style="height: 450px;">
              <h4 id="hd2" class="sticky-top bg-white" >RISK</h4>
              <div class="row">
              <div class="col-8 d-flex justify-content-center">
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 3' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 3"><span class="rk">RISK 16</span><br/><br/>Employees are not recording their leaves on Decibel.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 4' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 4"><span class="rk">RISK 15</span><br/><br/>An employee loses his laptop in transit and is unable to access the data.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 9' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 9"><span class="rk">RISK 14</span><br/><br/>While cleaning the desk, an employee wants to disposes of certain documents.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 10' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 10"><span class="rk">RISK 13</span><br/><br/>Employees are missing out on important messages due to information overload on whatsapp groups.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 13' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p  class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 13"><span class="rk">RISK 12</span><br/><br/>Employee performance measures are ineffective, or are not aligned with company strategy.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 14' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 14"><span class="rk">RISK 11</span><br/><br/>Discussion on Public forums by people associated with DH regarding an upcoming the culture of the company.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 1' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 1"><span class="rk">RISK 10</span><br/><br/>Certain departments of the company are not aware of the risk to the business and their processes.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 2' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 2"><span class="rk">RISK 9</span><br/><br/>In order to carry transaction within approved limits, it was advised that expenditures be split into more than one transaction. </p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 7' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 7" ><span class="rk">RISK 8</span><br/><br/>Capital expenditure was procured without ensuring budget limitations.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 8' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 8"><span class="rk">RISK 7</span><br/><br/>One quotation was obtained for a purchase of IT Equipment amounting to Rs 60,000.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 16' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 16"><span class="rk">RISK 6</span><br/><br/>A vendor being hired is related to the executive who is part of the procurement team. </p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 15' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 15"><span class="rk">RISK 5</span><br/><br/>Material unpublished price sensitive information is available with an executive who is working on a project.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 12' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 12"><span class="rk">RISK 4</span><br/><br/>Trading of shares by employees or their spouses or lineal ascendant or descendant.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 11' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 11"><span class="rk">RISK 3</span><br/><br/>External consultants offered a gadget as a gift at the end of a meeting as a business gesture to an executive of the company.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 6' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk2" draggable="true" ondragstart="drag(event)" id="CONTROL 6"><span class="rk">RISK 2</span><br/><br/>Disclosure of confidential information to a third party.</p></div>
              <?php } ?>
               <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div2 = 'CONTROL 5' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><p class="risk" draggable="true" ondragstart="drag(event)" id="CONTROL 5"><span class="rk">RISK 1</span><br/><br/>Unauthorized use of company’s property, conflict of interest, occurrence of events that impacts operation or smooth functioning , data loss</p></div>
              <?php } ?>
            </div>
              </div>
             </div>








             <!------------------------------------------- control -->







             <div  class="col-sm-12 col-md-12 col-lg-6  overflow-auto " style="height: 450px;">
              <h4 id="hd2" class="sticky-top bg-white">CONTROL</h4>
           <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 1'  and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Each department has to maintain an update in the risk register semi annually, as part of ERM which is reported back to Board.</span><input type="submit" id="CONTROL 1" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 1"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 2' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">The authority delegated is for one complete transaction and in no circumstances should the expenditure be split in order to circumvent the approved limits.</span><input type="submit" id="CONTROL 2" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 2"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 3' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Employees should ensure that particulars related to leaves should be updated on Decibel.</span><input type="submit" id="CONTROL 3" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 3"></a></>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 4' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">All data to be backed up on dropbox folders at all times.</span><input type="submit" id="CONTROL 4" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 4"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 5' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Installation of authorised software on Company owned computers.</span><input type="submit" id="CONTROL 5" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 5"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 6' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Sign NDA with third parties.</span><input type="submit" id="CONTROL 6" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 6"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 7' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Ensure that budgetary allocation of the goods and services to be procured is available. Finance Department is to confirm before procurement.</span><input type="submit" id="CONTROL 7" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 7"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 8' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Any procurement above Rs 100,000/- will require at least three quotations; unless exempted in accordance with the policy.</span><input type="submit" id="CONTROL 8" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 8"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 9' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">All data is to be stored for a minimum 10 years. Employee to consult legal before disposing any document.</span><input type="submit" id="CONTROL 9" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 9"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 10' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Only work related messages to be shared; Members of CMC are responsible for communication on behalf of the company; avoid sending message before 9 am and after 6pm, only CMC will do so in case it is important.</span><input type="submit" id="CONTROL 10" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 10"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 11' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">If a gift is less than Rs. 25,000, the employee can retain it.</span><input type="submit" id="CONTROL 11" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 11"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 12' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Notify the Company Secretary in writing followed by a written record of price, number of shares, form of shares (physical / CDC) and nature of transaction alongwith supporting bill from broker within two days of transaction.</span><input type="submit" id="CONTROL 12" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 12"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 13' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">LMs to provide regular feedback and do a check- in on employee's progress on OKRs. Check-in and feedback can be done in an informal meeting or via Engagedly.</span><input type="submit" id="CONTROL 13" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 13"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 14' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">The only spokesperson of the company is CEO for public forums.</span><input type="submit" id="CONTROL 14" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 14"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 15' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">The executive should abide by the insider trading policy and not disclose any price sensitive information'.</span><input type="submit" id="CONTROL 15" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 15"></a></div>
              <?php } ?>
              <?php
               $sq = mysqli_query($conn,"SELECT * from drag WHERE div1 = 'CONTROL 16' and ur_name = '".$_SESSION['nam']."'");
               $mt = mysqli_fetch_array($sq);
               if(@count($mt) > 0 ){
               }else{
               ?>
              <div><a href="#" class="tooltipp arrow-bottom" ><span class="tooltiptext">Immediately disclose a conflict or potential conflict of interest in writing on the Learn & Share Report.</span><input type="submit" id="CONTROL 16" ondrop="drop(event)" class="cont" ondragover="allowDrop(event)" value="CONTROL 16"></a></div>
              <?php } ?>
            </div>
            </div>
            </div>
               <img src="shadow.png" style="width: 100%;"/>
            <div class="col -12 d-flex justify-content-center">
            <form>
            <?php 
           $sql = mysqli_query($conn,"SELECT * FROM login where mal ='".$_SESSION['nam']."'");
           $row  = mysqli_fetch_array($sql);
          ?>
                <div class="form-group d-flex justify-content-between mt-4">
                    <label>Name</label>
                    <input type="text" class="form-control bg-light " style="width:400px;"  id="nam" value="<?php echo $row['nam'] ?>" required>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <label>Designation </label>
                    <input type="text" class="form-control bg-light ml-2" style="width:400px;"  id="des" value="<?php echo $row['des'] ?>" required>
                  </div>
                <div class="form-group d-flex justify-content-between">
                  <label>Email</label>
                  <input type="text" class="form-control bg-light" style="width:400px;"  id="mal" value="<?php echo $row['mal'] ?>" required>
                </div>
                <a  class="btn btn-primary" onclick="screenshot()" style="background-color: #1c2754;margin-left: 80%;width: 100px;" >Submit</a>
              </form>
            </div>
        </div>
    <?php
    }?>

        <div class="modal fade" id="#myModa">
          <div class="modal-dialog">
              <div class="modal-header bg-success justify-content-center">
                <h4 class="modal-title text-white"><i class="fas fa-check-circle" style="margin-right:10px"></i>Answer Correct</h4>
              </div>
          </div>
        </div>

        <div class="modal fade" id="#myModal">
          <div class="modal-dialog">
              <div class="modal-header bg-danger  justify-content-center">
                <h4 class="modal-title text-white"><i class="fas fa-window-close"  style="margin-right:10px"></i>Answer Wrong</h4>
              </div>
          </div>
        </div>
   <div class="modal" id="sumt" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <h1 style="color: #1c2754;">Application Submitted</h1>
      </div>
    </div>
  </div>
</div>
        <script>
            var correct = 0;
            var wrong = 0;

            // alert(correct);
            // alert(wrong);
function allowDrop(ev) {ev.preventDefault();}
function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  var as = ev.target.id;
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
  if(as == data){
    ev.target.style.display = "none";
  $.ajax({
  url : "index.php",
  type : "POST",
  data :  {div1:as,div2:data},
  success : function(data){
console.log('catt');
  }});
              $('#\\#myModa').modal('show');
              correct += 1;
              document.getElementById("clicks").innerHTML = correct;
            
          }else{
            // alert(data);
            $.ajax({
            url : "index.php",
            type : "POST",
            data :  {div2:data},
            success : function(data){
          console.log('catt');
            }});
              $('#\\#myModal').modal('show');
              wrong += 1;
              document.getElementById("clickss").innerHTML = wrong;
          }
}
function screenshot() {
  $('#sumt').modal({backdrop: 'static', keyboard: false});
    $.ajax({
  url : "index.php",
  type : "POST",
  data :  {fin: "successful"},
  success : function(data){
console.log('catt');
  } 
});
             var nam = $("#nam").val();
             var des = $("#des").val();
             var eml = $("#mal").val();
            var ans =  correct*100/16;
             Email.send({
        Host : "smtp.titan.email",
        Username : "admin@infotechabout.com",
        Password : "Admin123456#$",
        To : '',
        // To : 'syedmomin168@gmail.com',
        From : "admin@infotechabout.com",
        Subject : "Dataminds "+ nam + " " + eml,
        Body : "Result => "+ nam + " Total Correct Answer  " + correct +" Total Wrong Answer " + wrong +" percentage " + ans+"%",
    }).then(
      // message => alert(message),
    );
    }
function gn() {
  var std = $('#deep').text();
$.ajax({
  url : "index.php",
  type : "POST",
  data :  { sid: std},
  success : function(data){
console.log('cat');
  } 
});
}

//---------------- timerrr
 var st = $('#deep').text();
var a = st.split(':');
var seconds = (+a[0]) * 60 + (+a[1]); 
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = seconds;
setInterval(setTime, 1000);
function setTime() {
 ++totalSeconds;
 gn();
 if(totalSeconds == 2700){
  screenshot(); 
}
 secondsLabel.innerHTML = pad(totalSeconds % 60);
minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
}
function pad(val) {
var valString = val + "";
if (valString.length < 2) {
   return "0" + valString;
  } else {
    return valString;
  }
}  
      
        </script>
</body>
</html>