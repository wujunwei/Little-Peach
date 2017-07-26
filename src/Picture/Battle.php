<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-07-26
 * Time: 下午 2:23
 */

namespace App\Picture;


use LittlePeach\Base\Controller;

class Battle extends Controller
{
    public function getList()
    {
        $page = $this->request->query->get('page', 1);
        if ($page <= 1){
            $page = 1;
        }
        $param['current_page'] = $page;
        $param['img_list'] = $this->loadBusiness('Battle')->getLink($page - 1);
        $param['welcome'] = 'haha';
        $param['page_count'] = 15;//$this->loadBusiness('Battle')->getCount();
        $message = $this->getView()->render('index.twig', $param);
        return $this->createResponse($message);
    }

    public function detail()
    {
        $message = $this->getView()->render('detail.twig', array('page' => 12, 'welcome' => '欢迎'));
        return $this->createResponse($message);
    }
}