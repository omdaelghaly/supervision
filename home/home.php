
<?php

  $mcatid = isset($_GET['mcatid']) && is_numeric($_GET['mcatid'])? intval($_GET['mcatid']) :0 ;

if($level !=2){
	$hidepostdel="hidden";
}else{	
	$hidepostdel="";
}
?>


<div class="container_fluid" style="position: relative;">
 <div class="row">

  
<!------------------newsnav-------------------------------------------->
<div style="background:red;color:white">
	<marquee>
		<h6 style="margin-top:5px ">No news is a good news</h6>
	</marquee>

</div>

<i class="fas fa-home" style="font-size:30px;position:fixed;color:orange  "></i>



<div class="offset-10 col-2"  style="direction:rtl;position:fixed;margin-top:300px " <?php echo	@$hidepostdel; ?>>
<button id="addpost" class="btn  btn-info" style="border-radius:30px ">addpost</button>
</div>



<script type="text/javascript">
	 $('#addpost').on('click',function(){

   window.location.href = "../addposts?mcatid=<?php echo $mcatid;?>";
	})

</script>



<!------------------newsnav-------------------------------------------->

<!------------------navpage-------------------------------------------->
<!-------
<div class=" col-12  " 
   style="background:skyblue;height:100%;background:yellow ">

   
hhhhhhhhhhhh hhhhhhhhhhhhmm mmmmmmmmm jjjjjjjjj hhhhhhhhh hhhhhhhhhh gggggggggggg 

 <ul class="navbar-nav" style="float: right;"   >
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="">
        <h4>surf this stage </h4>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Lesson plan</a></li>
            <li><a class="dropdown-item" href="#">Courses</a></li>
            <li><a class="dropdown-item" href="#">Correspondence</a></li>
            <li><a class="dropdown-item" href="#">Training</a></li>
            <li><a class="dropdown-item" href="#">Activities</a></li>
            
          </ul>
        </li>
----------------------
      </ul>













 </div>  

--->




<?php
$q="select * from posts where mcatid = '$mcatid' order by date desc,time desc ";
$f=mysqli_query($conn,$q);
while($w=mysqli_fetch_array($f)){
$postid=$w['postid'];	
$mcatid=$w['mcatid'];
$catid =$w['catid'];
$scatid=$w['scatid'];
$userid=$w['userid'];
$post  =$w['post'];
$date  =$w['date'];
$time  =$w['time']; 




//userinfo

$e="select * from users where userid ='$userid' ";
$t=mysqli_query($conn,$e);
$uzr=mysqli_fetch_array($t);
$fullname= $uzr['fullname'];
$avatar  = $uzr['avatar'];




//imgs info


$i="select * from img where postid ='$postid' ";
$ii=mysqli_query($conn,$i);
$inum=mysqli_num_rows($ii);

//hidedivimgifnoimg

if($inum==0){
	$hidden="hidden";
	$col="col-md-12- col-lg-12 col-xl-12";
}elseif($inum > 0 && !empty($post)){
  $hidden="";
  $hiddenpost="";

  $col="col-md-6- col-lg-6 col-xl-6";
}elseif(empty($post)){
		$hiddenpost="hidden";
	$col="col-md-12- col-lg-12 col-xl-12";
}


?>




 <!----------------page------------------------------------------------------------>

<div class="container" style=" background:;" >
 <div class="row">


<!------------------post all-------------------------------------------->
<div class=" col-12  " id="xpost<?php echo $postid;?>" 
   style="background: ;direction:rtl ">
    <div class="row">
<!------------------------->
<div id="postinfo" style="background:skyblue ">
	<img src="../siteimg/<?php echo $avatar;?>" 
	style="width:70px;height:70px;border-radius:50px;   "><span style="display:inline-flex; "><strong>
      <big>  <?php echo $fullname;?></big>
	 <br><small>
        <?php echo $date ." " .$time;?>
	</small></strong></span>


<!------------------post sitting----------------------->
    
        <li class="nav-item dropdown"  style="display:inline-flex;float:left;margin-left: 20px;margin-top:10px" 
        <?php echo	@$hidepostdel; ?>  >

          <a class="nav-link dropdown-toggle nav-link active" href="#" id="optpost" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="">
        
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="javascript:void(0)" id="deletepost<?php echo $postid;?>"
              onclick="deletecom('../delete/deletepost.html?postid=<?php echo $postid;?>','<?php echo $postid;?>')"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
                delete</a></li>
            
            
          </ul>
        </li>


</div>
<style type="text/css">
	#optpost:hover{
		background:white 
	}
	    #poststyle:hover{color: red }

