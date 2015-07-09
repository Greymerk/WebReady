<?php

class EventProvider {

	function __construct($event_data){
		$this->events = $event_data;
	}

	public function get_markers(){
		$markers = Array();

		foreach ($this->events as $k => $v){
			$markers[strtoupper($v["prov"]) . strtoupper($v["city"])] = $v;
		}
		
		return $markers;
	}
	
	public function get_by_province($prov){
		
		$match_prov = function($to_match) use ($prov){
			return strtoupper($to_match["prov"]) == strtoupper($prov);
		};
	
		$data = array_filter($this->events, $match_prov);
		return $data;
	}

	public function get_by_city($prov, $city){
		
		$match = function($to_match) use ($prov, $city){
			return  strtoupper($to_match["prov"]) == strtoupper($prov) &&
				strtoupper($to_match["city"]) == strtoupper($city);
		};
	
		$data = array_filter($this->events, $match);
		return $data;
	}

	static function csv_to_array($filename='', $delimiter=','){
		if(!file_exists($filename) || !is_readable($filename)){
			return false;
		}
		$header = NULL;
		$data = array();
		if (($handle = fopen($filename, 'r')) !== false){
			while (($row = fgetcsv($handle, 1000, $delimiter)) !== false){
				if(!$header){
					$header = $row;
				} else {
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}
		return $data;
	}
}


?>
