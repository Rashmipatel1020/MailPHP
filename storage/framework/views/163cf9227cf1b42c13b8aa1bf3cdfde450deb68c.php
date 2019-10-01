<!DOCTYPE html>
<html>
<head>
<title>send email</title>
<style>
   #box{height:200px;width:400px;border:3px solid red;margin-left:500px;
   margin-top:10px;border-radius:10px ;background-color: rgba(201, 76, 76, 0.3);
   }
</style>
</head>
<body>
<?php if(count($errors)>0): ?>
<button type="button" data-dismiss="alert"></button>

<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li>
  <?php echo e($error); ?>

  </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<form method="post" action="<?php echo e(url('sendemail/send')); ?>">
<?php echo e(csrf_field()); ?>

<h1 style="margin-left:590px;">!! send email !!</h1>
<div id="box">

<br>

     <label style="margin-left:30px;">NAME:</label>
     <input type="text" name="name" style="margin-left:20px;"/><br><br>



     <label style="margin-left:30px;">EMAIL:</label>
    <input type="text" name="email" style="margin-left:20px;" /><br><br>


     <label style="margin-left:30px;">MESSAGE:</label>
     <textarea name="message" ></textarea>
<br>

<center><input type="submit" name="send" value="Send"/></center>
</div>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelmail\mail\resources\views/send_email.blade.php ENDPATH**/ ?>