<?php
// No direct access to this file
defined('_JEXEC') or die;
 
// import Joomla controller library
jimport('joomla.application.component.controller');

class ServiceOrdersController extends JControllerLegacy
{
  public function getOrder()
    {
        try
        {
          // $app = JFactory::getApplication();
          // We can send app's system messages this way:
          // $app->enqueueMessage('This part was successful');

          // A dummy objects:
          
          // Order
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
          $product->description = 'Pinza de electricista pesada de 8". Pretul';
          $product->details = '';
          $product->price = 87;
          $product->pictureUrl = 'http://www.truper.com/CatVigente/img/img_ch/22606.gif';
          $product->eanUnit = '1246813225';
          $product->eanBox = '1423841254';
          $product->eanMaster ='1548465324';
          $product->applyIVA = true;

          $order->products[] = $product;

          // Product
          $product = new stdClass();
          $product->id = 1;
          $product->sku = 12092;
          $product->description = 'Aspiradora de 6 galones, 3 HP, líquidos y sólidos. Truper';
          $product->details = '';
          $product->price = 1095;
          $product->pictureUrl = "http://www.truper.com/CatVigente/img/img_ch/{$product->sku}.gif";
          $product->eanUnit = '1234731122';
          $product->eanBox = '1424562331';
          $product->eanMaster ='1535347585';
          $product->applyIVA = true;

          $order->products[] = $product;

          // Customer
          $customer = new stdClass();
          $customer->id_customer = 1;
          $customer->folio = '135';
          $customer->name = 'Pepe';
          $customer->lastname = 'Sanches';
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

          $order->id_customer = $customer;

          // Seller
          $seller = new stdClass();
          $seller->id_seller = 1;
          $seller->folio = '135';
          $seller->name = 'Pepe';
          $seller->lastname = 'Sanches';
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

          $order->id_seller = $seller;

          // return the object in JSON format
          echo new JResponseJson($order);
        }
        catch(Exception $e)
        {
          // if there is an exception, return it in JSON format
          echo new JResponseJson($e);
        }
    }

  public function getDefault()
    {
        try
        {
          $result = 'This is a default function.';
          echo new JResponseJson($result);
        }
        catch(Exception $e)
        {
          echo new JResponseJson($e);
        }
    }
}