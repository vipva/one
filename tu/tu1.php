<?php 
//取得文件夹中图片数组 
$img_array = glob("./tu1/*.{gif,jpg,png}",GLOB_BRACE); 
//从数组中选择一个随机图片 
$img = array_rand($img_array); 
//在页面显示图片 
echo '<img alt="'.$img_array[$img].'" src="'.$img_array[$img].'" />'; 
?
