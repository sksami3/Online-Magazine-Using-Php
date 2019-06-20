<?php
include('include-global.php');
$titleOfMe = "$basetitle";
include('include-header.php');
?>

<?php
// $ddaa = mysql_query("SELECT id, img FROM news ORDER BY id DESC");
//     echo mysql_error();
//     while ($data = mysql_fetch_array($ddaa))
//     {
// echo "$data[1]- ";

// mysql_query("UPDATE news SET thumd='".$data[1]."' WHERE id='".$data[0]."'")

// 	}



// for ($i=1; $i < 10 ; $i++) { 

// mysql_query("INSERT INTO cats SET cnm='category".$i."',  mnm='CATEGORY".$i."'");

// }

$st = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe corrupti praesentium, ipsam consequuntur officia adipisci placeat consequatur error quam doloribus excepturi deserunt, esse veritatis tenetur sapiente, dolor aut dicta sed cumque voluptas possimus accusantium a est! Vel laudantium obcaecati est perferendis quaerat earum temporibus! Cumque tenetur vero explicabo voluptatibus voluptas dolor ipsam quaerat vitae, repellat soluta quo aut odio quam velit eveniet labore omnis ut molestias, quod libero ipsa. Minus doloribus, dignissimos quaerat at quis nihil, sequi illum maxime aliquam totam iusto in maiores, excepturi! Dolorum aliquam odit provident a sed, eligendi temporibus commodi ut deserunt. Tempora suscipit et sunt consequatur, nisi dolorum dolor, sequi odio cum, animi cupiditate ea quis. Veniam, eligendi rerum corporis vero quas minus sapiente perferendis molestiae iste hic, quos, unde asperiores! Non suscipit, incidunt sapiente facilis enim natus, accusamus totam dicta praesentium voluptas autem qui ratione rem aut id ipsam tempore, deserunt possimus harum. Laudantium nam ratione quam a, expedita tempora sequi veritatis ducimus. Eveniet necessitatibus mollitia, quisquam eos saepe porro quidem molestiae, accusantium obcaecati doloremque a aliquid est ea incidunt in quod. Perspiciatis necessitatibus nisi eligendi deserunt dolore vero laudantium ipsam asperiores expedita culpa, tempora, quo veritatis, quod iusto ipsum atque quam repellat amet, enim. Dolores illum natus maxime magni, voluptatibus harum, laborum culpa, rerum laudantium voluptas libero fugit non nisi ad eligendi nobis esse, enim. Veniam deserunt nesciunt animi esse nisi! Eius praesentium omnis blanditiis, deserunt consectetur placeat dolore, explicabo nemo. Itaque dicta repellat autem cupiditate iure sit nisi minus nesciunt optio ipsum pariatur voluptates excepturi esse aliquam ullam, maiores laborum beatae corporis, ad. Illum ipsa, vitae sed. Eligendi culpa accusantium, voluptatibus maxime deserunt quas veritatis. Veniam aut neque voluptatibus harum molestiae cupiditate voluptates illo autem totam inventore quis quibusdam eius incidunt mollitia hic laborum doloremque, magnam aperiam doloribus, saepe nostrum sit ipsa.";


$news1 = mysql_fetch_array(mysql_query("SELECT btext FROM news WHERE id='1'"));

for ($k=1; $k <9 ; $k++) { 
$ran1 = rand(0,159);
$ran2 = rand(8,16);
$ttl = strip_tags(implode(' ', array_slice(explode(' ', $st), $ran1, $ran2)));

mysql_query("INSERT INTO news SET ttl='".$ttl."', img='default.jpg', thumb='thumb_default.jpg', btext='".$news1[0]."', desk='Online Desk', cros='News One', cats='".$k."', subcat='0', tm='1492989623', who='1'");

}

?>

