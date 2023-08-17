<?php
 include('simple_html_dom.php');

 $url = 'https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm';
 $html = file_get_html($url);
 echo $html;

//  $html = file_get_html('https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm');
//  $html->find('div');
//  $html->find('a');
//  $html->find('ul');
//  $html->find('h2');

//  $html->find('ol');
//  $html->find('li');
//  $html->find('p');
//  $html->find('header');
//  $html->find('ul', 0)->find('li');
// //  $html->find('ul', 0)->find('li', 5)->find('a');




//  echo $html->find('title', 0)->plaintext;
//  $list = $html->find('div[class="singular-content"]',0);
//  $list = $html->find('strong[class="singular-content"]',0);
//  $figure1 = $html->find('figure[ class="image align-center"]',0);

//  $list_array = $list->find('p');

//  for($i = 0; $i < sizeof($list_array); $i++){
//     echo $list_array[$i];

//  }


//  $html = file_get_html('https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm');
//  foreach($html->find('img') as $element) {
//         echo '<img src="'.$element->src.'" /><br>';
//  }




?>