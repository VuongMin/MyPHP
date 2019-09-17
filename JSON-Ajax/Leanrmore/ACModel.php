<?php
if(!empty($_REQUEST['count']))
{
    $conn= mysqli_connect('localhost', 'root','','projectmanagement')
    or die('connect Fails!' . mysqli_error($conn));
    mysqli_set_charset($conn,"utf8");
  $sql = 'SELECT  news.Title,news.Description,news.Content FROM news  LIMIT '.$_REQUEST['count'].' ';
  $res=mysqli_query($conn,$sql);
  if($res->num_rows!=0)
  {
  $xhtml='';
    while ($row = mysqli_fetch_assoc($res))
    {
         $xhtml.='<div class="item">
                      <h3>' .$row['Title'] . ' </h3>
                       <p>' .$row['Content']. '</p>
               </div>';
    }
    echo $xhtml;
  }

}
