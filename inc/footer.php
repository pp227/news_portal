	</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
             <div class="col-md-12 col-sm-12">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
          </div>
	  </div>
	  <?php
                $query="select * from tbl_footer where id='1'";
                $footernote=$db->select($query);
                if($footernote){
                    while ($result=$footernote->fetch_assoc()) {
                
                        
                    
                ?>
	  <p> <?php echo $result['note'];?><?php echo date('D,M,Y');?></p>
	  <?php }}?>
	</div>
</body>
</html>