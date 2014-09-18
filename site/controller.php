<?php
// No direct access to this file
defined('_JEXEC') or die;
 
// import Joomla controller library
jimport('joomla.application.component.controller');

class ServiceOrdersController extends JControllerLegacy
{
  public function getOrderById() {
        try
        {
            $oData = new stdClass();
          // $app = JFactory::getApplication();
          // We can send app's system messages this way:
          // $app->enqueueMessage('This part was successful');
            $id_order = JFactory::getApplication()->input->get('id_order', 0, 'INT');

            $oData->order = $this->mockOrders($id_order);
        }
        catch(Exception $e)
        {
            // if there is an exception, return it in JSON format
            $oData->error = $e;
        }
            // return the object in JSON format
            echo new JResponseJson($oData);
    }

  public function getDefault() {
        try
        {
            $oData = new stdClass();
            $oData->message = 'This is a default function.';
        }
        catch(Exception $e)
        {
            $oData->error = $e;
        }
            // return the object in JSON format
            echo new JResponseJson($oData);
    }

  private function mockOrders($id_order) {
    // A dummy objects:
    $arrOrders = array();
          
    // Order 1
    $order = new stdClass();
    $order->id = 1;
    $order->folio = 4040;
    $order->id_customer = null;
    $order->id_seller = null;
    $order->date = '2014-08-30';
    $order->products = array();

    // Product
    $product = new stdClass();
    $product->id = 1;
    $product->sku = 22606;
    $product->qty = 6;
    $product->description = 'Forceps electrician heavy 8 ". Brand Pretul';
    $product->details = '';
    $product->price = 87;
    $product->pictureUrl = 'http://localhost:8080/joomla/media/com_serviceorders/images/{$product->sku}.gif';
    $product->eanUnit = '1246813225';
    $product->eanBox = '1423841254';
    $product->eanMaster ='1548465324';
    $product->applyIVA = true;

    $order->products[] = $product;

    // Product
    $product = new stdClass();
    $product->id = 2;
    $product->sku = 12092;
    $product->qty = 12;
    $product->description = 'Vacuum 6 Gallon, 3 HP, liquids and solids. Brand Truper';
    $product->details = '';
    $product->price = 1095;
    $product->pictureUrl = "http://localhost:8080/joomla/media/com_serviceorders/images/{$product->sku}.gif";
    $product->eanUnit = '1234731122';
    $product->eanBox = '1424562331';
    $product->eanMaster ='1535347585';
    $product->applyIVA = true;

    $order->products[] = $product;

    // Customer
    $customer = new stdClass();
    $customer->id_customer = 1;
    $customer->folio = '135';
    $customer->fname = 'Joe';
    $customer->lname = 'Hook';
    $customer->rfc = 'XAXX010101000';
    $customer->address = array();

    // Address
    $address = new stdClass();
    $address->street = 'Fake';
    $address->number = '1234';
    $address->interior = '5';
    $address->residential = 'Private Forest';
    $address->postalCode = '85045';
    $address->telephone1 = '55555555';
    $address->telephone2 = '77777777';
    $address->email1 = 'pepe@email.com';
    $address->email2 = 'pepe2@email.com';
    $address->gpsX = 28.6651633;
    $address->gpsY = -106.0128799;
    $address->isDefault = true;

    $customer->address[] = $address;

    $order->customer = $customer;

    // Seller
    $seller = new stdClass();
    $seller->id_seller = 1;
    $seller->folio = '135';
    $seller->fname = 'John';
    $seller->lname = 'Doe';
    $seller->rfc = 'XAXX010101000';
    $seller->address = array();

    // Address
    $address = new stdClass();
    $address->street = 'Truly';
    $address->number = '9876';
    $address->interior = '';
    $address->residential = 'Portales';
    $address->postalCode = '55024';
    $address->telephone1 = '55555555';
    $address->telephone2 = '77777777';
    $address->email1 = 'email@email.com';
    $address->email2 = 'email2@email.com';
    $address->gpsX = 28.6651633;
    $address->gpsY = -106.0128799;
    $address->isDefault = true;

    $seller->address[] = $address;

    $order->seller = $seller;

    $arrOrders[$order->id] = $order;



    // Order 2
    $order = new stdClass();
    $order->id = 2;
    $order->folio = 4041;
    $order->id_customer = null;
    $order->id_seller = null;
    $order->date = '2014-09-05';
    $order->products = array();

    // Product
    $product = new stdClass();
    $product->id = 1;
    $product->sku = 22606;
    $product->qty = 6;
    $product->description = 'Forceps electrician heavy 8 ". Brand Pretul';
    $product->details = '';
    $product->price = 87;
    $product->pictureUrl = 'http://localhost:8080/joomla/media/com_serviceorders/images/{$product->sku}.gif';
    $product->eanUnit = '1246813225';
    $product->eanBox = '1423841254';
    $product->eanMaster ='1548465324';
    $product->applyIVA = true;

    $order->products[] = $product;

    // Product
    $product = new stdClass();
    $product->id = 2;
    $product->sku = 12092;
    $product->qty = 12;
    $product->description = 'Vacuum 6 Gallon, 3 HP, liquids and solids. Brand Truper';
    $product->details = '';
    $product->price = 1095;
    $product->pictureUrl = "http://localhost:8080/joomla/media/com_serviceorders/images/{$product->sku}.gif";
    $product->eanUnit = '1234731122';
    $product->eanBox = '1424562331';
    $product->eanMaster ='1535347585';
    $product->applyIVA = true;

    $order->products[] = $product;

    // Customer
    $customer = new stdClass();
    $customer->id_customer = 1;
    $customer->folio = '135';
    $customer->fname = 'Sam';
    $customer->lname = 'Johnes';
    $customer->rfc = 'XAXX010101000';
    $customer->address = array();

    // Address
    $address = new stdClass();
    $address->street = 'Fake';
    $address->number = '1234';
    $address->interior = '5';
    $address->residential = 'Private Forest';
    $address->postalCode = '85045';
    $address->telephone1 = '55555555';
    $address->telephone2 = '77777777';
    $address->email1 = 'pepe@email.com';
    $address->email2 = 'pepe2@email.com';
    $address->gpsX = 28.6651633;
    $address->gpsY = -106.0128799;
    $address->isDefault = true;

    $customer->address[] = $address;

    $order->customer = $customer;

    // Seller
    $seller = new stdClass();
    $seller->id_seller = 1;
    $seller->folio = '135';
    $seller->fname = 'Pepe';
    $seller->lname = 'Sanches';
    $seller->rfc = 'XAXX010101000';
    $seller->address = array();

    // Address
    $address = new stdClass();
    $address->street = 'Truly';
    $address->number = '9876';
    $address->interior = '';
    $address->residential = 'Portales';
    $address->postalCode = '55024';
    $address->telephone1 = '55555555';
    $address->telephone2 = '77777777';
    $address->email1 = 'email@email.com';
    $address->email2 = 'email2@email.com';
    $address->gpsX = 28.6651633;
    $address->gpsY = -106.0128799;
    $address->isDefault = true;

    $seller->address[] = $address;

    $order->seller = $seller;

    $arrOrders[$order->id] = $order;

    if (array_key_exists($id_order, $arrOrders)) {
      return $arrOrders[$id_order];
    } else {
      return false;
    }
  } 

}