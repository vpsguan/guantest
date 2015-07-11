<?php
/*
 * 更多的问题
 */
$more=$question->statusall();
?>
<h4>更多问题</h4>

<?php while($moreq=mysql_fetch_array($more)){?>
<P><a href="que_details.php?type=<?php echo $moreq['id'];?>"> <?php echo $moreq['title'];?>
</a></P>
<?php }?>