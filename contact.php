<?php require_once('db.php'); ?>

<?php require_once('header.php'); ?>

<html>
  <head>
    <title>Contact us</title>
    <style type="text/css">
    .conatainer{
      border: 1px solid gray;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Submit customer service request</h1>
      <p>If you have a question about our service or have an issue to report, please send a request and we will get back to you as soon as possible.</p>
      <p>All fields with an asterisk (*) are mandatory</p>
      <form action="contact-file.php" method="post">
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group">
              <label for="user">Name</label>
              <input type="text" class="form-control" id="user" name="nam"  placeholder="Enter Name"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group">
              <label for="user">Your email</label>
              <input type="eamil" class="form-control" id="user" name="mail"  placeholder="Enter eamil"/>
            </div>
          </div>
        </div>

          <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
              <label for="pass">Subject</label>
              <input type="text" class="form-control" id="pass" name="sub" placeholder="Enter subject"/>
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col col-md-6">
            <label>Message</label>
            <textarea  name="mess" rows="4" col="50"></textarea>
          </div>
          </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.4544817534365!2d74.63013491459802!3d26.47944698331609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be797c823afaf%3A0xd9fb5e93316c91d7!2sDorani+jethani+restaurant!5e1!3m2!1sen!2sin!4v1553777928346" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </body>
</html>
<?php require_once('footer.php'); ?>
