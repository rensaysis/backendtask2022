<?php 
class Json{

	private $jsonArray;
	
	function __construct($jsonArray) {
		$this->jsonArray = $jsonArray;
	}
	
	public function setArray($jsonArray){
		$this->jsonArray = $jsonArray;
	}
	
	public function getArray(){
		return json_decode($this->jsonArray, true);
	}
	
}

// JSON Strings
$book1 = '{"title": "Pygmalion" ,"author": "George Bernard Shaw", "year": 1912}';
$book2 = '{"title": "Thumbelina" ,"author": "Hans Christian Andersen", "year": 1835}';

// BOOK 1 ARRAY
$toArray = new Json($book1);
print_r($toArray->getArray());

echo "<br/><br/>";

// BOOK 2 ARRAY
$toArray->setArray($book2);

echo 'Title: '.$toArray->getArray()['title'].'<br/>';
echo 'Author: '.$toArray->getArray()['author'].'<br/>';
echo 'Year Published: '.$toArray->getArray()['title'];

?>