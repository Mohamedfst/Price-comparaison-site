
<?php
require 'vendor/autoload.php';
use Respect\Validation\Validator as v;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$access_key = 'AKIAIQ2Q2VX3RVKN3IRA';
$secret_key = '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';
$associate_tag = 'momorock-20';
$app_id = 'MohamedK-fir-PRD-908fa563f-59e38e2c';
$global_id = 'EBAY-US';
$ebay = new Lib\ebay($app_id, $global_id);

$amazon = new Lib\Amazon($access_key, $secret_key, $associate_tag);

$search_indices = $amazon->getSearchIndices();
$item_count =[];
$itemsEb = [];
$i = [];
$items = array();
$keyword = '';
$search_index = '';
$has_searched = false;
error_reporting(0);

/* 
Send request to Amazon and receive the answer.
*/
if (!empty($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $search_index = $_GET['search_index'];
  $has_searched = true;
   $keyword_validator = v::alnum('')
     ->length(3, 80);
  if ($keyword_validator->validate($_GET['keyword']) && in_array($search_index, $search_indices)) {
  	$response = $amazon->itemSearch($keyword, $search_index);
  	$items = $response->Items->Item;
  	 }
  }
  /* 
Send request to Ebay and receive the answer.
*/
 if(!empty($_GET['keyword']))
  {
  	$results = $ebay->findItemsAdvanced($_GET['keyword'],$search_index);
  	$item_count = $results['findItemsAdvancedResponse'][0]['searchResult'][0]['@count'];
  	
  	if($item_count > 0){
  		$itemsEb = $results['findItemsAdvancedResponse'][0]['searchResult'][0]['item'];
  		foreach($itemsEb as $i){
  			error_reporting(0);
   $i['galleryURL'][0];
   $i['title']; 
   $i['viewItemURL'][0]; 
   $i['title'][0]; 
   $i['sellingStatus'][0]['currentPrice'][0]['@currencyId']; 
   $i['sellingStatus'][0]['currentPrice'][0]['__value__'];
   }
	}		
}
/* 
creating arrays for multdimensional array.
*/
$p= array();
$u= array();
$na= array();
$image= array();
$brand= array();
$pricez= array();
/* 
Send request to mysql and receive the answer.
*/
$servername = "localhost";
$username = "root";
$password = "likes";
$dbname = "games";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT URL, NAME, IMAGE,BRAND,PRICE FROM pict  WHERE  NAME LIKE '%" . $keyword. "%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		"URL: " . $row["URL"]. " - Name: " . $row["NAME"]. " IMAGE : ". $row["IMAGE"]."  BRAND : ". $row["BRAND"]." PRICE : ". $row["PRICE"]."<br>";
		
		$p[]= array(($u[] = $row["URL"]),($na[] = $row["NAME"]),($image[] = $row["IMAGE"]),
				
				($brand[] = $row["BRAND"]),($pricez[] = (float)$row["PRICE"]));
	}
} else {
	echo "0 results";
}

mysqli_close($conn);

$mysqlName = array();
$mysqlPrice = array();
$AmArray= array();
$mdA = array();
$urlImage = array();
$titleAm = array();
$deUrl=array();
$brandAm = array();
$priceAm = array();


$al = [];
$l=0;
foreach ($items as $item)
{
	 $AmArray[] =(string)$item->OfferSummary->LowestNewPrice->FormattedPrice;
	  $al[$l]= str_replace("$", "", "$AmArray[$l]");
	
	$mdA [] = array (($urlImage[]=$item->MediumImage->URL),($titleAm[]=$item->ItemAttributes->Title),($deUrl[]=$item->DetailPageURL ),
			($brandAm[]=$item->ItemAttributes->Brand), ($priceAm[]=(float)$al[$l]));
			$l++;
}


$ebaytitle = array();
$ebayTitle = array();
$ebayView = array();
$ebaytitles = array();
$EbArray= array();

$mD= array();

foreach ($itemsEb as $key =>$i)
{
	$mD[] = array (($ebayTitle[] = $i['galleryURL'][0]),($ebayTitle[]=$i['title']),($ebayView[]=$i['viewItemURL'][0]),($ebaytitles[]=$i['title'][0])
			,($EbArray[]=(float)$i['sellingStatus'][0]['currentPrice'][0]['__value__']));
}
$mergeA = array();
$mergeA = array_merge($mD,$mdA,$p);



$mergePrice = array();
$mergePrice = array_merge($priceAm,$EbArray);
 
$c= array();
$sorted = array();
$o = array();
$t = array();
$f = array();
$fi = array();
$si = array();





function val_sort($mergeA) {
	error_reporting();
	foreach($mergeA as $k=>$v) {
		$b[$j] = $mergeA[$j][4];
	$j++;
}
/* 
var_dump($b);
print_r($b);
*/
asort($b);
/* 
echo '<br />';
print_r($b);
*/
echo "<br>";

foreach($b as $k=>$v) {
	
	
	$c[] =array(($o[] = $mergeA[$k][0]), ($t[]= $mergeA[$k][1]),
			($f[]= $mergeA[$k][2]), ($fi[] =$mergeA[$k][3]), $si[]= ($mergeA[$k][4]));
	
	
	
}

return $c;
}

/* 
Send data to the view through twig.
*/
$sorted = val_sort($mergeA);


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
  'cache' => 'cache',
  'auto_reload' => true
]);

  $selected_filter = new Twig_SimpleFilter('selected', function ($string) {
  $exploded_string =  explode(',', $string);
  $selected_value = $exploded_string[0];
  $current_value = $exploded_string[1];
  return ($selected_value == $current_value) ? 'selected' : '';
});

$twig->addFilter($selected_filter);

$template = $twig->loadTemplate('index.html');
echo $template->render([
  'app_title' => getenv('APP_TITLE'),
  'search_indices' => $search_indices,
  'keyword' => $keyword,
  'search_index' => $search_index,
  'items' => $items,
  'has_searched' => $has_searched,
  'item_count'=> $item_count,
		'itemsEb'=>  $results['findItemsAdvancedResponse'][0]['searchResult'][0]['item'],
		'i'=> $i,
		'topdeal'=> $i['sellingStatus'][0]['currentPrice'][0]['__value__'],
		'm'=>$sorted,
		'r'=>$temp1,
]);
?>
