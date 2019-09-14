<html>
 <head>
     <title></title>
 </head>
<body>
<div class="form-gruop">
    <label for="content" style="font-weight: bold">Nội dung
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>
</div>
<!--Editor-->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('content');
</script>
</body>
</html>
<?php
