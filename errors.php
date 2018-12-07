<?php if(count($errors)>0): ?>
<div id="error" style="text-align: left;
    color: #ac2925;
    background:#f2dede;
    border: 1px solid #a94442;
    border-radius: 5px;
    padding-left:5px;">
    
    <?php foreach($errors as $error): ?>
    <p><?php echo $error;?></p>
    <?php endforeach;?>
</div>  
<?php endif ?>
<?php if($flag==1):?>
<div id="success" style="color: #3c763d;
    border: 1px solid #3c763d;
    border-radius: 5px;
    padding-left:5px;">
    
<p><?php echo "successfully registered! Login Now";?></p>
</div>
<?php endif ?>
<?php if($flag==2):?>
<div id="success" style="color: #3c763d;
    border: 1px solid #3c763d;
    border-radius: 5px;
    padding-left:5px;">
    
<p><?php echo "successfully Entered location";?></p>
</div>
<?php endif ?>