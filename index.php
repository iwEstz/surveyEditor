<head>
     <script type="text/javascript" src="./js/jquery.min.js"></script>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="./js/style.css" type="text/css" rel="stylesheet">
    <link href="./js/main.css" type="text/css" rel="stylesheet">
    <script src="./js/ace.js" type="text/javascript" charset="utf-8"></script>
     <script src="./js/knockout.js"></script>         

       <!--Editable JS-->
       

    <link href="./editable/surveyeditor.css" type="text/css" rel="stylesheet">    
    <script src="./editable/initial.js"></script>  
    <script src="./editable/survey.ko.js"></script>
        
    <script src="./editable/surveyeditor.js"></script>
     <script src="./editable/extension.js"></script>


   
<style>
.container {
  max-width: 750px;
  padding: 15px;
}
</style>

</head>
<body>
<div id="surveyjseditor"></div>

<!-- Modal -->
<div id="uploadModal" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <!--Body-->
            <div class="modal-body">
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal Alert Dup-->
<div class="modal fade" id="alertModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Message</h2>
            </div>
            <div class="modal-body text-danger">
                <h3>Question already exist in this page.</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</body>
<script type="text/javascript">
   var options = {};
        options.questionTypes = ["radiogroup"];
        options.generateValidJSON = true;
        var editor = new SurveyEditor.SurveyEditor("surveyjseditor", options);
        editor.showOptions = false;

    
</script>
<footer>
</footer>