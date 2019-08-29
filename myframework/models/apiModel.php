<?php

class apiModel{

  public function __construct($parent){
    $this->parent = $parent;
    $this->db = $parent->db;
  }


  public function googleBooks($term=''){
    $client = new Google_Client();
    $client->setApplicationName("SSLClass");
    $client->setDeveloperKey("AIzaSyB8M_KxjRDUFiRPhrXC_cPJqszWiqf637c");

    $service = new Google_Service_Books($client);

    $optParams = array("filter"=>"free-ebooks");
    $result = $service->volumes->listVolumes($term, $optParams);

    return $result;
  }

  public function youtube($term=''){
    //var_dump($term);
    $client = new Google_Client();
    $client->setApplicationName("SSLClass");
    $client->setDeveloperKey("AIzaSyB8M_KxjRDUFiRPhrXC_cPJqszWiqf637c");

    $service = new Google_Service_YouTube($client);

    $optParams = array("part"=>"snippet","maxResults"=>10,"q"=>$term);
    $search = $service->search->listSearch($term, $optParams);

    return $search;
  }

  public function instagram($tag='cat'){
    $client = new Client();
  }

}



?>
