<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <form class="form" action="" method="post">

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          
          <fieldset>
            <legend class="text-center">Please Give Feedback</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
             <br><br>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
             <br><br>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
             <br><br>
            
            <div class="form-group">
              <div class="col-md-12 text-right">
                <center>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </center>
              </div>
            </div>
            
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</body>
</html>