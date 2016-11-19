<?php
include('dbcon.php');
?>
<html>
  <head>
    <title>Property Information</title>
    	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker.min.css" />
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker3.min.css" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    	<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
    	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
      <script src="bootstrap/js/bootstrap-datepicker.min.js"></script>
      <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
      </script>
	</head>

<body>
  <section class="pinpointform" >
    <div class="container">
      <form method="post" action="add.php">
      <div class="row">
        <div class="headcover">
          <div class="col-sm-4 col-xs-12">
            <img src="bootstrap/img/logo3.png" class="imglogo img-responsive" />
          </div>
          <div class="col-sm-8 col-xs-12">
            <div class="cusinfo text-center">
              <h4>Customer Information</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <td>
                  <span class="text-title"><strong>Code:</strong></span> 
                  <div class="text-input">
                    <input type="text" name="code" class="" placeholder="..........................................................................................." />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="text-title"><strong>Date:</strong></span> 
                  <div class="text-input">
                    <input type="text" name="date" class="datt" placeholder="........................................." />/
                    <input type="text" name="date" class="datt" placeholder="........................................." />/
                    <input type="text" name="date" class="datt" placeholder="........................................." />
                  </div>
                </td>
                <td>
                  <span class="text-title"><strong>Assign by:</strong></span> 
                  <div class="text-input">
                    <input type="text" name="assignby" class="" placeholder="..........................................................................................." />
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="titletext">Property Information</h4>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <span class="text-title"><strong>First Name:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="firstname" class="" placeholder="..........................................................................................." />
                    </div>
                  </td>
                  <td>
                    <span class="text-title"><strong>last Name:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="lastname" class="" placeholder="..........................................................................................." />
                    </div>
                  </td>
                  <td>
                    <span class="text-title"><strong>Sex:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="sex" class="" placeholder="..........................................................................................." />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="text-title"><strong>Nationality:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="nationality" class="" placeholder="..........................................................................................." />
                    </div>
                  </td>
                  <td>
                    <span class="text-title"><strong>Position:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="position" class="" placeholder="..........................................................................................." />
                    </div>
                  </td>
                  <td>
                    <span class="text-title"><strong>E-mail:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="email" class="" placeholder="..........................................................................................." />
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <span class="text-title"><strong>Phone:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="phone" class="" placeholder=".............................................................................................................................................." />
                    </div>
                  </td>
                  <td>
                    <span class="text-title"><strong>Address:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="address" class="" placeholder="......................................................................................................................................................................................" />
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <span class="text-title"><strong>Code Banner:</strong></span> 
                    <div class="text-input">
                      <input type="text" name="codebanner" class="" placeholder="........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................" />
                    </div>
                  </td>

                  <td>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Date</label>
                        <div class="col-xs-5 date">
                            <div class="input-group input-append date" id="datepicker">
                                <input type="text" class="form-control" name="date" />
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
        </div>  
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4 class="titletext">Customer Requirement</h4>
          <span class="text-title service"><strong>Service:</strong></span> 
          <div class="">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                          <div class="text-title"><strong>Buy</strong></div>
                      </label>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                          <div class="text-title"><strong>Sale</strong></div>
                      </label>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                          <div class="text-title"><strong>Rent</strong></div>
                      </label>
                    </td>
                    <td>
                      <span class="text-title"><strong>Budget </strong></span> 
                      <div class="">
                        <input type="text" name="budget" class="budget" placeholder="" />
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="well">
            <div class="table-responsive">
              <h4 class="choiceproperty">Property Type</h4>
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Apartement</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Building</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Business</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Condo</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Factory</strong></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Hotel</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Land</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>House/Flat</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Villa</strong></div>
                    </td>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Office Space</strong></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                          <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      </label>
                      <div class="text-title"><strong>Warehouse</strong></div>
                    </td>
                  </tr>

                  
                  <tr>
                    <td>
                      <span class="text-title"><strong>Other</strong></span>
                      <div class="text-input">
                        <input type="text" name="other" class="" placeholder="............................................................................................................................................................................................................................................................................................................................................................................" />
                      </div>
                    </td>
                      </tr>
          
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table">
            <tbody>
              <tr>
                <td>
                  <span class="text-title"><strong>Favorite Location:</strong></span> 
                  <div class="text-input">
                    <input type="text" name="location" class="" placeholder=" ............................................................................................................................................................................................................................................................................................................................................................................" />
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>  
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4 class="titletext">
            <div class="row">
              <div class="col-sm-6">Additional Comment</div>
              <div class="col-sm-6 purpose-sm">Purpose </div>
            </div>
          </h4>
          <div class="row">
            <div class="col-sm-6">
              <textarea class="form-control" rows="5" placeholder="....................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ></textarea>
            </div>
            <div class="col-sm-12 purpose-xs"><h4 class="titletext">Purpose</h4></div>
            <div class="col-sm-6">
              <textarea class="form-control" rows="5" placeholder="....................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ></textarea>
            </div>
          </div>
        </div>  
      </div>
      <div class="col-md-6 col-md-offset-12">
           <input type="submit" name="submit" value="Add" class="btn btn-success">
      </div>
    </div>
  </form>
  </section>
