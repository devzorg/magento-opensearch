<?php
class OpenSearch_Block_Meta extends Mage_Core_Block_Template {
  public function getOpenSearchUrl() {
    return '/opensearch';
  }

  public function getTitle() {
    return Mage::app()->getStore()->getName();
  }
}
