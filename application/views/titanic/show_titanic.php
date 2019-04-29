
<html>



<style type="text/css">
body {
        background: #3E5151;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #DECBA4, #3E5151);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #DECBA4, #3E5151); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      }
      h1{

margin: 0 auto;

width: 20%;

height: 10%;

}

h2{

text-align: right;

padding-right: 45%;

}

img{

padding-left: 3%;

}



p{

text-align: left;

padding-left: 30%;

}
</style>
<body>
<a href="https://www.youtube.com/watch?v=ezcvpLIyifU"><img src="<?php echo base_url('images/titanic.jpg');?>" width="25%" height="550px" style="float:left"></a>
<?php 
//for ($i = 0; $i < count($movie_data); $i++) {
//    $title = $movie_data[$i]->title;
//    $imgurl = $movie_data[$i]->img_url;
//$descr = $movie_data[$i]->description;
//print_r($imgurl);
//echo "<img src='{$imgurl}'><h6>{$descr}</h6>";
//}

//$a=mysql_query("Select * from movies");
//$b=mysql_fetch_array($a);
//echo $b["Id"]."<br>";
$query = $this->db->query('SELECT description, title from movies where Id=9');
foreach ($query->result_array() as $row)
{
    echo "<div class='caption'><h1>{$row['title']}</h1>";
    //echo "<img src={$row['img_url']} width='400px' height='550px' style='float:left'>";
    //echo "<img src={$row['img_url']}>";
    //echo $row['description'];
    echo $row['description'];
}
?>
</body>
</html>
