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

    <!--End of Editable JS-->
   


</head>
<div id="surveyjseditor"></div>
<script type="text/javascript">
   var options = {};
        options.questionTypes = ["checkbox","radiogroup"];
        options.generateValidJSON = true;
        var editor = new SurveyEditor.SurveyEditor("surveyjseditor", options);
        editor.showOptions = false;
</script>