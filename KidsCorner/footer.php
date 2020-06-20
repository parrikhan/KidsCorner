
<footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <section class="InTouchBlock position-relative">
        <?php dynamic_sidebar('contact-us')?>
        <!--Sub Section 2-->
        <div class="container-fluid ContactBlog2">
            <div class="row mx-auto container-fluid" >
                <div class="col-lg-5 col-sm-4 FirstColumn">
                    <?php dynamic_sidebar('contact')?>
                    <div class="row subRows">
                        <div class="col-lg-1 col-sm-1 pl-1">
                        <?php dynamic_sidebar('address');?>
                        </div>
                        <div class="col-lg-4 col-sm-3">  
                        <?php dynamic_sidebar('road');?>
                        </div>   
                    </div>
                    <div class="row subRows mt-4">
                        <div class="col-lg-1 col-sm-1 pl-1">
                        <?php dynamic_sidebar('email');?>
                        </div>
                        <div class="col-lg-4 col-sm-3">
                        <?php dynamic_sidebar('mail');?>
                        </div>
                    </div>
                    <div class="row subRows mt-4">
                        <div class="col-lg-1 col-sm-1 pl-1">
                            <?php dynamic_sidebar('phone');?>
                        </div>
                        <div class="col col-sm-2">
                            <?php dynamic_sidebar('android')?>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-7 SecondColumn">
                    <?php dynamic_sidebar('contact-form')?>
                </div>
            </div>       
        </div>    
      </section>
    <div class="row mx-auto">
        <div class="col-md-6 col-sm-6">
            <?php dynamic_sidebar( 'Column_1' ); ?>
        </div>
        
        <div class="col-md-6 col-sm-6 my-auto">
            <?php dynamic_sidebar( 'Column_2' ); ?>
        </div>
    </div>
    
</footer>