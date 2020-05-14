<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="card-body">

<div class="progress" style="height: 3px;">
  <div class="progress-bar" role="progressbar" id="progressbar" style="width: %;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

                        <form method="" action="" id="form-id">
                            <div id="first">
          
                                <div class="form-group">
                                    <input type="text" placeholder="name..."id="name">
                                    <b class="form-text text-danger" id="name-error
                                    "></b>
                                </div>
                                <div class="form-group">
                                    <a href="#" class="btn btn-primary" id="next-1">Next</a>
                                </div>
                            </div>

                            <div id="second" style="display: none;">
      
                                <div class="form-group">
                                    <input type="text" placeholder="lastname...">
                                </div>
                                <div class="form-group">
                                    <a href="#" class="btn btn-info" id="prev2">Previous</a>
                                    <a href="#" class="btn btn-primary" id="next-2">Next</a>
                                </div>
                            </div>
                            <div id="third" style="display: none;">
                                <div class="form-group">
                                    <input type="text" placeholder="email...">
                                </div>
                                <div class="form-group">
                                    <a href="#" class="btn btn-info" id="prev3">Previous</a>
                                    <a href="#" class="btn btn-success">Submit</a>
                                </div>
                            </div>


                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
            $("#next-1").click(function(){
                if($("#name").val()==''){
                    $("#name-error").html('Name is required')
                    alert("p");
                    return false;
                }
                $("#second").show();
                $('#first').hide();
                $('#progressbar').css("width","50%");


            });
            $("#next-2").click(function(){
                $("#third").show();
                $('#second').hide();
                $('#progressbar').css("width","100%");
            });
             $("#prev2").click(function(){
                $("#first").show();
                $('#second').hide();
            });
             $("#prev3").click(function(){
                $("#second").show();
                $('#third').hide();
            });
        });

    </script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/blog/resources/views/form.blade.php */ ?>