</style>
<script type="text/javascript">

    $('#deletepost<?php echo $postid;?>').on('click',function(){
      $('#xpost<?php echo $postid;?>').attr('hidden',true);
     })
</script>
<!----------------endpostsitting----start post container---------postwrite----->



<div class=" col-xs-12 col-sm-12 <?php echo $col;?> " <?php echo @$hiddenpost;?>
   style="background:white;height:;  ">

   <a id="poststyle" href="../show/post.html?postid=<?php echo $postid;?>&&myid=<?php echo $myid;?>" >

   <p id="onlypost" style="margin-right:20px;">
           <?php 

           echo $post;?>
 

    </p>
        
        </a>

<style type="text/css">
	#ahref{text-decoration:none; }
    #ahref p:hover{ }
	#poststyle{text-decoration:none; }
	#poststyle img{text-decoration:none; }
	#poststyle img:hover{ }


</style>
 </div>  


<!------------------------postimg ----------->


<div id="postimg" class=" col-xs-12 col-sm-12 <?php echo $col; ?> " <?php echo @$hidden;?> 
   style="background:gray ;height: ; ">
   <a id="poststyle" href="../show/post.html?postid=<?php echo $postid;?>&&myid=<?php echo $myid;?>">
<?php 
//imgggs
while($im=mysqli_fetch_array($ii)){
$userid= $im['userid'];
$postid  = $im['postid'];
$postid  = $im['postid'];
$img      =$im['img'];


if($inum==1){
 ?>

   <img src="../img/<?php echo $img ;?>"    style="border-radius:5px;width:100%;height:100%">
<?php 
}elseif($inum==2){ 
	if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:48%;height:100%">
<?php
}elseif($inum==3){
 	if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:48%;height:50%;">

<?php
}elseif($inum==4){ 
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}

	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:48%;height:50%;">
<?php
}elseif($inum>4 && $inum <=6  ){ 
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:32%;height:50%">
<?php
}elseif($inum>6 && $inum <=9  ){ 
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:32%;height:33%">
<?php
}elseif($inum>9 && $inum <=12  ){ 
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:24%;height:33%">
<?php
}elseif($inum>12 && $inum <=16  ){ 
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:24%;height:25%">
<?php
}elseif($inum>16 && $inum <=20  ){ 
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:19%;height:25%">
<?php
}elseif($inum>20 && $inum <=25  ){ 
	$nu=4;
		if(empty($img)){$hiddenimg="hidden";}else{$hiddenimg="";}
	?>
   <img src="../img/<?php echo $img ;?>"  <?php echo $hiddenimg;?>  style="border-radius:5px;width:19%;height:20%">
<?php
}

?>

<?php } ?>   

</a>
 </div>  

<!---------------------------end postcontainer-----start like coment/share---buttons------------------->
<div class=" col-12  "    style="background:lightblue ;direction:rtl;display:inline-flex;   ">
<hr>
     <?php $co= "select * from likes where postid = '$postid' && myid='$myid'  ";
         $cunt=mysqli_query($conn , $co);
         $countuserl=mysqli_num_rows($cunt);
                
   $counz= "select * from likes where postid = '$postid' ";
   $counzt=mysqli_query($conn , $counz);
   $numz=mysqli_num_rows($counzt);  
         ?>
<!------buttlike------------------------------------------------------------------------->

<div style="margin-right:20% " id="<?php echo $postid;?>"  class="alertyy">
    <?php   if($countuserl > 0){?>

      <a href="javascript:void(0)" onclick="insertLike('../likes/dislikes.html?postid=<?php echo $postid;?>&userid=<?php echo $userid ;?>'
	   ,'<?php echo $postid;?>')"
     class="btn btn-default"><?php echo @$numz ;?> <i class="fa fa-heart"style="color:red"></i>  liked</a>


    <?php }else{ ?>

	  <a  href="javascript:void(0)" onclick="insertLike('../likes/likes.html?postid=<?php echo $postid;?>&userid=<?php echo $userid ;?>'
	   ,'<?php echo $postid;?>')"
     class="btn btn-default"><?php echo @$numz ;?><i class="fa fa-heart"style="color:gray"></i> like </a>
<?php }?>
</div>


<!------buttoncomment----------------------------------------------------------------------->
<div style="margin-right:30% " >
	<?php
 $cnz= "select * from comments where postid = '$postid' ";
   $czt=mysqli_query($conn , $cnz);
   $nuc=mysqli_num_rows($czt);  
   ?>
	    <a href="javascript:void(0)" onclick="" id="writecom<?php echo $postid;?>"
     class="btn btn-default"> <span id="countcomment<?php echo $postid;?>"><?php echo @$nuc ;?></span> 
     <i class="fa fa-comments"style="color:green"></i> comment</a>

