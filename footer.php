<!-- this file should be named footer.php -->
<p><?php 
// only an administrator should see the debug stuff:
if($access_control['role'] == "Administrator"){
    ?>
    <p>The information below is used to DEBUG your program.  It is designed for ONLY a user with role administrator. </p>
<?php 
echo '<pre>';
print_r(get_defined_vars()); 
echo '</pre>';
} else { 
    ?>
   
   <footer class="footer">
      <div class="container">
      	<div class="m-0 row card-block">
           <div class="col-12 no-padding border border-dark border-right-0 border-left-0 border-bottom-0">
			<br />
        <span class="text-muted  m-2 p-2">This website was created and is managed by <a href="https://mackenty.org">Bill MacKenty</a>. 
        <a href="https://computersciencelearning.org/learn/gdpr">General Data Protection Regulation Compliance</a> | 
        <a href="https://computersciencelearning.org/learn/privacy">Privacy</a> | 
        <a href="https://computersciencelearning.org/learn/terms">Terms</a>  
       </span>
        <br />
        <br />
      		</div>
      	</div>
      </div>
    </footer>





    <?php
}
?> 
</p>
