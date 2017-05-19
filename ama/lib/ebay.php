<?php
namespace Lib;

use GuzzleHttp;
class Ebay{
	
	private $url = 'http://svcs.ebay.com/services/search/FindingService/v1';
	private $app_id;
	private $version = '1.0.0';
	private $global_id;
	private $format = 'json';
	
	public function __construct($app_id, $global_id){
		
		$this->app_id = $app_id; 
		$this->global_id = $global_id; 
		
		$this->client = new GuzzleHttp\Client();
	}
	
	
	public function findItems($keyword = '', $limit = 2 ){
		$url 	= $this->url . '?';
		$url .= 'operation-name=findItemsByKeywords';
		$url .= '&service-version=' . $this->version;
		$url .= '&keywords=' . urlencode($keyword);
		$url .= '&paginationInput.entriesPerPage=' . $limit;
		
		$url .= '&security-appname='. $this->app_id;
		$url .= '&response-data-format=' . $this->format;
		return json_decode(file_get_contents($url), true);
	}
	public function findItemsAdvanced($keyword = '', $search_index = ' ', $item_sort = 'PricePlusShippingLowest', $item_type = 'FixedPricedItem', $min_price = '0.99', $max_price = '9999999', $limit = 10){
		
		$url 	=  $this->url . '?';
		$url .= 'operation-name=findItemsAdvanced';
		$url .= '&service-version=' . $this->version;
		$url .= '&global-id=' . $this->global_id;
		$url .= '&keywords=' . urlencode($keyword);
		if ($search_index=='VideoGames')
		$url .= '&categoryId=1249';
		else if ($search_index=='Books')
			$url .= '&categoryId=267';
			else if ($search_index=='Wigs')
				$url .= '&categoryId=175635';
		else 
			$url .= '&categoryId=#99';
		
		
		
		
		$url .= '&sortOrder=PricePlusShippingLowest';
		$url .= '&itemFilter(0).name=ListingType';
		$url .= '&itemFilter(0).value=FixedPrice';
		$url .= '&itemFilter(1).name=MinPrice';
		$url .= '&itemFilter(1).value=' . $min_price;
		$url .= '&itemFilter(2).name=MaxPrice';
		$url .= '&itemFilter(2).value=' . $max_price;
		$url .= '&paginationInput.entriesPerPage=' . $limit;
		$url .= '&descriptionSearch=false';
		$url .= '&security-appname='. $this->app_id;
		$url .= '&response-data-format=' . $this->format;
		return json_decode(file_get_contents($url), true);
	}
	public function sortOrders(){
		$sort_orders = array(
			
			'PricePlusShippingLowest' => 'Price Plus Shipping Lowest',
			'BestMatch' => 'Best Match',
			'CountryAscending' => 'Country Ascending',
			'BidCountFewest' => 'Bid Count Fewest',
			'BidCountMost' => 'Bid Count Most',
			'CountryDescending' => 'Country Descending',
			'CurrentPriceHighest' => 'Current Highest Price',
			'DistanceNearest' => 'Nearest Distance',
			'EndTimeSoonest' => 'End Time Soonest',
			'PricePlusShippingHighest' => 'Price Plus Shipping Highest',
			'PricePlusShippingLowest' => 'Price Plus Shipping Lowest',
			'StartTimeNewest' => 'Start Time Newest'
		);
		return $sort_orders;
	}
	
}
?>