</div>



<!------------------------------------>
 

</div>


<!-----------------------------------------end buttonssssssss----start formcomment------------------->
<div id="divcom<?php echo $postid;?>" hidden  style="background:;border-radius:30px 30px 30px 30px ;
margin-right:5px;margin-left:20px ; " >

<div id="#return<?php echo $postid;?>"></div>

<form action="" method="post" id="formcomment<?php echo $postid;?>" enctype="multipart/form-data" class="formhide">
	<input type="button" name="send" id="send<?php echo $postid;?>" value="send" class="btn btn-info" style="margin-right:10px; ">
	<input type="text" name="comment" id="comment<?php echo $postid;?>" style="margin:0px;padding:0px;height:50px;width:80% ;
	padding: 5px;border-radius:30px 30px 3px 30px "    >
		<input type="text" name="userid" value="<?php echo $myid;?>"  hidden>    
		<input type="text" name="postid" value="<?php echo $postid;?>"  hidden>    

</form>	
</div>
<style type="text/css">
	input:focus{
    outline: none;
}
</style>
 <script>
        $(document).ready(function() {
            $('#send<?php echo $postid;?>').click(function() {
                var exn = $('#comment<?php echo $postid;?>').val();
                
                if (exn == ''  )
                      {
                 $('#return<?php echo $postid;?>').html('<center style="color:red;"> Write a comment first,please </center>');
                                               setTimeout(function() {
                                $('#return<?php echo $postid;?>').fadeOut("slow");
                            },5000);
                } else {
                    $.ajax({
                        url: "insertcomment.html",
                        method: "POST",
                        data: $('#formcomment<?php echo $postid;?>').serialize(),
                        success: function(data) {
                            $('form').trigger("reset");
                            $('#return<?php echo $postid;?>').fadeIn().html(data);
                            setTimeout(function() {
                                $('#return<?php echo $postid;?>').fadeOut("slow");
                            },5000);
                        }
                    });
                }

            });
        });


    </script>

                              

<!---------------------------------------------------endform comment-------------show comments----------->

<div id="showcom<?php echo $postid;?>"  hidden >


</div>

<!-------------------------------------------------showhidecomment----------->

<script type="text/javascript">
	setInterval(function(){
	$('#showcom<?php echo $postid;?>').load('comrefesh.html?postid=<?php echo $postid;?>');
	$('#countcomment<?php echo $postid;?>').load('updatecom.html?postid=<?php echo $postid;?>');

      },1000)

</script>



<!-------------------------------------------------showhidecomment----------->




	<script type="text/javascript">
  $('#writecom<?php echo $postid;?>').on('click',function(){
$('#divcom<?php echo $postid;?>').attr('hidden',false);
$('#showcom<?php echo $postid;?>').attr('hidden',false);

$('#divcom<?php echo $postid;?>').toggle();
$('#showcom<?php echo $postid;?>').toggle();

})
	</script>









<!--------------------postall--------------------------------------------------->
</div>
 </div>  


 <!----------------------page------------------------------------------------------>


</div>
</div>


<hr>
<?php } ?>







<!------------------------>


</div>
</div>
<!------------------------------------------------------------------------------------------------->




<div id="delpost"></div>


<?php
if(!$myid){
?>
<script type="text/javascript">
 $('.alertyy').on('click',function(){
 	alert(' ?????????????? ?????????????? ???? ?????????????? ???????? ?????? ???????? .???? ???????? ???? ???????????????? ????????   ')
 })	

 $('.formhide').hide();

</script>
<?php

}else{
?>	


<script>

function insertLike(page,postid) {
        

       var xmlhttp;
       if(window.XMLHttpRequest) {
         xmlhttp = new XMLHttpRequest();
       } else {  
         xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
       } 
         
       xmlhttp.onreadystatechange = function() { 
         
         if(this.readyState == 4 & this.status == 200) { 
           document.getElementById(postid).innerHTML = this.responseText;
         }
       } 
       xmlhttp.open("GET",page,true);
       xmlhttp.send();
     } 
 </script>


<?php
}
?>





 <script>

function deletepost(page,postid) {
	              $('#xpost'+postid).hide();

               var xmlhttp;
       if(window.XMLHttpRequest) {
         xmlhttp = new XMLHttpRequest();
       } else {  
         xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
       } 
         
       xmlhttp.onreadystatechange = function() { 
         
         if(this.readyState == 4 & this.status == 200) { 
           document.getElementById('xpost'+postid).innerHTML = this.responseText;

         }
       } 
       xmlhttp.open("GET",page,true);
       xmlhttp.send();
     } 


 </script>