<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check of test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<style type="text/css">
    .question
    {
        width: 800px;
         margin: 0 auto;
        border: 1px solid ;
    }

    h3
    {text-align: center}
    .options li{
        list-style: none;
    }
    span
    {
        font-size: 20px;
    }
</style>

<body>
<h3> Personality Test</h3>
<form  action="Result.php" method="get">
               <?php
               //Read file and return a array
               $question= file("Question") or  (" this file is not exist!");
               $options=file("Options") or (" this file is not exist!");
               //remote item first
               array_shift($question);

               foreach ($question as $key =>$value)
               {
                   $arrValue=explode('|',$value);

                   $xhtml=" <div class=\"question\">";
                   $xhtml.=" <p><span>Câu hỏi số : $arrValue[0]:</span> $arrValue[1] </p>";
                   $xhtml.=" <ul class=\"options\">";
                   foreach ($options as $item=>$val)
                   {
                       $arVal=explode('|',$val);
                       if($arrValue[0]==$arVal[0])
                       {
                           $xhtml.=" <li><input type=\"radio\" name=\"option.$arVal[0]\" value=$arVal[3]>$arVal[2]</li>";
                       }
                   }
                   $xhtml.="   </ul>
             </div>";
                   echo $xhtml;
               }
               // Process when user commit.
               if(isset($_REQUEST['submit']))
               {
                   echo "";
               }

               ?>
               <p><input type="submit" name="submit" value="Commit"></p>
           </form>


</body>
</html>
