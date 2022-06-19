

<?php

@$myid = $_SESSION['userid'];


  $mcatid = isset($_GET['mcatid']) && is_numeric($_GET['mcatid'])? intval($_GET['mcatid']) :0 ;
  $catid = isset($_GET['catid']) && is_numeric($_GET['catid'])? intval($_GET['catid']) :0 ;
  $scatid = isset($_GET['scatid']) && is_numeric($_GET['scatid'])? intval($_GET['scatid']) :0 ;

   
    $ds="select * from maincat where mcatid='$mcatid' ";
    $df=mysqli_query($conn,$ds);
     $r=mysqli_fetch_array($df);
     $mcat=$r['mcat'];

   $dd="select * from cat where catid='$catid' ";
    $d=mysqli_query($conn,$dd);
     $rr=mysqli_fetch_array($d);
     $cat=$rr['cat'];

   $sd="select * from scat where scatid='$scatid' ";
    $f=mysqli_query($conn,$sd);
     $rrr=mysqli_fetch_array($f);
     $scat=$rrr['scat'];



if($mcatid==0){ ?>

  <script type="text/javascript">
    window.location.href="../home?mcatid=1"
  </script>
           
<?php }

if($catid==0){
  $link1="../".$mcat."/?mcatid=".$mcatid;
}else{
  $link1="../".$cat."/?mcatid=".$mcatid."&&catid=".$catid."&&scatid=".$scatid;

}

$link=str_replace(' ', '', $link1);
?>

  <script src="../inc/ckeditor/ckeditor.js"></script>

<div class="container_fluid" style="position: relative;">
 <div class="row">

  
<!------------------newsnav-------------------------------------------->
<div style="background:gray;color:blue">
	<marquee>
		<h6 style="margin-top:5px ">No news is a good news</h6>
	</marquee>

</div>




<i class="fas fa-pen" style="font-size:30px;position:fixed;color:orange  "></i>
<!-----------

<div class="offset-10 col-2"  style="direction:rtl;position:fixed;margin-top:300px ">
<button id="addpost" class="btn  btn-info" style="border-radius:30px ">addpost</button>
</div>



<script type="text/javascript">
	 $('#addpost').on('click',function(){

   window.location.href = "../addposts";
	})

</script>


-------------->
</div>
</div>



<div style="color:red"><center> برجاء استخدام هذ المحرر لتنسيق الخط والالوان فقط...... ولايستخدم لرفع الصور والفيديو 

وغيرها  ... استخدم زر اسفل المحرر لرفع الصور </center></div>

<div><span style="color:blue ">send post to >>> <?php echo @$mcat;?> >>> <?php echo @$cat;?> >>> <?php echo @$scat;?></span></div>

<!------------------addpost-------------------------------------------->
<div class="container_fluid" >
 <div class="row">

<!------------------addpost-------------------------------------------->
                <form action=""
                 method="post" enctype="multipart/form-data"  >

                    <textarea name="textareapost" id="texta" class="form-control"></textarea>
                    <script>
                        CKEDITOR.replace('textareapost');
                   </script>

                    <input type="text" hidden name="userid" value="<?php echo $myid ?>">

                    <input type="file"  hidden id="file" name="photo[]" multiple accept="image/*"   >

                    <br>
                   <a href="" id="afile"> photos <i class="fas fa-paperclip" style="font-size:30px "></i></a>

                    <script type="text/javascript">
                      $('#afile').on('click',function(e){
                        e.preventDefault();
                        $('#file').click();
                          $('#afile').style.clear="hover"
                      })
                    </script>


<style type="text/css">
  #afile {
      text-decoration: none;
  }
  #afile:hover{
    background:white;
    color: green;
    font-size:30px  
  }
</style>
                        

                    
                    <button  class="btn btn-primary btn-block" style="float:right"> اضافة منشور </button>
 
                </form>
           <br/>
           <br>

                 

<!------------------navpage-------------------------------------------->










 <!---------------------------------------------------------------------------->


</div>
</div>


<!------------------------>

<?php
include '../config/config.php' ;

   


if($_SERVER['REQUEST_METHOD'] == "POST"){

  
  $userid = $_POST['userid'] ;
  $post=$_POST['textareapost'];

 $name     =@$_FILES['photo'] ['name'] ;
  $type     =@$_FILES['photo'] ['type'] ;
  $tmp      =@$_FILES['photo'] ['tmp_name'] ;
  $size      =@$_FILES['photo'] ['size'] ;
   
 $date=date('dMy');
 $time=date('H:i:s');
 
$n="INSERT INTO `posts` (`postid`, `mcatid`,`catid`, `scatid`, `userid`, `post`,`date`, `time`) VALUES 
('', '$mcatid','$catid',  '$scatid','$userid', '$post','$date' , '$time')";

$m= mysqli_query($conn,$n);
if($m){
     echo"<audio src='chatsound.wav' autoplay></audio>";
       
$success='<span style="color:green;text-align:center"> you have successfully posted   </span>';


       }

if(!empty($name)){
$w="select * from posts where userid='$myid' order by date desc ,time desc ";
$mc=mysqli_query($conn,$w);
$zx=mysqli_fetch_array($mc);
  $pid=$zx['postid'];
                                 

 $count=count($_FILES['photo'] ['name']);
    for ($i = 0; $i < $count ;$i++) {
   $name     = @$_FILES['photo'] ['name'][$i] ;
  $type     = @$_FILES['photo'] ['type'][$i] ;
  $tmp      = @$_FILES['photo'] ['tmp_name'][$i] ;
  $size      =@$_FILES['photo'] ['size'][$i] ;
   

$allowed =array("jpg","png","gif","jpeg");
$explode =explode('.',$name);
$filetype=strtolower(end($explode));

if(! in_array($filetype, $allowed)){
  echo "  this extention not supported ";
} else{  

    $nename= rand(0,5)."_".$name;

  move_uploaded_file($tmp, '../img/'.$nename);
  
  $st="insert into img (imgid , postid , userid  , img )  
               values  ('','$pid','$userid','$nename') ";
$tt = mysqli_query($conn,$st);

}}



}

?>

<script type="text/javascript">
  setTimeout(function(){
   window.location.href = "<?php echo $link;?>";
},2000)
</script>



<?php
}



?>





                <div id="n">

<center>   <?php echo @$success ;?></center>
                    </div>


<br><br><br>

<div class="container">
  <div class="raw">
       <center><a type="submit" href="<?php echo $link;?>" class="btn btn-success " style="width:80% " > return to your page</a></center>
  </div>
</div>
