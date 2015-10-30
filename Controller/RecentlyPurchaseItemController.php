<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\RecentlyPurchaseItem\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class RecentlyPurchaseItemController
{
  public function index(Application $app)
  {

    $OrderList = $app['orm.em']->getRepository('Plugin\RecentlyPurchaseItem\Entity\RecentlyPurchaseItemOrderDetail')
          ->findBy(
              array(),
              array('id' => 'DESC'),
              8,
              0
          );

      return $app->render('Block/recently_purchase_item.twig', array(
          'OrderList' => $OrderList
      ));
  }
}
