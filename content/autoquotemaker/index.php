
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>IMG Price Maker</h4>
                  </div>
                  <div class="card-body">

<form method="POST" enctype="multipart/form-data">
    <div class="col-md-12">
        <div class="alert alert-light alert-dismissible show fade">
                      
				<div class="row">
		<div class="col-md-6">
		<div class="form-group">
                      <label>Price</label>
				<input type="text" class="form-control" required="" name="price"></textarea>
                    </div>
			
		<div class="form-group">
				<input class="btn btn-lg btn-primary" name="create" type="submit" value="Submit" >
			</div>
		</div>
		<div class="form-group col-md-6">		
			<?php if (empty($_POST)): ?>
				<label>Preview </label><br>
                  <img src="files/autoquotemaker/pricecharttemplate.png" class="img-fluid"/>
			<?php endif ?>
			<?php  include "execute.php";?>
						</div>	
					</div>
				</div>
			</form>

		</div>
	</div>
</div>

