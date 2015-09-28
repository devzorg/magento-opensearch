<?php
class OpenSearch_IndexController extends Mage_Core_Controller_Front_Action {
  public function indexAction() {
    $shortName = Mage::app()->getStore()->getName();
    $baseUrl = Mage::getBaseUrl();

    $xmlString = "<OpenSearchDescription xmlns='http://a9.com/-/spec/opensearch/1.1/' xmlns:moz='http://www.mozilla.org/2006/browser/search/'>
        <ShortName>{$shortName}</ShortName>
        <Description />
        <Url type='text/html' method='get' template='{$baseUrl}catalogsearch/result/?q={searchTerms}'/>
        <InputEncoding>UTF-8</InputEncoding>
        <moz:SearchForm>{$baseUrl}</moz:SearchForm>
      </OpenSearchDescription>";

    $this->getResponse()->setHeader('Content-type', 'text/xml');
    $this->getResponse()->setBody($xmlString);
  }
}
