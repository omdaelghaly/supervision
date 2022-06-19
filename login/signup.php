<?php

include '../config/config.php';
include '../inc/init.html'; 
include '../inc/header.html'; 

?>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $fullname= $_POST['fullname'];
  $user= $_POST['user_name'];
  $email= $_POST['user_email'];
	$pass1= $_POST['pass1'];
  $pass= $_POST['pass'];
  $gender =$_POST['gender'];
  $date = date('Y-m-d');
  $age = "";
  $bg="ba.jpg";
  $avatar="";
  $ff ="female.jpg";
  $mm ="male.jpg";
  $job=$_POST['job'];
  $level='';




  
if($gender == 1){ $avatar="m/".$mm;}
else if($gender ==2){ $avatar="m/".$ff;}



//if(strlen($user) < 5 ){$check = " اقل عدد حروف هو 5 ";}
//else if(strlen($pass1) < 5 ){$check = " كلمة المرور يجب ان تكون اكثر من  4 حروف او ارقام  ";}

 






$q="select * from users ";
 $qq= mysqli_query($conn,$q);

while($get=mysqli_fetch_array($qq)){

  if($get['email'] ==$email){
    $check =" هذا الايميل مستخدم من قبل   ";
  }else if($get['username'] ==$user ){
    $check ="   اسم المستخدم مستخدم من قبل  ";  }

  }




  if (empty($user or $fullname or $email or $pass1 or $pass ))
   {
     $check=" هناك حقول فارغة   ";
      }else if( $pass1 !== $pass ){ $check ="      لابد ان تكون كلمة السر متطابقة    " ;}


      else if(empty($check)){

    
	$q="insert into users (username,password,fullname,email,        
  level,gender,avatar,bg, timer,job,about) values
                          ( '$user','$pass1','$fullname','$email',
    '$level','$gender','$avatar','$bg', '$date' , '$job' ,'' )  ";

    $qq= mysqli_query($conn,$q);



if($qq){
  
   
  ?>

<script>
   window.location.href = "login.php";
</script>


<?php }


}else{ echo " <center style='color:red' > لم يتم التسجيل ......... اعد المحاولة    </center>" ;}

}
 ?>
 









<section class="login-page" style="background:lightgray;">
 <div class="container">
                                                                                                      <div class="row">

<div class="col-lg-6  col-md-9 col-sm-12" style="background:skyblue " >

     <div class="login-form">
         <form class="form-horizantal" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

        <div class="col-sm-12"id="xxx">
            <lable>Name</lable>
             <input class="form-control" type="text" name="fullname" required placeholder=" الاسم كامل  ">
         </div>

         <div class="col-sm-12">
            <lable>Email</lable>
             <input class="form-control" type="email" name="user_email" required placeholder="الايميل  ">
         </div>


         <div class="col-sm-12">
            <lable>Username </lable>
             <input class="form-control" type="text" name="user_name" required placeholder="اسم المستخدم  ">
         </div>


         <div class="col-sm-12">
            <lable>Pass</lable>
             <input class="form-control" type="password" name="pass1" required placeholder="كلمة المرور ">
         </div>

            <div class="col-sm-12">
               <lable>Conf.Pass</lable>
                <input class="form-control" type="password" name="pass" required placeholder="تاكيد كلمة المرور ">
           </div>

<div class="col-sm-12">
<div class="row">

            <div class="col-sm-6  " >
                        <lable> Job</lable>

<input class="form-control" type="text" name="job" required placeholder=" وظيفه /الدرجة ">
           </div>


         <div class="col-sm-6 ">
                     <lable> gender </lable>

<select class="form-control" name="gender"  required >
  <?php $male="1" ; $female="2";?>
  
  <option value="<?php echo $male;?> "> ذكر  </option>
  <option value="<?php echo $female;?>"> انثى </option>

</select>

         </div>
         <?php  
$n="select * from grades ";
$b=mysqli_query($conn ,$n);

?>

        
 </div>
 </div>


             <div class="col-sm-12 margin-top-12" style="margin-top:10px">
               <button  id="ook" class="form-control btn btn-primary" type="submit"> انشاء حساب</button>
            </div>


<?php if(!empty($check)){ ?>
<div class="col-sm-12 alert alert-danger">
 <center> <?php echo @$check; ?>  </center>
</div>

<?php } ?>



<br>

                <a href="login.php"  class="newlog">
                <center style="color:blue;"> تسجيل الدخول بحساب حالى                     </center> </a>
        </form>
    </div>


</div>









                       <div class="wdiv col-lg-6  col-md-3 " 
                       style="background:lightgreen;border-radius:30px;">

           <br>
            <br>                                                                      
                                                <center class="wlog"> 

تحية شكر وتقدير وإجلال واحترام لكل معلم ومعلمة ولكل من علمنا حرفا دون النظر الى المادة ؛ تحية شكر لمن اخلصوا فى عملهم  ولم يبخلوا بعلمهم  ؛ جزاكم الله عنا خير الجزاء             
                                                           </center>
                                                                            
                                                                                     </div>




                                                                                                                        </div>
 </div>

 
 </section>







<?php
include '../inc/footer.html';
?>












