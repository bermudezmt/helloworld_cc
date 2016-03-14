<?php include 'header.php'; ?>
<div class="container">
	<form id="registration-form" class="form-horizontal" action="/userconfirmation.php" method="post" data-toggle="validator">
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="first_name" class="control-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" data-validation="custom" data-validation-regexp="^[a-zA-Z][a-zA-Z ',-]*$">
                    </div>
		    <div class="help-block with-errors"></div>
		</div>
                    
                <div class="form-group">
		    <div class="col-md-4">
                        <label for="last_name" class="control-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" data-validation="custom" data-validation-regexp="^[a-zA-Z][a-zA-Z ',-]*$">
                    </div>
		</div>
	    
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="address1" class="control-label">Address1</label>
                        <input type="text" class="form-control" id="address1" name="address1" data-validation="length" data-validation-length="3-64">
                    </div>
		</div>
	            			
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="address2" class="control-label">Address2</label>
                        <input type="text" class="form-control" id="address2" name="address2" data-validation="length" data-validation-length="3-64">
                    </div>
		</div>
		    
                <div class="form-group">
                    <div class="col-md-2">
                        <label for="city" class="control-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" data-validation="custom" data-validation-regexp="^[a-zA-Z][a-zA-Z ',-]*$">
                    </div>
		</div>
	
                <div class="form-group">
                    <div class="col-md-2">
                    	<label for="states" class="control-label">State</label>
                    	<select size="8" id="state" class="form-control" name="state" data-validation="length" data-validation-length="2">
                       		 <option value="AL">AL</option>
                       		 <option value="AK">AK</option>
                       		 <option value="AZ">AZ</option>
                       		 <option value="AR">AR</option>
                       		 <option value="CA">CA</option>
                       		 <option value="CO">CO</option>
                       		 <option value="CT">CT</option>
                       		 <option value="DE">DE</option>
                       		 <option value="DC">DC</option>
                       		 <option value="FL">FL</option>
                       		 <option value="GA">GA</option>
                       		 <option value="HI">HI</option>
                       		 <option value="ID">ID</option>
                       		 <option value="IL">IL</option>
                       		 <option value="IN">IN</option>
                       		 <option value="IA">IA</option>
                       		 <option value="KS">KS</option>
                       		 <option value="KY">KY</option>
                       		 <option value="LA">LA</option>
                       		 <option value="ME">ME</option>
                       		 <option value="MD">MD</option>
                       		 <option value="MA">MA</option>
                       		 <option value="MI">MI</option>
                       		 <option value="MN">MN</option>
                       		 <option value="MS">MS</option>
                       		 <option value="MO">MO</option>
                       		 <option value="MT">MT</option>
                       		 <option value="NE">NE</option>
                       		 <option value="NV">NV</option>
                       		 <option value="NH">NH</option>
                       		 <option value="NJ">NJ</option>
                       		 <option value="NM">NM</option>
                       		 <option value="NY">NY</option>
                       		 <option value="NC">NC</option>
                       		 <option value="ND">ND</option>
                       		 <option value="OH">OH</option>
                       		 <option value="OK">OK</option>
                       		 <option value="OR">OR</option>
                       		 <option value="PA">PA</option>
                       		 <option value="RI">RI</option>
                       		 <option value="SC">SC</option>
                       		 <option value="SD">SD</option>
                       		 <option value="TN">TN</option>
                       		 <option value="TX">TX</option>
                       		 <option value="UT">UT</option>
                       		 <option value="VT">VT</option>
                       		 <option value="VA">VA</option>
                       		 <option value="WA">WA</option>
                       		 <option value="WV">WV</option>
                       		 <option value="WI">WI</option>
                       		 <option value="WY">WY</option>
                    </select>
                </div>
            </div>
	    			
            <div class="form-group">
                <div class="col-sm-2">
                	<label for="zip" class="control-label">Zip</label>
                       	<input type="text" class="form-control" id="zip" name="zip" data-validation="custom" data-validation-regexp="^\d{5}(?:[-]\d{4})?$">
                </div>
	    </div>
		
            <div class="form-group">
                 <div class="col-sm-2">
                 	<label for="country" class="control-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="US" readonly>
                 </div>
            </div>
		 <div class="col-md-6">
			<button type="submit" name="registration-form-submit" class="btn btn-primary">Submit</button>
                 </div>
	     </form>
</div>
<script> $.validate(); </script>
</body>
</html>