</body>
</br>
</br>

  <table class="table table-striped table-bordered" id="example">
	  <thead>
      <tr>
        <th>No</th>
    		<th><a href="#" id="sortname"><i class="fa fa-arrows-v" aria-hidden="true"></i></a>First Name</th>
    		<th>Last Name</th>
    		<th>Sex</th>
    		<th>Nationality</th>
    		<th>Position</th>
    		<th>Email</th>
    		<th>Phone</th>
    		<th>Address</th>
    		<th>Code Banner</th>
        <th>Date</th>
        <th>Buy</th>
        <th>Sale</th>
        <th>Rent</th>
        <th>Budget</th>
        <th>Apartment</th>
        <th>Building</th>
        <th>Business</th>
        <th>Condo</th>
        <th>Factory</th>
        <th>Hotel</th>
        <th>Land</th>
        <th>Houseflat</th>
        <th>Villa</th>
        <th>Officespace</th>
        <th>warehouse</th>
        <th>Other</th>
        <th>Favorite Location</th>
        <th>Additionalcomment</th>
        <th>Purpose</th>
    		<th>Action</th>
      </tr>
    </thead>
	  <tfoot>
      <tr>
        <th>No</th>
    		<th><a href="#" id="sortname"><i class="fa fa-arrows-v" aria-hidden="true"></i></a>First Name</th>
    		<th>Last Name</th>
    		<th>Sex</th>
    		<th>Nationality</th>
    		<th>Position</th>
    		<th>Email</th>
    		<th>Phone</th>
    		<th>Address</th>
    		<th>Code Banner</th>
        <th>Date</th>
        <th>Buy</th>
        <th>Sale</th>
        <th>Rent</th>
        <th>Budget</th>
        <th>Apartment</th>
        <th>Building</th>
        <th>Business</th>
        <th>Condo</th>
        <th>Factory</th>
        <th>Hotel</th>
        <th>Land</th>
        <th>Houseflat</th>
        <th>Villa</th>
        <th>Officespace</th>
        <th>warehouse</th>
        <th>Other</th>
        <th>Favorite Location</th>
        <th>Additionalcomment</th>
        <th>Purpose</th>
    		<th>Action</th>
      </tr>
    </tfoot>

<?php
$i =0;$customer_query=mysqli_query($conn,"select * from customer order by firstname ASC")or die( mysqli_error($conn) );

while($customer_rows=mysqli_fetch_array($customer_query)){
  
?>
  <tr>
    <td><?php echo ++$i; ?></td>
    <td><?php echo $customer_rows['firstname'] ; ?></td>
    <td><?php echo $customer_rows['lastname'] ; ?></td>
    <td><?php echo $customer_rows['sex'] ; ?></td>
    <td><?php echo $customer_rows['nationality'] ; ?></td>
    <td><?php echo $customer_rows['position'] ; ?></td>
    <td><?php echo $customer_rows['email'] ; ?></td>
    <td><?php echo $customer_rows['phone'] ; ?></td>
    <td><?php echo $customer_rows['address'] ; ?></td>
    <td><?php echo $customer_rows['codebanner'] ; ?></td>
    <td><?php echo $customer_rows['date'] ; ?></td>
    <td><?php echo $customer_rows['buy'] ; ?></td>
    <td><?php echo $customer_rows['sale'] ; ?></td>
    <td><?php echo $customer_rows['rent'] ; ?></td>
    <td><?php echo $customer_rows['budget'] ; ?></td>
    <td><?php echo $customer_rows['apartment'] ; ?></td>
    <td><?php echo $customer_rows['building'] ; ?></td>
    <td><?php echo $customer_rows['business'] ; ?></td>
    <td><?php echo $customer_rows['condo'] ; ?></td>
    <td><?php echo $customer_rows['factory'] ; ?></td>
    <td><?php echo $customer_rows['hotel'] ; ?></td>
    <td><?php echo $customer_rows['land'] ; ?></td>
    <td><?php echo $customer_rows['houseflat'] ; ?></td>
    <td><?php echo $customer_rows['villa'] ; ?></td>
    <td><?php echo $customer_rows['officespace'] ; ?></td>
    <td><?php echo $customer_rows['warehouse'] ; ?></td>
    <td><?php echo $customer_rows['other'] ; ?></td>
    <td><?php echo $customer_rows['location'] ; ?></td>
    <td><?php echo $customer_rows['additionalcomment'] ; ?></td>
    <td><?php echo $customer_rows['purpose'] ; ?></td>
    
    <td>
       <a href="edit.php<?php echo '?id='.$customer_rows['customerid']; ?>"><button class="btn btn-warning">Edit</button></a>
       <a href="delete.php<?php echo '?id='.$customer_rows['customerid'];?>"><button class="btn btn-danger">Delete</button></a> 
    </td>
  </tr>
<?php }?>
  </table>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>



 </html>
