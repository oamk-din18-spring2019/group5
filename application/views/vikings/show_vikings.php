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

</style>
<body>
<a href="https://www.youtube.com/watch?v=p9LqsW15aU8"><img src="<?php echo base_url('images/vikings.jpg');?>" width="25%" height="550px" style="float:left"></a>
<?php
$query = $this->db->query('SELECT description, img_url, title from movies where Id=2');
foreach ($query->result_array() as $row)
{
    echo "<div class='caption'><h1>{$row['title']}</h1>";
    //echo $row['img_url'];
    echo $row['description'];
}
?>

</body>
</html>